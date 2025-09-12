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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        * {
            margin: 0;
        }

        .test {
            font-size: 48px;
        }

        /* CSS du Login */
        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #E5E7EB;
            height: 60vh;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* background-image: */
            /* linear-gradient(to bottom, rgba(255,255,255,0) 10%, white 100%), */
            /* linear-gradient(135deg, rgba(37, 99, 235, 0.7) 40%, rgba(147, 51, 234, 0.7) 67%); */
            background-color: white;
            height: 48vh;
            width: 32vw;
            box-shadow: 0 0 12px rgba(37, 99, 235, 1);
            border-radius: 16px;
            padding: 12px 24px;
        }

        .title-action {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-size: 32px;
            color: #1F2937;
            margin-bottom: 18px;
        }

        .formulaire {
            /* background-color: yellow; */
            height: 25vh;
            width: 30vw;
        }

        .input-text {
            display: flex;
            flex-direction: column;
            margin-bottom: 8px;
        }

        .input-text label {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-size: 20px;
        }

        .input-text input {
            /* border-radius: 4px; */
            padding: 8px 16px;
            border: none;
            height: 28px;
            background-color: #f3f4f7ff;
            /* width: 256px; */
        }

        .connexion-button {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: white;
            background-color: #2563EB;
            border: none;
            border-radius: 4px;
            padding: 8px 32px;
            cursor: pointer;
            transition: all 0.25s;
        }

        .connexion-button:hover {
            background-color: #1D4ED8;
            box-shadow: 0 0 12px rgba(37, 99, 235, 1);
        }

        .another-action {
            display: flex;
            justify-content: space-between;
            /* background-color: red; */
            margin-top: 16px;
            width: 28vw;
        }

        .another-action .sinscrire,
        .another-action .forgot-password {
            color: #1D4ED8;
            text-decoration: none;
        }

        .another-action .sinscrire:hover,
        .another-action .forgot-password:hover {
            color: #2563EB;
            text-decoration: underline;
        }
    </style>
    <p class="test">Tongasoa tsika</p>

    <!-- Login -->
    <section class="login-container">
        <div class="login-form">
            <div class="title-action">CONNEXION</div>

            <div class="formulaire">
                <form action="">
                    <div class="adress-input input-text">
                        <label for="">Adresse mail:</label>
                        <input type="text" placeholder="Entrez votre adresse mail">
                    </div>

                    <div class="password-input input-text">
                        <label for="">Mot de passe:</label>
                        <input type="password" placeholder="Entrez votre mot de passe">
                    </div>
                </form>
            </div>
            <button class="connexion-button">Se connecter</button>
            <div class="another-action">
                <a href="/inscription" class="sinscrire">S'inscrire</a>
                <a href="#" class="forgot-password">Mot de passe oublié?</a>
            </div>
        </div>
    </section>
</body>

</html>