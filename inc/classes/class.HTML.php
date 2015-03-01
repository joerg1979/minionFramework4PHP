<?php

/* 
 * Project is inspired by:  PHP5.3&MySQL5.5 "Das umfassende Handbuch" 
 *                          from Stefan Reimers, Gunnar Thies
 *                          @GalileoComputing
 * Project based on:        Chapter 14 "Ein Basissystem mit PHP und MySQL"
 * Project: frameworkminionphp
 * Code by GallileoComputing: commented with #-tag
 * Code by Jörg: commented with //-tag
 * 
 * File: /inc/classes/class.HTML.php
 * Job: providing static functions to print the html-sceleton
 * Namespace:  SYSTEM\HTML
 */

namespace SYSTEM;

class HTML{
    public static function printHead() {
        #Workaround for BrowserProblems with UTF-8
        header('Content-Type: text/html; charset='.CHARSET);
        // Checking Bootsprap is enabled
        if(BOOTSTRAP_ON === TRUE){
            //Bootstrap include
            echo BS_DOCTYPE5;
            echo '<html lang="'.LANG.'">';
            echo '<head>';
            echo '<meta charset="'.CHARSET.'">';
            echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
            echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
            
            // HTML Title
            echo '<title>'.HTML_TITLE.'</title>';
            // Bootstrapping via CDN
            echo '<link rel="stylesheet" href="'.BOOTSTRAP_CSS_CDN.'">';
            echo '<link rel="stylesheet" href="'.BOOTSTRAP_CSSTHEME_CDN.'">';
            

        }
        elseif(BOOTSTRAP_ON === 5){
            echo BS_DOCTYPE5;
            echo '<html>';
            echo '<html lang="'.LANG.'">';
            echo '<title>'.HTML_TITLE.'</title>';
            echo '<meta charset="'.CHARSET.'">';
            echo '<link rel="stylesheet" type="text/css" href="'
                .PROJECT_HTTP_ROOT.'/inc/css/default.css">';
            echo '<script src="'.PROJECT_HTTP_ROOT.'/inc/js/default.js" '
                .'type="text/javascript"></script>';
        } 
        else {
            echo BS_DOCTYPE401;
            echo '<html>';
            echo '<head>';
            echo '<title>'.HTML_TITLE.'</title>';
            echo '<meta http-equiv="content-type" content="text/html; '
                .'charset='.CHARSET.'">'."\n";
            echo '<link rel="stylesheet" type="text/css" href="'
                .PROJECT_HTTP_ROOT.'/inc/css/default.css.php">';
            echo '<script src="'.PROJECT_HTTP_ROOT.'/inc/js/default.js" '
                .'type="text/javascript"></script>';
        }
        
        echo '<meta name="description" content="'.META_DESCRIPTION.'">';
        echo '<meta name="author" content="'.META_AUTHOR.'">';
        echo '<meta name="keywords" content="'.META_KEYWORDS.'">';
        echo '<meta name="date" content="'.META_DATE.'">';
        echo '</head>';
    }
    
    public static function printBody($css = NULL, $withConsole = TRUE){
       
        //Start longVersion if-css
        /*
         * echo '<body';
         * if ($css != NULL){
         *  echo ' style="'.$css.'"';
         * }
         * echo '>'."\n";
         */ 
        // END of longVersion

        echo ($css != NULL)
                ? '<body id="home" style="' . $css . '">' 
                : '<body id="home">';
//        if($withConsole AND DEBUG){
//            DebugConsole::displayConsole();
//        }
        
        if(BOOTSTRAP_ON === TRUE){
            include_once PROJECT_DOCUMENT_ROOT.'/inc/content/inc.printHeader.php';
        }
    }
    
    public static function printFooter(){
        include PROJECT_DOCUMENT_ROOT.'/inc/content/inc.printFooter.php';
        
//        include_once ($def === TRUE)
//                ? PROJECT_DOCUMENT_ROOT.'/inc/content/inc.printFooter.php' 
//                : PROJECT_DOCUMENT_ROOT.$def;      
    }
    
    public static function printFoot(){
        if(BOOTSTRAP_ON === TRUE){
            echo '<script src="'.JQUERY_CDN.'"></script>';
            echo '<script src="'.BOOTSTRAP_JQUERY_CDN.'"></script>';
        } 
        else{
            echo "</body></html>";
        }
    }
    
    public static function printArray($array = array()){
        return highlight_string(print_r($array, true), true);
    }
}