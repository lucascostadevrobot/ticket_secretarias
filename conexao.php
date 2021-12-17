<?php
/*MySQLi Connection

-> O principal método utilizado é mysqli_connect(). Essa é uma função PHP interna para estabelecer uma nova
conexão com o servidor MySQLi que é nosso Banco de Dados. 

-> No começo temos 4 Variáveis que são declaradas para serem usadas nas funções de conexão com o BD:
$servername, $database, $username, e $password.

->A última parte do código é mysqli_close, que simplesmente vai fechar a conexão com o banco de dados de modo manual. 
Se isso não for especificado, as conexões MySQL vão fechar por conta própria quando o script for encerrado.

*/
$servername = "localhost";
$database = "ticket_chamados";
$username = "root";
$password = "";
// Criando a nossa conexão com o servidor através da função mysqli connect.
$conn = mysqli_connect($servername, $username, $password, $database);
// Criando um if para checar se a conexão com o servidor foi bem sucedida.
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//Exibimos uma mensagem na tela para usuário avisando que a conexão foi bem sucedida.
echo "Connected successfully";
mysqli_close($conn);
?>