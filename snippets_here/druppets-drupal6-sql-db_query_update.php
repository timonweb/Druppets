<!--
	category: Drupal 6 -> SQL
	name: db_query('UPDATE')
	toolTip: db_query('UPDATE')
-->

db_query("UPDATE {sample} SET text = '%s' WHERE vid LIKE %d", 
$text, $vid);