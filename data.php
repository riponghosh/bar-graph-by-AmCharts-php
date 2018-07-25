<?php
  $dbhost = 'localhost';
  $dbname = 'charts';  
  $dbuser = 'root';                  
  $dbpass = ''; 
  
  
  try{
    
    $dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  }catch(PDOException $ex){
    
    die($ex->getMessage());
  }
$stmt = $dbcon->prepare("SELECT year,income FROM charts");
$stmt->execute();
$row1 = [];
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
        extract($row);
        $row1[]= ['year' => $year, 'income' => $income];
    }
    echo json_encode($row1);
?>
