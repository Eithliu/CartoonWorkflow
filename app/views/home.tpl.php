
<main>
        <div class="">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach($viewData['allProjects'] as $project): ?>
                    <div class="col">
                        <div class="card poil">
                            <a href="#">
                                <img src="#" alt="">
                                    <div class="d-flex justify-content-center align-items-center rounded">
                                        <h3 class="text-white">
                                            <?= $pokemon->getName() ?>
                                        </h3>
                                        <h3 class="text-white">
                                            <a href="<?= $router->generate('plan-plans') ?>">Voir les plans</a>
                                        </h3>
                                    </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </main>