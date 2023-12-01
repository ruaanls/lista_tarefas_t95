<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store">
    <meta http-equiv="Pragma" content="no-cache, no-store">
    <meta name="Description" content="Sistema de Tarefas da T95 do Senac Santo André">
    <meta name="Author" content="Ruan Lima Silva">
    <meta name="keywords" content="Lista de Tarefas, php, html, css e js">
    <meta name=">
    
    <title> Lista de Tarefas T95 </title>
    <link rel="shortcut icon" href="./imagens/to-do-list.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous" defer ></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer ></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous" defer ></script>

    <link rel="stylesheet" href="./css/estilosTarefas.css">

    <script type="text/javascript" src="./js/scriptsTarefas.js" defer ></script>
    
</head>
<body style="background: red;">

    <main class="container-fluid d-flex flex-column " >

        <h1 class=" bg-branco " > 
            <img class="col-1" src="./imagens/to-do-list.png" alt="ícone todo" > Lista de Tarefas T95
            <i class="bi bi-list p-3 hide d-md-none " id="menu" ></i> 
        </h1>

        <div class="d-flex flex-row">

            <nav class="bg-secondary col-12 col-md-2 p-4 me-5 d-flex flex-column " >
                <p> Seja bem vindo {fulano} ao Sistema.</p>
                <a href="./"> <i class="bi bi-gear"></i> Exibir Tarefas </a>
                <a href="./?cadastrar=1"> <i class="bi bi-gear"></i> Cadastrar Tarefa </a>
                <a href=""> <i class="bi bi-gear"></i> Configurações </a>
                <a href=""> <i class="bi bi-box-arrow-left"></i> Sair </a>
            </nav>

            <!-- Cadastro / Edição das tarefas -->
        <?php 
            // Usamos variáveis tipo GET principalmente para navegação mostrando e escondendo itens do front end.

            // SE existir uma variável chamada "cadastrar" na url o form de cadastro aparecerá e a lista de tarefas desaparecerá.

            if( isset( $_GET["cadastrar"] ) && $_GET['cadastrar'] == "1" )
            {
        ?>
            <form action="" class="col-12 col-md-6 p-5 m-md-5 d-flex flex-column " >

                <div class="d-flex flex-column flex-md-row" >
                    <div class="form-floating mb-3 col-12 col-md-8">
                        <input type="text" class="form-control" id="tarefa" name="tarefa" placeholder="Próxima tarefa...">
                        <label for="floatingInput">Tarefa</label>
                    </div>

                    <div class="form-floating mx-md-3 col-12 col-md-4">
                        <select class="form-select mb-3 py-3 text-center" aria-label=".form-select-lg" name="categoria" >
                            <option class="text-center" > Categoria </option>
                            <option class="text-center" selected value="1"> Concluído </option>
                        </select>
                    </div>
                </div>

                <div class="d-flex" >
                    
                    <div class="form-floating mb-3 col-6 col-md-8">
                        <input type="date" class="form-control" id="termino" name="termino">
                        <label for="termino">Data Término:</label>
                    </div>

                    <div class="form-floating mx-md-3 col-6 col-md-4">
                        <select class="form-select mb-3 py-3 text-center" aria-label=".form-select-lg" name="prioridade" >
                            <option class="text-center" value="0" > Sem prioridade </option>
                            <option class="text-center" value="1" > Baixa </option>
                            <option class="text-center" value="2" > Média </option>
                            <option class="text-center" value="3" > Urgente </option>
                        </select>
                    </div>

                </div>

                <button class="btn p-3" >
                    <i class="bi bi-plus-circle-fill "></i> Cadastrar Tarefa
                </button>

            </form>

            <?php 
                }
                else
                { 
            ?>

            <!-- Visualização das tarefas -->

            <ul class="col-md-6 m-md-5 p-md-2 p-0 relativo" >

                <li class="h4 p-md-2 p-2 d-flex flex-column flex-md-row  justify-content-between align-items-center ">

                    Tarefa 01 
                
                
                <div class="d-flex flew-row">
                    <span class="btn m-2 mx-md-5 my-md-0 lateral" > Categoria </span>

                    <span class="btn btn-danger m-2 mx-md-5 my-md-0 lateral" > Urgente </span>

                    <span class="btn btn-outline-warning mx-5 lateral" > 30/11/2023 </span>

                    <span class="d-flex flex-column lateral sobe" >
                            <span class="d-flex">
                                <a href="" class="p-2" ><i class="bi bi-pencil-square"></i></a>
                                <a href="" class="p-2" ><i class="bi bi-trash3"></i></a>
                            </span>
                            <span class="h6">28/11/2023</span>
                    </span>
                </div>    
                    <div class="form-check movimenta ">
                        <input class="form-check-input m-3 m-md-0 p-md-3" type="checkbox" value="ok" id="concluido">
                    </div>

                </li>

            </ul>

            <?php } ?>

        </div>

    </main>
    
</body>
</html>