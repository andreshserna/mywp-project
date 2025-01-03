<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="bg-white">
  <nav class="container mx-auto max-w-[1284px] flex items-center justify-between px-8 py-4">

    <a href="<?php echo home_url(); ?>" class="flex items-center">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Logo" class="h-[54px] w-[384px]">
    </a>

    <ul class="flex space-x-6 text-black font-medium text-[16px] leading-[20.8px] tracking-[0.05em]">
      <li><a href="#about" class="hover:text-gray-600 visited:text-black">About Me</a></li>
      <li><a href="#offerings" class="hover:text-gray-600 visited:text-black">My Offerings</a></li>
      <li><a href="#media" class="hover:text-gray-600 visited:text-black">Media</a></li>
      <li><a href="#testimonials" class="hover:text-gray-600 visited:text-black">Testimonials</a></li>
      <li>
        <a href="#work-btn" class="rounded-md font-medium bg-transparent border-2 border-[#F4AB1E] px-6 py-4 hover:bg-[#F4AB1E] hover:text-white text-black visited:text-black text-[16px] leading-[20.8px] tracking-[0.05em]">
          Work With Me
        </a>
      </li>
    </ul>
  </nav>
</header>
