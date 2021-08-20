<main>
    <section class="section">Projet </section>
    <?php foreach ($viewData['allPlans'] as $plan) : ?>
        <div class="card columns is-mobile">

            <div class="card-header ">
                <h5 class="card-header-title">
                    # <?= $plan->getProject_id(); ?> Plan N° <?= $plan->getNumero(); ?>
                </h5>
            </div>
            <div class="card-image">
                <a href="<?= $router->generate('plan-planById', ['id' => $plan->getId()]) ?>">
                    <img src="<?= 'http://localhost/perso/CartoonWkf/CartoonWorkflow/app/views/assets/images/Plan_' . $plan->getImage_number() . '.jpg' ?>" alt="" class="image" width="256px">
                </a>
            </div>
            <div class="card-content">
                <h5 class="content">
                    Durée : <?= $plan->getDuree() ?>  images
                </h5>
            </div>


        </div>
    <?php endforeach; ?>
</main>