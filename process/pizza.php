<pre>
<?php 
  include_once("conn.php");

  $method = $_SERVER["REQUEST_METHOD"];


  // Resgate de dados, montagem dos pedidos
  if($method === "GET") {

    $bordasQuery = $conn->query("SELECT * FROM bordas; ");
    $bordas = $bordasQuery->fetchAll();

    $massasQuery = $conn->query("SELECT * FROM massas; ");
    $massas = $massasQuery->fetchAll();

    $saboresQuery = $conn->query("SELECT * FROM sabores; ");
    $sabores = $saboresQuery->fetchAll();


    print_r($sabores);

  } else {
    // Criação do pedido
    if ($method === "POST" ) {

    }
  }
?>
