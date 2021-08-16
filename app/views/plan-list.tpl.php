<main>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach ($viewData['allPlans'] as $plan) : ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?= $router->generate('plan-planById', ['id' => $plan->getId()]) ?>">
                                <img src="<?= 'http://localhost/perso/CartoonWkf/CartoonWorkflow/app/views/assets/images/Plan_' . $plan->getImage_number() . '.jpg' ?>" alt="" class="card-img">
                                <div class="d-flex justify-content-left align-items-center rounded">
                                    <h5 class="card-text text-dark text-center">
                                        Durée : <?= $plan->getDuree() ?> (en images)
                                    </h5>
                                </div>
                                <h5 class="card-text text-dark text-left">
                                    Plan N° <?= $plan->getImage_number() ?>
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>