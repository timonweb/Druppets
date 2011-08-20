<!--
	category: Drupal 6 -> SQL
	name: COUNT
	toolTip: COUNT
-->

$count = db_result(db_query('SELECT COUNT(uid) FROM {users}'));