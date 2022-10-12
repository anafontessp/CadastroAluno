<?php include("estrutura/cabecalho.php"); ?>

<section>

    <h1> Contato </h1>

</section>

<section class = "center">

    <form>

        <div>

            <div><label> Nome </label></div>
            <input type="text" class="tx" placeholder="Digite aqui o seu nome">
        </div>
        <div><label> Gênero </label></div>
            <input type="radio" name="Gênero"/> Masculino
            <input type="radio" name="Gênero"/> Feminino
        </div>
        <div>
            <div><label> E-mail </label></div>
            <input type="text" class="tx" placeholder="Digite aqui o seu e-mail">
        </div>
        <div>
            <div><label> Assunto </label></div>
            <input type="text" class="tx" placeholder="Digite aqui o assunto">
        </div>
        <div>
            <div><label> Mensagem </label></div>
            <input type="text" class="tx" placeholder="Digite aqui a sua mensagem">
        </div>

        <div>
            <input type="submit" class="bt" value="Enviar">

        </div>
    </form>

</section>

<?php include("estrutura/rodape.php"); ?>