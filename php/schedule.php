<!DOCTYPE html>
<html lang="en">

<?php
$title = "Schedule | Pahinis de Laua-an";
include '../includes/head.php';
?>

<body class="font-sans bg-yellow-50 text-gray-800">

    <!-- Navigation Bar -->
    <nav class="bg-gradient-to-r from-gray-800 to-gray-700 text-white">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="text-2xl font-bold">
                <span class="text-orange-600">Pahinis</span> <span class="text-yellow-400">de Laua-an</span>
            </a>
            <!-- Navigation Links -->
            <ul class="hidden md:flex space-x-8 text-sm font-medium">
                <li><a href="../index.php" class="hover:text-yellow-400">Home</a></li>
                <li><a href="about.php" class="hover:text-yellow-400">About</a></li>
                <li><a href="#" class="hover:text-yellow-400">Schedule</a></li>
                <li><a href="gallery.php" class="hover:text-yellow-400">Gallery</a></li>
                <li><a href="contact.php" class="hover:text-yellow-400">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative bg-cover bg-center text-white h-80"
        style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="bg-gradient-to-b from-black/50 to-black/75 absolute inset-0"></div>
        <div class="relative z-10 container mx-auto px-4 py-20 text-center">
            <h1 class="text-4xl md:text-6xl font-bold">Festival Schedule</h1>
            <p class="mt-4">Plan your visit to the Pahinis Festival with our complete event schedule</p>
        </div>
    </header>

    <!-- Event Schedule Section -->
    <section class="py-16 px-6 lg:px-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold">Event Schedule</h2>
            <p class="mt-4">Join us for seven days of celebration from January 22-28, 2026</p>
        </div>

        <!-- Filter Section -->
        <div class="mb-8 flex justify-center space-x-4">
            <button class="px-4 py-2 bg-yellow-600 text-white rounded-md shadow-md hover:bg-yellow-700">All Events</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Cultural Events</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Competitions</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Workshops</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Food Events</button>
        </div>

        <!-- Day Navigation -->
        <div class="mb-8 flex justify-center space-x-4">
            <button class="px-4 py-2 bg-yellow-600 text-white rounded-md shadow-md hover:bg-yellow-700">Day 1</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Day 2</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Day 3</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Day 4</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Day 5</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Day 6</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Day 7</button>
        </div>

        <!-- Day 1 Schedule -->
        <div>
            <h3 class="text-2xl font-semibold mb-6">Day 1: January 22, 2026</h3>
            <div class="space-y-6">
                <div class="bg-white shadow-lg p-6 rounded-lg">
                    <h4 class="text-xl font-semibold">Opening Ceremony</h4>
                    <p class="mt-2 text-gray-600">The official opening of the festival with traditional blessings, speeches, and inaugural performances.</p>
                    <div class="mt-4 text-sm text-gray-500 flex items-center space-x-4">
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                            </svg>
                            9:00 AM - 11:00 AM
                        </span>
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10l9-9m0 0l9 9m-9-9v18" />
                            </svg>
                            Laua-an Town Plaza
                        </span>
                    </div>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-lg">
                    <h4 class="text-xl font-semibold">Cultural Parade</h4>
                    <p class="mt-2 text-gray-600">A vibrant parade showcasing traditional costumes, music, and dances through the main streets of Laua-an.</p>
                    <div class="mt-4 text-sm text-gray-500 flex items-center space-x-4">
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                            </svg>
                            2:00 PM - 4:00 PM
                        </span>
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10l9-9m0 0l9 9m-9-9v18" />
                            </svg>
                            Main Street to Town Plaza
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Schedule Section -->
    <section class="text-center py-16 bg-yellow-100">
        <h2 class="text-2xl font-bold mb-6">Take the Schedule With You</h2>
        <p class="mb-6">Download a printable version of our complete festival schedule to help plan your visit.</p>
        <a href="#" class="px-6 py-3 bg-yellow-600 text-white rounded-md shadow-md hover:bg-yellow-700">Download PDF Schedule</a>
    </section>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

</body>

</html>