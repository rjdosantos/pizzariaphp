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


  } else {
    // Criação do pedido
    if ($method === "POST" ) {

      $data = $_POST;

      $borda = $data["borda"];
      $massa = $data["massa"];
      $sabores = $data["sabores"];

      // Validação de sabores máximos
      if(count($sabores) > 3) {
        $_SESSION["msg"] = "Selecione no máximo 3 sabores";
        $_SESSION["status"] = "warning";

      } else {
        
        // salvando borda e massa na pizza
        $stmt = $conn->prepare("INSERT INTO pizzas (borda_id, massa_id) VALUES (:borda, :massa)");
        // filtrando inputs 
        $stmt->bindParam(":borda", $borda, PDO::PARAM_INT);
        $stmt->bindParam(":massa", $massa, PDO::PARAM_INT);

        $stmt->execute();

        // Pegando o valor do ID da ultima pizza 
        $pizzaId = $conn->lastInsertId();

        $stmt = $conn->prepare("INSERT INTO pizza_sabor (pizza_id, sabor_id) VALUES (:pizza, :sabor)");

        // repetição até terminar de salvar todos os sabores
        foreach ($sabores as $sabor) {
          
          $stmt->bindParam(":pizza", $pizzaId, PDO::PARAM_INT);
          $stmt->bindParam(":sabor", $sabor, PDO::PARAM_INT);

          $stmt->execute();
        }
      }
      // Retorna para a página inicial
      header("location: ..");
    }
  }
?>
