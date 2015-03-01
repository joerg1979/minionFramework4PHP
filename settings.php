<?php

/* 
 * Project is inspired by:  PHP5.3&MySQL5.5 "Das umfassende Handbuch" 
 *                          from Stefan Reimers, Gunnar Thies
 *                          @GalileoComputing
 * Project based on:        Chapter 14 "Ein Basissystem mit PHP und MySQL"
 * Project: frameworkminionphp
 * Code by GallileoComputing: commented with #-tag
 * Code by JS: commented with //-tag
 * 
 * File: settings.php
 * Job: Definition of Project-wide Constants
 */

#ErrorReporting
//  error_reporting(E_ALL);
//  error_reporting(E_STRICT);       deprecated Functions shown

#Debugging-Mode TRUE shows Console
    define('DEBUG',TRUE);
 
#Database Connection-Settings
    define('DB_SERVER', "localhost");
    define('DB_PORT', "3306");
    
//    define('DB_NAME', "minionphp");
//#Database Username & Password
//    define('DB_USER', "minion");
//    define('DB_PASSWORD', "0511");
    #Database Username & Password
    define('DB_NAME', "pagecheck");
    define('DB_USER', "dbuser");
    define('DB_PASSWORD', "0511");

#global html-settings
define('CHARSET', 'UTF-8');
define('LANG', 'de');
#Meatdata

define('META_KEYWORDS', 'Framework, PHP, Bootstrap, DB');
define('META_DESCRIPTION', 'This is a mini PHP-Famework');
define('META_AUTHOR', 'Joerg Sundmacher');
define('META_DATE', '2015-03-01T09:00:00+1:00');

#Setting the HTML-TITLE
    define('HTML_TITLE', "Framework Minion(on)PHP");
#Setting the local Timezone 
    date_default_timezone_set('Europe/Berlin');

//Define Constant for use of Bootstrap 
#HTML 4.01 Transitional   == FALSE
// define(BOOTSTRAP_ON, FALSE);
    define('BS_DOCTYPE401','<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN');

#Bootstrap                == TRUE
    define('BOOTSTRAP_ON', TRUE);
    define('BS_DOCTYPE5', '<!DOCTYPE html>');
    define('BOOTSTRAP_CSS_CDN', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
    define('BOOTSTRAP_CSSTHEME_CDN', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css');

    define('JQUERY_CDN', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');
    define('BOOTSTRAP_JQUERY_CDN', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js');
#HTML5                    == 5
// define(BOOTSTRAP_ON, 5)
//   
#Using the PDO-Class
    define('PDO_ON', TRUE);
?>
    