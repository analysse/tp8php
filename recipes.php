<?

// recipe loader for tp8

$name = $_GET["recipeName"];
$list = $_GET["recipeList"];

if($name == "Fluffy French Toast"){
  
  if($list == "ingredients"){
    include "ingredients.html"; 
    
  }elseif($list == "equipment"){
    include "equipment.html";
    
  }elseif($list == "directions"){
    include "directions.html";
    
  }else{
    echo "1"; 
  }  
} elseif($name == "Iced Matcha Latte") {
  
    if($list == "ingredients"){
    include "matcha-ingredients.html"; 
    
  }elseif($list == "equipment"){
    include "matcha-equipment.html";
    
  }elseif($list == "directions"){
    include "matcha-directions.html";
    
  }else{
    echo "2"; 
  }  
  
}elseif($name == "Super Easy Rosemary Bread") {
  
    if($list == "ingredients"){
    include "bread-ingredients.html"; 
    
  }elseif($list == "equipment"){
    include "bread-equipment.html";
    
  }elseif($list == "directions"){
    include "bread-directions.html";
    
  }else{
    echo "3"; 
  }  
}

else{
  echo "0"; 
}