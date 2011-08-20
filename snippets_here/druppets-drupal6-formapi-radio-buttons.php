<!--
	category: Drupal 6 -> Form API
	name: Radio Buttons
	toolTip: Radio Buttons Field Template for Drupal FAPI
-->

$form['radios']['custom'] = array(
	'#type' => 'radios',
	'#title' => t('Custom visibility settings'),
	'#options' => array(
	t('Users cannot control whether or not they see this block.'),
	t('Show this block by default, but let individual users hide it.'),
	t('Hide this block by default but let individual users show it.')
	),
	'#description' =>  t('Allow individual users to customize the visibility of
	this block in their account settings.'),
	'#default_value' => $edit['custom'],
);