<!--
	category: Drupal 6 -> Func
	name: Form + Submit
	toolTip: Form function with submit function
-->

function name_form() {
		
	$form['submit'] = array(
		'#type' => 'submit', 
		'#value' => t('Submit')
	);
	
	return $form;
}

function name_form_validate($form, &$form_state) {

}

function name_form_submit($form, &$form_state) {

}