<!DOCTYPE html>
<html lang="en">

<?php
require_once '../includes/config.php';
$title = "Gallery | Pahinis de Laua-an";
include '../includes/head.php';
include '../includes/nav.php';

$photos = [
    "/pahinis_de_laua-an/images/festival.jpg",
    "/pahinis_de_laua-an/images/schedule.jpg",
    "/pahinis_de_laua-an/images/about.jpg",
    "/pahinis_de_laua-an/images/contact_us.jpg",
    "/pahinis_de_laua-an/images/home_background.jpg",
    // festival-gallery
    "/pahinis_de_laua-an/images/festival-gallery/festival-gallery_1.jpg",
    "/pahinis_de_laua-an/images/festival-gallery/festival-gallery_2.jpg",
    "/pahinis_de_laua-an/images/festival-gallery/festival-gallery_3.jpg",
    "/pahinis_de_laua-an/images/festival-gallery/festival-gallery_4.jpg",
    "/pahinis_de_laua-an/images/festival-gallery/festival-gallery_5.jpg",
    // celebrations
    "/pahinis_de_laua-an/images/celebrations/celebrations_1.jpg",
    "/pahinis_de_laua-an/images/celebrations/celebrations_2.jpg",
    "/pahinis_de_laua-an/images/celebrations/celebrations_3.jpg",
    "/pahinis_de_laua-an/images/celebrations/celebrations_4.jpg",
    "/pahinis_de_laua-an/images/celebrations/celebrations_5.jpg",
    "/pahinis_de_laua-an/images/celebrations/celebrations_6.jpg",
    // performances
    "/pahinis_de_laua-an/images/performances/performances_1.jpg",
    "/pahinis_de_laua-an/images/performances/performances_2.jpg",
    "/pahinis_de_laua-an/images/performances/performances_3.jpg",
    "/pahinis_de_laua-an/images/performances/performances_4.jpg",
    "/pahinis_de_laua-an/images/performances/performances_5.jpg",
    "/pahinis_de_laua-an/images/performances/performances_6.jpg",
    "/pahinis_de_laua-an/images/performances/performances_7.jpg",
    "/pahinis_de_laua-an/images/performances/performances_8.jpg",
    "/pahinis_de_laua-an/images/performances/performances_9.jpg",
    "/pahinis_de_laua-an/images/performances/performances_10.jpg",
    "/pahinis_de_laua-an/images/performances/performances_11.jpg",
    "/pahinis_de_laua-an/images/performances/performances_12.jpg",
    "/pahinis_de_laua-an/images/performances/performances_13.jpg",
    "/pahinis_de_laua-an/images/performances/performances_14.jpg",
    "/pahinis_de_laua-an/images/performances/performances_15.jpg",
    "/pahinis_de_laua-an/images/performances/performances_16.jpg",
    "/pahinis_de_laua-an/images/performances/performances_17.jpg",
    "/pahinis_de_laua-an/images/performances/performances_18.jpg",
    "/pahinis_de_laua-an/images/performances/performances_19.jpg",
    "/pahinis_de_laua-an/images/performances/performances_20.jpg",
    "/pahinis_de_laua-an/images/performances/performances_21.jpg",
    "/pahinis_de_laua-an/images/performances/performances_22.jpg",
    "/pahinis_de_laua-an/images/performances/performances_23.jpg",
    "/pahinis_de_laua-an/images/performances/performances_24.jpg",
    "/pahinis_de_laua-an/images/performances/performances_25.jpg",
    "/pahinis_de_laua-an/images/performances/performances_26.jpg",
    "/pahinis_de_laua-an/images/performances/performances_27.jpg",
    "/pahinis_de_laua-an/images/performances/performances_28.jpg",
    "/pahinis_de_laua-an/images/performances/performances_29.jpg",
    "/pahinis_de_laua-an/images/performances/performances_30.jpg",
    "/pahinis_de_laua-an/images/performances/performances_31.jpg",
    "/pahinis_de_laua-an/images/performances/performances_32.jpg",
    "/pahinis_de_laua-an/images/performances/performances_33.jpg",
    "/pahinis_de_laua-an/images/performances/performances_34.jpg",
    "/pahinis_de_laua-an/images/performances/performances_35.jpg",
    "/pahinis_de_laua-an/images/performances/performances_36.jpg",
    "/pahinis_de_laua-an/images/performances/performances_37.jpg",
    "/pahinis_de_laua-an/images/performances/performances_38.PNG",
    // traditional-activities
    "/pahinis_de_laua-an/images/traditional-activities/traditional-activities_1.png",
    "/pahinis_de_laua-an/images/traditional-activities/traditional-activities_2.jpg",
    "/pahinis_de_laua-an/images/traditional-activities/traditional-activities_3.jpg",
    "/pahinis_de_laua-an/images/traditional-activities/traditional-activities_4.jpg",
    "/pahinis_de_laua-an/images/traditional-activities/traditional-activities_5.png",
    "/pahinis_de_laua-an/images/traditional-activities/traditional-activities_6.jpg",
    // moscuvado-production
    "/pahinis_de_laua-an/images/moscuvado-production/moscuvado-production_1.jpg",
    "/pahinis_de_laua-an/images/moscuvado-production/moscuvado-production_2.jpg",
    // tourism
    "/pahinis_de_laua-an/images/tourism/tourism_1.jpg",
    "/pahinis_de_laua-an/images/tourism/tourism_2.jpg",
    "/pahinis_de_laua-an/images/tourism/tourism_3.jpg",
    "/pahinis_de_laua-an/images/tourism/tourism_4.jpg",
    "/pahinis_de_laua-an/images/tourism/tourism_5.jpg",
    "/pahinis_de_laua-an/images/tourism/tourism_6.jpg",
    "/pahinis_de_laua-an/images/tourism/tourism_7.jpg",
    "/pahinis_de_laua-an/images/tourism/tourism_8.webp",
    "/pahinis_de_laua-an/images/tourism/tourism_9.jpg",
];

