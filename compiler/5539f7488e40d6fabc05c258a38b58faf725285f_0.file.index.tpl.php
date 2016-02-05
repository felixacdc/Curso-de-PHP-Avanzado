<?php /* Smarty version 3.1.27, created on 2016-02-05 06:59:45
         compiled from "/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/home/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:82786939156b43a510cfb58_52639290%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5539f7488e40d6fabc05c258a38b58faf725285f' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/home/index.tpl',
      1 => 1454651970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82786939156b43a510cfb58_52639290',
  'variables' => 
  array (
    'titulo' => 0,
    'posts' => 0,
    'pt' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b43a514fa903_27922373',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b43a514fa903_27922373')) {
function content_56b43a514fa903_27922373 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '82786939156b43a510cfb58_52639290';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body>
      
      <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                   
                   <?php if (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
                    <li class="active"><a href="#">Resultado de busqueda</a></li><?php }?>  
                   
                    <?php if (isset($_GET['type']) && $_GET['type'] == 'tops') {?>
                    <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=tops">Los mejores</a></li>  
                    <?php if (!isset($_GET['type']) && $_GET['view'] != 'buscar') {?>
                    <li class="active"><?php } else { ?><li><?php }?><a href="?view=index">Inicio</a></li>
                    <?php if (isset($_GET['type']) && $_GET['type'] == '1') {?>
                    <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=1">Categoria 1</a></li>
                    <?php if (isset($_GET['type']) && $_GET['type'] == '2') {?>
                    <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=2">Categoria 2</a></li>
                    <?php if (isset($_GET['type']) && $_GET['type'] == '3') {?>
                    <li class="active"><?php } else { ?><li><?php }?><a href="?view=index&type=3">Categoria 3</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
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
                            <?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
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
                            <?php } else { ?>
                                <tr>
                                    <td colspan="4"><h3 class="text-center">No hay resultados.</h3></td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>                
                <?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
                    <div class="btn-group" role="group" aria-label="...">
                        <?php if (!isset($_GET['page'])) {?>
                            <a href="#" class="btn btn-default disabled">Anterior</a>
                            <?php if ($_smarty_tpl->tpl_vars['pages']->value > 1) {?>
                                <?php if (isset($_GET['type'])) {?>
                                    <a href="?view=index&type=<?php echo $_GET['type'];?>
&page=2" class="btn btn-default">Siguiente</a>
                                <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
                                    <a href="?view=buscar&page=2" class="btn btn-default">Siguiente</a>                                   
                                <?php } else { ?>
                                    <a href="?view=index&page=2" class="btn btn-default">Siguiente</a>
                                <?php }?>
                            <?php } else { ?>
                                <a href="#" class="btn btn-default disabled">Siguiente</a>
                            <?php }?>
                        <?php } else { ?>
                            <?php if ($_GET['page'] <= 1) {?>
                                <a href="#" class="btn btn-default disabled">Anterior</a>
                            <?php } else { ?>
                                <?php if (isset($_GET['type'])) {?>
                                    <a href="?view=index&type=<?php echo $_GET['type'];?>
&page=<?php echo $_GET['page']-1;?>
" class="btn btn-default">Anterior</a>
                                <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
                                    <a href="?view=buscar&page=<?php echo $_GET['page']-1;?>
" class="btn btn-default">Anterior</a> 
                                <?php } else { ?>
                                    <a href="?view=index&page=<?php echo $_GET['page']-1;?>
" class="btn btn-default">Anterior</a>
                                <?php }?>
                            <?php }?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['pages']->value > 1 && $_GET['page'] >= 1 && $_GET['page'] < $_smarty_tpl->tpl_vars['pages']->value) {?>
                                <?php if (isset($_GET['type'])) {?>
                                    <a href="?view=index&type=<?php echo $_GET['type'];?>
&page=<?php echo $_GET['page']+1;?>
" class="btn btn-default">Siguiente</a>
                                <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
                                    <a href="?view=buscar&page=<?php echo $_GET['page']+1;?>
" class="btn btn-default">Siguiente</a> 
                                <?php } else { ?>
                                    <a href="?view=index&page=<?php echo $_GET['page']+1;?>
" class="btn btn-default">Siguiente</a>
                                <?php }?>
                            <?php } else { ?>
                                <a href="#" class="btn btn-default disabled">Siguiente</a>
                            <?php }?>
                        <?php }?>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>      

    <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

   </body>
</html>       <?php }
}
?>