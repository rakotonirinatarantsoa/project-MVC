<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/app/Views/accueil.css">
  <title>Tickeko</title>
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>

<body>
  <style>
    * {
      margin: 0;
    }

    /* CSS du signup */
    .signup-container {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #E5E7EB;
      height: 164vh;
    }

    .signup-form {
      display: flex;
      flex-direction: column;
      align-items: center;
      /* background-image: */
      /* linear-gradient(to bottom, rgba(255,255,255,0) 10%, white 100%), */
      /* linear-gradient(135deg, rgba(37, 99, 235, 0.7) 40%, rgba(147, 51, 234, 0.7) 67%); */
      background-color: white;
      height: 156vh;
      width: 32vw;
      box-shadow: 0 0 4px #00AFA3;
      border-radius: 16px;
      padding: 12px 24px;
    }

    .title-inscrivez {
      font-family: "Amatic SC", sans-serif;
      font-weight: 600;
      font-size: 48px;
    }

    .title-action {
      font-family: "Amatic SC", sans-serif;
      font-weight: 600;
      font-size: 48px;
      color: #00AFA3;
      margin-bottom: 24px;
    }
    
    .formulaire {
      /* background-color: yellow; */
      height: 130vh;
      width: 30vw;
    }

    .input-text {
      display: flex;
      flex-direction: column;
      margin-bottom: 8px;
    }

    .input-text label {
      font-family: "Inter", sans-serif;
      font-weight: 400;
      font-size: 14px;
      margin-bottom: 8px;
    }
    
    .input-text input {
      /* border-radius: 4px; */
      padding: 8px 16px;
      border: none;
      height: 28px;
      background-color: #f3f4f7ff;
      border: 1px solid;
      border-color: #cececeff; 
      /* width: 256px; */
    }
    
    .sexe {
      font-family: "Poppins", sans-serif;
      font-weight: 400;
      font-size: 20px;
    }

    .sexe-option {
      padding-left: 8px;
      height: 32px;
      width: 128px;
      border-radius: 4px;
      margin-bottom: 8px;
      cursor: pointer;
    }
    
    .inscription-button {
      font-family: "Poppins", sans-serif;
      font-weight: 500;
      font-size: 16px;
      color: white;
      background-color: #00AFA3;
      border: none;
      border-radius: 32px;
      padding: 8px 32px;
      cursor: pointer;
      transition: all 0.25s;
    }

    .inscription-button:hover {
      background-color: #1D4ED8;
      box-shadow: 0 0 12px rgba(37, 99, 235, 1);
    }

    .sexe {
      font-family: "Inter", sans-serif;
      font-size: 14px;
      margin-bottom: 8px;
    }

    .another-action {
      margin-left: 16px;
      font-family: "Inter", sans-serif;
      font-size: 14px;
      display: flex;
      /* justify-content: space-between; */
      /* background-color: red; */
      margin-top: 16px;
      width: 24vw;
    }

    .another-action .connect-here {
      margin-left: 4px;
      color: #1D4ED8;
      text-decoration: none;
    }

    .another-action .connect-here:hover {
      color: #2563EB;
      text-decoration: underline;
    }
  </style>

  <!-- Signup -->
  <section class="signup-container">
    <div class="signup-form">
      <p class="title-inscrivez"> inscrivez<span class="title-action">-vous</span></p>

      <div class="formulaire">
        <form action="">
          <div class="nom-input input-text">
            <label for="">Nom:</label>
            <input type="text" name="nom" placeholder="Entrez votre nom">
          </div>

          <div class="prenom-input input-text">
            <label for="">Prénom:</label>
            <input type="text" name="prenom" placeholder="Entrez votre prénom">
          </div>

          <div class="sexe">Sexe:</div>
          <select class="sexe-option" name="sexe" id="">
            <option value="">Homme</option>
            <option value="">Femme</option>
          </select>

          <div class="adress-input input-text">
            <label for="">Adresse mail:</label>
            <input type="text" name="email" placeholder="Entrez votre adresse mail">
          </div>
          
          <div class="password-input input-text">
            <label for="">Créer votre mot de passe:</label>
            <input type="password" name="password" placeholder="Entrez votre mot de passe">
          </div>
          
          <div class="password-input input-text">
            <label for="">Confirmez votre mot de passe:</label>
            <input type="password" placeholder="Entrez votre mot de passe">
          </div>

          <div class="adresse-résidence-input input-text">
            <label for="">Adresse(lieu):</label>
            <input type="text" name="adresse" placeholder="Entrez votre adresse">
          </div>

          <div class="adresse-résidence-input input-text">
            <label for="">Numéro téléphone:</label>
            <input type="text" name="numero" placeholder="Entrez votre numéro de téléphone">
          </div>

          <div class="code-postal-input input-text">
            <label for="">Code postal:</label>
            <input type="text" name="postal" placeholder="Entrez votre code postal">
          </div>

          <div class="code-postal-input input-text">
            <label for="">Ville:</label>
            <input type="text" name="ville" placeholder="Entrez votre ville">
          </div>
        </form>
      </div>
      <button class="inscription-button">S'inscrire</button>
      <div class="another-action">
        <div class="compte-existant">Vous avez déjà un compte?</div>
        <a href="/login" class="connect-here">Se connecter</a>
      </div>
    </div>
  </section>
</body>
</html>