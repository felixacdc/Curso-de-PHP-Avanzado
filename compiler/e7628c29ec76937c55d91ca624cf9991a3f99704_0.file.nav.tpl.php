<?php /* Smarty version 3.1.27, created on 2016-02-05 06:05:12
         compiled from "/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/overall/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15433865456b42d88a5a136_91178033%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7628c29ec76937c55d91ca624cf9991a3f99704' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/overall/nav.tpl',
      1 => 1454648710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15433865456b42d88a5a136_91178033',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b42d88b85406_52455722',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b42d88b85406_52455722')) {
function content_56b42d88b85406_52455722 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15433865456b42d88a5a136_91178033';
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?view=index">Curso PHP</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php if ((isset($_GET['view']) && $_GET['view'] == 'index') || !isset($_GET['view'])) {?>
        <li class="active">
        <?php } else { ?>
        <li><?php }?><a href="?view=index">Inicio</a></li>
      </ul>
      
      <form class="navbar-form navbar-left" role="search" action="?view=buscar" method="post">
        <div class="form-group">
          <input type="text" class="form-control" name="busqueda" placeholder="Buscar un post..." size="50">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      
      <ul class="nav navbar-nav navbar-right">
        <?php if (isset($_SESSION['user'])) {?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['user'];?>
 <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="?view=perfil&user=<?php echo $_SESSION['id'];?>
">Perfil</a></li>
                    <li><a href="?view=cuenta">cuenta</a></li>
                    <li><a href="?view=logout">Salir</a></li>
                </ul>
            </li>
        <?php } else { ?>
            <?php if (isset($_GET['view']) && $_GET['view'] == 'login') {?>
                <li class="active">
            <?php } else { ?>
            <li><?php }?><a href="?view=login">Login</a></li>
            <?php if (isset($_GET['view']) && $_GET['view'] == 'reg') {?>
                <li class="active">
            <?php } else { ?>
            <li><?php }?><a href="?view=reg">Registro</a></li>
        <?php }?>
      </ul>
      
    </div>
  </div>
</nav><?php }
}
?>