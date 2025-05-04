<!DOCTYPE html>
<html lang="en">

<?php
$title = "Home | Pahinis de Laua-an";
include '../includes/head.php';
?> 

<body class="font-sans">
  <?php include 'includes/nav.php'; ?>

  <!-- Hero Section -->
  <header class="relative bg-cover bg-center text-white h-[70vh] flex items-center justify-center" style="background-image: url('/pahinis_de_laua-an/images/home_background.jpg');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/80"></div>
    <div class="relative z-10 flex flex-col items-center justify-center w-full text-center px-4">
      <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold mb-4 tracking-tight text-white drop-shadow-lg">Pahinis Festival 2026</h1>
      <p class="text-lg md:text-2xl font-light mb-2">Celebrating the Sweet Heritage of Muscovado Sugar in Laua-an, Antique</p>
      <a href="schedule.php" class="mt-6 inline-block bg-[#7C4A03] hover:bg-[#A05A13] text-white px-8 py-4 rounded-lg font-semibold text-lg shadow-lg transition-colors duration-300">Explore the Festival</a>
    </div>
  </header>


  <!-- About Section -->
  <section id="festival" class="bg-[#FFF9E6] py-20">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
      <div class="md:w-1/2 mb-8 md:mb-0">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 tracking-tight text-gray-900">The Sweetest Celebration in Western Visayas</h2>
        <p class="mb-6 text-gray-700 font-light">The Pahinis Festival, celebrated annually in the last week of January, honors the rich tradition of muscovado sugar production in Laua-an. This vibrant celebration brings together culture, heritage, and community pride.<br><br>Join us for a week-long celebration featuring traditional games, cultural performances, sugar making demonstrations, and mouth-watering local delicacies.</p>
        <a href="/pahinis_de_laua-an/php/about.php" class="inline-block bg-[#7C4A03] hover:bg-[#A05A13] text-white px-6 py-3 rounded-md font-semibold shadow transition-colors duration-300">Learn More About Our History</a>
      </div>
      <div class="md:w-1/2 flex flex-col items-center">
        <img src="/pahinis_de_laua-an/images/festival-gallery/festival.jpg" alt="Festival" class="rounded-lg shadow-lg w-full max-w-md object-cover">
        <div class="mt-4 flex items-center">
          <span class="bg-yellow-400 text-gray-900 text-sm font-semibold px-4 py-1 rounded shadow">January 22-28, 2026</span>
          <span class="ml-2 bg-white text-gray-700 text-sm px-4 py-1 rounded shadow">Laua-an, Antique</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Festival Highlights Section -->
  <section class="bg-white py-20">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 tracking-tight text-gray-900">Festival Highlights</h2>
      <p class="mb-10 text-gray-700 font-light">Immerse yourself in the cultural richness and sweet traditions of the Pahinis Festival.</p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-[#FFF9E6] p-8 rounded-lg shadow-md flex flex-col items-center">
          <span class="text-3xl mb-4 text-yellow-600"><i class="fas fa-gamepad"></i></span>
          <h3 class="text-xl font-bold mb-2 tracking-tight">Traditional Games</h3>
          <p class="text-gray-600 font-light mb-4">Experience ancient Filipino games that have been preserved through generations, showing the playful spirit of the community.</p>
          <a href="/pahinis_de_laua-an/php/schedule.php#traditional-games" class="text-yellow-700 font-semibold hover:underline">Learn More &rarr;</a>
        </div>
        <div class="bg-[#FFF9E6] p-8 rounded-lg shadow-md flex flex-col items-center">
          <span class="text-3xl mb-4 text-yellow-600"><i class="fas fa-seedling"></i></span>
          <h3 class="text-xl font-bold mb-2 tracking-tight">Muscovado Production</h3>
          <p class="text-gray-600 font-light mb-4">Witness the traditional process of making muscovado sugar, from harvesting sugarcane to the final sweet product.</p>
          <a href="/pahinis_de_laua-an/php/schedule.php#muscovado-production" class="text-yellow-700 font-semibold hover:underline">Learn More &rarr;</a>
        </div>
        <div class="bg-[#FFF9E6] p-8 rounded-lg shadow-md flex flex-col items-center">
          <span class="text-3xl mb-4 text-yellow-600"><i class="fas fa-music"></i></span>
          <h3 class="text-xl font-bold mb-2 tracking-tight">Cultural Performances</h3>
          <p class="text-gray-600 font-light mb-4">Enjoy vibrant dances, music, and theatrical performances that tell the story of Laua-an's rich heritage.</p>
          <a href="/pahinis_de_laua-an/php/schedule.php#cultural-performances" class="text-yellow-700 font-semibold hover:underline">Learn More &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Upcoming Events Section -->
  <section class="bg-gradient-to-br from-[#7C4A03] to-[#A05A13] text-white py-20">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 tracking-tight">Upcoming Events</h2>
      <p class="mb-10 text-white/80 font-light">Mark your calendar for these special moments during the festival.</p>
      <div class="space-y-6 max-w-2xl mx-auto">
        <div class="bg-white/10 p-6 rounded-lg shadow flex flex-col md:flex-row md:items-center md:justify-between">
          <div class="text-left">
            <h3 class="text-lg font-bold mb-1">Opening Ceremony</h3>
            <p class="text-white/90 text-sm font-light">The grand opening of the Pahinis Festival with traditional blessings and performances.</p>
          </div>
          <div class="flex flex-col md:items-end mt-4 md:mt-0">
            <span class="text-yellow-300 text-sm font-semibold flex items-center"><i class="fas fa-calendar-alt mr-2"></i> January 22, 2026</span>
            <span class="text-yellow-100 text-sm flex items-center"><i class="fas fa-map-marker-alt mr-2"></i> Laua-an Town Plaza</span>
          </div>
        </div>
        <div class="bg-white/10 p-6 rounded-lg shadow flex flex-col md:flex-row md:items-center md:justify-between">
          <div class="text-left">
            <h3 class="text-lg font-bold mb-1">Muscovado Making Contest</h3>
            <p class="text-white/90 text-sm font-light">Local families compete to create the finest muscovado sugar using traditional methods.</p>
          </div>
          <div class="flex flex-col md:items-end mt-4 md:mt-0">
            <span class="text-yellow-300 text-sm font-semibold flex items-center"><i class="fas fa-calendar-alt mr-2"></i> January 24, 2026</span>
            <span class="text-yellow-100 text-sm flex items-center"><i class="fas fa-map-marker-alt mr-2"></i> Community Sugar Mill</span>
          </div>
        </div>
        <div class="bg-white/10 p-6 rounded-lg shadow flex flex-col md:flex-row md:items-center md:justify-between">
          <div class="text-left">
            <h3 class="text-lg font-bold mb-1">Grand Parade</h3>
            <p class="text-white/90 text-sm font-light">A vibrant parade showcasing cultural costumes, floats, and music throughout town.</p>
          </div>
          <div class="flex flex-col md:items-end mt-4 md:mt-0">
            <span class="text-yellow-300 text-sm font-semibold flex items-center"><i class="fas fa-calendar-alt mr-2"></i> January 26, 2026</span>
            <span class="text-yellow-100 text-sm flex items-center"><i class="fas fa-map-marker-alt mr-2"></i> Main Street</span>
          </div>
        </div>
      </div>
      <a href="/pahinis_de_laua-an/php/schedule.php" class="mt-10 inline-block bg-yellow-400 hover:bg-yellow-500 text-[#7C4A03] px-8 py-3 rounded-md font-semibold shadow transition-colors duration-300">View Complete Schedule</a>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="bg-[#FFF9E6] py-20">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 tracking-tight text-gray-900">Festival Gallery</h2>
      <p class="mb-10 text-gray-700 font-light">Glimpses of joy, tradition, and community spirit from past celebrations.</p>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        <img src="/pahinis_de_laua-an/images/festival-gallery/festival.jpg" alt="Gallery Image" class="rounded-lg shadow-md object-cover h-40 w-full">
        <img src="/pahinis_de_laua-an/images/festival-gallery/festival1.jpg" alt="Gallery Image" class="rounded-lg shadow-md object-cover h-40 w-full">
        <img src="/pahinis_de_laua-an/images/festival-gallery/festival2.jpg" alt="Gallery Image" class="rounded-lg shadow-md object-cover h-40 w-full">
        <img src="/pahinis_de_laua-an/images/festival-gallery/festival3.jpg" alt="Gallery Image" class="rounded-lg shadow-md object-cover h-40 w-full">
      </div>
      <a href="/pahinis_de_laua-an/php/gallery.php" class="inline-block bg-[#7C4A03] hover:bg-[#A05A13] text-white px-6 py-3 rounded-md font-semibold shadow transition-colors duration-300"><i class="fas fa-images mr-2"></i>Explore Full Gallery</a>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="text-center py-16 bg-yellow-100">
    <h2 class="text-2xl font-bold mb-6">Join Us for Pahinis Festival 2026</h2>
    <p class="mb-6">Experience the rich cultural heritage and sweet traditions of muscovado sugar production in Laua-an, Antique.</p>
    <a href="/pahinis_de_laua-an/php/schedule.php" class="px-6 py-3 bg-yellow-600 text-white rounded-md shadow-md hover:bg-yellow-700">View Event Schedule</a>
  </section>

  <!-- Footer -->
  <?php include '../includes/footer.php'; ?>

</body>

</html>