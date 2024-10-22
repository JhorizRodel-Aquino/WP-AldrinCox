<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php is_front_page() ? blogInfo('title') : wp_title() ?></title>
    <meta name="description" content="Expert visa services in Florida, USA, specializing in K1, B1/B2, and Green Card visa applications. Fast, reliable assistance for travel and immigration to the USA." />
    <meta name="keywords" content="Visa services Florida, K1 visa application, B1/B2 visa assistance, Green Card application help, Florida immigration services, USA visa expert, Fiancé visa services, K1 visa petition, Form I-129F assistance, Fiancé visa interview preparation, US immigration lawyer, K1 visa process timeline, Fiancé visa attorney, expedited visa processing, Fiancé to Green Card adjustment, US fiancé visa experts, tourist visa consultants, K1 visa Florida expert, Green Card support, immigration paperwork assistance" />
    <meta name="author" content="Aquino Jhoriz and de Guzman Kinlie" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Aldrin Cox Visa Services LLC | K1, B1/B2, Green Card" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://aldrincoxvisa.com" />
    <meta property="og:image" content="https://aldrincoxvisa.com/images/og-image.png" />
    <meta property="og:description" content="Expert visa services in Florida, USA, specializing in K1, B1/B2, and Green Card visa applications. Fast, reliable assistance for travel and immigration to the USA." />
    <meta property="og:site_name" content="Aldrin Cox Visa Services LLC" />
    <meta property="og:locale" content="en_US" />

    <!-- Twitter Card Meta Tags (Optional) -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Aldrin Cox Visa Services LLC for Filipinos | K1, B1/B2, Green Card" />
    <meta name="twitter:description" content="Expert visa services in Florida, USA, specializing in K1, B1/B2, and Green Card visa applications. Fast, reliable assistance for travel and immigration to the USA." />
    <meta name="twitter:image" content="https://aldrincoxvisa.com/images/og-image.png" />
    
    <?php wp_head()?>
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script>
      (function () {
        emailjs.init({
          publicKey: "GQrCnxjNyqUvRRzA7",
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
        class="header__wrapper flex justify-between items-center px-5 sm:px-10 lg:px-20 max-w-[1600px] mx-auto"
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