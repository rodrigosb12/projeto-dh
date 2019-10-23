<?php require_once('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <div>
                <a>Seu contato é muito imortante para nós.<br>
                    Envie-nos um e-mail preenchendo os campos abaixo, e logo retornaremos.<br>
                </a>
                <br>
                <b>Os campos com * são obrigatórios.</b>
                <form>
                    <b>
                        <label for="NomeCompleto*: ">Nome Completo</label><br>
                        <input type="txt" name="NomeComleto" id="NomeCompleto*: "
                            placeholder="Ex: Maria Silva Albuquerque">
                        <br>
                    </b>
                    <label for="E-Mail*: ">E-Mail</label><br>
                    <input type="txt" name="E-Mail" id="E-Mail*: " placeholder="Ex: meu@email.com.br">
                    <br><br>

                    <label for="Mensagem*:">Mensagem </label>
                    <br>
                    <textarea name="mensagem" id="Mensagem*:" placeholder="Write something, here!"></textarea>
                    <br>
                    <br>
                    <input type="submit" name="ENVIAR" value="ENVIAR">


                </form>

            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>