<!--
	category: Drupal 6 -> Form API
	name: Password 
	toolTip: Password Field Template for Drupal FAPI
-->

$form['pass'] = array(
    '#type' => 'password',
	'#title' => t('Password'),
	'#maxlength' => 60,
	'#size' => 15,
	'#required' => TRUE,
);