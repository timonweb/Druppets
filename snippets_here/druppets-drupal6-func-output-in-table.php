<!--
	category: Drupal 6 -> Func
	name: Output in Table
	toolTip: 
-->

$header = array(
    array('data' => t('Column1')),
	array('data' => t('Column2')),
	array('data' => t('Column3')),
);

$rows[] = array(
	$column1,
	$column2,
	$column3,
);	

theme('table', $header, $rows);