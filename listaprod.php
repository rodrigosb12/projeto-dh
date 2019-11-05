<?php require_once('header.php'); ?>

    <section class="cabecalho">
        <div class="container filtros row">
                <div class="titulo col-lg-12 col-md-12 col-sm-12">
                        <h2 class="titulo my-5 ml-3">Loja - Produtos</h2>
                </div>
        </div>  
                <div class="container row filtros">
                    <div class="col-lg-6 col-md-6 col-sm-12 justify-content-center">
                        <button type="button" class="btn btn-filtro" data-toggle="modal" data-target="#modalFiltro">
                            Filtros
                        </button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 justify-content-center">
                        <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle dr-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ordenar Por:
                                </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Mais Pedidos</a>
                                <a class="dropdown-item" href="#">Recentes</a>
                                <a class="dropdown-item" href="#">Preço</a>
                            </div>
                        </div>
                    </div>    
                </div>
            <div class="modal fade" id="modalFiltro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Filtros</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Checkbox padrão
                                </label>
                            </div>
                            <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Checkbox padrão
                            </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Checkbox padrão
                            </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Checkbox padrão
                            </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Checkbox padrão
                            </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Checkbox padrão
                            </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Checkbox padrão
                            </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Checkbox padrão
                            </label>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="produtos">
            <div class="container">
                    <div class="row lista-de-produtos">
                        <div class="col d-flex justify-content-center">
                            <div class="card">
                                <a href="product.php"><img src="img/watches/heritor-pro-diver-thumb.jpg" class="card-img-top"
                                        alt="relogio-heritor"></a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <a href="product.php" class="card-title">
                                                <h5 class="card-title">Heritor Edgard Pro Diver Automatic Watches</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex mt-1">
                                            <p class="preco-por mr-2">R$180</p>
                                            <p class="preco-de">R$200</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex align-items-center">
                                            <i class="fas fa-truck mr-2"></i> <!-- ícone de destaque do card de produtos-->
                                            <p class="card-text destaque">Frete grátis</p> <!-- mensagem de destaque-->
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-card">
                                    <div class="row">
                                        <div class="col mb-2 d-flex justify-content-center align-items-center">
                                            <a href="" class="card-icone-comentarios"><i
                                                    class="far fa-comment-alt bottom-comment"></i></a>
                                            <p class="card-bottom">140</p>
                                        </div>
                                        <div class="col mb-2 d-flex justify-content-center align-items-center">
                                            <p class="card-bottom">5 dias faltando</p>
                                        </div>
                                        <div class="col mb-2 d-flex justify-content-center align-items-center">
                                            <p class="card-bottom">185 vendidos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="card">
                                <a href="product.php"><img src="img/audio/thumb-focal-elex-headphones.jpg" class="card-img-top"
                                        alt="focal-elex-headphones"></a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <a href="product.php" class="card-title">
                                                <h5 class="card-title">Focal Elex Headphones</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex mt-1">
                                            <p class="preco-por mr-2">R$700</p>
                                            <p class="preco-de">R$800</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex align-items-center">
                                            <i class="fas fa-parachute-box mr-2"></i>
                                            <!-- ícone de destaque do card de produtos-->
                                            <p class="card-text destaque">Lançamento</p> <!-- mensagem de destaque-->
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-card">
                                    <div class="row">
                                        <div class="col mb-2 d-flex justify-content-center align-items-center">
                                            <a href="" class="card-icone-comentarios"><i
                                                    class="far fa-comment-alt bottom-comment"></i></a>
                                            <p class="card-bottom">15</p>
                                        </div>
                                        <div class="col mb-2 d-flex justify-content-center align-items-center">
                                            <p class="card-bottom">2 dias faltando</p>
                                        </div>
                                        <div class="col mb-2 d-flex justify-content-center align-items-center">
                                            <p class="card-bottom">30 vendidos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="card">
                                <a href="product.php"><img src="img/outdoors/thumb-granite-gear-crown-x60.jpg" class="card-img-top"
                                        alt="granite-gear-crown-x60"></a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <a href="product.php" class="card-title">
                                                <h5 class="card-title">Granite Gear Crown X60</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex mt-1">
                                            <p class="preco-por mr-2">R$180</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex align-items-center">
                                            <i class="fas fa-truck mr-2"></i> <!-- ícone de destaque do card de produtos-->
                                            <p class="card-text destaque">Frete grátis</p> <!-- mensagem de destaque-->
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-card">
                                    <div class="row">
                                        <div class="col mb-2 d-flex justify-content-center align-items-center">
                                            <a href="" class="card-icone-comentarios"><i
                                                    class="far fa-comment-alt bottom-comment"></i></a>
                                            <p class="card-bottom">12</p>
                                        </div>
                                        <div class="col mb-2 d-flex justify-content-center align-items-center">
                                            <p class="card-bottom">1 dia faltando</p>
                                        </div>
                                        <div class="col mb-2 d-flex justify-content-center align-items-center">
                                            <p class="card-bottom">25 vendidos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="card">
                                <a href="product.php"><img src="img/watches/card-orient-makoII.jpg" class="card-img-top"
                                        alt="relogio-orient"></a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <a href="product.php" class="card-title">
                                                <h5 class="card-title">Orient Mako II Automatic Watch</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex mt-1">
                                            <p class="preco-por mr-2">R$999</p>
                                            <p class="preco-de">R$1499</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex align-items-center">
                                            <i class="fas fa-truck mr-2"></i> <!-- ícone de destaque do card de produtos-->
                                            <p class="card-text destaque">Frete grátis</p> <!-- mensagem de destaque-->
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-card">
                                    <div class="row">
                                        <div class="col mb-2 d-flex justify-content-center align-items-center">
                                            <a href="" class="card-icone-comentarios"><i
                                                    class="far fa-comment-alt bottom-comment"></i></a>
                                            <p class="card-bottom">87</p>
                                        </div>
                                        <div class="col mb-2 d-flex justify-content-center align-items-center">
                                            <p class="card-bottom">5 dias faltando</p>
                                        </div>
                                        <div class="col mb-2 d-flex justify-content-center align-items-center">
                                            <p class="card-bottom">10 vendidos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <?php require_once('footer.php'); ?>
    