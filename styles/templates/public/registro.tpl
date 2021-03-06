{include 'overall/header.tpl'}

<body>
      
    {include 'overall/nav.tpl'}

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

    {include 'overall/footer.tpl'}
    
    <script>
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
    </script>

</body>
</html>