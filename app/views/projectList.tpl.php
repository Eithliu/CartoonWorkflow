<main>
    <div class="">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($viewData['allProjects'] as $projet) : ?>
                    <div class="col">
                        <div class="card">
                            <a href="#">
                                <div class="d-flex justify-content-center align-items-center rounded">
                                    <h3 class="text-white">
                                        <?= $projet->getName() ?>
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