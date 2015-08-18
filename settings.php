<?php
/* 
 * Project is inspired by:  PHP5.3&MySQL5.5 "Das umfassende Handbuch" 
 *                          from Stefan Reimers, Gunnar Thies
 *                          @GalileoComputing
 * Project based on:        Chapter 14 "Ein Basissystem mit PHP und MySQL"
 *
 * Project: frameworkminionphp
 * Code GC: commented with #-tag
 * Code JS: commented with //-tag
 * 
 * File:    settings.php
 * Job:     Definition of Project-wide Constants
 */

#ErrorReporting
//  error_reporting(E_ALL);
//  error_reporting(E_STRICT);       deprecated Functions shown

#Debugging-Mode TRUE shows Console
    define('DEBUG',FALSE);

/*
 * MySQL-Database Connection-Settings
 * 
 */ 
#default Database-Server Configuration
    define('DB_SERVER', "localhost");
    define('DB_PORT', "3306");
#Database Username & Password
    define('DB_NAME', "miniondb");
    define('DB_USER', "minion");
    define('DB_PASSWORD', "0511");

#Using the PDO-Class
    define('PDO_ON', TRUE);
    
#HTML-TITLE
    define('HTML_TITLE', "MinionFramework4PHP");  
    
#Global HTML-Settings
    define('CHARSET', 'UTF-8');
    define('LANG', 'de');
    
#Setting the local Timezone 
    date_default_timezone_set('Europe/Berlin');
    
#Global Meatdata
    define('META_KEYWORDS', 'Framework, PHP, Bootstrap, DB');
    define('META_DESCRIPTION', 'This is a mini PHP-Famework');
    define('META_AUTHOR', 'Joerg Sundmacher');
    define('META_DATE', '2015-03-01T09:00:00+1:00');

#MY personal css and js files
    define('MY_CSS', PROJECT_HTTP_ROOT."/css/my.css");
    define('MY_CSS_THEME', PROJECT_HTTP_ROOT."/css/my-theme.css");
    define('MY_JS', PROJECT_HTTP_ROOT."/js/my.js");
  
#Constant for HTML 4 without Bootstrap
/*
 * Uncomment this Part to use HTML4.01 without Bootstrap
 * 
 *  define(BOOTSTRAP_ON, FALSE);
 *  define('BS_DOCTYPE401','<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN');
 * 
 *  Uncomment this Part to use HTML5 without Bootstrap
 *  define(BOOTSTRAP_ON, 5)
 *  define('BS_DOCTYPE5', '<!DOCTYPE html>');
 *  define('JQUERY_CDN', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');
 */
   
#Constants for Bootstrap
//  define(BOOTSTRAP_ON, 5)
    define('BOOTSTRAP_ON', TRUE);
    define('BS_DOCTYPE5', '<!DOCTYPE html>');
    
    define('BOOTSTRAP_CSS_CDN', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
    define('BOOTSTRAP_CSSTHEME_CDN', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css');

    define('JQUERY_CDN', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');
    define('BOOTSTRAP_JQUERY_CDN', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js');

?>
    