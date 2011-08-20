<!--
	category: Drupal 6 -> Form API
	name: Weight
	toolTip: Weight Template for Drupal FAPI
-->

$form['weight'] = array(
	'#type' => 'weight',
	'#title' => t('Weight'),
	'#default_value' => $edit['weight'],
	'#delta' => 10,
	'#description' => t('In listings, the heavier vocabularies will sink and the
	lighter vocabularies will be positioned nearer the top.'),
);