<section class="relative h-72 bg-black flex flex-col justify-center align-center text-center space-y-4 mb-4">
  <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
    style="background-image: url('images/laravel-logo.png')"></div>

  <div class="z-10">
    <h1 class="text-6xl font-bold uppercase text-white">
      Free<span class="text-gray-500">Lance</span>
    </h1>
    <p class="text-2xl text-gray-600 font-bold my-4">
      Find or post Laravel jobs & projects
    </p>
    <div>
      <?php if(auth()->guard()->check()): ?>
      <?php else: ?>
      <a href="/register"
        class="inline-block border-2 border-gray-500 text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Sign
        Up </a>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php /**PATH C:\laragon\www\laragigs-main\resources\views/partials/_hero.blade.php ENDPATH**/ ?>