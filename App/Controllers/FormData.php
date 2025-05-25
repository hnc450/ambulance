<?php 
    //require dirname(__DIR__). DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR . 'Database' . DIRECTORY_SEPARATOR . 'Database.php';
    // namespace App\Controllers;
    
    class FormData
    { 
       /** 
        * @var string $cookie_name : nom cookie
        * @var array $datas :  tableau a stocker dans le cookie
       */
    
        public static function souviens_toi_de_moi(string $cookie_name, array $datas , string $isActive)
        {
          //$tokken =[];
          if(!empty($isActive))
          {
            //$tokken = Database::QueryRequest("SELECT * FROM users WHERE email='".$datas['email']."' AND mot_de_passe='".$datas['password']."'",2);
           // $datas = $tokken;
            setcookie($cookie_name,serialize($datas),time() + 84600 * 60);
          }
          else
          {
            return;
          }
     
        }

        public static function sign_in(array $datas, string $methode):void
        {
          
           if($methode === "POST")
           {
             if(empty($datas['email']) || empty($datas['password']))
             {
             // die("tout les chmaps sont requis");
               header("Location: /login?message=tout les champs sont obligatoire && color=red");
             
             }

             if(strlen($datas['email']) < 9)
             {
              //die("email doit avoir plus de 9 caracteres");
               header("Location: /login?message=l email doit avoir au moins 9 caracteres && color=red");
             }

             if(strlen($datas['password']) < 9)
             {
              //die("mot de passe 9 caracteres");
               header('Location:/login?message=le mot de passe doit avoir 9 caracteres && color=red');
             }

             if(!filter_var($datas['email'], FILTER_VALIDATE_EMAIL)) 
             {
              // die("email invalide");
                header("Location :/login?message=addresse email invalide && color=red");
             }

             if(!preg_match("/^[a-zA-Z0-9]*$/",$datas['password']))
             {
               // die("mot de passe doit avoir des chiffres et des lettres");
                header("Location: /login?message=le mot de passe doit contenir dea chiffres et des lettres && color=red");
             }     
             else
             {
              $email = $datas['email'];
              $mdp = $datas['password'];
              $user_exists =  Database::QueryRequest("SELECT * FROM users  WHERE email='$email' AND mot_de_passe='$mdp'",2);

             // echo '<br/>'.count($user_exists);

              if(count($user_exists) > 0)
              {
                Database::QueryRequest("UPDATE users SET status=1 WHERE email='$email'",3);
                $_SESSION['user'] = Database::QueryRequest("SELECT * FROM users  WHERE email='$email' AND mot_de_passe='$mdp'",2);
                FormData::souviens_toi_de_moi("Tokken",$datas,$datas['remember']?? '');
              
                header("Location: /");
              }

              else
              {
                // die("veuillez creer un compte");
                header("Location: /login?message=veuillez creer un compte &&color=red");
              }

             } 
          }
          else{}
        }

        public  static function sign_up(array $datas, string $methode):void
        {
                
            if($methode === "POST")
            {
               if( empty($datas['genre']) || empty($datas['nom']) || empty($datas['email']) || empty($datas['phone']) || empty($datas['password']) || empty($datas['confirmPassword'])) 
               {
                  //echo "tout les champs sont obligatoire";
                 // die();
                  header("Location: /register?message=tout les champs sont obligatoire && color=red");
               }
               if(strlen($datas['email']) < 9)
               {
            
                 //die('le mot de passe doit avoir 9 caracteres');
                 header("Location: /register?message=l email doit avoir au moins 9 caracteres && color=red");
               }
               if(strlen($datas['password']) < 9)
               {
                  // die("le mot de passe doit avoir 9 caracteres");
                  header('Location:/register?message=le mot de passe doit avoir 9 caracteres && color=red');
               }

               if (!filter_var($datas['email'], FILTER_VALIDATE_EMAIL)) 
               {
                 //die("email invalide");
                 header("Location :/register?message=addresse email invalide && color=red");
               }
             
               if ($datas['password'] !== $datas['confirmPassword'])
               {
                // die("mot de passe incorrect");
                 header("Location: /register?message = les mots de passe doivent etre similaire && color=red");
               }
             
               if(!preg_match("/^[a-zA-Z]*$/",$datas['nom']) || !preg_match("/^[a-zA-Z]*$/",$datas['genre']))
               {
                die("caractere incorrect pour le nom ou le prenom");
                 header("Location: /register?message=le nom et genre doivent etre compose de lettre et chiffre && color=red");
               }

              if(!preg_match("/^[0-9]*$/",$datas['phone']))
              {
                //die("le numero doit avoir que des chiffres");
                header("Location: /register?message=le numero de telephone doit etre compose de chiffre && color=red");
              }
              else
              {
                var_dump( 
                  Database::executeQuery("SELECT * FROM users WHERE email=:email AND mot_de_passe=:mdp",[
                  ':email' => $datas['email'],
                  ':mdp' => $datas['password']
                ],2));

                $user_exists = Database::executeQuery("SELECT * FROM users WHERE email=:email AND mot_de_passe=:mdp",[
                  ':email' => $datas['email'],
                  ':mdp' => $datas['password']
                ],2);

                // var_dump($user_exists);

                //die("c est bon pour l enreigistrement");
                if(count($user_exists) > 0)
                {
                 
                  header("Location: /register?message=ce compte existe deja&&color=red");
                }
                else
                {
               
                  Database::executeQuery("INSERT INTO users(nom, genre, email, phone, mot_de_passe,role, status) 
                                          VALUES (:nom, :genre, :email, :phone, :mdp, :role, :status)",[
                    ':nom' => $datas['nom'],
                    ':genre' => $datas['genre'],
                    ':email' => $datas['email'],
                    ':phone' => $datas['phone'],
                    ':mdp' => $datas['password'],
                    ':status' => 0,
                    ':role' => 'utilisateur'
                  ],1);
                  
                  header("Location: /login?message=compte creer avec succes&&color=green");
                }

              }
            }
            else
             {
                header("Location: /register");
             }
        }
        public static function nous_contacter(array $datas, string $methode){}
    }
?>