<?php
phpinfo(int $flags = INFO_ALL): null
try{
     $db= new PDO('SQLite3:game_PDO.sqlite');




}
catch(PDOException $e){
     echo $e->getMessage();
}



?>