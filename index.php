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
  $pagamenti[] = new Pagamenti(26, 800, "pending");
  $pagamenti[] = new Pagamenti(27, 500, "accepted");

  foreach ($pagamenti as $pagamento) {
    var_dump($pagamento); echo '<br>';
  }

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
            SELECT status
            FROM pagamenti
            GROUP BY $status
  ";

  $result = $conn->query($sql);

  $pending = [];
  $accepted = [];
  $rejected = [];
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $pending[]=
         new Pagamento($row["status"]["pending"]);

        $accepted[] =
         new Pagamento($row["status"]["accepted"]);

        $rejected[] =
         new Pagamento($row["status"]["rejected"]);

      }
   }

   $conn->close();

   foreach ($res as $pagamento) {

   }

 ?>
