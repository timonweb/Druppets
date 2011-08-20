<!--
	category: Drupal 6 -> SQL
	name: db_query('SELECT') and fetch
	toolTip: db_query('SELECT') and fetch
-->

$result = db_query('SELECT * FROM {node} WHERE nid LIKE %d', $nid);

while ($data = db_fetch_object($result)) {

}