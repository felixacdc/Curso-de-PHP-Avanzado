<?php

if ( isset($_SESSION['id'], $_SESSION['user'], $_SESSION['email']) ) {
    if ( $_POST ) {

    } else {

        $ruta = 'uploads/avatar/' . $_SESSION['id'];

        if ( file_exists($ruta . '.jpg') ) {
            $ruta = $ruta . '.jpg';
        } else if ( file_exists($ruta . '.png') ) {
            $ruta = $ruta . '.png';
        } else if ( file_exists($ruta . '.jpeg') ) {
            $ruta = $ruta . '.jpeg';
        } else if ( file_exists($ruta . '.gif') ) {
            $ruta = $ruta . '.gif';
        } else if ( file_exists($ruta . '.JPG') ) {
            $ruta = $ruta . '.JPG';
        } else if ( file_exists($ruta . '.JPEG') ) {
            $ruta = $ruta . '.JPEG';
        } else if ( file_exists($ruta . '.PNG') ) {
            $ruta = $ruta . '.PNG';
        } else if ( file_exists($ruta . '.GIF') ) {
            $ruta = $ruta . '.GIF';
        } else {
            $ruta = 'uploads/avatar/default.png';
        }

        $template = new Smarty();
        $template->assign('image', $ruta);
        $template->display('cuentas/cuentas.tpl');
    }
} else {
    header('location: ?view=login');
}
