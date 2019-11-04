<?php require_once('header.php'); ?>

<body class="background-cadastro">
    <section class="container pt-3">
        <div class="row col-12  justify-content-center ">
            <div
                class="row ml-2 col-12 col-lg-12 justify-content-center align-self-center background-row border rounded">
                <h2 class="font-cadastro">Cadastro</h2>
            </div>
            <div class="row col-12 background-cadastro no-gutters px-0">
                <br>
            </div>
            <form class="row col-12 ml-2 background-row border rounded">
                <div class="col-12 col-lg-6">
                    <div class="row col-12 pt-3 ">
                        <div class="form-group row col-12">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" placeholder="Nome">
                        </div>
                        <div class="form-group row col-12">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" class="form-control" placeholder="Sobrenome">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="form-group row col-12">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group row col-12">
                            <label for="inputPassword4">Senha</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                        </div>
                        <div class="form-group row col-12">
                            <label for="inputPassword4">Confirme sua senha</label>
                            <input type="password" class="form-control" id="inputPassword4"
                                placeholder="Confirme sua Senha">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row col-12 pt-3">
                        <div class="form-group row col-12">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress"
                                placeholder="Ex: Avenida Paulista, nº 100">
                        </div>
                        <div class="form-group row col-12">
                            <label for="inputAddress" class="col-12 px-0">Bairro</label>
                            <input type="text" class="form-control col-6" id="inputAddress" placeholder="">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="form-group row col-12">
                            <label for="inputCity" class="col-12 px-0">Cidade</label>
                            <input type="text" class="form-control col-6" id="inputCity">
                        </div>
                        <div class="form-group row col-12">
                            <label for="inputEstado" class="col-12 px-0">Estado</label>
                            <select id="inputEstado" class="form-control col-6">
                                <option selected>Escolher...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group row col-12">
                            <label for="inputCEP" class="col-12 px-0">CEP</label>
                            <input type="text" class="form-control col-3" id="inputCEP">
                        </div>
                    </div>
                </div>
            </form>
            <div class="row ml-2 col-12 pr-0 justify-content-end">
                <div class="form-group row col-12 justify-content-end">
                    <button type="submit" class="btn btn-primary">Finalizar</button>
                </div>
            </div>
        </div>
    </section>
</body>
<?php require_once('footer.php'); ?>