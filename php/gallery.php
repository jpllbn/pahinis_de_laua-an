<!DOCTYPE html>
<html lang="en">

<?php
$title = "Gallery | Pahinis de Laua-an";
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
                <li><a href="schedule.php" class="hover:text-yellow-400">Schedule</a></li>
                <li><a href="#" class="hover:text-yellow-400">Gallery</a></li>
                <li><a href="contact.php" class="hover:text-yellow-400">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative bg-cover bg-center text-white h-80"
        style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="bg-gradient-to-b from-black/50 to-black/75 absolute inset-0"></div>
        <div class="relative z-10 container mx-auto px-4 py-20 text-center">
            <h1 class="text-4xl md:text-6xl font-bold">Festival Gallery</h1>
            <p class="mt-4">Explore moments from past Pahinis Festival celebrations</p>
        </div>
    </header>

    <!-- Photo Gallery Section -->
    <section class="py-16 px-6 lg:px-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold">Photo Gallery</h2>
            <p class="mt-4">Browse through our collection of memorable moments from past festivals</p>
        </div>

        <!-- Filter Section -->
        <div class="mb-8 flex justify-center space-x-4">
            <button class="px-4 py-2 bg-yellow-600 text-white rounded-md shadow-md hover:bg-yellow-700">All Photos</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Celebrations</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Muscovado Production</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Performances</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Traditional Activities</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Tourism</button>
        </div>

        <!-- Photo Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <img src="https://via.placeholder.com/300x200" alt="Festival Photo" class="rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/300x200" alt="Festival Photo" class="rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/300x200" alt="Festival Photo" class="rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/300x200" alt="Festival Photo" class="rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/300x200" alt="Festival Photo" class="rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/300x200" alt="Festival Photo" class="rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/300x200" alt="Festival Photo" class="rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/300x200" alt="Festival Photo" class="rounded-lg shadow-lg">
        </div>
    </section>

    <!-- Video Highlights Section -->
    <section class="bg-yellow-100 py-16 px-6 lg:px-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold">Video Highlights</h2>
            <p class="mt-4">Watch video clips from past Pahinis Festival celebrations</p>
        </div>

        <!-- Video Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300x200" alt="Video Thumbnail">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Festival Opening Ceremony 2025</h3>
                    <p class="mt-2 text-sm text-gray-600">Highlights from the grand opening ceremony of last year's Pahinis Festival.</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300x200" alt="Video Thumbnail">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Muscovado Production Process</h3>
                    <p class="mt-2 text-sm text-gray-600">Step-by-step demonstration of the traditional muscovado sugar production process.</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300x200" alt="Video Thumbnail">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Tribal Dance Competition</h3>
                    <p class="mt-2 text-sm text-gray-600">The award-winning performance from last year's tribal dance competition.</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-8">
            <a href="#" class="px-6 py-3 bg-yellow-600 text-white rounded-md shadow-md hover:bg-yellow-700">View More Videos on YouTube</a>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="text-center py-16">
        <h2 class="text-2xl font-bold mb-6">Share Your Festival Memories</h2>
        <p class="mb-6">Did you attend a previous Pahinis Festival? We'd love to see and share your photos and videos! Use the hashtag #PahinisFestival or submit them directly through our contact form.</p>
        <a href="contact.html" class="px-6 py-3 bg-yellow-600 text-white rounded-md shadow-md hover:bg-yellow-700">Submit Your Photos</a>
    </section>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

</body>

</html>