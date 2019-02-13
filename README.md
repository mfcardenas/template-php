# Template for project with PHP
Example template of a web application with model view controller in PHP.

- <b>config</b>: configuration files and connects to the database. In the template, a ".php" file and global variables are used to establish the connection parameters to the database, it is recommended to use a flat file to store these credentials and some encryption system that the application internally translates.
- <b>controllers</b>: all the "classes" that will manage the different functionalities. By means of an "entity" functionality, a specific controller must be defined.
- css: style sheet files
- images: images from the web
- js: javascript files, bootstrap, others.
- fonts: font files and special icons
- models: objects, classes and models for data access (DAOs)
- <b>views</b>: files to create views. Use some mechanism to reuse those sections of the web that are repetitive and common: menus, navigation, references to javascript and CSS libraries, templates, etc.

Based on:
- https://github.com/Raindal/php_mvc
- https://github.com/victorobs/ejemplo-php-poo-mvc.git
