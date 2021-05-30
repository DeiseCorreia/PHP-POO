<?php 
//this significa o objeto que chamou
    Class Caneta {
      public $model;
      public $cor;
      private $ponta;
      protected $carga;
      protected  $tampada; 

      public function rabiscar(){
        if ($this->tampada == true) {
          echo "<p><strong>Não posso Rabiscar!</strong></p>";
        } else {
          echo "<p><strong>Estou Rabiscando.....</strong></p>";
        }
        
        
      }

      public function tampar(){
        $this->tampada = true;
      }

     public function destampar(){
        $this->tampada = false;
      }
    }
?>