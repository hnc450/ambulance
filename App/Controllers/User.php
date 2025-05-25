<?php
  
   class User
   {
        public  function se_deconnecter()
        {
          $id = $_SESSION['user'][0]['id'];
          session_destroy();
          unset($_SESSION['user']);
          Database::QueryRequest("UPDATE users SET status=0 WHERE id=$id",3);
          header("Location: /");
        }

        public static function uplodad_document(string $btn_value , $methode)
        {}

        public static function modifier_profile(string $request, $fichier)
        {
          // Vérifier si un fichier a été soumis
           if ($request === 'POST' && isset($_FILES['image'])) {
               $uploadDir = './assets/photos/'; // Chemin vers le dossier de stockage
               $file = $_FILES['image'];
              
               // Vérifier les erreurs d'upload
               if ($file['error'] !== UPLOAD_ERR_OK) {
                   die('Erreur lors de l\'upload du fichier.');
                   header("Location: /profile?message=Erreur lors de l envoie du fichier");
               }
              
               // Vérifier si le fichier est une image
               $fileType = mime_content_type($file['tmp_name']);
               if (strpos($fileType, 'image/') !== 0) {
                   die('Le fichier soumis n\'est pas une image.');
               }
              
               // Générer un nom unique pour le fichier
               $fileName = uniqid('photo_', true) . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
              
               // Déplacer le fichier dans le dossier de destination
               if (!is_dir($uploadDir)) {
                   mkdir($uploadDir, 0755, true); // Créer le dossier s'il n'existe pas
               }
              
               $destination = $uploadDir . $fileName;
               if (move_uploaded_file($file['tmp_name'], $destination)) {
                   echo 'Image uploadée avec succès !';
               } else {
                   echo 'Erreur lors du déplacement du fichier.';
                   header("Location: /profile?message=Erreur lors du deplacement du fichier && color=red");
               }
           } else {
               header("Location: /profile?message=Aucun fichier soumis&&color=red");
           }
        }

        public static function InputType(
          string $typeInput,
          string $name, 
          string $action, 
          string $methode ,
          ?string $className, 
          ?string $id
        ):string
        {
          return <<<HTML
              <form action="$action" method="$methode">
                   <input type="$typeInput" name="$name" id="$id" class="$className">
                   <button type="submit" name="btn" value="modifier">modifier</button>
              </form>
            
          HTML;
        }


        public static function supprimer_mon_compte(int $id)
        {
           Database::executeQuery("DELETE FROM users WHERE id=:id",[':id'=>$id],4);
        }
        
        public  static function modifier_information_compte(array $datas, string $methode, int $id):void
        {
          if($methode ==="POST")
          {
              if(empty($datas['email']) || empty($datas['phone'])|| empty($datas['language']) || empty($datas['address']))
              {
                die("Veuillez remplir tout les champs pour modifier le mot de passe");
              }

              if(strlen($datas['email']) < 9 || strlen($datas['phone']) < 9 || strlen($datas['language']) < 9 || strlen($datas['address']) < 9)
              { 
                die("Le nom et prenom doit avoir plus de 9 caracteres et l email plus de 9 caracteres");
              }
       
              if(!filter_var($datas['email'], FILTER_VALIDATE_EMAIL)) 
              {
                die("email invalide");
              }
          }
          
          if(isset($_POST['modifier']))
          {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $email = htmlspecialchars($_POST['email']);
            $id = $_SESSION['user'][0]['id'];
            Database::QueryRequest("UPDATE users SET nom='$nom', prenom='$prenom', email='$email' WHERE id=$id",3);
          }
        }

        public static function modifier_mot_de_passe(array $datas, string $methode , int $id)
        {
          if($methode ==="POST")
          {
              if(empty($datas['current_password']) ||empty($datas['new_password']) || empty($datas['confirm_password']))
              {
                die("Veuillez remplir tout les champs pour modifier le mot de passe");
              }

              if(strlen($datas['current_password'] < 9 || strlen($datas['new_password']) < 9|| strlen($datas['confirm_password']) < 9))
              { 
                die("Le mot de passe doit avoir plus de 9 caracteres");
              }

              if($datas['new_password'] !== $datas['confirm_password'])
              {
                die("Nouveau mot de passe incorrect");
              }

              if(!preg_match('/^[a-zA-Z0-9]$/',$datas['current_password']) || !preg_match('/^[a-zA-Z0-9]$/',$datas['new_password'])  || !preg_match('/^[a-zA-Z0-9]$/',$datas['confirm_password']))
              {
                 die("le nouveau mot de passe doit avoir des chiffres et des lettres");
              }
              else
              {
                $mdp = $datas['new_password'];
                Database::QueryRequest("UPDATE users SET mot_de_passe='$mdp' WHERE id=$id",3);
              }

          }
        }
   }
?>