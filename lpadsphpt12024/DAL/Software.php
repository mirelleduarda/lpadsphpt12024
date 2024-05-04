<?php 
   namespace DAL; //Data Access Layer
   include_once 'C:\xampp\htdocs\lpadsphpt12024\DAL\conexao.php';
   include_once 'C:\xampp\htdocs\lpadsphpt12024\MODEL\Software.php';

   class Software{
      public function Select(){       
           
         $sql = "Select * from software;"; 
         $con = \DAL\Conexao::conectar(); 
         $registros = $con->query($sql);
         $con = \DAL\Conexao::desconectar();  

         foreach ($registros as $linha){
             $software = new \MODEL\Software(); 
             $software->setId($linha['id']); 
             $software->setDescricao($linha['descricao']);
             $software->setFabricante($linha['fabricante']);
             $software->setTipo($linha['tipo']);
             $software->setValor($linha['valor']);
             $software->setQtdCopias($linha['qtdCopias']);

             $lstSoftware[] = $software; 
         }
         return $lstSoftware;
          
      }

      public function SelectId(int $id){}
      public function SelectDesc(string $name){}
      public function SelectFabricante(string $fabricante){}
      public function SelectTipo(int $tipo){}
      public function SelectValor(float $valor){}
      public function SelectQtdCopias(int $qtdCopias){}



   }

?>