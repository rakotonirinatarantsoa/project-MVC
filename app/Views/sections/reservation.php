<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Connexion</h2>
            <p> Connectez<span>-vous</span></p>
        </div>

        <div class="row g-0">

            <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

            <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse mail" data-rule="email" data-msg="Veuillez entrer une valide adresse mail">
                        <!-- <div class="validate"></div> -->
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-6">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Votre mot de passe" data-rule="minlen:4" data-msg="">
                            <!-- <div class="validate"></div> -->
                        </div>
                        <!-- <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div> -->
                        <!-- <div class="col-lg-4 col-md-6">
                  <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div> -->
                        <!-- <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div> -->
                        <!-- <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div> -->
                    </div>
                    <div class="form-group mt-3">
                        <!-- <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div> -->
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <!-- <div class="error-message"></div> -->
                        <!-- <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div> -->
                    </div>
                    <div class="text-center"><button type="submit">Se connecter</button></div>
                    <div class="another-action">
                        <a href="/inscription" class="sinscrire">S'inscrire</a>
                        <a href="#" class="forgot-password">Mot de passe oublié?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>