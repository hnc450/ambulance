<?php 

// function get_avatar(int $chiffre)
// {
//     //initialiser une session curl
//    $url = 'https://avatar.iran.liara.run/public/72';
//    $data = curl_init();
//    curl_setopt($data, CURLOPT_URL,$url);
//    curl_setopt($data,CURLOPT_RETURNTRANSFER,true);
//    $reponse = curl_exec($data);

//    if(curl_errno($data)){
//    //  var_dump(curl_error($data));
//      echo "no! Erreur cUrl".  curl_error($data);
//    }
//    else{
//     $image = curl_getinfo($data,CURLINFO_CONTENT_TYPE);
//     if(strpos($image,'image/') === 0){
//         header("Content-Type: ".$image);
//     }else{
//         echo "le contenu n est pas une image";
//     }

//     echo $reponse;
//    }
//    curl_close($data);
// }
// get_avatar(2);

?>

<?php
// $avatar_id = 72; // Changer ce nombre pour l'avatar souhaité
// $url = "https://avatar.iran.liara.run/public/$avatar_id";

// // Configuration de cURL
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Suit les redirections

// // Exécution de la requête
// $image_data = curl_exec($ch);

// // Gestion des erreurs
// if(curl_errno($ch)) {
//     die('Erreur cURL : ' . curl_error($ch));
// }

// // Fermeture de la session
// curl_close($ch);

// // Sauvegarde en fichier
// file_put_contents("avatar_$avatar_id.jpg", $image_data);

// echo "Avatar $avatar_id téléchargé !";
?>
<!-- <img
  src="https://avatar.iran.liara.run/public/72"
  alt="avatar" />
<img src="https://avatar.iran.liara.run/public/52" alt="">
<img src="https://avatar.iran.liara.run/public/34" alt=""> -->

<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <form action="test.php" method="POST" enctype="multipart/form-data">
        <label for="image">Choisir une image :</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <button type="submit">Uploader</button>
    </form>
</body>
</html>