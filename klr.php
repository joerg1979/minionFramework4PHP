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
 * File: index.php
 * Job: Hompage of this miniFramework
 * 
 * actual: 592 - 14.3 DB-Con..
 */

# Including ConfigFile
require_once 'common.php';

#Using staticFunctions of class.HTML.php
SYSTEM\HTML::printHead();
SYSTEM\HTML::printBody('klr.php');
SYSTEM\HTML::printContent('inc.printBodyA.php');
SYSTEM\HTML::printContent('inc.klr.php');
SYSTEM\HTML::printContent('inc.printBodyB.php');
SYSTEM\HTML::printFooter();
SYSTEM\HTML::printFoot();
?>
