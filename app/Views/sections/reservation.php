<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Vous voulez reservez des billets ?</h2>
            <p> Connectez<span>-vous</span></p>
        </div>

        <div class="row g-0">

            <!-- <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div> -->

            <div class="reservation-form-bg">
                <!-- <form action="/connexion" method="post" class="php-email-form">
                    <div class="col-lg-4 col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="Votre adresse mail" required>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-6">
                            <input type="password" name="password" class="form-control" placeholder="Votre mot de passe" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit">Se connecter</button>
                    </div>
                    <div class="another-action">
                        <a href="/inscription" class="sinscrire">S'inscrire</a>
                        <a href="#" class="forgot-password">Mot de passe oublié?</a>
                    </div>
                </form> -->
                <form action="/connexion" method="post">
                    <input type="email" name="email">
                    <input type="password" name="password" id="">
                    <button type="submit">Se connecter</button>
                </form>

<!-- message d'erreur si besoin -->
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>