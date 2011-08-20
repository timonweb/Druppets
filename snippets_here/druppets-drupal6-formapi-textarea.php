<!--
	category: Drupal 6 -> Form API
	name: TextArea 
	toolTip: TextArea Template for Drupal FAPI
-->

$form['message'] = array(
	'#title' => t('Message'),
	'#type' => 'textarea',
	'#description' => t('Enter your message.'),
	'#default_value' => $message,
	'#cols' => 40,
	'#rows' => 3,
	'#resizable' => FALSE,
	'#weight' => 15,
);