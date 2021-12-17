<?php
include('conexao.php');
include('EnviarChamado.php');

//Criando uma estrutura condicional para verificar se existe campos vazios no form
if(isset($_POST['nome']) || isset($_POST['assunto']) || isset($_POST['[email]']) || isset($_POST['instituicao'])
|| isset($_POST['contato']) || isset($_POST['namecidade']))

?>

<!DOCTYPE html>
<html>

<head>       
     <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>    
    
    <link rel="stylesheet" type="text/css" href="css/index.css" media="screen" />
    
        <title>Sistema de Chamados</title>

</head>

<body>
    <!--Inicializando o Formulário com os Campos do Cadastro do chamado-->
    <form class="mb-3" id="formulario" name="formulario" method="POST" action="EnviarChamado.php">
        <h3>Realizando teste</h3>
        <input id="email" type="text" name="nome" placeholder="Digite aqui o seu nome" />
        <input type="text" name="email" placeholder="Seu melhor e-mail aqui" />
        <input type="text" name="instituicao" placeholder="Qual o nome da instituição que você trabalha?" />
        <input type="text" name="assunto" placeholder="Assunto do chamado" />
        <input id="telefone" type="text" name="contato" placeholder="Telefone de Contato" /> 
        <input id="cidade" type="text" name="namecidade" placeholder="Digite a Cidade" />


        <input type="submit"  value="Enviar" />
    </form>
    <!--Finalizando o Formulário com os Campos do Cadastro do chamado-->


    <!-- Inicializando a Section do Rodapé com Copy-->
    <section class="rodapecopy">
        <p>@Copy | Todos os Direitos Reservados</p>
    </section>
    <!-- Finalizando a Section do Rodapé com Copy-->

    <script>
        var email = document.getElementById('email');
        email.addEventListener('focus', () => {

            email.style.borderColor = "#696969"

        })
    </script>
</body>

</html>