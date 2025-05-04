<!-- Navigation Bar -->
<nav class="bg-white shadow-md sticky top-0 z-50">
  <div class="container mx-auto px-4 py-3 flex justify-between items-center">
    <!-- Logo -->
    <a href="/pahinis_de_laua-an/index.php" class="text-2xl font-bold flex items-center">
      <span class="text-orange-600">Pahinis</span><span class="text-yellow-500 ml-1">de Laua-an</span>
    </a>
    <!-- Navigation Links -->
    <ul class="hidden md:flex space-x-8 text-base font-medium">
      <li><a href="/pahinis_de_laua-an/php/index.php" class="text-gray-800 hover:text-yellow-600 transition-colors">Home</a></li>
      <li><a href="/pahinis_de_laua-an/php/about.php" class="text-gray-800 hover:text-yellow-600 transition-colors">About</a></li>
      <li><a href="/pahinis_de_laua-an/php/schedule.php" class="text-gray-800 hover:text-yellow-600 transition-colors">Schedule</a></li>
      <li><a href="/pahinis_de_laua-an/php/gallery.php" class="text-gray-800 hover:text-yellow-600 transition-colors">Gallery</a></li>
      <li><a href="/pahinis_de_laua-an/php/contact.php" class="text-gray-800 hover:text-yellow-600 transition-colors">Contact</a></li>
    </ul>
    <!-- Mobile Menu Button -->
    <button class="md:hidden text-gray-800 focus:outline-none" id="mobile-menu-button">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </div>
  <!-- Mobile Menu -->
  <div class="md:hidden hidden bg-white shadow-md" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <a href="/pahinis_de_laua-an/index.php" class="block px-3 py-2 text-gray-800 hover:text-yellow-600">Home</a>
      <a href="/pahinis_de_laua-an/php/about.php" class="block px-3 py-2 text-gray-800 hover:text-yellow-600">About</a>
      <a href="/pahinis_de_laua-an/php/schedule.php" class="block px-3 py-2 text-gray-800 hover:text-yellow-600">Schedule</a>
      <a href="/pahinis_de_laua-an/php/gallery.php" class="block px-3 py-2 text-gray-800 hover:text-yellow-600">Gallery</a>
      <a href="/pahinis_de_laua-an/php/contact.php" class="block px-3 py-2 text-gray-800 hover:text-yellow-600">Contact</a>
    </div>
  </div>
</nav>

<script>
  // Mobile menu toggle
  document.getElementById('mobile-menu-button').addEventListener('click', function() {
    document.getElementById('mobile-menu').classList.toggle('hidden');
  });
</script> 