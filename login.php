<?php

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>

<div class="container login__container-form">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <div class="card px-3 py-3">
                <form action="valida_acesso.php" method="post">
                    <div class="form-group">
                        <div class="input-group mb-3">
                          <span class="input-group-text"><i class="fas fa-user"></i></span>
                          <div class="form-floating">
                            <input type="email" class="form-control" id="campo_usuario" name='usuario' placeholder="E-mail">
                            <label for="campo_usuario">E-mail</label>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                          <span class="input-group-text"><i class="fas fa-lock"></i></span>
                          <div class="form-floating">
                            <input type="password" class="form-control" id="senha_usuario" name='senha' placeholder="Senha">
                            <label for="senha_usuario">Senha</label>
                          </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" id="btn_login"><i class="fas fa-sign-in"></i> Entrar</button>
                </form>
                <?php
                    if($erro == 1){
                        ?>
                            <div class="alert alert-danger mt-3" role="alert">
                              Usuário e/ou senha inválido(s)!
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>

    
<style>
    .login__container-form{
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<script>
    jQuery(document).ready(function($){
        $("#btn_login").click(function(e){
            var campo_vazio = false;

			if($('#campo_usuario').val() == ''){
				$('#campo_usuario').css({'border-color': '#A94442'});

				campo_vazio = true;
			} else {

				$('#campo_usuario').css({'border-color': '#CCC'});
            }

			if($('#campo_senha').val() == ''){

				$('#campo_senha').css({'border-color': '#A94442'});
				campo_vazio = true;

			} else {
				$('#campo_senha').css({'border-color': '#CCC'});
            }
			if(campo_vazio) return false;
        });
    })
</script>
