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
      height: 146vh;
      width: 32vw;
      box-shadow: 0 0 4px #00AFA3;
      border-radius: 16px;
      padding: 12px 24px;
    }

    .title-inscrivez {
      font-family: "Amatic SC", sans-serif;
      font-weight: 600;
      font-size: 48px;
      margin-bottom: 32px;
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
      height: 128vh;
      width: 30vw;
    }

    input {
      outline: none;
      font-family: "Inter", sans-serif;
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

    .warning {
      font-family: "Poppins", sans-serif;
      margin: 8px 0;
      color: #00AFA3;
      font-size: 10px;
      opacity: 0;
    }
    
    .warning:hover {
      color: #d80000ff;
      cursor: pointer;
    }

    input:invalid + .warning {
      opacity: 1;
    }

    .btn {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 6vh;
    }
    
    .inscription-button {
      font-family: "Poppins", sans-serif;
      font-weight: 500;
      font-size: 14px;
      color: white;
      background-color: #00AFA3;
      border: none;
      border-radius: 32px;
      padding: 8px 32px;
      cursor: pointer;
      transition: all 0.25s;
    }

    .inscription-button:hover {
      background-color: #008d84;
    }

    .another-action {
      margin-left: 16px;
      font-family: "Inter", sans-serif;
      font-size: 14px;
      display: flex;
      justify-content: center;
      /* justify-content: space-between; */
      /* background-color: red; */
      margin-top: 4px;
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
        <form action="<?= site_url('inscription') ?>" method="post">
          <div class="nom-input input-text">
            <label for="">Nom:</label>
            <input type="text" name="nom" placeholder="Entrez votre nom" required>
            <small class="warning">*Ce champ est obligatoire</small>
          </div>
          
          <div class="prenom-input input-text">
            <label for="">Prénom:</label>
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <small class="warning">*Ce champ est obligatoire</small>
          </div>
          
          <div class="adress-input input-text">
            <label for="">Adresse mail:</label>
            <input type="text" name="email" placeholder="Entrez votre adresse mail" required>
            <small class="warning">*Ce champ est obligatoire</small>
          </div>
          
          <div class="password-input input-text">
            <label for="">Créer votre mot de passe:</label>
            <input type="password" name="password" placeholder="Entrez votre mot de passe" required>
            <small class="warning">*Ce champ est obligatoire</small>
          </div>
          
          <div class="password-input input-text">
            <label for="">Confirmez votre mot de passe:</label>
            <input type="password" name="confirm_password" placeholder="Entrez votre mot de passe" required>
            <!-- <?php if(isset($validation) && $validation->getError('confirm_password')): ?>
                <small style="color:red;">
                    <?= $validation->getError('confirm_password') ?>
                </small>
            <?php endif; ?> -->
            <small class="warning">*Ce champ est obligatoire</small>
          </div>
          
          <div class="code-postal-input input-text">
            <label for="">Code postal:</label>
            <input type="text" name="postal" placeholder="Entrez votre code postal" required>
            <small class="warning">*Ce champ est obligatoire</small>
          </div>
          
          <div class="code-postal-input input-text">
            <label for="">Ville:</label>
            <input type="text" name="ville" placeholder="Entrez votre ville" required>
            <small class="warning">*Ce champ est obligatoire</small>
          </div>
          <div class="btn">
            <button type="submit" class="inscription-button">S'inscrire</button>
          </div>
        </form>
      </div>
      <div class="another-action">
        <div class="compte-existant">Vous avez déjà un compte?</div>
        <a href="<?= site_url('/') ?>#reservation" class="connect-here">Se connecter</a>
      </div>
    </div>
  </section>
</body>
</html>