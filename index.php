<?php

  class Pagamento {

     public $id;
     public $price;
     public $status;

     function __construct($id, $price, $status) {

       $this->id = $id;
       $this->price = $price;
       $this->status = $status;
     }
  };

  $pagamenti = [];
  $pagamenti[] = new Pagamento(26, 800, "pending");
  $pagamenti[] = new Pagamento(27, 500, "accepted");

  //foreach ($pagamenti as $pagamento) {
  //  var_dump($pagamento); echo '<br>';
  //}

  $servername = "localhost";
  $username = "root";
  $lastname = "bool";
  $dbname = "Prova1";

  $conn = new mysqli ($servername, $username, $lastname, $dbname);

  if ($conn -> $connect_errno ) {

    echo $conn ->connect_error;
    return;
  }

  $sql = "
            SELECT *
            FROM pagamenti

  ";

  $result = $conn->query($sql);

  $pagamenti = [];
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

          $pagamenti[]=
          new Pagamento($row["id"],
                        $row["price"],
                        $row["status"]);
      }
   }

  foreach ($pagamenti as $pagamento) {
    echo $pagamento->status. " : ". "<br>". "<br>".  $pagamento->id. " : ". "  ".  $pagamento->price. "<br>";
  }



 ?>
