{include 'overall/header.tpl'}
    <body>

        {include 'overall/nav.tpl'}
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                {include 'overall/menu.tpl'}
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
                            <input style="margin-bottom: 10px;" type="text" class="form-control" name="user" placeholder="Tu nombre de usuario" required="" value="{$smarty.session.user}" />

                            <label>Email <span style="color: #FF0000">*</span></label>
                            <input style="margin-bottom: 10px;" type="email" class="form-control" name="email" placeholder="Tu correo electrónico" required="" value="{$smarty.session.email}" />

                            <label>Fecha de Nacimiento</label>
                            <div class="input-group date">
                                <input type="text" id="nacimiento" data-date="01-01-2015" data-date-format="dd-mm-yyyy" class="form-control" name="fecha" placeholder="dd-mm-yyyy" aria-describedby="basic-addon2" value="{$smarty.session.date}" readonly="">
                                <span class="input-group-addon add-on" id="basic-addon2"><i class="fa fa-calendar"></i></span>
                            </div>

                            <label>Nombres</label>
                            <input style="margin-bottom: 10px;" type="text" class="form-control" name="names" placeholder="Tus nombres" value="{$smarty.session.first_name}" />

                            <label>Apellidos</label>
                            <input style="margin-bottom: 10px;" type="text" class="form-control" name="lastnames" placeholder="Tus apellidos" value="{$smarty.session.last_name}" />

                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="{$image}" width="70" height="70" />
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

        {include 'overall/footer.tpl'}
        <script>$('#nacimiento').datepicker('place');</script>
    </body>
</html>
