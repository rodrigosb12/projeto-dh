<?php require_once('header.php'); ?>
    <section class="container stilo">
        <h1>CADASTRO</h1>
        <form>
            <div>
                <div class="form-group col-md-12">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" placeholder="Nome">
                </div>
                <div class="form-group col-md-12">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" placeholder="Sobrenome">
                </div>
            </div>
            <div>
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputPassword4">Confirme sua senha</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Confirme sua Senha">
                </div>
            </div>
            <div class="form-group col-md-12">
                <label for="inputAddress">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Ex: Avenida Paulista, nº 100">
            </div>
            <div>
                <div class="form-group col-md-12">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEstado">Estado</label>
                    <select id="inputEstado" class="form-control">
                        <option selected>Escolher...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCEP">CEP</label>
                    <input type="text" class="form-control" id="inputCEP">
                </div>
            </div>
            <!--<div class="form-group col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Clique em mim  
                    </label>
                </div>
            </div>-->
            <div class="form-group ">
                <button type="submit" class="btn btn-outline-primary">Avançar</button>
            </div>
        </form>

    </section>
    
<?php require_once('footer.php'); ?>