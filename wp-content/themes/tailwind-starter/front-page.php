<?php
/**
 * Template Name: Front Page
 */

get_header();
?>

<main>
  <section 
    class="h-screen bg-right-center bg-no-repeat flex items-center justify-start px-8" 
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/gaetano-hero-2.png'); background-repeat: no-repeat; background-position: bottom right; ">
    <div class="max-w-3xl">
      <h1 class="font-clash text-[60px] font-semibold leading-[72px] text-left">
        Marketing advice based <br>on credibility, not hype
      </h1>
      <ul class="mt-6 space-y-4 text-lg">
        <li class="flex items-start">
          <span class="h-6 w-6 bg-[#F4AB1E] rounded-full inline-block mr-3"></span>
          Get in-depth marketing teardowns and playbooks
        </li>
        <li class="flex items-start">
          <span class="h-6 w-6 bg-[#F4AB1E] rounded-full inline-block mr-3"></span>
          Credible insights based on what’s working in the field
        </li>
        <li class="flex items-start">
          <span class="h-6 w-6 bg-[#F4AB1E] rounded-full inline-block mr-3"></span>
          Delivered once a month
        </li>
      </ul>
      <div class="mt-8">
        <form class="flex flex-wrap items-center space-y-4 sm:space-y-0">
          <input 
            type="email" 
            placeholder="EMAIL" 
            class="flex-grow border border-gray-300 rounded-md p-4 text-lg mr-4">
          <button 
            type="submit" 
            class="bg-[#7B69E9] text-white font-medium px-6 py-4 rounded-tl-md text-lg">
            Subscribe Now
          </button>
        </form>
        <p class="mt-4 text-sm text-gray-500">Pure value – we’ll never spam you</p>
      </div>
    </div>
  </section>

  <section class="bg-[#f7f6f3] py-16">
    <div class="text-center max-w-4xl mx-auto">
      <h2 class="font-clash-grotesk text-3xl font-semibold">
        Trusted marketing advisory to top B2B companies
      </h2>
      <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-17.png" alt="Image 17" class="rounded-md shadow-md">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame-gong.png" alt="Frame Gong" class="rounded-md shadow-md">
      
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
