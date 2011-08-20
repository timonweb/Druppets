<!--
	category: Drupal 6 -> Form API
	name: Date
	toolTip: Date Field Template for Drupal FAPI
-->

$form['birthday'] = array(
	'#title' => t('Birthday'),
	'#type' => 'date',
	'#description' => t('Enter your birth date'),
	'#default_value' => array(
	'month' => format_date(time(), 'custom', 'n'),
	'day' => format_date(time(), 'custom', 'j'),
	'year' => format_date(time(), 'custom', 'Y'),
	),
);