<?php 
//this significa o objeto que chamou
    Class Caneta {
      var $model;
      var $cor;
      var $ponta;
      var  $carga;
      var  $tampada; 

      function rabiscar(){
        if ($this->tampada == true) {
          echo "<p><strong>Não posso Rabiscar!</strong></p>";
        } else {
          echo "<p><strong>Estou Rabiscando.....</strong></p>";
        }
        
        
      }

      function tampar(){
        $this->tampada = true;
      }

      function destampar(){
        $this->tampada = false;
      }
    }
?>