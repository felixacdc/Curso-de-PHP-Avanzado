<?php /* Smarty version 3.1.27, created on 2016-01-30 20:20:08
         compiled from "/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/home/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:201406621856ad0ce8613d51_34029547%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5539f7488e40d6fabc05c258a38b58faf725285f' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/home/index.tpl',
      1 => 1454127765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201406621856ad0ce8613d51_34029547',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ad0ce86bbe64_72210189',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ad0ce86bbe64_72210189')) {
function content_56ad0ce86bbe64_72210189 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '201406621856ad0ce8613d51_34029547';
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

    
</body>
</html><?php }
}
?>