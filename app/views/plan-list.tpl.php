<main>
    <section class="section columns is-mobile">
        <div class="card-header">
            <h1 class="card-header-title is-3">Projet <?= $viewData['project']->getName() ?></h1>
            <button class="button is-white"><a href="<?= $router->generate('main-home') ?>" class="has-text-danger">Retour</a></button>
        </div>
        <?php foreach ($viewData['allPlans'] as $plan): ?>
            <div class="card">

                <div class="card-header columns is-mobile">
                    <h5 class="card-header-title is-centered">
                        Plan #<?= $plan->getImage_number(); ?>
                    </h5>
                </div>
                <div class="card-image is-48x48">
                    <a href="<?= $router->generate('plan-planById', ['id' => $plan->planId]) ?>">
                        <img src="<?= $absoluteUrl . 'assets/images/Plan_' . $plan->getImage_number() . '.jpg' ?>" alt="" width="512px">
                    </a>
                </div>
                <div class="card-content">
                    <h5 class="content">
                        Durée : <?= $plan->getDuree() ?> images
                    </h5>
                </div>

            </div>
        <?php endforeach; ?>
    </section>
</main>