$photosPerPage = 8; 
$categories = [
    'all' => $photos,
    'celebrations' => [
        "/pahinis_de_laua-an/images/celebrations/celebrations_1.jpg",
        "/pahinis_de_laua-an/images/celebrations/celebrations_2.jpg",
        "/pahinis_de_laua-an/images/celebrations/celebrations_3.jpg",
        "/pahinis_de_laua-an/images/celebrations/celebrations_4.jpg",
        "/pahinis_de_laua-an/images/celebrations/celebrations_5.jpg",
        "/pahinis_de_laua-an/images/celebrations/celebrations_6.jpg",
    ],
    'muscovado' => [
        "/pahinis_de_laua-an/images/traditional-activities/traditional-activities_2.jpg",
        "/pahinis_de_laua-an/images/traditional-activities/traditional-activities_3.jpg",
        "/pahinis_de_laua-an/images/traditional-activities/traditional-activities_4.jpg",
        "/pahinis_de_laua-an/images/traditional-activities/traditional-activities_6.jpg",
    ],
    'performances' => [
        "/pahinis_de_laua-an/images/performances/performances_1.jpg",
        "/pahinis_de_laua-an/images/performances/performances_2.jpg",
        "/pahinis_de_laua-an/images/performances/performances_3.jpg",
        "/pahinis_de_laua-an/images/performances/performances_4.jpg",
        "/pahinis_de_laua-an/images/performances/performances_5.jpg",
        "/pahinis_de_laua-an/images/performances/performances_6.jpg",
        "/pahinis_de_laua-an/images/performances/performances_7.jpg",
        "/pahinis_de_laua-an/images/performances/performances_8.jpg",
        "/pahinis_de_laua-an/images/performances/performances_9.jpg",
        "/pahinis_de_laua-an/images/performances/performances_10.jpg",
        "/pahinis_de_laua-an/images/performances/performances_11.jpg",
        "/pahinis_de_laua-an/images/performances/performances_12.jpg",
        "/pahinis_de_laua-an/images/performances/performances_13.jpg",
        "/pahinis_de_laua-an/images/performances/performances_14.jpg",
        "/pahinis_de_laua-an/images/performances/performances_15.jpg",
        "/pahinis_de_laua-an/images/performances/performances_16.jpg",
        "/pahinis_de_laua-an/images/performances/performances_17.jpg",
        "/pahinis_de_laua-an/images/performances/performances_18.jpg",
        "/pahinis_de_laua-an/images/performances/performances_19.jpg",
        "/pahinis_de_laua-an/images/performances/performances_20.jpg",
        "/pahinis_de_laua-an/images/performances/performances_21.jpg",
        "/pahinis_de_laua-an/images/performances/performances_22.jpg",
        "/pahinis_de_laua-an/images/performances/performances_23.jpg",
        "/pahinis_de_laua-an/images/performances/performances_24.jpg",
        "/pahinis_de_laua-an/images/performances/performances_25.jpg",
        "/pahinis_de_laua-an/images/performances/performances_26.jpg",
        "/pahinis_de_laua-an/images/performances/performances_27.jpg",
        "/pahinis_de_laua-an/images/performances/performances_28.jpg",
        "/pahinis_de_laua-an/images/performances/performances_29.jpg",
        "/pahinis_de_laua-an/images/performances/performances_30.jpg",
        "/pahinis_de_laua-an/images/performances/performances_31.jpg",
        "/pahinis_de_laua-an/images/performances/performances_32.jpg",
        "/pahinis_de_laua-an/images/performances/performances_33.jpg",
        "/pahinis_de_laua-an/images/performances/performances_34.jpg",
        "/pahinis_de_laua-an/images/performances/performances_35.jpg",
        "/pahinis_de_laua-an/images/performances/performances_36.jpg",
        "/pahinis_de_laua-an/images/performances/performances_37.jpg",
        "/pahinis_de_laua-an/images/performances/performances_38.PNG",
    ],
    'traditional' => [
        "/pahinis_de_laua-an/images/traditional-activities/traditional-activities_1.png",
        "/pahinis_de_laua-an/images/traditional-activities/traditional-activities_5.png",
    ],
    'tourism' => [
        "/pahinis_de_laua-an/images/tourism/tourism_1.jpg",
        "/pahinis_de_laua-an/images/tourism/tourism_2.jpg",
        "/pahinis_de_laua-an/images/tourism/tourism_3.jpg",
        "/pahinis_de_laua-an/images/tourism/tourism_4.jpg",
        "/pahinis_de_laua-an/images/tourism/tourism_5.jpg",
        "/pahinis_de_laua-an/images/tourism/tourism_6.jpg",
        "/pahinis_de_laua-an/images/tourism/tourism_7.jpg",
        "/pahinis_de_laua-an/images/tourism/tourism_8.webp",
        "/pahinis_de_laua-an/images/tourism/tourism_9.jpg",
    ]
];


$selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'all';

$filteredPhotos = isset($categories[$selectedCategory]) ? $categories[$selectedCategory] : $photos;


$totalPhotos = count($filteredPhotos);
$totalPages = ceil($totalPhotos / $photosPerPage);

$currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$currentPage = max(1, min($currentPage, $totalPages)); // Ensure the page is within range


$offset = ($currentPage - 1) * $photosPerPage;

$currentPhotos = array_slice($filteredPhotos, $offset, $photosPerPage);
?>

<body class="font-sans bg-yellow-50 text-gray-800">
    <!-- Hero Section -->
    <header class="relative bg-cover bg-center text-white h-80"
        style="background-image: url('/pahinis_de_laua-an/images/festival.jpg');">
        <div class="bg-gradient-to-b from-black/50 to-black/75 absolute inset-0"></div>
        <div class="relative z-10 container mx-auto px-4 py-20 text-center">
            <h1 class="text-4xl md:text-6xl font-bold font-serif">Festival Gallery</h1>
            <p class="mt-4">Explore moments from past Pahinis Festival celebrations</p>
        </div>
    </header>

    <!-- Photo Gallery Section -->
    <section class="py-16 px-6 lg:px-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold font-serif">Photo Gallery</h2>
            <p class="mt-4">Browse through our collection of memorable moments from past festivals</p>
        </div>

        <!-- Filter Section -->
        <div class="mb-8 flex justify-center space-x-4">
            <a href="/pahinis_de_laua-an/php/gallery.php?category=all"
                class="px-4 py-2 <?php echo $selectedCategory === 'all' ? 'bg-yellow-600 text-white' : 'bg-gray-200 text-gray-800'; ?> rounded-md hover:bg-gray-300">All
                Photos</a>
            <a href="/pahinis_de_laua-an/php/gallery.php?category=celebrations"
                class="px-4 py-2 <?php echo $selectedCategory === 'celebrations' ? 'bg-yellow-600 text-white' : 'bg-gray-200 text-gray-800'; ?> rounded-md hover:bg-gray-300">Celebrations</a>
            <a href="/pahinis_de_laua-an/php/gallery.php?category=muscovado"
                class="px-4 py-2 <?php echo $selectedCategory === 'muscovado' ? 'bg-yellow-600 text-white' : 'bg-gray-200 text-gray-800'; ?> rounded-md hover:bg-gray-300">Muscovado
                Production</a>
            <a href="/pahinis_de_laua-an/php/gallery.php?category=performances"
                class="px-4 py-2 <?php echo $selectedCategory === 'performances' ? 'bg-yellow-600 text-white' : 'bg-gray-200 text-gray-800'; ?> rounded-md hover:bg-gray-300">Performances</a>
            <a href="/pahinis_de_laua-an/php/gallery.php?category=traditional"
                class="px-4 py-2 <?php echo $selectedCategory === 'traditional' ? 'bg-yellow-600 text-white' : 'bg-gray-200 text-gray-800'; ?> rounded-md hover:bg-gray-300">Traditional
                Activities</a>
            <a href="/pahinis_de_laua-an/php/gallery.php?category=tourism"
                class="px-4 py-2 <?php echo $selectedCategory === 'tourism' ? 'bg-yellow-600 text-white' : 'bg-gray-200 text-gray-800'; ?> rounded-md hover:bg-gray-300">Tourism</a>
        </div>

        <!-- Photo Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <?php foreach ($currentPhotos as $photo): ?>
                <div class="aspect-w-4 aspect-h-16">
                    <img src="<?php echo $photo; ?>" alt="Festival Photo"
                        class="w-full h-full object-cover rounded-lg shadow-md">
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination Links -->
        <div class="mt-8 flex justify-center space-x-2">
            <?php if ($currentPage > 1): ?>
                <a href="/pahinis_de_laua-an/php/gallery.php?page=<?php echo $currentPage - 1; ?>&category=<?php echo $selectedCategory; ?>"
                    class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Previous</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="/pahinis_de_laua-an/php/gallery.php?page=<?php echo $i; ?>&category=<?php echo $selectedCategory; ?>"
                    class="px-4 py-2 <?php echo $i === $currentPage ? 'bg-yellow-600 text-white' : 'bg-gray-200 text-gray-800'; ?> rounded-md hover:bg-gray-300">
                    <?php echo $i; ?>
                </a>
            <?php endfor; ?>

            <?php if ($currentPage < $totalPages): ?>
                <a href="/pahinis_de_laua-an/php/gallery.php?page=<?php echo $currentPage + 1; ?>&category=<?php echo $selectedCategory; ?>"
                    class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Next</a>
            <?php endif; ?>
        </div>

    </section>

    <!-- Video Highlights Section -->
    <section class="bg-yellow-100 py-16 px-6 lg:px-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold font-serif">Video Highlights</h2>
            <p class="mt-4">Watch video clips from past Pahinis Festival celebrations</p>
        </div>

        <!-- Video Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="card overflow-hidden">
                <div class="aspect-w-16 aspect-h-12 rounded-lg overflow-hidden">
                    <iframe class="w-full h-full rounded-lg" src="https://www.youtube.com/embed/tnrOzMPtxvo?si=Y0YXoIb7EoyAqs75"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-lg font-serif">Festival Opening Ceremony 2025</h3>
                    <p class="mt-2 text-sm text-text-light">Highlights from the grand opening ceremony of last year's
                        Pahinis Festival.</p>
                </div>
            </div>
            <div class="card overflow-hidden">
                <div class="aspect-w-16 aspect-h-6 rounded-lg overflow-hidden">
                    <iframe class="w-full h-full rounded-lg" src="https://www.youtube.com/embed/-HTyFGGEeas?si=ir32Dj1Sb4qBjWni"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-lg font-serif">Muscovado Production Process</h3>
                    <p class="mt-2 text-sm text-text-light">Step-by-step demonstration of the traditional muscovado
                        sugar production process.</p>
                </div>
            </div>
            <div class="card overflow-hidden">
                <div class="aspect-w-16 aspect-h-6 rounded-lg overflow-hidden">
                    <iframe class="w-full h-full rounded-lg" src="https://www.youtube.com/embed/Y8CaQOtcC64?si=yXLkri_Mad2n7p_8"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-lg font-serif">Tribal Dance Competition</h3>
                    <p class="mt-2 text-sm text-text-light">The award-winning performance from last year's tribal dance
                        competition.</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-8">
            <a href="https://www.youtube.com/results?search_query=Pahinis+Festival" target="_blank" class="px-6 py-3 bg-yellow-600 text-white rounded-md shadow-md hover:bg-yellow-700">View More
                Videos on YouTube</a>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="text-center py-16">
        <h2 class="text-2xl font-bold mb-6 font-serif">Share Your Festival Memories</h2>
        <p class="mb-6">Did you attend a previous Pahinis Festival? We'd love to see and share your photos and videos!
            Use the hashtag #PahinisFestival or submit them directly through our contact form.</p>
        <a href="/pahinis_de_laua-an/php/contact.php"
            class="px-6 py-3 bg-yellow-600 text-white rounded-md shadow-md hover:bg-yellow-700">Submit Your Photos</a>
    </section>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

</body>

</html>