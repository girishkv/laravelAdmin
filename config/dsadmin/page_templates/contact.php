<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Dsadmin\PageManager template
	|--------------------------------------------------------------------------
	|
	| All of these variables will be passed in the Controller to the $crud variable.
	|
	| Author: Cristian Tabacitu (hello@tabacitu.ro)
	|
	*/

	'template_name' => 'Contact',

	// -------------------------------------------------------------------------

    // *****
    // CREATE / UPDATE FIELDS
    // *****
    //
    // Define the fields for the "Edit item" and "Add item" views as an array:
    //
    "fields" => [

                    [
                        'name' => 'meta_title',
                        'label' => "Meta Title",
                        'fake' => true,
                        'store_in' => 'extras'
                    ],
                    [
                        'name' => 'meta_description',
                        'label' => "Meta Description",
                        'fake' => true,
                        'store_in' => 'extras'
                    ],
                    [
                        'name' => 'meta_keywords',
                        'label' => "Meta Keywords",
                        'fake' => true,
                        'store_in' => 'extras'
                    ],
                    [
                        'name' => 'name',
                        'label' => 'Name',
                        'type' => 'text'
                    ],
                    [
                        'name' => 'content',
                        'label' => 'Content',
                        'type' => 'wysiwyg',
                        'placeholder' => 'Your content here'
                    ],
                    [
                        'name' => 'address',
                        'label' => "Address",
                        'type' => 'text',
                        'fake' => true,
                        'store_in' => 'extras'
                    ],
                    [
                        'name' => 'email',
                        'label' => "Email address",
                        'type' => 'email',
                        'fake' => true,
                        'store_in' => 'extras'
                    ],
                    [
                        'name' => 'phone',
                        'label' => "Phone number",
                        'type' => 'text',
                        'fake' => true,
                        'store_in' => 'extras'
                    ],

                ],

];
