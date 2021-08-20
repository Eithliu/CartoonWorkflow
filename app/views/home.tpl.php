<main>
    <div class="card is-mobile">
        <?php foreach ($viewData['allProjects'] as $project) : ?>
            <div class="card-content is-mobile">
                <div class="media">
                    <div class="media-content">
                        <p class="title is-4">Project # <?= $project->getId() . ' ' . $project->getName() ?></p>
                    </div>
                </div>

                <div class="content">
                    <?= $project->getDescription() !== null ? $project->getDescription() : 'Pas de description ici' ?>
                    <button class="button">
                        <a href="<?= $router->generate('plan-planList') ?>">Voir les plans</a>
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</main>