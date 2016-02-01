<?php /* Smarty version 3.1.27, created on 2016-02-01 06:21:48
         compiled from "/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/public/registro.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:60984256456aeeb6cecdc27_15696775%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '268122f90b9dda4712be5094abcce720c8f670ca' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/Curso-de-PHP-Avanzado/styles/templates/public/registro.tpl',
      1 => 1454304105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60984256456aeeb6cecdc27_15696775',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56aeeb6cf1c560_83961646',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aeeb6cf1c560_83961646')) {
function content_56aeeb6cf1c560_83961646 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '60984256456aeeb6cecdc27_15696775';
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
                <h2 class="form-signin-heading">Registro</h2>
                <label for="user" class="sr-only">Usuario</label>
                <input type="text" id="user" class="form-control" placeholder="Usuario" required="" autofocus="">
                <label for="pass" class="sr-only">Contraseña</label>
                <input type="password" id="pass" class="form-control" placeholder="Contraseña" required="">
                <label for="pass" class="sr-only">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Correo Electronico" required=""><br />
                
                <button class="btn btn-primary btn-block" id="send_request" type="button">Registrarme</button>
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
                var connect, user, pass, email, form, result;
                user = document.getElementById('user').value;
                pass = document.getElementById('pass').value;
                email = document.getElementById('email').value;
                
                if ( user != '' && pass != '' && email != '') {
                    form = 'user=' + user  + '&pass=' + pass + '&email=' + email; 

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
                                result += '<strong>Registro Completado:</strong> Bienvenido, Usuario.';
                                result += '</div>';
                                window.location = '?view=index';
                                document.getElementById('_AJAX_').innerHTML = result;
                            } else if( parseInt(connect.responseText) == 2 ) {
                                result = '<div class="alert alert-dismissible alert-danger text-center">';
                                result += '<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>';
                                result += '<strong>ERROR:</strong> El usuario ya existe.';
                                result += '</div>';

                                document.getElementById('_AJAX_').innerHTML = result;
                            } else if( parseInt(connect.responseText) == 3 ) {
                                result = '<div class="alert alert-dismissible alert-danger text-center">';
                                result += '<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>';
                                result += '<strong>ERROR:</strong> El correo ya existe.';
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

                    connect.open('POST', '?view=reg', true);
                    connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    connect.send(form);
                } else {
                    result = '<div class="alert alert-dismissible alert-danger text-center">';
                    result += '<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>';
                    result += '<strong>ERROR:</strong> No pueden existir campos vacios.';
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