<!--
	category: Drupal 6 -> Form API
	name: Hidden
	toolTip: Hidden Field Template for Drupal FAPI
-->

$form['my_hidden_field'] = array(
	'#type' => 'hidden',
	'#value' => t('I am a hidden field value'),
);