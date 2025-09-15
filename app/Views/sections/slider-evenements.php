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
                        <p class="description">
                            <?= $evenement['lieu'] ?>
                        </p>
                        <p class="description">
                            <?= $evenement['categorie'] ?>
                        </p>
                        <p class="description my-3">
                            <?= $evenement['prix']." Ar"?>
                        </p>
                        <p class="description my-2 w-50 p-2 rounded text-center shadow <?= ($evenement['places'] < 30)? "bg-danger" : "bg-success" ?>" style="opacity: 0.8;">
                            <?= $evenement['places']." tickets restants"?>
                        </p>

                        <?php if($isConnected):?> 
                            <a id="page-reserver" href="/reserver/<?= $evenement['id'] ?>">Reserver</a>
                        <?php else: ?>
                            <a id="page-reserver" href="#book-a-table">Reserver</a>
                        <?php endif ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>