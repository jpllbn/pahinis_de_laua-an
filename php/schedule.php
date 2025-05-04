<!DOCTYPE html>
<html lang="en">

<?php
$title = "Schedule | Pahinis de Laua-an";
include '../includes/head.php';

$events = [
    'day1' => [
        [
            'title' => 'Opening Ceremony',
            'description' => 'The official opening of the festival with traditional blessings, speeches, and inaugural performances.',
            'time' => '9:00 AM - 11:00 AM',
            'location' => 'Laua-an Town Plaza',
            'category' => 'ceremony'
        ],
        [
            'title' => 'Cultural Parade',
            'description' => 'A vibrant parade showcasing traditional costumes, music, and dances through the main streets of Laua-an.',
            'time' => '2:00 PM - 4:00 PM',
            'location' => 'Main Street to Town Plaza',
            'category' => 'cultural'
        ],
        [
            'title' => 'Muscovado Sugar Making Demo',
            'description' => 'Learn about the traditional process of making muscovado sugar from sugarcane.',
            'time' => '10:00 AM - 12:00 PM',
            'location' => 'Community Sugar Mill',
            'category' => 'cultural'
        ],
        [
            'title' => 'Traditional Food Market',
            'description' => 'Sample various local delicacies and traditional dishes made with muscovado sugar.',
            'time' => '11:00 AM - 7:00 PM',
            'location' => 'Town Plaza',
            'category' => 'food'
        ]
    ],
    'day2' => [
        [
            'title' => 'Muscovado Making Contest',
            'description' => 'Local families compete to create the finest muscovado sugar using traditional methods.',
            'time' => '10:00 AM - 2:00 PM',
            'location' => 'Community Sugar Mill',
            'category' => 'competition'
        ],
        [
            'title' => 'Traditional Games',
            'description' => 'Experience ancient Filipino games that have been preserved through generations.',
            'time' => '3:00 PM - 5:00 PM',
            'location' => 'Town Plaza',
            'category' => 'cultural'
        ],
        [
            'title' => 'Local Food Fair',
            'description' => 'Taste various local delicacies and traditional dishes made with muscovado sugar.',
            'time' => '11:00 AM - 7:00 PM',
            'location' => 'Town Plaza',
            'category' => 'food'
        ],
        [
            'title' => 'Cultural Dance Workshop',
            'description' => 'Learn traditional dances from local cultural groups.',
            'time' => '9:00 AM - 11:00 AM',
            'location' => 'Community Center',
            'category' => 'cultural'
        ]
    ],
    'day3' => [
        [
            'title' => 'Cooking Competition',
            'description' => 'Local chefs showcase their skills in creating traditional dishes using muscovado sugar.',
            'time' => '11:00 AM - 2:00 PM',
            'location' => 'Community Center',
            'category' => 'food'
        ],
        [
            'title' => 'Cultural Performances',
            'description' => 'Traditional dances and music performances from different barangays.',
            'time' => '6:00 PM - 9:00 PM',
            'location' => 'Town Plaza',
            'category' => 'cultural'
        ],
        [
            'title' => 'Awarding Ceremony',
            'description' => 'Recognition of winners from various competitions and contests.',
            'time' => '7:00 PM - 9:00 PM',
            'location' => 'Town Plaza',
            'category' => 'ceremony'
        ],
        [
            'title' => 'Muscovado Dessert Contest',
            'description' => 'Competition for the best muscovado-based desserts.',
            'time' => '2:00 PM - 5:00 PM',
            'location' => 'Community Center',
            'category' => 'competition'
        ]
    ],
    'day4' => [
        [
            'title' => 'Farm Tour',
            'description' => 'Guided tour of local sugarcane farms and muscovado production facilities.',
            'time' => '8:00 AM - 12:00 PM',
            'location' => 'Various Farms',
            'category' => 'cultural'
        ],
        [
            'title' => 'Cooking Workshop',
            'description' => 'Learn to cook traditional dishes using muscovado sugar.',
            'time' => '2:00 PM - 5:00 PM',
            'location' => 'Community Center',
            'category' => 'food'
        ],
        [
            'title' => 'Traditional Music Concert',
            'description' => 'Performance of traditional Filipino music and instruments.',
            'time' => '6:00 PM - 8:00 PM',
            'location' => 'Town Plaza',
            'category' => 'cultural'
        ],
        [
            'title' => 'Muscovado Product Fair',
            'description' => 'Showcase and sale of various muscovado-based products.',
            'time' => '10:00 AM - 6:00 PM',
            'location' => 'Town Plaza',
            'category' => 'food'
        ]
    ],
    'day5' => [
        [
            'title' => 'Artisan Market',
            'description' => 'Local artisans showcase and sell their muscovado-based products.',
            'time' => '9:00 AM - 6:00 PM',
            'location' => 'Town Plaza',
            'category' => 'cultural'
        ],
        [
            'title' => 'Cultural Dance Competition',
            'description' => 'Competition featuring traditional dances from different barangays.',
            'time' => '6:00 PM - 9:00 PM',
            'location' => 'Town Plaza',
            'category' => 'competition'
        ],
        [
            'title' => 'Traditional Food Cooking Demo',
            'description' => 'Live demonstration of cooking traditional dishes with muscovado.',
            'time' => '2:00 PM - 4:00 PM',
            'location' => 'Community Center',
            'category' => 'food'
        ],
        [
            'title' => 'Cultural Heritage Exhibit',
            'description' => 'Exhibition of local artifacts and historical items.',
            'time' => '10:00 AM - 5:00 PM',
            'location' => 'Municipal Hall',
            'category' => 'cultural'
        ]
    ],
    'day6' => [
        [
            'title' => 'Muscovado Festival Queen Pageant',
            'description' => 'Beauty pageant celebrating local culture and muscovado heritage.',
            'time' => '7:00 PM - 10:00 PM',
            'location' => 'Town Plaza',
            'category' => 'ceremony'
        ],
        [
            'title' => 'Traditional Costume Contest',
            'description' => 'Competition showcasing traditional Filipino costumes.',
            'time' => '2:00 PM - 5:00 PM',
            'location' => 'Town Plaza',
            'category' => 'competition'
        ],
        [
            'title' => 'Local Food Bazaar',
            'description' => 'Market featuring various local delicacies and muscovado products.',
            'time' => '10:00 AM - 6:00 PM',
            'location' => 'Town Plaza',
            'category' => 'food'
        ],
        [
            'title' => 'Cultural Storytelling',
            'description' => 'Local elders share stories and traditions of Laua-an.',
            'time' => '4:00 PM - 6:00 PM',
            'location' => 'Community Center',
            'category' => 'cultural'
        ]
    ],
    'day7' => [
        [
            'title' => 'Closing Ceremony',
            'description' => 'Final day celebration with awards, performances, and fireworks display.',
            'time' => '6:00 PM - 10:00 PM',
            'location' => 'Town Plaza',
            'category' => 'ceremony'
        ],
        [
            'title' => 'Grand Cultural Show',
            'description' => 'Final showcase of traditional dances and performances.',
            'time' => '7:00 PM - 9:00 PM',
            'location' => 'Town Plaza',
            'category' => 'cultural'
        ],
        [
            'title' => 'Farewell Food Festival',
            'description' => 'Final day food celebration with all participating vendors.',
            'time' => '11:00 AM - 7:00 PM',
            'location' => 'Town Plaza',
            'category' => 'food'
        ],
        [
            'title' => 'Awarding of Festival Winners',
            'description' => 'Final awarding ceremony for all competition winners.',
            'time' => '5:00 PM - 6:00 PM',
            'location' => 'Town Plaza',
            'category' => 'ceremony'
        ]
    ]
];

