<!--
	category: Drupal 6 -> Form API
	name: Select
	toolTip: Select Field Template for Drupal FAPI
-->

$form['color'] = array(
	'#title' => t('Car color'),
	'#type' => 'select',
	'#description' => t('Pick the color of your brand new Lamborgini.'),
	'#options' => $options,
	'#multiple' => FALSE,
	'#weight' => 20,
);