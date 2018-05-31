<?php
   
   require_once 'Crud.php';


   class Usuarios extends Crud{
      
      protected $table = 'usuarios';
      private $id;
      private $nome;
      private $senha;

      public function Usuarios(){
          
    
    }

      public function setNome($nome){
         $this->nome = $nome;
      }

      public function getNome(){
          return $this->nome;
      }

      public function setSenha($senha){
          $this->senha = $senha;
      }

      public function getSenha(){
          return $this->senha;
      }

      public function Insert(){
          $sql = "INSERT INTO $this->table (id,nome,senha) VALUES (null,:nome,:senha)";
          $stmt = DB::prepare($sql);
          $stmt = bindParam(':nome',$this->nome);
          $stmt = binParam(':senha',$this->senha);
          return $stmt->execute();
      }

      public function Update($id){
          $sql = "UPDATE $this->table SET nome = :nome, senha =:senha WHERE id = :id";
          $stmt = DB::prepare($sql);
          $stmt = bindParam(':nome',$this->nome);
          $stmt = binParam(':senha',$this->senha);
          $stmt = binParam(':id',$id);
          return $stmt->execute();
      }


   }



?>