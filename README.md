# Template for project with PHP
Example template of a web application with model view controller in PHP.

- <b>config</b>: configuration files and connects to the database. In the template, a ".php" file and global variables are used to establish the connection parameters to the database, it is recommended to use a flat file to store these credentials and some encryption system that the application internally translates.
- <b>controllers</b>: all the "classes" that will manage the different functionalities. By means of an "entity" functionality, a specific controller must be defined.
- <b>css</b>: style sheet files
- <b>images</b>: images from the web
- <b>js</b>: javascript files, bootstrap, others.
- <b>fonts</b>: font files and special icons
- <b>models</b>: objects, classes and models for data access (DAOs)
- <b>views</b>: files to create views. Use some mechanism to reuse those sections of the web that are repetitive and common: menus, navigation, references to javascript and CSS libraries, templates, etc.
<b>index.php</b>: this file starts all the configuration of the web project (global functions, controllers, models and others). Do not use this file to create elements of the view, it is recommended that from here redirect to a file home.php or another.

The prefixes <b>"Controller"</b> and <b>"index"</b> are used as key elements in the men of the files, in this way the call to the different views is automated.

<i>This template is based on the contributions of the following projects</i>:
- [Raindal PHP](https://github.com/Raindal/php_mvc)
- [victorobs PHP with POO](https://github.com/victorobs/ejemplo-php-poo-mvc.git)
