<?php require_once('header.php'); ?>

<body class="background-carrinho">
    <section class="container-fluid">
        <div class="row justify-content-between pl-5">
            <div
                class="row col-lg-8 col-md-8 col-sm-12 my-3 align-self-start justify-content-between align-items-start">
                <div class="row col-12 background-row pl-0 border rounded">
                    <img src="img/produtos/audio-7.jpg" alt="produto" class="pl-0 col-lg-1 col-md-12">
                    <div class="row col-11 my-2 justify-content-between align-items-center">
                        <h2 class="col-auto pr-0 font-produto">Nome do produto</h2>
                        <h2 class="col-auto pr-0 font-preco">Preço</h2>
                    </div>
                </div>
                <div class="row col-12">
                    <br>
                </div>
                <div class="row col-12 px-0 background-row align-items-center border rounded">
                    <h4 class="col-auto font-carrinho font-preco">Selecione a quantidade:</h4>
                    <form action="" class="pb-0 mb-0 pt-2">
                        <div class="form-group">
                            <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="row pt-2 col-12 px-0 background-row align-items-center border rounded">
                    <h2 class="col-12 font-carrinho font-preco">Opções de Modelos:</h2>
                    <form class="form-inline col-12">
                        <select class="col-12 custom-select " id="inlineFormCustomSelectPref">
                            <option selected>Selecione a Opção</option>
                            <option value="1">Um</option>
                            <option value="2">Dois</option>
                            <option value="3">Três</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="row col-lg-4 col-md-8">
                <div class="row pb-2 my-3 col-12 background-row border rounded">
                    <div class="row py-1 mt-2 col-auto">
                        <h2 class="font-produto">Detalhes da Compra</h2>
                    </div>
                    <div class="row col-12 pr-0 justify-content-between">
                        <h3 class="col-auto px-0 font-menu">Quantidade</h3>
                        <h3 class="col-auto font-menu">1</h3>
                    </div>
                    <div class="row col-12 pr-0 justify-content-between">
                        <h3 class="col-auto px-0 font-menu">Subtotal</h3>
                        <h3 class="col-auto font-menu">R$ 99,99</h3>
                    </div>
                    <div class="row col-12 pr-0 justify-content-between">
                        <h3 class="col-auto px-0 font-menu">Frete</h3>
                        <h3 class="col-auto font-menu">R$ 23,99</h3>
                    </div>
                    <div class="row col-12 pr-0 justify-content-between">
                        <h3 class="col-auto px-0 font-menu">Total</h3>
                        <h3 class="col-auto font-menu">R$ 123,98 </h3>
                    </div>
                    <button class="btn btn-primary">Finalizar Compra</button>
                </div>
            </div>

        </div>
    </section>
    <section class="container-fluid">
        <div class="row pl-5 col-lg-8 col-md-8 col-sm-12 pr-4 justify-content-between">
            <div class="row pt-2 pr-0 col-lg-6 background-row align-items-center border rounded">
                <h2 class="col-12 font-carrinho font-preco">Opções de Pagamento:</h2>
                <div class="row align-items-center pl-3">
                    <div class="form-check col-lg-12 pt-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                            value="opcao1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Cartão de Crédito
                        </label>
                    </div>
                </div>
                <form class="no-gutters">
                    <div class="form-row col-lg-12 pt-2">
                        <div class="row col-12 pr-0 align-items-center justify-content-end">
                            <h2 class="col-auto font-cartao">Nome</h2>
                            <input type="text" class="form-control col-8" placeholder="">
                        </div>
                        <div class="row col-12 pr-0 align-items-center justify-content-end pt-3">
                            <h2 class="col-3 col-lg-auto font-cartao">Numero Cartão</h2>
                            <input type="text" class="form-control col-8" placeholder="">
                        </div>
                        <div class="row col-12 pr-0 align-items-center justify-content-end">
                            <h2 class="col-auto pt-3 mb-0 col-lg-auto font-cartao">Validade</h2>
                            <div class="row col-8 no-gutters px-0 align-items-center">
                                <div class="col-3 pt-3">
                                    <select class="custom-select my-1 mr-sm-2 pr-0 pl-1 text-center"
                                        id="inlineFormCustomSelectPref">
                                        <option selected>MM</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="1">04</option>
                                        <option value="2">05</option>
                                        <option value="3">06</option>
                                        <option value="1">07</option>
                                        <option value="2">08</option>
                                        <option value="3">09</option>
                                        <option value="1">10</option>
                                        <option value="2">11</option>
                                        <option value="3">12</option>
                                    </select>
                                </div>
                                <div class="col-2 text-center pt-3">
                                    <h2 class="font-produto">/</h2>
                                </div>
                                <div class="col-4 pt-3">
                                    <select class="custom-select my-1 mr-sm-2 pr-0 pl-1 text-center"
                                        id="inlineFormCustomSelectPref">
                                        <option selected>AAAA</option>
                                        <option value="1">2019</option>
                                        <option value="2">2020</option>
                                        <option value="3">2021</option>
                                        <option value="1">2022</option>
                                        <option value="2">2023</option>
                                        <option value="3">2024</option>
                                        <option value="1">2025</option>
                                        <option value="2">2026</option>
                                        <option value="3">2027</option>
                                        <option value="1">2028</option>
                                        <option value="2">2029</option>
                                        <option value="3">2030</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row col-12 pr-0 align-items-center justify-content-end">
                            <h2 class="col-3 pt-3 mb-0 font-cartao">Codigo Segurança</h2>
                            <div class="row col-8 pt-3 no-gutters px-0">
                                <input type="text" class="form-control col-2 text-center" placeholder="">
                            </div>
                        </div>
                    </div>
                </form>

                <div class="row align-items-center pl-3 pb-2">
                    <div class="form-check col-lg-12">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                            value="opcao2">
                        <label class="form-check-label" for="exampleRadios2">
                            PayPal
                        </label>
                    </div>
                </div>
            </div>
            <div class="row pt-2 pr-0 col-lg-6 background-row align-items-center border rounded">
                <h2 class="col-12 font-carrinho font-preco">Opções de Pagamento:</h2>
                <div class="row align-items-center pl-3">
                    <div class="form-check col-lg-12 pt-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                            value="opcao1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Cartão de Crédito
                        </label>
                    </div>
                </div>
                <form class="no-gutters">
                    <div class="form-row col-lg-12 pt-2">
                        <div class="row col-12 pr-0 align-items-center justify-content-end">
                            <h2 class="col-auto font-cartao">Nome</h2>
                            <input type="text" class="form-control col-8" placeholder="">
                        </div>
                        <div class="row col-12 pr-0 align-items-center justify-content-end pt-3">
                            <h2 class="col-3 col-lg-auto font-cartao">Numero Cartão</h2>
                            <input type="text" class="form-control col-8" placeholder="">
                        </div>
                        <div class="row col-12 pr-0 align-items-center justify-content-end">
                            <h2 class="col-auto pt-3 mb-0 col-lg-auto font-cartao">Validade</h2>
                            <div class="row col-8 no-gutters px-0 align-items-center">
                                <div class="col-3 pt-3">
                                    <select class="custom-select my-1 mr-sm-2 pr-0 pl-1 text-center"
                                        id="inlineFormCustomSelectPref">
                                        <option selected>MM</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="1">04</option>
                                        <option value="2">05</option>
                                        <option value="3">06</option>
                                        <option value="1">07</option>
                                        <option value="2">08</option>
                                        <option value="3">09</option>
                                        <option value="1">10</option>
                                        <option value="2">11</option>
                                        <option value="3">12</option>
                                    </select>
                                </div>
                                <div class="col-2 text-center pt-3">
                                    <h2 class="font-produto">/</h2>
                                </div>
                                <div class="col-4 pt-3">
                                    <select class="custom-select my-1 mr-sm-2 pr-0 pl-1 text-center"
                                        id="inlineFormCustomSelectPref">
                                        <option selected>AAAA</option>
                                        <option value="1">2019</option>
                                        <option value="2">2020</option>
                                        <option value="3">2021</option>
                                        <option value="1">2022</option>
                                        <option value="2">2023</option>
                                        <option value="3">2024</option>
                                        <option value="1">2025</option>
                                        <option value="2">2026</option>
                                        <option value="3">2027</option>
                                        <option value="1">2028</option>
                                        <option value="2">2029</option>
                                        <option value="3">2030</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row col-12 pr-0 align-items-center justify-content-end">
                            <h2 class="col-3 pt-3 mb-0 font-cartao">Codigo Segurança</h2>
                            <div class="row col-8 pt-3 no-gutters px-0">
                                <input type="text" class="form-control col-2 text-center" placeholder="">
                            </div>
                        </div>
                    </div>
                </form>

                <div class="row align-items-center pl-3 pb-2">
                    <div class="form-check col-lg-12">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                            value="opcao2">
                        <label class="form-check-label" for="exampleRadios2">
                            PayPal
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>




<?php require_once('footer.php'); ?>