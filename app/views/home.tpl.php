<main>
    <div class="card is-mobile">
        <?php foreach ($viewData['allProjects'] as $project) : ?>
            <div class="card-content is-mobile">
                <div class="media">
                    <div class="media-content">
                        <p class="title is-4"><a href="<?= $router->generate('plan-planList', ['id' => $project->getId()]) ?>">Project #<?= $project->getId() . ' ' . $project->getName() ?></a></p>
                    </div>
                </div>

                <div class="content">
                    <?= $project->getSubtitle() !== null ? $project->getSubtitle() : 'Pas de description ici' ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</main>