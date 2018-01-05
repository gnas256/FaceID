<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.2.363
*/

require_once('form_process.php');

$form = array(
	'subject' => 'B-Master Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'minhsang256@gmail.com',
		'to' => 'minhsang256@gmail.com'
	),
	'fields' => array(
		'custom_U1649' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Họ và tên',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Họ và tên\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'custom_U1631' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Công Ty',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Công Ty\' is required.'
			)
		),
		'custom_U1654' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Địa chỉ',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Địa chỉ\' is required.'
			)
		),
		'custom_U1640' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Thành phố',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Thành phố\' is required.'
			)
		),
		'custom_U1659' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Tỉnh',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Tỉnh\' is required.'
			)
		),
		'custom_U1627' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Số điện thoại',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Số điện thoại\' is required.'
			)
		),
		'custom_U1663' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Country',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Country\' is required.'
			)
		),
		'custom_U1644' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Lưu ý',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Lưu ý\' is required.'
			)
		)
	)
);

process_form($form);
?>
