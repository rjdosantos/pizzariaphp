<?php 
  include_once("conn.php");

  $method = $_SERVER["REQUEST_METHOD"];

  if ($method == "GET") {

    $pedidosQuery = $conn->query("SELECT * FROM pedidos");
    $pedidos = $pedidosQuery->fetchAll();
    echo "pre";
      print_r($pedidos);
    echo "</pre>";

    $pizzas = [];

    foreach($pedidos as $pedido) {

      $pizza = [];

      // montando pizza
      $pizza["id"] = $pedido["pizza_id"];


      

      // resgatando a pizza
      // $pizzaQuery = $conn->prepare("SELECT * FROM pizzas WHERE id = :pizza_id");
      // $pizzaQuery->bindParam(":pizza_id", $pizza["id"]);
      // $pizzaQuery->execute();
      // $pizzaData = $pizzaQuery->fetch(PDO::FETCH_ASSOC); 

      // resgatando a borda da pizza
      // $bordaQuery = $conn->prepare("SELECT * FROM bordas WHERE id = :borda_id");
      // $bordaQuery->bindParam(":borda_id", $pizzaData["borda_id"]);
      // $bordaQuery->execute();
      // $borda = $pizzaQuery->fetch(PDO::FETCH_ASSOC); 
      // $pizza["borda"] = $borda["tipo"];


      // resgatando a massa da pizza
      // $pizzaQuery = $conn->prepare("SELECT * FROM pizzas WHERE id = :pizza_id");
      // $pizzaQuery->bindParam(":pizza_id", $pizza["id"]);
      // $pizzaQuery->execute();
      // $pizzaData = $pizzaQuery->fetch(PDO::FETCH_ASSOC); 

      // resgatando a borda da pizza
      // $massaQuery = $conn->prepare("SELECT * FROM massas WHERE id = :massa_id");
      // $massaQuery->bindParam(":massa_id", $pizzaData["massa_id"]);
      // $massaQuery->execute();
      // $massa = $pizzaQuery->fetch(PDO::FETCH_ASSOC); 
      // $pizza["massa"] = $massa["tipo"];

      // resgatando os sabores da pizza
      // $saborQuery = $conn->prepare("SELECT * FROM pizza_sabor WHERE pizza_id = :pizza_id");
      // $saborQuery->bindParam(":pizza_id",  $pizza["id"]);
      // $saborQuery->execute();
      // $sabor = $pizzaQuery->fetchAll(PDO::FETCH_ASSOC); 
      
      // Resgatando o nome dos sabores
     // $saboresDaPizza = [];

     // $saborQuery = $conn->prepare("SELECT * FROM sabores WHERE id = :sabor_id");

      // foreach ($sabores as $sabor) {
      //   $saborQuery->bindParam(":sabor_id", $sabor["sabor_id"]);
      //   $saborQuery->execute();
      //   $saborPizza = $saborQuery->fetch(PDO::FETCH_ASSOC); 
      //   array_push($saboresDaPizza, $saborPizza["nome"]);
      // }
     // $pizza["sabores"] = $saboresDaPizza;

      // adicionar o status do pedido 
    //  $pizza["status"] = $pedido["status_id"];
    //  array_push($pizzas, $pizza);
    }

    //print_r($pizzas);



  } else if ($method == "POST") {

  }

