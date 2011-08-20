<!--
	category: Drupal 6 -> Form API
	name: File Upload
	toolTip: File Upload Template for Drupal FAPI
-->

//if you use the file element, you’ll need to set the enctype property at the root of
your form
$form['#attributes']['enctype'] = 'multipart/form-data';

$form['picture']['picture_upload'] = array(
	'#type' => 'file',
	'#title' => t('Upload picture'),
	'#size' => 48,
	'#description' => t('Your virtual face or picture.')
);