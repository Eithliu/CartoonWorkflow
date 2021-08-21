<main class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="card-header-title">Détails du plan # <?= $viewData['planInfos']->getImage_number() ?></h2>
        </div>
        
        <div class="section">
            <div class="card columns is-mobile">
                <div class="card-image">
                    <img src="<?= $absoluteUrl . 'assets/images/Plan_' . $viewData['planInfos']->getImage_number() . '.jpg' ?>" alt="">
                </div>
                <div class="card-content is-mobile">
                    <h2 class="title is-5"><?= 'Plan #' . $viewData['planInfos']->getImage_number() ?>
                    <p class="subtitle is-6">Durée : <?= $viewData['planInfos']->getDuree() . ' images' ?></p>
                    <p class="title is-5">Description : </label>
                    <p class="content"><?= ' ' . $viewData['planInfos']->getDescription() ?></p>
                    <button class="button is-white"><a href="<?= $router->generate('plan-planList', ['id' => $viewData['planInfos']->getProject_id()]) ?>">Retour</a></button>
                </div>
            </div>
        </div>
    </div>
</main>