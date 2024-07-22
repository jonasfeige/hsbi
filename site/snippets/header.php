<!doctype html>
<html lang="de">

<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" href="data:;base64,=">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= url('assets/images/favicons/apple-touch-icon.png?v=3') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= url('assets/images/favicons/favicon-32x32.png?v=3') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= url('assets/images/favicons/favicon-16x16.png?v=3') ?>">
  <link rel="mask-icon" href="<?= url('assets/images/favicons/safari-pinned-tab.svg?v=3') ?>" color="#5bbad5">
  <link rel="shortcut icon" href="<?= url('assets/images/favicons/favicon.ico?v=3') ?>">
  <meta name="msapplication-TileColor" content="#111111">
  <meta name="theme-color" content="#ffffff">

  <?php snippet('meta') ?>

  <?= css('assets/css/app.css') ?>
  <?= js('assets/js/app.js', ['defer' => true]) ?>

</head>

<body class="text-copy">

  <div data-taxi>
    <?php snippet('components/back', ['url' => $site->url()]) ?>
    <div class="text-foreground bg-background inset-0 w-full min-h-screen <?= $page->mode() ?>-mode" data-taxi-view data-back-link-url="<?= $page->backLinkUrl() ?>" data-is-subpage="<?= in_array($page->intendedTemplate(), ['program']) ?>" data-back-link-rotation="<?= $page->backLinkRotation() ?>">