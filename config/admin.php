<?php

return [

	// PROJECT NAME
	//
	// Used in the menu & other places.
	// With this changed, there will be no trace of the word "Dsadmin" in the admin interface.
	'project_name' => 'DesignString ',


	// Language files to NOT show in the Translation Manager
	//
	'language_ignore' => ['admin', 'pagination', 'reminders', 'validation', 'log', 'crud'],

	// The AdminLTE Skin used (affects menu color and others)
	// Options: skin-black, skin-blue, skin-green, skin-purple, skin-red, skin-yellow
	// If you're using the left-side menu bar, you can have it light instead of dark by appending -light to the class. Ex: skin-blue-light
	'skin' => 'skin-blue',

	/*
	|--------------------------------------------------------------------------
	| Admin menu
	|--------------------------------------------------------------------------
	|
	| Define the menu for the admin panel.
	| For now, it supports two levels:
	|
	| Level 1. Links
	| 	[
	|		'label' => "Dashboard",
	|		'route' => 'admin/dashboard', 	or 		'url' => "http://google.com"
	|		'icon' => 'fa fa-dashboard',
	|	],
	|
	| Level 2. Dropdowns
	|	[
	|		'label' => "CRUD",
	|		'url' => url(),
	|		'icon' => 'fa fa-table',
	|		'children' => [
	|						[
	|							'label' => "Articles",
	|							'url' => url('admin/article'),
	|							'icon' => 'fa fa-file',
	|						],
	|					]
	|	]
	|
	*/

	'menu' => [
		[
			'label' => "Dashboard",
			'route' => "admin",
			// 'url' => null,
			'icon' => 'fa fa-dashboard',
		],

		[
			'label' => "Authentication",
			'route' => "",
			// 'url' => null,
			'icon' => 'fa fa-group',
			'children' => [
							[
								'label' => "Users",
								'route' => 'admin/user',
								'icon' => 'fa fa-user',
							],
							[
								'label' => "Roles",
								'route' => 'admin/role',
								'icon' => 'fa fa-group',
							],
							[
								'label' => "Permissions",
								'route' => 'admin/permission',
								'icon' => 'fa fa-lock',
							]
						]
		],

		[
			'label' => "CRUD",
			'route' => "",
			// 'url' => null,
			'icon' => 'fa fa-table',
			'children' => [
							[
								'label' => "Menu Items",
								'route' => 'admin/menu-item',
								'icon' => 'fa fa-bars',
							],
							[
								'label' => "Pages",
								'route' => 'admin/page',
								'icon' => 'fa fa-file-text',
							],
							[
								'label' => "Articles",
								'route' => 'admin/article',
								'icon' => 'fa fa-newspaper-o',
							],
							[
								'label' => "Categories",
								'route' => 'admin/category',
								'icon' => 'fa fa-list',
							],
							[
								'label' => "Tags",
								'route' => 'admin/tag',
								'icon' => 'fa fa-tag',
							],
						]
		],
		[
			'label' => "Translations",
			'route' => "",
			'icon' => 'fa fa-globe',
			'children' => [
				[
					'label' => "Languages",
					'route' => 'admin/language',
					'icon' => 'fa fa-flag-checkered',
				],
				[
					'label' => "Site texts",
					'route' => 'admin/language/texts',
					'icon' => 'fa fa-language',
				],
			]
		],
		[
			'label' => "Advanced",
			'route' => "",
			// 'url' => null,
			'icon' => 'fa fa-wrench',
			'children' => [
							[
								'label' => "File manager",
								'route' => 'admin/elfinder',
								'icon' => 'fa fa-files-o',
							],
							[
								'label' => "Backups",
								'route' => 'admin/backup',
								'icon' => 'fa fa-hdd-o',
							],
							[
								'label' => "Logs",
								'route' => 'admin/log',
								'icon' => 'fa fa-terminal',
							],
							[
								'label' => "Settings",
								'route' => 'admin/setting',
								'icon' => 'fa fa-cog',
							],
						]
		]
	],

];
