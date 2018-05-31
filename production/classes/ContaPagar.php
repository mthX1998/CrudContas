<?php
  require_once 'Crud.php';

  class ContaReceber extends Crud{
      protected $table = 'contaspagar';
      private $id;
      private $valor;
      private $venc;
      

      public function ContaPagar(){

      }

      public function getValor(){
          return $this->$valor;
      }

      public function setValor($valor){
        $this->valor = $valor;
      }

      public function getVenc(){
          return $this->$venc;
      }

      public function setVenc(){
          $this->venc = $venc;
      }


      public function Insert(){
        $sql = "INSERT INTO $this->table (id,valor,venc) VALUES (null,:valor,:venc)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':valor',$this->valor);
        $stmt->bindParam('venc',$this->venc);
        return $stmt->execute();
      }


      public function Update($id){
        $sql = "UPDATE $this->table SET valor = :valor, venc = :venc WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':valor',$this->valor);
        $stmt->bindParam(':venc',$this->venc);
        $stmt->bindParam(':id',$id);
        return $stmt->execute();
    
    }
  }



?>