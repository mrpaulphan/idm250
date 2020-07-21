<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
  <div class="container header__content">
    <img class="header__logo" src="https://placehold.it/500x60" alt="This is the logo">

    <nav class="header__nav main-nav">
      <ul  class="main-nav__group">
        <li class="main-nav__item"> <a href="#" class="main-nav__link">Home</a></li>
        <li class="main-nav__item"> <a href="#" class="main-nav__link">About</a></li>
        <li class="main-nav__item"> <a href="#" class="main-nav__link">Blog</a></li>
        <li class="main-nav__item"> <a href="#" class="main-nav__link">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>
