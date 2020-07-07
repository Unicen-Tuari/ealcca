{include file="headerlogin.tpl"}

<body id="pageLogin">
    <div class="container model-dialog text-center">
        <div class="row">
            <div class="col mt-4">
                <h2>Welcome</h2>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-4" id="recuadro-login">
                <div class="model-content">
                    <div class="col-12 imglogin">
                        <img src="image/newUser.png" alt="avatar">
                    </div>
                    <form class="col-12 m-2" action="register" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="email" name="email" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="password" name="password" required/>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-5 pt-0 pr-3">Tipo</legend>
                                <div class="">
                                    <div class="form-check p-0 w-50 h-50">
                                        <input class="form-check-input" type="radio" name="is_admin" id="administrador" value="1">
                                        <label class="form-check-label" for="checked">Administrador</label>
                                    </div>
                                    <div class="form-check p-0 w-50 h-50">
                                        <input class="form-check-input" type="radio" name="is_admin" id="invitado" value="0" checked>
                                        <label class="form-check-label" for="invitado">Invitado</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group pt-3">
                            <button type="submit" class="btn btn-primary"> Registrarse</button>
                        </div>
                    </form>
                    <div class="col-12">
                        <a href="login" class="registrarte">Tengo cuenta</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>