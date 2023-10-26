<?php

switch ($_REQUEST['version'] ?? $_REQUEST['v']) {
    case '2023':
        include 'index-2023.html';
        die();
    
    default:
        include 'index-2022.html';
        die();
};