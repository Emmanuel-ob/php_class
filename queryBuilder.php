<?php

class QueryBuilder{
    protected $pdo;

    function __construct(PDO $pdo){
         $this->pdo = $pdo;

    }


    public function selectAll($table){

         if ($statement = $this->pdo->prepare("SELECT * FROM {$table}")){

         $statement->execute();
         $result = $statement->fetchAll(PDO::FETCH_CLASS);
         return $result;
         }else
         {
             return "Something went wrong, check and try again";
         }

    }


    public function find($table, int $id){
        
         if ($statement = $this->pdo->prepare("SELECT * FROM ($table) WHERE id=($id)")){

         $statement->execute();
         echo 'query executed';
         $result = $statement->fetchAll(PDO::FETCH_OBJ);
         return $result;
         }else
         {
             return "The specified id: ". $id. " does not exist. ";
         }

    }


    public function where($table, $field, $value){
          
         if ($statement = $this->pdo->prepare("SELECT * FROM ($table) WHERE ($field)='$value'")){

         $statement->execute();
         
         $result = $statement->fetchAll(PDO::FETCH_OBJ);
         echo 'query executed';
         return $result;
         }else
         {
             return "The specified field: ". $field. " name or ".$value. " does not exist. ";
         }

    }

    public function update($table, $arr, int $id){
         
             foreach($arr as $x => $x_value) {
            // UPDATE fellows SET `department` = 'fullstack' WHERE `id` = 1;
            //echo $x. " , ".$x_value."<br>";
         if ($statement = $this->pdo->prepare("UPDATE ($table) SET {$x} = '{$x_value}' WHERE id = {$id}")){
            $result = $statement->execute();
            return "update was successful."; 
             }
             
         else
         {
             return "The specified id: ". $id. " does not exist. ";
         }

      }
    }

    public function delete($table, int $id){
         
         if ($statement = $this->pdo->prepare("DELETE FROM {$table} WHERE id = ($id)")){

         $result = $statement->execute();
         return "The record with the id: ". $id. " has being deleted successfully";
         }else
         {
             return "The specified id: ". $id. " does not exist. ";
         }

    }

}
?>