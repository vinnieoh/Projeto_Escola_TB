<div class="container-login h-100">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="box" method="post" action="/authenticate">
                    <h1>Escola TB</h1>
                    <input type="text" name="email" placeholder="E-mail">
                    <input type="password" name="password" placeholder="Senha">
                    <?php if($this->view->login == 'error') { ?>
                        <div class="row">
                            <div class="col">
                                <span class="text text-danger">*E-mail e ou senha inválido(s)</span>
                            </div>
                        </div>
                    <?php } ?>
                    <a class="forgot" href="#">Esqueceu a senha?</a>
                    <input type="submit" name="" value="Login" href="#">
                </form>
            </div>
        </div>
    </div>
</div>
