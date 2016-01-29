<?php

$view = isset( $_GET['view'] ) ? $_GET['view'] : 'index';
require_once ('core/libs/smarty/Smarty.class.php');

// file_exists: verifica si un archivo existe
if ( file_exists('core/controllers/'. $view .'Controller.php') ) {
    include ('core/controllers/'. $view .'Controller.php');
} else {
    include ('core/controllers/indexController.php');
}