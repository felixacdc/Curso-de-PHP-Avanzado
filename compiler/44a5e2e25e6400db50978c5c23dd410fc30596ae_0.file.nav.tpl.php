<?php /* Smarty version 3.1.27, created on 2016-01-29 23:49:09
         compiled from "/opt/lampp/htdocs/GitHub/Curso de PHP Avanzado - PHP POO + MySQL + MVC + AJA/styles/templates/overall/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:186909692356abec65bf01a1_45476109%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44a5e2e25e6400db50978c5c23dd410fc30596ae' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Curso de PHP Avanzado - PHP POO + MySQL + MVC + AJA/styles/templates/overall/nav.tpl',
      1 => 1454107505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186909692356abec65bf01a1_45476109',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56abec65c02816_34053174',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56abec65c02816_34053174')) {
function content_56abec65c02816_34053174 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '186909692356abec65bf01a1_45476109';
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
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>
    </div>
  </div>
</nav><?php }
}
?>