<main>
    <h2 class="text-center text-white">Détails de <?= $viewData['planInfos']->getName() ?></h2>

    <div class="blocContainer">

        <div class="blocGauche">
            <img src="<?= $absoluteUrl . 'images/' . $viewData['planInfos']->getImage_number() . '.jpg' ?>" alt="">
        </div>
        <div class="blocDroite">

            <div class="text">
                <h2 class="text-left"><?= 'Plan #' . $viewData['planInfos']->getImage_number() . ' Durée : ' . $viewData['planInfos']->getDuree() ?></h2>
            </div>

            <div class="labelprogress">
                <label for="file">Description</label>
                <p class="num"><?= $viewData['planInfos']->getDescription() ?></p>
            </div>
        </div>
    </div>
</main>
