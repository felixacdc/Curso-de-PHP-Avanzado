<?php /* Smarty version 3.1.27, created on 2016-01-29 23:49:09
         compiled from "/opt/lampp/htdocs/GitHub/Curso de PHP Avanzado - PHP POO + MySQL + MVC + AJA/styles/templates/home/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9784675156abec65b20a93_06514904%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '335baa5e4fd416c0ff31cd3ad75910b3b41431f5' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Curso de PHP Avanzado - PHP POO + MySQL + MVC + AJA/styles/templates/home/index.tpl',
      1 => 1454107748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9784675156abec65b20a93_06514904',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56abec65bcc052_23200882',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56abec65bcc052_23200882')) {
function content_56abec65bcc052_23200882 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9784675156abec65b20a93_06514904';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<body>
      
<?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

      
<div class="container" style="margin-top: 100px;">
    <div class="jumbotron">
        <h1>Bienvenido al curso!</h1>
        <p class="lead">Plantilla de ejemplo para iniciar el curso de php avanzado.</p>
        <p><a class="btn btn-lg btn-success" href="http://www.prinick.com" role="button">Comenzar!</a></p>      
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>