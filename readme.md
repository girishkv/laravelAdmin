## Dick - The Admin Panel Builder for Laravel

[![Project Status](https://img.shields.io/badge/project-maintained-green.svg)](https://stillmaintained.com/tabacitu/dick)
[![GitHub license](https://img.shields.io/badge/license-GPLv3-blue.svg)](https://raw.githubusercontent.com/tabacitu/dick/master/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/tabacitu/dick.svg)](https://github.com/tabacitu/dick/issues)

Dick helps you kickstart your Laravel project, providing baseline code and interface for what any/many projects will need:
- CRUD interface (client-friendly GUI for managing entities using Eloquent, inspired by Grocery Crud for CodeIgniter);
- Authentication, user, role and permission management (using Laravel Auth & Entrust);
- Superadmin tools:
    + file & database backup;
    + log file viewer;
    + file manager;
    + settings manager;
- Page Manager (create admin panels for all your pages, even if they need different types of fields or a different number of fields);

![Example generated CRUD interface](https://dl.dropboxusercontent.com/u/2431352/Screen%20Shot%202015-05-21%20at%2011.42.40.png)

Website: http://usedick.com

Documentation: http://usedick.com/docs



It's heavily opinionated and uses:
- Laravel 5
- Bootstrap 3
- jQuery
- AdminLTE theme


------------

### Installation

0. Composer install

    composer install

1. Like any Laravel 5 installation, run:

    chmod -R o+w storage
    chmod -R o+w vendor

2. Run the migrations and seeds:

    php artisan vendor:publish --provider="Dick\Settings\SettingsServiceProvider"

    php artisan migrate
    
    php artisan db:seed


------------

### How to create a new CRUD Panel for an entity

1. Generate a new resource controller in the command line:

php artisan make:controller ArticleController

2. Modify the new controller to extend CrudController and delete or comment any methods you don't need.

3. Create a model for your entity.

php artisan make:model Models/Article

4. Create a route for it in routes.php:

Route::resource('article', 'ArticleController');


See detailed installation&use of the CRUD panel here: http://usedick.com/docs

------------

### Extra packages

Dick's extra functionality is separated into composer packages, that you may choose not to install:
- [Dick\CRUD](https://github.com/tabacitu/crud) - add, edit, delete interfaces for eloquent models;
- [Dick\TranslationManager](https://github.com/tabacitu/translationmanager) - online Laravel lang file editing;
- [Dick\Settings](https://github.com/tabacitu/settings) - config variables, stored in the db and CRUD interface;
- [Dick\LogManager](https://github.com/tabacitu/logmanager) - preview, download and delete log files online;
- [Dick\BackupManager](https://github.com/tabacitu/backupmanager) - backup db & files, download and delete backups;

Soon:
- Dick\MenuManager - add, edit, delete interface for your front-side menu;
- Dick\MultiLanguage - multi-language Eloquent models & multi-language routes system;

More details on http://usedick.com
