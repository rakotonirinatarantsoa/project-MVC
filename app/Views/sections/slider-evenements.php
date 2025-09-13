<section id="events" class="events">
    <div class="container-fluid" data-aos="fa-up">
        <div class="section-header">
            <p>Tous <span>Vos Evènements</span></p>
        </div>
        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                <?php foreach ($evenements as $evenement): ?>
                        <div id="<?= $evenement['id'] ?>" class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/<?= $evenement['image'] ?>)">
                            <h3><?= $evenement['date'] ?></h3>
                            <div class="price align-self-start"><?= $evenement['titre'] ?></div>
                            <p class="description">
                                <?= $evenement['description'] ?>
                            </p>
                            <p> <?= $evenement['lieu'] ?></p>
                            <p> <?= $evenement['categorie'] ?></p>
                            <p> <?= $evenement['places'] ?></p>
                            <p> <?= $evenement['image'] ?></p>
                    <a href="/reserver/<?= $evenement['id'] ?>">Reserver</a>
            </div>

                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>