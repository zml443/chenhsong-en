<?php

/*

  zhcn::ft($html)：简体到繁体转换
  zhcn::jt($html)：繁体到简体转换

*/

class zhcn{


    public static function ft($input) {//简体到繁体的函数，$input是需要转的字符串，可以包含数字、字母、简体繁体汉字等
        $array = self::get_array_zh_hans_to_zh_hant();//简体、繁体对照表
        $array_zh_hans = array_keys($array);
        $array_zh_hant = array_values($array);
        if(trim($input)==''){ //输入为空则返回空字符串
            return '';
        }
        $output = str_replace($array_zh_hans, $array_zh_hant, $input);
        return $output;//返回输出
    }

    public static function jt($input) {//繁体到简体的函数，$input是需要转的字符串，可以包含数字、字母、简体繁体汉字等
        $array = self::get_array_zh_hans_to_zh_hant();//简体、繁体对照表
        $array_zh_hans = array_keys($array);
        $array_zh_hant = array_values($array);
        if(trim($input)==''){ //输入为空则返回空字符串
            return '';
        }
        $output = str_replace($array_zh_hant, $array_zh_hans, $input);
        return $output;//返回输出
    }


    //1275个简体、繁体对照表做成数组反转+xx个繁体到简体的数组元素
    private static function get_array_zh_hant_to_zh_hans() {
        $array = self::get_array_zh_hans_to_zh_hant();//1275个简体、繁体对照表做成数组
        $array = array_flip($array);//交换数组中的键和值
        $array['週'] = '周';
        $array['髮'] = '发';
        $array['噁'] = '恶';
        $array['麵'] = '面';
        $array['乾'] = '干';
        $array['佈'] = '布';
        $array['迴'] = '回';
        $array['徵'] = '征';
        $array['穫'] = '获';
        $array['穀'] = '谷';
        $array['鬍'] = '胡';
        $array['鬚'] = '须';
        $array['閒'] = '闲';
        $array['鬆'] = '松';
        $array['姦'] = '奸';
        $array['鬱'] = '郁';
        $array['製'] = '制';
        $array['馀'] = '余';
        $array['嚮'] = '向';
        $array['繫'] = '系';
        $array['罎'] = '坛';
        $array['檯'] = '台';
        $array['颱'] = '台';
        $array['捨'] = '舍';
        $array['籤'] = '签';
        $array['僕'] = '仆';
        $array['闢'] = '辟';
        $array['衊'] = '蔑';
        $array['濛'] = '蒙';
        $array['矇'] = '蒙';
        $array['儘'] = '尽';
        $array['薑'] = '姜';
        $array['颳'] = '刮';
        $array['噹'] = '当';
        $array['衝'] = '冲';
        $array['彆'] = '别';
        $array['臺'] = '台';
        $array['瀏'] = '浏';
        $array['號'] = '号';
        $array['產'] = '产';
        $array['紘'] = '纮';
        $array['財'] = '财';
        $array['恆'] = '恒';
        $array['啓'] = '启';
        $array['錡'] = '锜';
        $array['酈'] = '丽';
        return $array;
    }


