<?php /* Smarty version 3.1.27, created on 2016-02-11 05:47:09
         compiled from "/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/overall/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22572661756bc124d4b7352_91888838%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '828c316c1c8e7914b476cc18e454417de2f80787' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/overall/menu.tpl',
      1 => 1455138873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22572661756bc124d4b7352_91888838',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56bc124d639936_03413790',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56bc124d639936_03413790')) {
function content_56bc124d639936_03413790 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22572661756bc124d4b7352_91888838';
?>
<ul class="nav nav-sidebar">

    <?php if (isset($_GET['view']) && $_GET['view'] == 'cuenta') {?>
        <li class="active"><a href="#">Tu Cuenta</a></li>
    <?php }?>

    <?php if (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
        <li class="active"><a href="#">Resultado de busqueda</a></li>
    <?php }?>

    <?php if (isset($_GET['type']) && $_GET['type'] == 'tops') {?>
        <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=tops">Los mejores</a></li>

    <?php if ((!isset($_GET['type']) && isset($_GET['view']) && $_GET['view'] == 'index') || (!isset($_GET['view']))) {?>
        <li class="active"><?php } else { ?><li><?php }?><a href="?view=index">Inicio</a></li>

    <?php if (isset($_GET['type']) && $_GET['type'] == '1') {?>
        <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=1">Categoria 1</a></li>
    <?php if (isset($_GET['type']) && $_GET['type'] == '2') {?>
        <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=2">Categoria 2</a></li>
    <?php if (isset($_GET['type']) && $_GET['type'] == '3') {?>
        <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=3">Categoria 3</a></li>
</ul>
<?php }
}
?>