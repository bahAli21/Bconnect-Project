<?php
declare(strict_types=1);
?>

<?php


   $imageUpload=false;
   if(isset($_FILES['image']) && $_FILES['image']['error']!=0)
   {
    echo "Impossible de joindre cette image , Veuillez selectionnez une autre ".PHP_EOL;
   }

  if(isset($_FILES['image']) && $_FILES['image']['error']==0)
  {


     $to      = 'ibrahima.sow0608@gmail.com';
     $subject = 'Envoie du code de reinitialisation';
     $message = 'Bonjour MR votre code est : '.rand(10000,19999).PHP_EOL;
     $message.='Ceci est un mail automatique generer par un serveur php'.PHP_EOL;
     $message.='noreply to-bconnect.social@gmail.com';
     $headers = 'From:BConnect.noreply@bah.com\r\n';
     $headers.="Content-type: text/plain; charset=utf-8\r\n";

    if(mail($to, $subject, $message, $headers))
      echo "Message envoyé avec succèe\n";


  //  echo "$_FILES['image']";
    //Je teste que la taille du fichier est inferieur a 5MO
    if($_FILES['image']['size']<=(5000000))
    {
      //liste des extension valide
      $extensionList=['jpg','.JPG','PNG','png','jpeg','JPEG','gif','GIF'];
      //recuperons l'extension du fichier avec la fonction pathinfo en passant une option="PATHINFO_EXTENSION"
      $extension=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      //Je teste si l'extension est dans la liste d'extension valide avec la fonction in_array(string,array)
      if(in_array($extension,$extensionList))
      {

        //Le dossier uploaded qui va contenire toutes les images telecharger et il se trouve dans le même dossier que notre fichier php
        $dossier="dossierImage/ ";
        //Je recupère la base du nom de fichier sans le chemin
        $nomFile=basename($_FILES['image']['name']);
        //nom nomTemporaire du fichier soumis
        $nomTemporaire=$_FILES['image']['tmp_name'];
        //J'utilise la fonction move_uploaded_file pour enregistrer le fichier dans le dossier dossierImage
        move_uploaded_file($nomTemporaire,$dossier.$nomFile);
        //Telechargement reussi , je mets donc ma variable a true
        $imageUpload=true;

        //POO en PHP j'ai instancier un objet($date) a partire de la class DateTime
                $date = new DateTime;

         //J'accede a la methode  format de cette class
        echo "L'envoi a bien été effectué le : ".$date->format('d/m/y');
      }

    }
    else {
      echo "fichier grand";
    }
  }
 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
       img{
        width: 40px;
        height: 30px;
        border: none;
        border-radius: 10%;
        margin-left: 10%;

      }
    </style>
  </head>
  <body>
    <form  enctype="multipart/form-data" action="" method="post">
      <label for="image">Veuillez joindre un fichier :</label>
      <input type="file" name="image" id="join" value="soumettre"><p></p>
      <input type="submit" name="send" value="Envoyer">
    </form>
    <?php if($imageUpload):?>
    <div class="affImg">
      <img src="<?php echo $dossier.$nomFile; ?>" alt="imageJoin">
    </div>
  <?php endif; ?>
  </body>
</html>


<?php
$host = 'localhost'; // Adresse du serveur MySQL
$dbname = 'db_firstproject'; // Nom de la base de données
$utilisateur = 'root'; // Nom d'utilisateur MySQL
$pass = 'root'; // Mot de passe MySQL

try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $utilisateur, $pass);

} catch (PDOException $e) {
  echo "Erreur de connexion : " . $e->getMessage();
}

$pass="hihi";
$sexe="F";
$date="2002-06-02";
$mail="oumou@gmail.com";
$fName="Oumou BAH";


// dans les requêtes UPDATE,INSERT et DELETE.
// il faut utiliser les mêmes noms de paramètres que ceux spécifiés dans les requêtes.
//sexe=:sexe toujour (et ces nom doivent correspondent au nom de champ dans la BDD)
//Ou utiliser des variable anonyme ex: email=? dans ce cas il faut passer un tableau a la methode execute([$email])

//part INSERT
$requeteSQL='INSERT INTO  users (full_name, birthday, sexe, email, password) VALUES (:full_name, :birthday, :sexe, :email, :password)';
$ins=$db->prepare($requeteSQL);
$ins->execute(
  [
    'password' => $pass,
    'email' => $mail,
    'sexe' => $sexe,
    'full_name' => $fName,
    'birthday' => $date,
  ]
);

//part UPDATE
$newName = "ALI";
$passW = "haha";
$rq = 'UPDATE users SET full_name=:full_name WHERE password=:password';
$MAJ = $db->prepare($rq);
$MAJ->execute(
  [
    'full_name' => $newName,
    'password' => $passW,
  ]
);

//part DELETE
$s = "F";
$rqt = 'DELETE FROM users WHERE sexe=:sexe';
$SUPP = $db->prepare($rqt);
$SUPP->execute(
  [
    'sexe' => $s,
  ]
);



$tab=$db->prepare('SELECT * FROM users');
$tab->execute();
$userName=$tab->fetchAll();

foreach ($userName as $user) {
 echo "nom : ".$user['full_name'].PHP_EOL;
}
?>
