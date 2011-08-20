<!--
	category: Drupal 6 -> Form API
	name: Fieldset
	toolTip: Fieldset Template for Drupal FAPI
-->

$form['clients'] = array(
	'#type' => 'fieldset',
	'#access' => user_access('administer nodes'),
	'#title' => t('Clients information'),
	'#collapsible' => TRUE,
	'#collapsed' => TRUE,
	'#weight' => 20,
);