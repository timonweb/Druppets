<!--
	category: Drupal 6 -> SQL
	name: db_query('SELECT') Single and fetch
	toolTip: db_query('SELECT') Single and fetch
-->

$data = db_fetch_object(db_query('SELECT * FROM {node} WHERE nid LIKE %d LIMIT 1', $nid));
