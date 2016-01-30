<?php /* Smarty version 3.1.27, created on 2016-01-30 06:33:38
         compiled from "/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/public/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:45121470356ac4b32a3c700_56339463%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99446c7dc65ba7806999546036a76f3464cb328f' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/public/login.tpl',
      1 => 1454132015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45121470356ac4b32a3c700_56339463',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ac4b32b39b93_14133691',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ac4b32b39b93_14133691')) {
function content_56ac4b32b39b93_14133691 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '45121470356ac4b32a3c700_56339463';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<body>
      
    <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div class="container" style="margin-top: 100px;">
        
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div id="_AJAX_"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <div class="form-signin">
                <h2 class="form-signin-heading">Inicia Sesión</h2>
                <label for="user" class="sr-only">Usuario</label>
                <input type="text" id="user" class="form-control" placeholder="Usuario" required="" autofocus="">
                <label for="pass" class="sr-only">Contraseña</label>
                <input type="password" id="pass" class="form-control" placeholder="Contraseña" required="">
                <div class="checkbox">
                    <label>
                    <input type="checkbox" id="session" value="1"> Recordarme
                    </label>
                </div>
                <button class="btn btn-primary btn-block" id="send_request" type="button">Iniciar Sesión</button>
                </div>

            </div>
        </div>

    </div>

    <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    
    <?php echo '<script'; ?>
>
        window.onload = function () {
            document.getElementById('send_request').onclick = function () {
                var connect, user, pass, session, form, result;
                user = document.getElementById('user').value;
                pass = document.getElementById('pass').value;
                session = document.getElementById('session').checked ? true : false;
                
                if ( user != '' && pass != '' ) {
                    form = 'user=' + user + '&pass=' + pass + '&session=' +session;

                    // Se crea un if compacto para verificar si el XMLHttpRequest que sirve para utilizar ajax esta habilitado en Explorer
                    connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

                    connect.onreadystatechange = function () {
                        // readyState = verificar el estado de la conexion 4 significa que si esta listo
                        // status = verifica si se realizo la conexion
                        if ( connect.readyState == 4 && connect.status == 200) {

                            // lo que nos devuelva php esta en la variable responseText
                            if ( parseInt(connect.responseText) == 1 ) {
                                result = '<div class="alert alert-dismissible alert-info text-center">';
                                result += '<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>';
                                result += '<strong>CONECTADO:</strong> Bienvenido, Usuario.';
                                result += '</div>';
                                location.href = '?view=index';
                                document.getElementById('_AJAX_').innerHTML = result;
                            } else {
                                result = '<div class="alert alert-dismissible alert-danger text-center">';
                                result += '<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>';
                                result += '<strong>ERROR:</strong> Datos incorrectos.';
                                result += '</div>';

                                document.getElementById('_AJAX_').innerHTML = result;
                            }

                        } else if ( connect.readyState != 4 ) {
                            result = '<div class="alert alert-dismissible alert-warning text-center">';
                            result += '<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>';
                            result += '<strong>Procesando...</strong>';
                            result += '</div>';

                            document.getElementById('_AJAX_').innerHTML = result;
                        }
                    }

                    connect.open('POST', '?view=login', true);
                    connect.send(form);
                } else {
                    result = '<div class="alert alert-dismissible alert-danger text-center">';
                    result += '<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>';
                    result += '<strong>ERROR:</strong> El usuario y la contraseña no pueden estar vacios.';
                    result += '</div>';
                    
                    document.getElementById('_AJAX_').innerHTML = result;
                }              
                
            }
        }
    <?php echo '</script'; ?>
>

</body>
</html><?php }
}
?>