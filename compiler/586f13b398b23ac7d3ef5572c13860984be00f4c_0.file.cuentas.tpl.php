<?php /* Smarty version 3.1.27, created on 2016-02-11 06:53:45
         compiled from "/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/cuentas/cuentas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:57936510956bc21e995cb20_81812411%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '586f13b398b23ac7d3ef5572c13860984be00f4c' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/cuentas/cuentas.tpl',
      1 => 1455170022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57936510956bc21e995cb20_81812411',
  'variables' => 
  array (
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56bc21e9a637e7_92525160',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56bc21e9a637e7_92525160')) {
function content_56bc21e9a637e7_92525160 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '57936510956bc21e995cb20_81812411';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <body>

        <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                <?php echo $_smarty_tpl->getSubTemplate ('overall/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h2 class="sub-header">Configuración de tu cuenta</h2>
                    <!--<div class="alert alert-success" role="alert">...</div>
                    <div class="alert alert-info" role="alert">...</div>
                    <div class="alert alert-warning" role="alert">...</div>
                    <div class="alert alert-danger" role="alert">...</div>-->
                    <div class="form-signin">
                        <form action="?view=cuenta" method="POST" enctype="multipart/form-data">
                            <label>Nombre de Usuario <span style="color: #FF0000">*</span></label>
                            <input style="margin-bottom: 10px;" type="text" class="form-control" name="user" placeholder="Tu nombre de usuario" required="" value="<?php echo $_SESSION['user'];?>
" />

                            <label>Email <span style="color: #FF0000">*</span></label>
                            <input style="margin-bottom: 10px;" type="email" class="form-control" name="email" placeholder="Tu correo electrónico" required="" value="<?php echo $_SESSION['email'];?>
" />

                            <label>Fecha de Nacimiento</label>
                            <div class="input-group date">
                                <input type="text" id="nacimiento" data-date="01-01-2015" data-date-format="dd-mm-yyyy" class="form-control" name="fecha" placeholder="dd-mm-yyyy" aria-describedby="basic-addon2" value="<?php echo $_SESSION['date'];?>
" readonly="">
                                <span class="input-group-addon add-on" id="basic-addon2"><i class="fa fa-calendar"></i></span>
                            </div>

                            <label>Nombres</label>
                            <input style="margin-bottom: 10px;" type="text" class="form-control" name="names" placeholder="Tus nombres" value="<?php echo $_SESSION['first_name'];?>
" />

                            <label>Apellidos</label>
                            <input style="margin-bottom: 10px;" type="text" class="form-control" name="lastnames" placeholder="Tus apellidos" value="<?php echo $_SESSION['last_name'];?>
" />

                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" width="70" height="70" />
                                    </div>
                                    <div class="media-body">
                                    <label>Nueva foto de Perfil</label>
                                    <input style="margin-bottom: 10px;" type="file" name="foto" class="form-control" />
                                </div>
                            </div>

                            <center><input class="btn btn-primary" type="submit" value="Guardar" style="width: 120px;" /></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php echo '<script'; ?>
>$('#nacimiento').datepicker('place');<?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
?>