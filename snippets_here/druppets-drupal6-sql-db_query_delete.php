<!--
	category: Drupal 6 -> SQL
	name: db_query('DELETE')
	toolTip: db_query('DELETE')
-->

db_query('DELETE FROM {sample} WHERE nid LIKE %d', $nid);