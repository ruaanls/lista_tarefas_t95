<?php
    /*
        As telas de um sistema PHP são feitas em HTML e CSS, geralmente usando formulários.

        form é atag do HTML que envia os dados para o php.  
        action -  para qual arquivo php será enviado os dados do form.
        method - forma de envio - GET pela url / POST pelo cabeçalho do arquivo

        $_SERVER['indices'] - é uma supervariável global com informações disponíveis no servidor
            - PHP_SELF - pega o nome do próprio arquivos
            - SERVER_SOFTWARE - versão do servidor
            - SERVER_NAME - nome do servidor
            - SERVER_ADDR - IP do servidor

        GET - método de envio do HTML - através da URL
        POST - método de envio do HTML - cabeçalho 
        
    */

    var_dump( $_POST );

    echo " Seu nome é ".$_POST['nome'];
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >

    <label>Seu nome</label>
    <input type="text" name="nome" placeholder="Informe seu nome"  > <br>

    <label>Selecione o sexo:</label>
    <select name="sexo" >
        <option value="m">Masculino</option>
        <option value="f">Feminino</option>
    </select>
    
    <br>

    <input type="submit" value="Enviar os dados">

</form>