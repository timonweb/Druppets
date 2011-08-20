<!--
	category: Drupal 6 -> SQL
	name: db_query('INSERT')
	toolTip: db_query('INSERT')
-->

db_query("INSERT INTO {sample} (nid, vid, text) VALUES (%d, %d, '%s')",
$nid, $vid, $text);