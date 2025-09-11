<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Russo+One&display=swap" rel="stylesheet">
    <title>tickeko</title>
</head>
<body>
    <style>
        body {
            /* background-color: #0077b6; */
            margin: 0;
            padding: 0;
            background-color: white;
        }

        .header {
            /* background-image: linear-gradient(to bottom, #0077b6 10%, white 100%); */
            background-color: #023e8a;
            font-size: 24px;
            color: white;
            height: 96px;
            position: fixed;
            left: 0;
            right: 0;
            z-index: 200;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .left-section {
            padding: 0 16px;
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        
        .middle-section {
            font-family: "Montserrat", sans-serif;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 512px;
            padding: 0 16px;
        }
        
        .right-section {
            padding: 0 16px;
        }
        
        .logo-image {
            height: 52px;
        }

        .tickeko {
            opacity: 0;
        }
        
        .header-link {
            font-size: 16px;
            color: white;
            text-decoration: none;
        }
        
        .login-btn {
            font-family: "Montserrat", sans-serif;
            border: none;
            padding: 8px 16px;
        }
    </style>
    <header class="header">
        <div class="left-section">
            <img class="logo-image" src="images/tickeko-logo-blanc.png" alt="sary">
            <p class="tickeko">Tickeko</p>
        </div>
        <div class="middle-section">
            <a class="header-link" href="">Accueil</a>
            <a class="header-link" href="">Devenir organisateur</a>
            <a class="header-link" href="">Contact</a>
            <a class="header-link" href="">Confidentialité</a>
        </div>
        <div class="right-section">
            <button class="login-btn">Se connecter</button>
            <button class="login-btn">S'inscrire</button>
        </div>
    </header>
</body>
</html>