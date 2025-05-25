<?php 
// compte password infinity free : bmLx70Dgw37XI
  class PageController
  {
    public static function verify_privielge()
    {
      if($_SESSION['user'][0]['role'] === "admin")
      {
      
      }
      else
      {

      }
    }

    public static function dashboard($FILE){
      echo $FILE['name'];
      require (dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'Views' .  DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . $FILE['name'] .".php";
    
    }

    public static function page($FICHIER)
    {
    //  echo  var_dump($FICHIER)."<br/>";
      $verity = file_exists(dirname(__DIR__).DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.$FICHIER['name'].'.php');
      //echo $FICHIER['name'];
     // echo var_dump(file_exists(dirname(__DIR__).DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.$FICHIER['name'].'.php'));
     // echo $verity;
 
  
      if(file_exists(dirname(__DIR__).DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.$FICHIER['name'].'.php'))
      {
         require dirname(__DIR__)
         . DIRECTORY_SEPARATOR .'Views'
         . DIRECTORY_SEPARATOR . $FICHIER['name'].'.php';
      }
      else
      {
        require dirname(__DIR__) . DIRECTORY_SEPARATOR .'Views' . DIRECTORY_SEPARATOR .'404.html';  
      }
    }
  }

?>