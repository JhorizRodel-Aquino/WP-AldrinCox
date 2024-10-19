<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php is_front_page() ? blogInfo('title') : wp_title() ?></title>
    <?php wp_head()?>
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script>
      (function () {
        emailjs.init({
          publicKey: "pTqqaW4QQPbbe_8-G",
        });
      })();
    </script>
  </head>

  <body>
    <!-- HEADER -->
    <header class="header">
      <h1 class="opacity-0 z-[-1] absolute top-[-100%]">
        Aldrin Cox Visa Services LLC
      </h1>
      <div
        class="header__wrapper flex justify-between items-center px-10 lg:px-20 max-w-[1600px] mx-auto"
      >
        <div class="header__logo">
          <?php if(function_exists('the_custom_logo')) {
            the_custom_logo();
          }?>
        </div>
        <nav>
          <ul>
            <?php wp_nav_menu(array(
              'theme_location' => 'header_menu',
              'menu_class'=> 'header__nav'
            ))?>
          </ul>
        </nav>

        <div class="toggle__menu">
          <span class=""></span>
          <span class=""></span>
        </div>
      </div>
      <div class="backdrop"></div>
    </header>