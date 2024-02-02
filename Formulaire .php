<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulaire </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<style>
body {font-family: Arial, Helvetica, sans-serif;
  padding: 5px;}

  input[type=text], textarea, input[type=email] , input[type=date] , input[type=Password] , input[type=file]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 15px;
  margin-right: 0px;
  margin-left: 0px;
  resize: vertical;
}
  input[type=radio] {
    width: 8%;
  padding: 5px;
  margin-top: 6px;
  margin-bottom: 15px;

}
label{margin-right: 0px;
  margin-left: 0px;
  width: 100%;}

input[type=submit] {
  background-color: #1255a2;
  color: white;
  padding: 5px 5px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-bottom: 10px;
}

input[type=submit]:hover {
  background-color: #1872D9;
}

.container {
  /* Ajouter box-sizing */
  box-sizing : border-box;
  border-radius:10px;
  background-color:#f2f2f2;
  padding:50px;
  width: 100%;
  /* redéfinition 400 + 2*20 */
  max-width: 500px;
  margin:0 auto;
}
h1  {
  color: #3700ff;
  width: 100%;
}
</style>

<body>
    <div class="container">
        <h1> <center> Remplir le formulaire </center> </h1>
        <form action="/action_page.php">
          <label for="fname">Nom :</label>
          <input type="text" id="fname" name="firstname" placeholder="Votre nom">
      
          <label for="fname">Prénom :</label>
          <input type="text" id="fname" name="Lastname" placeholder="Votre prénom">
          
          <label for="dob">Date de naissance : </label>
          <input type="date" id="dob" name="dob" required><br>
         
          <label for="gender">Genre :</label>
          <input type="radio" id="male" name="gender" value="male" required>
          <label for="male">Homme </label>
  
          <input type="radio" id="female" name="gender" value="female" required>
          <label for="female">Femme</label><br>
         
          <label for="fname">Choisir un pseudo :</label>
          <input type="text" id="fname" name="pseudo" placeholder="Votre pseudo"><br>
          
          <label for="fname">E-mail :</label>
          <input type="email" id="fname" name="E-mail" placeholder="Votre email"><br>
          
          <label for="fname">Mot de passe :</label>
          <input type="password" id="fname" name="password" placeholder="Votre mot de passe "><br>
          
          <label for="fname">Confirmer votre ot de passe :</label>
          <input type="password" id="fname" name="password" placeholder="Confirmer votre mot de passe "><br>
          
          <label for="photo">Sélectionnez votre photo :</label>
          <input type="file" id="photo" name="photo" accept="image/*"><br>

          <label for="subject">Votre contrat :</label>
          <textarea id="Contrat" name="Contrat" placeholder="Votre Contrat" style="height:100px"></textarea>
      
          <input type="submit" value="Vérifier vos données avant s'inscrire">
          <input type="submit" value="S'inscrire">
          <input type="submit" value="Effacer la saisie">
          <input type="submit" value="Fermer la fenetre">
        </form>
      </div>
</body>
</html>