$categories = [
    'all' => 'All Events',
    'ceremony' => 'Ceremonies',
    'cultural' => 'Cultural Events',
    'competition' => 'Competitions',
    'food' => 'Food Events'
];
?>

<body class="font-sans bg-yellow-50 text-gray-800">
  <?php include 'includes/nav.php'; ?>

  <!-- Hero Section -->
  <header class="relative bg-cover bg-center text-white py-32"
    style="background-image: url('/pahinis_de_laua-an/images/schedule.jpg');">
    <div class="bg-gradient-to-b from-black/50 to-black/75 absolute inset-0"></div>
    <div class="relative z-10 container mx-auto px-4 py-20 text-center">
      <h1 class="text-4xl md:text-6xl font-bold tracking-tight font-serif">Festival Schedule</h1>
      <p class="mt-4 font-light">Plan your visit to the Pahinis Festival with our complete event schedule</p>
    </div>
  </header>

  <!-- Event Schedule Section -->
  <section class="py-16 px-6 lg:px-24">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold tracking-tight font-serif">Event Schedule</h2>
      <p class="mt-4 font-light">Join us for seven days of celebration from January 22-28, 2026</p>
    </div>

    <!-- Filter Section -->
    <div class="mb-8 flex flex-wrap justify-center gap-4">
      <?php foreach ($categories as $key => $label): ?>
        <button class="filter-btn px-4 py-2 rounded-md transition-colors duration-200 font-medium <?php echo $key === 'all' ? 'bg-secondary text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300'; ?>"
          data-category="<?php echo $key; ?>">
          <?php echo $label; ?>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Day Navigation -->
    <div class="mb-8 flex flex-wrap justify-center gap-4">
      <?php for ($i = 1; $i <= 7; $i++): ?>
        <button class="day-btn px-4 py-2 rounded-md transition-colors duration-200 font-medium <?php echo $i === 1 ? 'bg-secondary text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300'; ?>"
          data-day="day<?php echo $i; ?>">
          Day <?php echo $i; ?>
        </button>
      <?php endfor; ?>
    </div>

    <!-- Schedule Content -->
    <div id="schedule-content">
      <?php foreach ($events as $day => $dayEvents): ?>
        <div class="day-content <?php echo $day === 'day1' ? '' : 'hidden'; ?>" data-day="<?php echo $day; ?>">
          <h3 class="text-2xl font-semibold mb-6 tracking-tight font-serif"><?php echo ucfirst(str_replace('day', 'Day ', $day)); ?>: January <?php echo 21 + intval(substr($day, -1)); ?>, 2026</h3>
          <div class="space-y-6">
            <?php foreach ($dayEvents as $event): ?>
              <div class="card event-item" data-category="<?php echo $event['category']; ?>">
                <h4 class="text-xl font-semibold tracking-tight font-serif"><?php echo $event['title']; ?></h4>
                <p class="mt-2 font-light"><?php echo $event['description']; ?></p>
                <div class="mt-4 text-sm text-gray-500 flex items-center space-x-4">
                  <span class="flex items-center font-light">
                    <i class="fas fa-clock mr-2"></i>
                    <?php echo $event['time']; ?>
                  </span>
                  <span class="flex items-center font-light">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <?php echo $event['location']; ?>
                  </span>
                </div>
                <div class="mt-4">
                  <a href="/pahinis_de_laua-an/php/event-details.php?day=<?php echo $day; ?>&event=<?php echo urlencode($event['title']); ?>" 
                     class="text-orange-600 hover:text-orange-700 font-medium">
                    View Details <i class="fas fa-arrow-right ml-1"></i>
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Download Schedule Section -->
  <section class="text-center py-16 bg-yellow-100">
    <div class="container mx-auto px-4">
      <h2 class="text-2xl font-bold mb-6 tracking-tight">Take the Schedule With You</h2>
      <p class="mb-6 font-light">Download a printable version of our complete festival schedule to help plan your visit.</p>
      <a href="/pahinis_de_laua-an/php/generate_pdf.php" rel="noopener" class="px-6 py-3 bg-yellow-600 text-white rounded-md shadow-md hover:bg-yellow-700 inline-flex items-center font-medium">
        <i class="fas fa-download mr-2"></i>
        Download PDF Schedule
      </a>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const dayButtons = document.querySelectorAll('.day-btn');
      const filterButtons = document.querySelectorAll('.filter-btn');
      const dayContents = document.querySelectorAll('.day-content');
      const eventItems = document.querySelectorAll('.event-item');

      // Day navigation
      dayButtons.forEach(button => {
        button.addEventListener('click', function() {
          const selectedDay = this.dataset.day;
          
          // Update active state of day buttons
          dayButtons.forEach(btn => {
            btn.classList.remove('bg-secondary', 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-800');
          });
          this.classList.remove('bg-gray-200', 'text-gray-800');
          this.classList.add('bg-secondary', 'text-white');

          // Show selected day content
          dayContents.forEach(content => {
            content.classList.add('hidden');
            if (content.dataset.day === selectedDay) {
              content.classList.remove('hidden');
            }
          });

          // Reset filter to 'all' when changing days
          filterButtons.forEach(btn => {
            if (btn.dataset.category === 'all') {
              btn.classList.remove('bg-gray-200', 'text-gray-800');
              btn.classList.add('bg-secondary', 'text-white');
            } else {
              btn.classList.remove('bg-secondary', 'text-white');
              btn.classList.add('bg-gray-200', 'text-gray-800');
            }
          });

          // Show all events for the selected day
          eventItems.forEach(item => {
            if (item.closest('.day-content').dataset.day === selectedDay) {
              item.classList.remove('hidden');
            }
          });
        });
      });

      // Filter functionality
      filterButtons.forEach(button => {
        button.addEventListener('click', function() {
          const selectedCategory = this.dataset.category;
          
          // Update active state of filter buttons
          filterButtons.forEach(btn => {
            btn.classList.remove('bg-secondary', 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-800');
          });
          this.classList.remove('bg-gray-200', 'text-gray-800');
          this.classList.add('bg-secondary', 'text-white');

          // Filter events
          eventItems.forEach(item => {
            if (selectedCategory === 'all' || item.dataset.category === selectedCategory) {
              item.classList.remove('hidden');
            } else {
              item.classList.add('hidden');
            }
          });
        });
      });
    });
  </script>
</body>

</html>