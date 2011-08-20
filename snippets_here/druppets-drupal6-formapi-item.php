<!--
	category: Drupal 6 -> Form API
	name: Item
	toolTip: Item Field Template for Drupal FAPI
-->

$form['age'] = array(
	'#title' => t('Age'),
	'#type' => 'item',
	'#description' => t('Persons of age under 18 are't allowed to view this content.'),
);