# Changelog

All Notable changes to `Dick` will be documented in this file

## NEXT - YYYY-MM-DD

### Added
- Nothing

### Deprecated
- Nothing

### Fixed
- Nothing

### Removed
- Nothing

### Security
- Nothing


## [0.7.5] - 2015-10-02

### Added
- pick AdminLTE skin from config/admin.php

### Fixed
- AuthController used bcrypt() when creating a user; no need - that is now done in the Model using a mutator;


## [0.7.4] - 2015-09-17

### Fixed
- When a user tried to change his own password, the chosen password was bcryted twice; Fixed that and added the user role selection in User CRUD interface;

## [0.7.3] - 2015-09-17

### Fixed
- User editing did not account for a use case: when editing a user, one should be able to change its password, and not see it's previous one's hash; Now it does;


## [0.7.2] - 2015-09-11

### Fixed
- Admin > Authentication > Users > Add User interface did not have a password field;
- There was no mutator for setting bcrypt() on passwords automatically when creating a new user;

## [0.7.0] - 2015-09-10

### Fixed
- polished routes and seeders for no errors on dick installation;
- tested and working installation process;
- bumped version;

## [0.6.7] - 2015-09-10

### Added
- Front-end routing according to the language locale;
- Front-end language switcher example;

## [0.6.6] - 2015-09-10

### Added
- Front-end layout view;

### Fixed
- Default page templates now more realistic: home_page, about_us, services, simple_page, contact and using the default front-end layout;


## [0.6.5] - 2015-09-09

### Added
- Page entity is now multi-language, to show how that works. Added migration for the extra columns needed for multi-language.
- CRUD alias: 'CRUD' => 'Dick\CRUD\CrudServiceProvider'
- CRUD resource routes can now be defined with CRUD::resource() instead of Route::resource() and a bunch of other routes if reorder/translation was needed.
- Small CSS additions for the CRUD multi-language scenario.

## [0.6.4] - 2015-09-09

### Fixed
- Passed the $page variable to the view by default, in admin created pages using PageManager.

## [0.6.3] - 2015-09-08

### Added
- Dick\MenuManager package, an interface to add/edit/delete/reorder/nest menu items;

## [0.6.2] - 2015-09-08

### Added
- TranslationManager package, to edit lang files online;
- CHANGELOG.md file, to keep track of changes and versioning;

### Removed
- DebugBar dependency on Dick; If required, every developer will pull it in his project;