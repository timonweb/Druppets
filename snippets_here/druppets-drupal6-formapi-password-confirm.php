<!--
	category: Drupal 6 -> Form API
	name: Password with Confirmation 
	toolTip: Two Passwords Field Template for Drupal FAPI
	This element creates two HTML password fields and attaches a validator that checks if the two
passwords match.
-->

$form['account']['pass'] = array(
	'#type' => 'password_confirm',
	'#description' => t('To change the current user password, enter the new 
	password in both fields.'),
	'#size' => 25,
);