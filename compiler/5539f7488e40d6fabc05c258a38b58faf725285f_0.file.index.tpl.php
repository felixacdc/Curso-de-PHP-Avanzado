<?php /* Smarty version 3.1.27, created on 2016-02-01 19:42:41
         compiled from "/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/home/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2983410256afa72155b4e8_59268379%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5539f7488e40d6fabc05c258a38b58faf725285f' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/home/index.tpl',
      1 => 1454352159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2983410256afa72155b4e8_59268379',
  'variables' => 
  array (
    'posts' => 0,
    'pt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56afa7215ad1b9_00848429',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56afa7215ad1b9_00848429')) {
function content_56afa7215ad1b9_00848429 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2983410256afa72155b4e8_59268379';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body>
      
      <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="#">Los mejores</a></li>  
                    <li class="active"><a href="#">Inicio</a></li>
                    <li><a href="#">Categoria 1</a></li>
                    <li><a href="#">Categoria 2</a></li>
                    <li><a href="#">Categoria 3</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h2 class="sub-header">Inicio</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 65%;">Post</th>
                                <th style="width: 25%;">Autor</th>
                                <th style="width: 5%;">Puntos</th>
                                <th style="width: 5%;">Comentarios</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pt'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pt']->value) {
$_smarty_tpl->tpl_vars['pt']->_loop = true;
$foreach_pt_Sav = $_smarty_tpl->tpl_vars['pt'];
?>
                            <tr>
                                <td><a href="?view=posts&id=<?php echo $_smarty_tpl->tpl_vars['pt']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pt']->value['title'];?>
</a></td>
                                <td><a href="?view=perfil&user=<?php echo $_smarty_tpl->tpl_vars['pt']->value['idAuthor'];?>
"><?php echo $_smarty_tpl->tpl_vars['pt']->value['author'];?>
</a></td>
                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pt']->value['points'];?>
</td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <?php
$_smarty_tpl->tpl_vars['pt'] = $foreach_pt_Sav;
}
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>      

    <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

   </body>
</html>       <?php }
}
?>