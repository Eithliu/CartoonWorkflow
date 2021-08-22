<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Iris Benoit and Bulma Contributors">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="/app/views/assets/css/style.css">
    <link rel="stylesheet" href="/app/views/assets/css/all.css">
    <title>Cartoon Workflow</title>

    <nav class="section breadcrumb" aria-label="breadcrumbs">
  <ul>
    <li><a href="<?= $router->generate('main-home') ?>" class="has-text-black">Accueil</a></li>
    <li><a href="<?= $router->generate('project-projectDisplayForm') ?>">Créer un nouveau projet</a></li>
    <?php if ($viewData['project'] !== null) {?>
    <li><a href="<?= $router->generate('plan-planDisplayForm', ['id' => $viewData['project']->getId()])?>">Ajouter un nouveau plan</a></li>
    <?php } else {
      echo '<li></li>';
    }?>
  </ul>
</nav>
</head>