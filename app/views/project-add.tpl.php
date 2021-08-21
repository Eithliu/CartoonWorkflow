<main>
  <form class="section" action="<?= $router->generate('project-projectActionForm') ?>" method="POST">
    <div class="field">
      <label for="name" class="label">Nom du projet</label>
      <div class="control">
        <input class="input" type="text" value="" name="name" placeholder="Jean-Claude à la plage">
      </div>
    </div>
    <div class="field">
      <label for="subtitle" class="label">Description du projet</label>
      <div class="control">
        <input class="input" type="text" value="" name="subtitle" placeholder="Un film où JCVD court à la plage">
      </div>
    </div>
    <div class="field">
      <label for="nbredeplans" class="label">Nombre de plans voulus</label>
      <div class="control">
        <input class="input" type="number" value="" name="nbredeplans" placeholder="24">
      </div>
    </div>
    <div class="field is-grouped">
      <div class="control">
        <button class="button is-success" type="submit">Créer</button>
      </div>
    </div>
  </form>
</main>