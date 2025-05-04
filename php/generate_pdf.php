<?php
require('../vendor/autoload.php');

// Create new PDF document
$pdf = new FPDF();
$pdf->AddPage();

// Set document properties
$pdf->SetTitle('Pahinis Festival 2026 Schedule');
$pdf->SetAuthor('Pahinis de Laua-an');
$pdf->SetCreator('Pahinis Festival Website');

// Set font
$pdf->SetFont('Arial', 'B', 24);

// Title
$pdf->Cell(0, 20, 'Pahinis Festival 2026', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(0, 10, 'Event Schedule', 0, 1, 'C');
$pdf->Ln(10);

// Event data
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

// Add each day's schedule
foreach ($events as $day => $dayEvents) {
    // Check if we need a new page
    if ($pdf->GetY() > 250) {
        $pdf->AddPage();
    }
    
    // Day header
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetFillColor(240, 240, 240);
    $pdf->Cell(0, 10, ucfirst(str_replace('day', 'Day ', $day)) . ': January ' . (21 + intval(substr($day, -1))) . ', 2026', 0, 1, 'L', true);
    $pdf->Ln(5);

    foreach ($dayEvents as $event) {
        // Check if we need a new page
        if ($pdf->GetY() > 250) {
            $pdf->AddPage();
        }
        
        // Event title
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 8, $event['title'], 0, 1);
        
        // Event description
        $pdf->SetFont('Arial', '', 10);
        $pdf->MultiCell(0, 6, $event['description'], 0, 'L');
        
        // Event details
        $pdf->SetFont('Arial', 'I', 10);
        $pdf->Cell(40, 6, 'Time:', 0, 0);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(0, 6, $event['time'], 0, 1);
        
        $pdf->SetFont('Arial', 'I', 10);
        $pdf->Cell(40, 6, 'Location:', 0, 0);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(0, 6, $event['location'], 0, 1);
        
        $pdf->SetFont('Arial', 'I', 10);
        $pdf->Cell(40, 6, 'Category:', 0, 0);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(0, 6, ucfirst($event['category']), 0, 1);
        
        $pdf->Ln(5);
    }
    $pdf->Ln(10);
}

// Add footer
$pdf->SetY(-15);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, 'Generated on: ' . date('Y-m-d H:i:s'), 0, 0, 'C');

// Set headers for download
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="Pahinis_Festival_Schedule_2026.pdf"');
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');

// Output the PDF
$pdf->Output('D', 'Pahinis_Festival_Schedule_2026.pdf');
?> 