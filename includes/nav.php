<!-- Navigation Bar -->
<nav class="bg-gradient-to-r from-gray-800 to-gray-700 text-white">
  <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <!-- Logo -->
    <a href="index.php" class="text-2xl font-bold">
      <span class="text-orange-600">Pahinis</span> <span class="text-yellow-400">de Laua-an</span>
    </a>
    <!-- Navigation Links -->
    <ul class="hidden md:flex space-x-8 text-sm font-medium">
      <li><a href="php/index.php" class="hover:text-yellow-400">Home</a></li>
      <li><a href="about.php" class="hover:text-yellow-400">About</a></li>
      <li><a href="schedule.php" class="hover:text-yellow-400">Schedule</a></li>
      <li><a href="gallery.php" class="hover:text-yellow-400">Gallery</a></li>
      <li><a href="contact.php" class="hover:text-yellow-400">Contact</a></li>
    </ul>
    <!-- Mobile Menu Button -->
    <button class="md:hidden text-white focus:outline-none" id="mobile-menu-button">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </div>
  <!-- Mobile Menu -->
  <div class="md:hidden hidden" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <a href="index.php" class="block px-3 py-2 text-white hover:text-yellow-400">Home</a>
      <a href="about.php" class="block px-3 py-2 text-white hover:text-yellow-400">About</a>
      <a href="schedule.php" class="block px-3 py-2 text-white hover:text-yellow-400">Schedule</a>
      <a href="gallery.php" class="block px-3 py-2 text-white hover:text-yellow-400">Gallery</a>
      <a href="contact.php" class="block px-3 py-2 text-white hover:text-yellow-400">Contact</a>
    </div>
  </div>
</nav>

<script>
  // Mobile menu toggle
  document.getElementById('mobile-menu-button').addEventListener('click', function() {
    document.getElementById('mobile-menu').classList.toggle('hidden');
  });
</script>