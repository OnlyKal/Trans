<?php   
   class Queries{      
        static public function addData($tableName,$fields,$arguments,$data){
                require("config.php");
                $query='INSERT INTO '.$tableName.'('.$fields.') VALUES('.$arguments.')';
                $statement=$conn->prepare($query);
                $result= $statement->execute($data);                
                if($result==1){
                  $response=
                        '{
                            "type":"success",
                            "message":"Enregistrement reussi !"
                         }'
                    ;  
                    echo $response;
                }else{
                  $response=
                  '{
                      "type":"failure",
                      "message":"Enregistrement echoué !"
                   }'
              ;  
              echo $response;
          }        
        }         
        static public function deleteData($tableName,$fields,$arguments){
              require("config.php");              
              $query='DELETE FROM '.$tableName.' WHERE '.$fields.' = "'.$arguments.'"';
              $statement=$conn->prepare($query);
              $result=$statement->execute();                    
              if($result==1){
                $response=
                '{
                    "type":"success",
                    "message":"Suppression reussie !"
                 }';  
                  echo $response;
              }      else{
                  $response=
                  '{
                      "type":"failure",
                      "message":"Suppression echouée !"
                   }'
              ;  
              echo $response;
             }  
        }
        static public function updateData($tableName,$data,$fields,$arguments){
              require("config.php");
              $query='UPDATE '.$tableName.' SET '.$data.' WHERE '.$fields.'="'.$arguments.'"';
              $statement=$conn->prepare($query);
              $result=$statement->execute();    
              if($result==1){
                $response=
                        '{
                            "type":"success",
                            "message":"Mis à jour reussi !"
                         }'
                    ;  
              echo $response;
           }  else{
               $response=
                        '{
                        "type":"failure",
                        "message":"Mis à jour echoué !"
                        }'
                  ;  
               echo $response;
          }     
        }
        
        static public function getData($fields,$tableName,$arguments){
              require("config.php");      
              $query='SELECT '.$fields.' FROM '.$tableName.' WHERE '.$arguments;
              $statement=$conn->prepare($query);
              $statement->execute();
              $result=$statement->fetchAll(PDO::FETCH_ASSOC);   
              $json=json_encode($result);  
              return $json;     
        }
       
        static public function authentication($fields,$tableName,$arguments){
              require("config.php");      
              $query='SELECT '.$fields.' FROM '.$tableName.' WHERE '.$arguments;
              $statement=$conn->prepare($query);
              $statement->execute();
              $result=$statement->fetchAll(PDO::FETCH_ASSOC);   
              $json=json_encode($result);              
              return $json;
        }
   }



 


 

  