<?php
$db_config = array(
	'dbc' => array(
		'Name' => array(
			'Type' => 'text',
			'Sql' => array('varchar(100)', ''),
			'Lang' => 1,
		),
		// 'PageUrl' => array(
		// 	'Type' => 'pageurl',
		// 	'Tip' => language('{/notes.custom_url/}'),
		// 	'Sql' => array('varchar(200)', ''),
		// ),
        // 'Icon' => array(
        //     'Type' => 'svg',
        //     'Sql' => array('varchar(255)', ''),
        // ),
		'UId' => array(
		    'Name' => '类别',
		    'Type' => 'uid',
		    'Field' => array(
		        'UId' => array('Sql'=>array('varchar(100)', '0,')),
		        'Dept' => array('Sql'=>array('tinyint(1)', 1))
		    ),
		    'Dept' => 1,
		),
		'Seo' => 1,
	)
);
return $db_config;
?>