<?php require_once('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="topo-comunidade-tipo d-flex align-items-center py-2">
                <h4 class="px-2 m-0 text-uppercase">Relógios</h4>
                <h4 class="m-0">.</h4>
                <h4 class="px-2 m-0 text-uppercase">Fotos</h4>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-9">
            <textarea id="summernote">
            <h2 class="font-italic my-4 conteudo-pagina-post">Qual é o título do seu post?</h2>
            <p class="font-italic conteudo-pagina-post">Seja específico, adicione imagens e forneça detalhes!</p>
        </textarea>
        </div>
        <div class="col-3">
            <button type="button" class="btn btn-danger text-uppercase mx-2">Cancelar</button>
            <button type="button" class="btn btn-secondary text-uppercase mx-2">Postar</button>
        </div>
    </div>
</div>


<?php require_once('footer.php'); ?>