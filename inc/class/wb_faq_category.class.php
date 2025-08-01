<?php

class wb_faq_category{
	// 普通对外字段整理
	public static function fields($v){
		$v['Name'] = $v[ln('Name')];
		$v['Href'] = url::set($v, 'wb_download.list');
		return $v;
	}

	// 全部
	public static function all($_ARG=array()){
		if ($_ARG['cid']) {
			$cid = (int)$_ARG['cid'];
			$parent_uid = ','.db::result("select UId from wb_faq_category where Id='{$cid}' limit 1", 'UId');
		} else {
			$parent_uid = ',0,';
		}
		$where = "1";
		$res = db::query("select * from wb_faq_category where {$where} order by Dept asc,MyOrder asc,Id asc");
		$row = array();
		while ($v=db::result($res)) {
			$uid = explode(',', ltrim($v['UId'],'0,'));
			$aa = &$row;
			foreach ($uid as $id) {
				if (!$aa[$id]) {
					break;
				}
				$aa = &$aa[$id]['children'];
			}
			if ($cid==$v['Id']) {
				$v['_cur_'] = 1;
			} else if (strstr($parent_uid, ','.$v['Id'].',')) {
				$v['_children_cur_'] = 1;
			}
			$v['children'] = array();
			$aa[$v['Id']] = self::fields($v);
		}
		return $row;
	}

	public static function all_url($_ARG=array()){
		$pro_c = db::query("select * from wb_faq_category order by Dept asc,MyOrder asc,Id asc");
		$pro_x = array();
		while ($v=db::result($pro_c)) {
			$uid = explode(',', ltrim($v['UId'],'0,'));
			$aa = &$pro_x;
			foreach ($uid as $id) {
				if (!$aa[$id]) {
					break;
				}
				$aa = &$aa[$id]['children'];
			}
			$v['children'] = array();
			$aa[$v['Id']] = array(
				'label' => $v[ln('Name')],
				'type' => 'faq-'.$v['Id'],
				'value' => url::set($v, 'wb_faq.list'),
			);
		}
		$pro_x = str::ary_values($pro_x, 'children', 1);
		return $pro_x;
	}
}
?>