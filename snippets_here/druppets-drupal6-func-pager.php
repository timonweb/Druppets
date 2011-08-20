<!--
	category: Drupal 6 -> Func
	name: Pager
	toolTip: Pager
-->

$result = pager_query($sql, 100, 0 , NULL, $keys);

theme('pager', NULL, 100, 0);	