<?php
require_once '../includes/config.php';
$title = "Event Details | Pahinis de Laua-an";
include '../includes/head.php';
include '../includes/nav.php';

$day = isset($_GET['day']) ? $_GET['day'] : '';
$eventTitle = isset($_GET['event']) ? urldecode($_GET['event']) : '';

$events = [
    'day1' => [
        [
            'title' => 'Opening Ceremony',
            'description' => 'The official opening of the festival with traditional blessings, speeches, and inaugural performances.',
            'time' => '9:00 AM - 11:00 AM',
            'location' => 'Laua-an Town Plaza',
            'category' => 'ceremony',
            'details' => 'Join us for the grand opening of the Pahinis Festival 2026. The ceremony will feature traditional blessings, speeches from local officials, and cultural performances showcasing the rich heritage of Laua-an.',
            'image' => '../images/opening-ceremony.jpg'
        ],
       
    ],
];

$event = null;
if ($day && $eventTitle) {
    foreach ($events[$day] as $e) {
        if ($e['title'] === $eventTitle) {
            $event = $e;
            break;
        }
    }
}


if (!$event) {
    header('Location: schedule.php');
    exit;
}
?>

<body class="font-sans bg-yellow-50 text-gray-800">
    <?php include 'includes/nav.php'; ?>

    <section class="py-16 px-6 lg:px-24">
        <div class="container mx-auto">
            <!-- Back Button -->
            <a href="/pahinis_de_laua-an/php/schedule.php" class="inline-flex items-center text-orange-600 hover:text-orange-700 mb-8">
                <i class="fas fa-arrow-left mr-2"></i>
                Back to Schedule
            </a>

            <!-- Event Content -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Event Image -->
                <div class="h-64 bg-cover bg-center" style="background-image: url('/pahinis_de_laua-an/images/<?php echo basename($event['image']); ?>');"></div>
                
                <!-- Event Details -->
                <div class="p-8">
                    <h1 class="text-3xl font-bold mb-4 font-serif"><?php echo $event['title']; ?></h1>
                    
                    <div class="flex items-center space-x-4 text-gray-600 mb-6">
                        <span class="flex items-center">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <?php echo ucfirst(str_replace('day', 'Day ', $day)); ?>: January <?php echo 21 + intval(substr($day, -1)); ?>, 2026
                        </span>
                        <span class="flex items-center">
                            <i class="fas fa-clock mr-2"></i>
                            <?php echo $event['time']; ?>
                        </span>
                        <span class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <?php echo $event['location']; ?>
                        </span>
                    </div>

                    <div class="prose max-w-none">
                        <p class="text-lg mb-6"><?php echo $event['description']; ?></p>
                        <p class="mb-6"><?php echo $event['details']; ?></p>
                    </div>

                    <!-- Additional Information -->
                    <div class="mt-8 pt-8 border-t border-gray-200">
                        <h2 class="text-xl font-semibold mb-4">Additional Information</h2>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <i class="fas fa-info-circle text-orange-600 mt-1 mr-2"></i>
                                <span>This event is open to the public and free of charge.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-wheelchair text-orange-600 mt-1 mr-2"></i>
                                <span>The venue is wheelchair accessible.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-parking text-orange-600 mt-1 mr-2"></i>
                                <span>Free parking is available at the venue.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Share Buttons -->
                    <div class="mt-8 pt-8 border-t border-gray-200">
                        <h2 class="text-xl font-semibold mb-4">Share This Event</h2>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-600 hover:text-blue-600">
                                <i class="fab fa-facebook text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-blue-400">
                                <i class="fab fa-twitter text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-pink-600">
                                <i class="fab fa-instagram text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.md\\:hidden button');
            const mobileMenu = document.querySelector('.md\\:hidden div');

            // Mobile menu toggle
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html> 