<main>

    <div class="card columns is-mobile">
        <div class="card-header ">
            <h5 class="card-header-title">
                Projet : <?= $viewData['newProject']->getName() ?>
            </h5>
        </div>
        <form class="section" action="<?= $router->generate('plan-planActionForm') ?>" method="POST">
    <div class="field">
      <label for="duree" class="label">Durée (en images)</label>
      <div class="control">
        <input class="input" type="number" value="" name="duree" placeholder="135">
      </div>
    </div>
    <div class="field">
      <label for="image_number" class="label">Numero de plan</label>
      <div class="control">
        <input class="input" type="number" value="" name="image_number" placeholder="2">
      </div>
    </div>
    </div>
    <div class="field">
      <label for="description" class="label">Description du plan</label>
      <div class="control">
        <input class="input" type="text" value="" name="description" placeholder="Travelling latéral durant 25i, puis léger zoom sur héros">
      </div>
    </div>
    <div class="field is-grouped">
      <div class="control">
        <button class="button is-success" type="submit">Créer et passer au suivant</button>
      </div>
    </div>
  </form>
    </div>

</main>

