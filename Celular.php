<?php 
//this significa o objeto que chamou
    Class Celular {
      var $preco;
      var $modelo;
      var $bateria;
      var $disponivel;

      function Disponivel(){//prod é o celular
        if ($this->disponivel == true) {
          print('compre');
        } else {
          print(' não compre');
          error_log('erro');
        }
        
      }
    }
?>