<!--
	category: Drupal 6 -> Form API
	name: TextField 
	toolTip: TextField Template for Drupal FAPI
-->

$form['name'] = array(
	'#title' => t('Name'),
	'#type' => 'textfield',
	'#description' => t('Enter your name.'),
	'#field_suffix' => t('In english'),
	'#default_value' => $user->name,
	'#size' => 4,
	'#weight' => 10,
);