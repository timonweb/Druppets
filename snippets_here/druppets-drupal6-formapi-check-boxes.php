<!--
	category: Drupal 6 -> Form API
	name: Check Boxes
	toolTip: Check Box Template for Drupal FAPI
-->

$options = array(
	'banking' => t('Banking'),
	'politics' => t('Politics'),
	'entertainment' => t('Entertainment')  
);

$form['interests'] = array(
	'#title' => t('Choose your interest'),
	'#type' => 'checkboxes',
	'#description' => (t('Please choose what information would you like to get')),
	'#options' => $options,
	'#weight' => 25,
);