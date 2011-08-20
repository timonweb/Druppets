<!--
	category: Drupal 6 -> Func
	name: Form + Validation + Submit
	toolTip: Form function with validation and submit functions
-->

function name_form() {
		
	$form['submit'] = array(
		'#type' => 'submit', 
		'#value' => t('Submit')
	);
	
	return $form;
}


function name_form_submit($form, &$form_state) {

}		