    //1275个简体、繁体对照表做成数组
    private static function get_array_zh_hans_to_zh_hant() {
        $array = array(
            '皑' => '皚',
            '蔼' => '藹',
            '碍' => '礙',
            '爱' => '愛',
            '翱' => '翺',
            '袄' => '襖',
            '奥' => '奧',
            '坝' => '壩',
            '罢' => '罷',
            '摆' => '擺',
            '败' => '敗',
            '颁' => '頒',
            '办' => '辦',
            '绊' => '絆',
            '帮' => '幫',
            '绑' => '綁',
            '镑' => '鎊',
            '谤' => '謗',
            '剥' => '剝',
            '饱' => '飽',
            '宝' => '寶',
            '报' => '報',
            '鲍' => '鮑',
            '辈' => '輩',
            '贝' => '貝',
            '钡' => '鋇',
            '狈' => '狽',
            '备' => '備',
            '惫' => '憊',
            '绷' => '繃',
            '笔' => '筆',
            '毕' => '畢',
            '毙' => '斃',
            '闭' => '閉',
            '边' => '邊',
            '编' => '編',
            '贬' => '貶',
            '变' => '變',
            '辩' => '辯',
            '辫' => '辮',
            '鳖' => '鼈',
            '瘪' => '癟',
            '濒' => '瀕',
            '滨' => '濱',
            '宾' => '賓',
            '摈' => '擯',
            '饼' => '餅',
            '拨' => '撥',
            '钵' => '缽',
            '铂' => '鉑',
            '驳' => '駁',
            '卜' => '蔔',
            '补' => '補',
            '参' => '參',
            '蚕' => '蠶',
            '残' => '殘',
            '惭' => '慚',
            '惨' => '慘',
            '灿' => '燦',
            '苍' => '蒼',
            '舱' => '艙',
            '仓' => '倉',
            '沧' => '滄',
            '厕' => '廁',
            '侧' => '側',
            '册' => '冊',
            '测' => '測',
            '层' => '層',
            '诧' => '詫',
            '搀' => '攙',
            '掺' => '摻',
            '蝉' => '蟬',
            '馋' => '饞',
            '谗' => '讒',
            '缠' => '纏',
            '铲' => '鏟',
            '产' => '産',
            '阐' => '闡',
            '颤' => '顫',
            '场' => '場',
            '尝' => '嘗',
            '长' => '長',
            '偿' => '償',
            '肠' => '腸',
            '厂' => '廠',
            '畅' => '暢',
            '钞' => '鈔',
            '车' => '車',
            '彻' => '徹',
            '尘' => '塵',
            '陈' => '陳',
            '衬' => '襯',
            '撑' => '撐',
            '称' => '稱',
            '惩' => '懲',
            '诚' => '誠',
            '骋' => '騁',
            '痴' => '癡',
            '迟' => '遲',
            '驰' => '馳',
            '耻' => '恥',
            '齿' => '齒',
            '炽' => '熾',
            '冲' => '沖',
            '虫' => '蟲',
            '宠' => '寵',
            '畴' => '疇',
            '踌' => '躊',
            '筹' => '籌',
            '绸' => '綢',
            '丑' => '醜',
            '橱' => '櫥',
            '厨' => '廚',
            '锄' => '鋤',
            '雏' => '雛',
            '础' => '礎',
            '储' => '儲',
            '触' => '觸',
            '处' => '處',
            '传' => '傳',
            '疮' => '瘡',
            '闯' => '闖',
            '创' => '創',
            '锤' => '錘',
            '纯' => '純',
            '绰' => '綽',
            '辞' => '辭',
            '词' => '詞',
            '赐' => '賜',
            '聪' => '聰',
            '葱' => '蔥',
            '囱' => '囪',
            '从' => '從',
            '丛' => '叢',
            '凑' => '湊',
            '窜' => '竄',
            '错' => '錯',
            '达' => '達',
            '带' => '帶',
            '贷' => '貸',
            '担' => '擔',
            '单' => '單',
            '郸' => '鄲',
            '掸' => '撣',
            '胆' => '膽',
            '惮' => '憚',
            '诞' => '誕',
            '弹' => '彈',
            '当' => '當',
            '挡' => '擋',
            '党' => '黨',
            '荡' => '蕩',
            '档' => '檔',
            '捣' => '搗',
            '岛' => '島',
            '祷' => '禱',
            '导' => '導',
            '盗' => '盜',
            '灯' => '燈',
            '邓' => '鄧',
            '敌' => '敵',
            '涤' => '滌',
            '递' => '遞',
            '缔' => '締',
            '点' => '點',
            '垫' => '墊',
            '电' => '電',
            '淀' => '澱',
            '钓' => '釣',
            '调' => '調',
            '迭' => '叠',
            '谍' => '諜',
            '叠' => '疊',
            '钉' => '釘',
            '顶' => '頂',
            '锭' => '錠',
            '订' => '訂',
            '东' => '東',
            '动' => '動',
            '栋' => '棟',
            '冻' => '凍',
            '斗' => '鬥',
            '犊' => '犢',
            '独' => '獨',
            '读' => '讀',
            '赌' => '賭',
            '镀' => '鍍',
            '锻' => '鍛',
            '断' => '斷',
            '缎' => '緞',
            '兑' => '兌',
            '队' => '隊',
            '对' => '對',
            '吨' => '噸',
            '顿' => '頓',
            '钝' => '鈍',
            '夺' => '奪',
            '鹅' => '鵝',
            '额' => '額',
            '讹' => '訛',
            '恶' => '惡',
            '饿' => '餓',
            '儿' => '兒',
            '尔' => '爾',
            '饵' => '餌',
            '贰' => '貳',
            '发' => '發',
            '罚' => '罰',
            '阀' => '閥',
            '珐' => '琺',
            '矾' => '礬',
            '钒' => '釩',
            '烦' => '煩',
            '范' => '範',
            '贩' => '販',
            '饭' => '飯',
            '访' => '訪',
            '纺' => '紡',
            '飞' => '飛',
            '废' => '廢',
            '费' => '費',
            '纷' => '紛',
            '坟' => '墳',
            '奋' => '奮',
            '愤' => '憤',
            '粪' => '糞',
            '丰' => '豐',
            '枫' => '楓',
            '锋' => '鋒',
            '风' => '風',
            '疯' => '瘋',
            '冯' => '馮',
            '缝' => '縫',
            '讽' => '諷',
            '凤' => '鳳',
            '肤' => '膚',
            '辐' => '輻',
            '抚' => '撫',
            '辅' => '輔',
            '赋' => '賦',
            '复' => '複',
            '负' => '負',
            '讣' => '訃',
            '妇' => '婦',
            '缚' => '縛',
            '该' => '該',
            '钙' => '鈣',
            '盖' => '蓋',
            '干' => '幹',
            '赶' => '趕',
            '秆' => '稈',
            '赣' => '贛',
            '冈' => '岡',
            '刚' => '剛',
            '钢' => '鋼',
            '纲' => '綱',
            '岗' => '崗',
            '皋' => '臯',
            '镐' => '鎬',
            '搁' => '擱',
            '鸽' => '鴿',
            '阁' => '閣',
            '铬' => '鉻',
            '个' => '個',
            '给' => '給',
            '龚' => '龔',
            '宫' => '宮',
            '巩' => '鞏',
            '贡' => '貢',
            '钩' => '鈎',
            '沟' => '溝',
            '构' => '構',
            '购' => '購',
            '够' => '夠',
            '蛊' => '蠱',
            '顾' => '顧',
            '剐' => '剮',
            '关' => '關',
            '观' => '觀',
            '馆' => '館',
            '惯' => '慣',
            '贯' => '貫',
            '广' => '廣',
            '规' => '規',
            '硅' => '矽',
            '归' => '歸',
            '龟' => '龜',
            '闺' => '閨',
            '轨' => '軌',
            '诡' => '詭',
            '柜' => '櫃',
            '贵' => '貴',
            '刽' => '劊',
            '辊' => '輥',
            '滚' => '滾',
            '锅' => '鍋',
            '国' => '國',
            '过' => '過',
            '骇' => '駭',
            '韩' => '韓',
            '汉' => '漢',
            '阂' => '閡',
            '鹤' => '鶴',
            '贺' => '賀',
            '横' => '橫',
            '轰' => '轟',
            '鸿' => '鴻',
            '红' => '紅',
            '后' => '後',
            '壶' => '壺',
            '护' => '護',
            '沪' => '滬',
            '户' => '戶',
            '哗' => '嘩',
            '华' => '華',
            '画' => '畫',
            '划' => '劃',
            '话' => '話',
            '怀' => '懷',
            '坏' => '壞',
            '欢' => '歡',
            '环' => '環',
            '还' => '還',
            '缓' => '緩',
            '换' => '換',
            '唤' => '喚',
            '痪' => '瘓',
            '焕' => '煥',
            '涣' => '渙',
            '黄' => '黃',
            '谎' => '謊',
            '挥' => '揮',
            '辉' => '輝',
            '毁' => '毀',
            '贿' => '賄',
            '秽' => '穢',
            '会' => '會',
            '烩' => '燴',
            '汇' => '彙',
            '讳' => '諱',
            '诲' => '誨',
            '绘' => '繪',
            '荤' => '葷',
            '浑' => '渾',
            '伙' => '夥',
            '获' => '獲',
            '货' => '貨',
            '祸' => '禍',
            '击' => '擊',
            '机' => '機',
            '积' => '積',
            '饥' => '饑',
            '讥' => '譏',
            '鸡' => '雞',
            '绩' => '績',
            '缉' => '緝',
            '极' => '極',
            '辑' => '輯',
            '级' => '級',
            '挤' => '擠',
            '几' => '幾',
            '蓟' => '薊',
            '剂' => '劑',
            '济' => '濟',
            '计' => '計',
            '记' => '記',
            '际' => '際',
            '继' => '繼',
            '纪' => '紀',
            '夹' => '夾',
            '荚' => '莢',
            '颊' => '頰',
            '贾' => '賈',
            '钾' => '鉀',
            '价' => '價',
            '驾' => '駕',
            '歼' => '殲',
            '监' => '監',
            '坚' => '堅',
            '笺' => '箋',
            '间' => '間',
            '艰' => '艱',
            '缄' => '緘',
            '茧' => '繭',
            '检' => '檢',
            '碱' => '堿',
            '硷' => '鹼',
            '拣' => '揀',
            '捡' => '撿',
            '简' => '簡',
            '俭' => '儉',
            '减' => '減',
            '荐' => '薦',
            '槛' => '檻',
            '鉴' => '鑒',
            '践' => '踐',
            '贱' => '賤',
            '见' => '見',
            '键' => '鍵',
            '舰' => '艦',
            '剑' => '劍',
            '饯' => '餞',
            '渐' => '漸',
            '溅' => '濺',
            '涧' => '澗',
            '浆' => '漿',
            '蒋' => '蔣',
            '桨' => '槳',
            '奖' => '獎',
            '讲' => '講',
            '酱' => '醬',
            '胶' => '膠',
            '浇' => '澆',
            '骄' => '驕',
            '娇' => '嬌',
            '搅' => '攪',
            '铰' => '鉸',
            '矫' => '矯',
            '侥' => '僥',
            '脚' => '腳',
            '饺' => '餃',
            '缴' => '繳',
            '绞' => '絞',
            '轿' => '轎',
            '较' => '較',
            '秸' => '稭',
            '阶' => '階',
            '节' => '節',
            '茎' => '莖',
            '惊' => '驚',
            '经' => '經',
            '颈' => '頸',
            '静' => '靜',
            '镜' => '鏡',
            '径' => '徑',
            '痉' => '痙',
            '竞' => '競',
            '净' => '淨',
            '纠' => '糾',
            '厩' => '廄',
            '旧' => '舊',
            '驹' => '駒',
            '举' => '舉',
            '据' => '據',
            '锯' => '鋸',
            '惧' => '懼',
            '剧' => '劇',
            '鹃' => '鵑',
            '绢' => '絹',
            '杰' => '傑',
            '洁' => '潔',
            '结' => '結',
            '诫' => '誡',
            '届' => '屆',
            '紧' => '緊',
            '锦' => '錦',
            '仅' => '僅',
            '谨' => '謹',
            '进' => '進',
            '晋' => '晉',
            '烬' => '燼',
            '尽' => '盡',
            '劲' => '勁',
            '荆' => '荊',
            '觉' => '覺',
            '决' => '決',
            '诀' => '訣',
            '绝' => '絕',
            '钧' => '鈞',
            '军' => '軍',
            '骏' => '駿',
            '开' => '開',
            '凯' => '凱',
            '颗' => '顆',
            '壳' => '殼',
            '课' => '課',
            '垦' => '墾',
            '恳' => '懇',
            '抠' => '摳',
            '库' => '庫',
            '裤' => '褲',
            '夸' => '誇',
            '块' => '塊',
            '侩' => '儈',
            '宽' => '寬',
            '矿' => '礦',
            '旷' => '曠',
            '况' => '況',
            '亏' => '虧',
            '岿' => '巋',
            '窥' => '窺',
            '馈' => '饋',
            '溃' => '潰',
            '扩' => '擴',
            '阔' => '闊',
            '蜡' => '蠟',
            '腊' => '臘',
            '莱' => '萊',
            '来' => '來',
            '赖' => '賴',
            '蓝' => '藍',
            '栏' => '欄',
            '拦' => '攔',
            '篮' => '籃',
            '阑' => '闌',
            '兰' => '蘭',
            '澜' => '瀾',
            '谰' => '讕',
            '揽' => '攬',
            '览' => '覽',
            '懒' => '懶',
            '缆' => '纜',
            '烂' => '爛',
            '滥' => '濫',
            '捞' => '撈',
            '劳' => '勞',
            '涝' => '澇',
            '乐' => '樂',
            '镭' => '鐳',
            '垒' => '壘',
            '类' => '類',
            '泪' => '淚',
            '篱' => '籬',
            '离' => '離',
            '里' => '裏',
            '鲤' => '鯉',
            '礼' => '禮',
            '丽' => '麗',
            '厉' => '厲',
            '励' => '勵',
            '砾' => '礫',
            '历' => '曆',
            '沥' => '瀝',
            '隶' => '隸',
            '俩' => '倆',
            '联' => '聯',
            '莲' => '蓮',
            '连' => '連',
            '镰' => '鐮',
            '怜' => '憐',
            '涟' => '漣',
            '帘' => '簾',
            '敛' => '斂',
            '脸' => '臉',
            '链' => '鏈',
            '恋' => '戀',
            '炼' => '煉',
            '练' => '練',
            '粮' => '糧',
            '凉' => '涼',
            '两' => '兩',
            '辆' => '輛',
            '谅' => '諒',
            '疗' => '療',
            '辽' => '遼',
            '镣' => '鐐',
            '猎' => '獵',
            '临' => '臨',
            '邻' => '鄰',
            '鳞' => '鱗',
            '凛' => '凜',
            '赁' => '賃',
            '龄' => '齡',
            '铃' => '鈴',
            '凌' => '淩',
            '灵' => '靈',
            '岭' => '嶺',
            '领' => '領',
            '馏' => '餾',
            '刘' => '劉',
            '龙' => '龍',
            '聋' => '聾',
            '咙' => '嚨',
            '笼' => '籠',
            '垄' => '壟',
            '拢' => '攏',
            '陇' => '隴',
            '楼' => '樓',
            '娄' => '婁',
            '搂' => '摟',
            '篓' => '簍',
            '芦' => '蘆',
            '卢' => '盧',
            '颅' => '顱',
            '庐' => '廬',
            '炉' => '爐',
            '掳' => '擄',
            '卤' => '鹵',
            '虏' => '虜',
            '鲁' => '魯',
            '赂' => '賂',
            '禄' => '祿',
            '录' => '錄',
            '陆' => '陸',
            '驴' => '驢',
            '吕' => '呂',
            '铝' => '鋁',
            '侣' => '侶',
            '屡' => '屢',
            '缕' => '縷',
            '虑' => '慮',
            '滤' => '濾',
            '绿' => '綠',
            '峦' => '巒',
            '挛' => '攣',
            '孪' => '孿',
            '滦' => '灤',
            '乱' => '亂',
            '抡' => '掄',
            '轮' => '輪',
            '伦' => '倫',
            '仑' => '侖',
            '沦' => '淪',
            '纶' => '綸',
            '论' => '論',
            '萝' => '蘿',
            '罗' => '羅',
            '逻' => '邏',
            '锣' => '鑼',
            '箩' => '籮',
            '骡' => '騾',
            '骆' => '駱',
            '络' => '絡',
            '妈' => '媽',
            '玛' => '瑪',
            '码' => '碼',
            '蚂' => '螞',
            '马' => '馬',
            '骂' => '罵',
            '吗' => '嗎',
            '买' => '買',
            '麦' => '麥',
            '卖' => '賣',
            '迈' => '邁',
            '脉' => '脈',
            '瞒' => '瞞',
            '馒' => '饅',
            '蛮' => '蠻',
            '满' => '滿',
            '谩' => '謾',
            '猫' => '貓',
            '锚' => '錨',
            '铆' => '鉚',
            '贸' => '貿',
            '么' => '麽',
            '霉' => '黴',
            '没' => '沒',
            '镁' => '鎂',
            '门' => '門',
            '闷' => '悶',
            '们' => '們',
            '锰' => '錳',
            '梦' => '夢',
            '谜' => '謎',
            '弥' => '彌',
            '觅' => '覓',
            '绵' => '綿',
            '缅' => '緬',
            '庙' => '廟',
            '灭' => '滅',
            '悯' => '憫',
            '闽' => '閩',
            '鸣' => '鳴',
            '铭' => '銘',
            '谬' => '謬',
            '谋' => '謀',
            '亩' => '畝',
            '钠' => '鈉',
            '纳' => '納',
            '难' => '難',
            '挠' => '撓',
            '脑' => '腦',
            '恼' => '惱',
            '闹' => '鬧',
            '馁' => '餒',
            '腻' => '膩',
            '撵' => '攆',
            '捻' => '撚',
            '酿' => '釀',
            '鸟' => '鳥',
            '聂' => '聶',
            '啮' => '齧',
            '镊' => '鑷',
            '镍' => '鎳',
            '柠' => '檸',
            '狞' => '獰',
            '宁' => '甯',
            '拧' => '擰',
            '泞' => '濘',
            '钮' => '鈕',
            '纽' => '紐',
            '脓' => '膿',
            '浓' => '濃',
            '农' => '農',
            '疟' => '瘧',
            '诺' => '諾',
            '欧' => '歐',
            '鸥' => '鷗',
            '殴' => '毆',
            '呕' => '嘔',
            '沤' => '漚',
            '盘' => '盤',
            '庞' => '龐',
            '国' => '國',
            '爱' => '愛',
            '赔' => '賠',
            '喷' => '噴',
            '鹏' => '鵬',
            '骗' => '騙',
            '飘' => '飄',
            '频' => '頻',
            '贫' => '貧',
            '苹' => '蘋',
            '凭' => '憑',
            '评' => '評',
            '泼' => '潑',
            '颇' => '頗',
            '扑' => '撲',
            '铺' => '鋪',
            '朴' => '樸',
            '谱' => '譜',
            '脐' => '臍',
            '齐' => '齊',
            '骑' => '騎',
            '岂' => '豈',
            '启' => '啓',
            '气' => '氣',
            '弃' => '棄',
            '讫' => '訖',
            '牵' => '牽',
            '扦' => '扡',
            '钎' => '釺',
            '铅' => '鉛',
            '迁' => '遷',
            '签' => '簽',
            '谦' => '謙',
            '钱' => '錢',
            '钳' => '鉗',
            '潜' => '潛',
            '浅' => '淺',
            '谴' => '譴',
            '堑' => '塹',
            '枪' => '槍',
            '呛' => '嗆',
            '墙' => '牆',
            '蔷' => '薔',
            '强' => '強',
            '抢' => '搶',
            '锹' => '鍬',
            '桥' => '橋',
            '乔' => '喬',
            '侨' => '僑',
            '翘' => '翹',
            '窍' => '竅',
            '窃' => '竊',
            '钦' => '欽',
            '亲' => '親',
            '轻' => '輕',
            '氢' => '氫',
            '倾' => '傾',
            '顷' => '頃',
            '请' => '請',
            '庆' => '慶',
            '琼' => '瓊',
            '穷' => '窮',
            '趋' => '趨',
            '区' => '區',
            '躯' => '軀',
            '驱' => '驅',
            '龋' => '齲',
            '颧' => '顴',
            '权' => '權',
            '劝' => '勸',
            '却' => '卻',
            '鹊' => '鵲',
            '让' => '讓',
            '饶' => '饒',
            '扰' => '擾',
            '绕' => '繞',
            '热' => '熱',
            '韧' => '韌',
            '认' => '認',
            '纫' => '紉',
            '荣' => '榮',
            '绒' => '絨',
            '软' => '軟',
            '锐' => '銳',
            '闰' => '閏',
            '润' => '潤',
            '洒' => '灑',
            '萨' => '薩',
            '鳃' => '鰓',
            '赛' => '賽',
            '伞' => '傘',
            '丧' => '喪',
            '骚' => '騷',
            '扫' => '掃',
            '涩' => '澀',
            '杀' => '殺',
            '纱' => '紗',
            '筛' => '篩',
            '晒' => '曬',
            '闪' => '閃',
            '陕' => '陝',
            '赡' => '贍',
            '缮' => '繕',
            '伤' => '傷',
            '赏' => '賞',
            '烧' => '燒',
            '绍' => '紹',
            '赊' => '賒',
            '摄' => '攝',
            '慑' => '懾',
            '设' => '設',
            '绅' => '紳',
            '审' => '審',
            '婶' => '嬸',
            '肾' => '腎',
            '渗' => '滲',
            '声' => '聲',
            '绳' => '繩',
            '胜' => '勝',
            '圣' => '聖',
            '师' => '師',
            '狮' => '獅',
            '湿' => '濕',
            '诗' => '詩',
            '尸' => '屍',
            '时' => '時',
            '蚀' => '蝕',
            '实' => '實',
            '识' => '識',
            '驶' => '駛',
            '势' => '勢',
            '释' => '釋',
            '饰' => '飾',
            '视' => '視',
            '试' => '試',
            '寿' => '壽',
            '兽' => '獸',
            '枢' => '樞',
            '输' => '輸',
            '书' => '書',
            '赎' => '贖',
            '属' => '屬',
            '术' => '術',
            '树' => '樹',
            '竖' => '豎',
            '数' => '數',
            '帅' => '帥',
            '双' => '雙',
            '谁' => '誰',
            '税' => '稅',
            '顺' => '順',
            '说' => '說',
            '硕' => '碩',
            '烁' => '爍',
            '丝' => '絲',
            '饲' => '飼',
            '耸' => '聳',
            '怂' => '慫',
            '颂' => '頌',
            '讼' => '訟',
            '诵' => '誦',
            '擞' => '擻',
            '苏' => '蘇',
            '诉' => '訴',
            '肃' => '肅',
            '虽' => '雖',
            '绥' => '綏',
            '岁' => '歲',
            '孙' => '孫',
            '损' => '損',
            '笋' => '筍',
            '缩' => '縮',
            '琐' => '瑣',
            '锁' => '鎖',
            '獭' => '獺',
            '挞' => '撻',
            '抬' => '擡',
            '摊' => '攤',
            '贪' => '貪',
            '瘫' => '癱',
            '滩' => '灘',
            '坛' => '壇',
            '谭' => '譚',
            '谈' => '談',
            '叹' => '歎',
            '汤' => '湯',
            '烫' => '燙',
            '涛' => '濤',
            '绦' => '縧',
            '腾' => '騰',
            '誊' => '謄',
            '锑' => '銻',
            '题' => '題',
            '体' => '體',
            '屉' => '屜',
            '条' => '條',
            '贴' => '貼',
            '铁' => '鐵',
            '厅' => '廳',
            '听' => '聽',
            '烃' => '烴',
            '铜' => '銅',
            '统' => '統',
            '头' => '頭',
            '图' => '圖',
            '涂' => '塗',
            '团' => '團',
            '颓' => '頹',
            '蜕' => '蛻',
            '脱' => '脫',
            '鸵' => '鴕',
            '驮' => '馱',
            '驼' => '駝',
            '椭' => '橢',
            '洼' => '窪',
            '袜' => '襪',
            '弯' => '彎',
            '湾' => '灣',
            '顽' => '頑',
            '万' => '萬',
            '网' => '網',
            '韦' => '韋',
            '违' => '違',
            '围' => '圍',
            '为' => '爲',
            '潍' => '濰',
            '维' => '維',
            '苇' => '葦',
            '伟' => '偉',
            '伪' => '僞',
            '纬' => '緯',
            '谓' => '謂',
            '卫' => '衛',
            '温' => '溫',
            '闻' => '聞',
            '纹' => '紋',
            '稳' => '穩',
            '问' => '問',
            '瓮' => '甕',
            '挝' => '撾',
            '蜗' => '蝸',
            '涡' => '渦',
            '窝' => '窩',
            '呜' => '嗚',
            '钨' => '鎢',
            '乌' => '烏',
            '诬' => '誣',
            '无' => '無',
            '芜' => '蕪',
            '吴' => '吳',
            '坞' => '塢',
            '雾' => '霧',
            '务' => '務',
            '误' => '誤',
            '锡' => '錫',
            '牺' => '犧',
            '袭' => '襲',
            '习' => '習',
            '铣' => '銑',
            '戏' => '戲',
            '细' => '細',
            '虾' => '蝦',
            '辖' => '轄',
            '峡' => '峽',
            '侠' => '俠',
            '狭' => '狹',
            '厦' => '廈',
            '锨' => '鍁',
            '鲜' => '鮮',
            '纤' => '纖',
            '咸' => '鹹',
            '贤' => '賢',
            '衔' => '銜',
            '闲' => '閑',
            '显' => '顯',
            '险' => '險',
            '现' => '現',
            '献' => '獻',
            '县' => '縣',
            '馅' => '餡',
            '羡' => '羨',
            '宪' => '憲',
            '线' => '線',
            '厢' => '廂',
            '镶' => '鑲',
            '乡' => '鄉',
            '详' => '詳',
            '响' => '響',
            '项' => '項',
            '萧' => '蕭',
            '销' => '銷',
            '晓' => '曉',
            '啸' => '嘯',
            '蝎' => '蠍',
            '协' => '協',
            '挟' => '挾',
            '携' => '攜',
            '胁' => '脅',
            '谐' => '諧',
            '写' => '寫',
            '泻' => '瀉',
            '谢' => '謝',
            '锌' => '鋅',
            '衅' => '釁',
            '兴' => '興',
            '汹' => '洶',
            '锈' => '鏽',
            '绣' => '繡',
            '虚' => '虛',
            '嘘' => '噓',
            '须' => '須',
            '许' => '許',
            '绪' => '緒',
            '续' => '續',
            '轩' => '軒',
            '悬' => '懸',
            '选' => '選',
            '癣' => '癬',
            '绚' => '絢',
            '学' => '學',
            '勋' => '勳',
            '询' => '詢',
            '寻' => '尋',
            '驯' => '馴',
            '训' => '訓',
            '讯' => '訊',
            '逊' => '遜',
            '压' => '壓',
            '鸦' => '鴉',
            '鸭' => '鴨',
            '哑' => '啞',
            '亚' => '亞',
            '讶' => '訝',
            '阉' => '閹',
            '烟' => '煙',
            '盐' => '鹽',
            '严' => '嚴',
            '颜' => '顔',
            '阎' => '閻',
            '艳' => '豔',
            '厌' => '厭',
            '砚' => '硯',
            '彦' => '彥',
            '谚' => '諺',
            '验' => '驗',
            '鸯' => '鴦',
            '杨' => '楊',
            '扬' => '揚',
            '疡' => '瘍',
            '阳' => '陽',
            '痒' => '癢',
            '养' => '養',
            '样' => '樣',
            '瑶' => '瑤',
            '摇' => '搖',
            '尧' => '堯',
            '遥' => '遙',
            '窑' => '窯',
            '谣' => '謠',
            '药' => '藥',
            '爷' => '爺',
            '页' => '頁',
            '业' => '業',
            '叶' => '葉',
            '医' => '醫',
            '铱' => '銥',
            '颐' => '頤',
            '遗' => '遺',
            '仪' => '儀',
            '彝' => '彜',
            '蚁' => '蟻',
            '艺' => '藝',
            '亿' => '億',
            '忆' => '憶',
            '义' => '義',
            '诣' => '詣',
            '议' => '議',
            '谊' => '誼',
            '译' => '譯',
            '异' => '異',
            '绎' => '繹',
            '荫' => '蔭',
            '阴' => '陰',
            '银' => '銀',
            '饮' => '飲',
            '樱' => '櫻',
            '婴' => '嬰',
            '鹰' => '鷹',
            '应' => '應',
            '缨' => '纓',
            '莹' => '瑩',
            '萤' => '螢',
            '营' => '營',
            '荧' => '熒',
            '蝇' => '蠅',
            '颖' => '穎',
            '哟' => '喲',
            '拥' => '擁',
            '佣' => '傭',
            '痈' => '癰',
            '踊' => '踴',
            '咏' => '詠',
            '涌' => '湧',
            '优' => '優',
            '忧' => '憂',
            '邮' => '郵',
            '铀' => '鈾',
            '犹' => '猶',
            '游' => '遊',
            '诱' => '誘',
            '舆' => '輿',
            '鱼' => '魚',
            '渔' => '漁',
            '娱' => '娛',
            '与' => '與',
            '屿' => '嶼',
            '语' => '語',
            '吁' => '籲',
            '御' => '禦',
            '狱' => '獄',
            '誉' => '譽',
            '预' => '預',
            '驭' => '馭',
            '鸳' => '鴛',
            '渊' => '淵',
            '辕' => '轅',
            '园' => '園',
            '员' => '員',
            '圆' => '圓',
            '缘' => '緣',
            '远' => '遠',
            '愿' => '願',
            '约' => '約',
            '跃' => '躍',
            '钥' => '鑰',
            '岳' => '嶽',
            '粤' => '粵',
            '悦' => '悅',
            '阅' => '閱',
            '云' => '雲',
            '郧' => '鄖',
            '匀' => '勻',
            '陨' => '隕',
            '运' => '運',
            '蕴' => '蘊',
            '酝' => '醞',
            '晕' => '暈',
            '韵' => '韻',
            '杂' => '雜',
            '灾' => '災',
            '载' => '載',
            '攒' => '攢',
            '暂' => '暫',
            '赞' => '贊',
            '赃' => '贓',
            '脏' => '髒',
            '凿' => '鑿',
            '枣' => '棗',
            '灶' => '竈',
            '责' => '責',
            '择' => '擇',
            '则' => '則',
            '泽' => '澤',
            '贼' => '賊',
            '赠' => '贈',
            '扎' => '紮',
            '札' => '劄',
            '轧' => '軋',
            '铡' => '鍘',
            '闸' => '閘',
            '诈' => '詐',
            '斋' => '齋',
            '债' => '債',
            '毡' => '氈',
            '盏' => '盞',
            '斩' => '斬',
            '辗' => '輾',
            '崭' => '嶄',
            '栈' => '棧',
            '战' => '戰',
            '绽' => '綻',
            '张' => '張',
            '涨' => '漲',
            '帐' => '帳',
            '账' => '賬',
            '胀' => '脹',
            '赵' => '趙',
            '蛰' => '蟄',
            '辙' => '轍',
            '锗' => '鍺',
            '这' => '這',
            '贞' => '貞',
            '针' => '針',
            '侦' => '偵',
            '诊' => '診',
            '镇' => '鎮',
            '阵' => '陣',
            '挣' => '掙',
            '睁' => '睜',
            '狰' => '猙',
            '帧' => '幀',
            '郑' => '鄭',
            '证' => '證',
            '织' => '織',
            '职' => '職',
            '执' => '執',
            '纸' => '紙',
            '挚' => '摯',
            '掷' => '擲',
            '帜' => '幟',
            '质' => '質',
            '钟' => '鍾',
            '终' => '終',
            '种' => '種',
            '肿' => '腫',
            '众' => '衆',
            '诌' => '謅',
            '轴' => '軸',
            '皱' => '皺',
            '昼' => '晝',
            '骤' => '驟',
            '猪' => '豬',
            '诸' => '諸',
            '诛' => '誅',
            '烛' => '燭',
            '瞩' => '矚',
            '嘱' => '囑',
            '贮' => '貯',
            '铸' => '鑄',
            '筑' => '築',
            '驻' => '駐',
            '专' => '專',
            '砖' => '磚',
            '转' => '轉',
            '赚' => '賺',
            '桩' => '樁',
            '庄' => '莊',
            '装' => '裝',
            '妆' => '妝',
            '壮' => '壯',
            '状' => '狀',
            '锥' => '錐',
            '赘' => '贅',
            '坠' => '墜',
            '缀' => '綴',
            '谆' => '諄',
            '浊' => '濁',
            '兹' => '茲',
            '资' => '資',
            '渍' => '漬',
            '踪' => '蹤',
            '综' => '綜',
            '总' => '總',
            '纵' => '縱',
            '邹' => '鄒',
            '诅' => '詛',
            '组' => '組',
            '钻' => '鑽',
            '致' => '緻',
            '钟' => '鐘',
            '么' => '麼',
            '为' => '為',
            '只' => '隻',
            '凶' => '兇',
            '准' => '準',
            '启' => '啟',
            '板' => '闆',
            '里' => '裡',
            '雳' => '靂',
            '余' => '餘',
            '链' => '鍊',
            '泄' => '洩',
        );
        return $array;
    }


}