<?php

// --> For Header

$header = [
    'title' => ['SOLUTIONS <i class="bx bx-chevron-down"></i></a>
                <div class="dropdown">
                <a href="./index.php#Clients">Clients</a>
                <a href="./index.php#Testimonials">Testimonials</a>
                <a href="./index.php#Faqs">FAQs</a>
                </div>', 'DEVELOPERS <i class="bx bx-chevron-down"></i></a>
                <div class="dropdown dropdownn">
                <a href="./secondindex.php#Services">Services</a>
                <a href="./secondindex.php#Project">Project</a>
                <a href="./secondindex.php#Contact">Contact</a>
                </div>', 'CUSTOMERS', 'BLOGS'],
    'link' => ['./index.php', './secondindex.php', './thirdindex.php', './fourthindex.php'],
];

function getHeader($header)
{
    for ($i = 0; $i < sizeof($header['title']); $i++) {
        echo '<li><a href=" ' . $header['link'][$i] . ' ">' . $header['title'][$i] . '</a></li>';
    }
    return $header;
}


// --> For Footer 

$footer = [
    [
        'name' => 'PRODUCTS',
        'links' => [
            'Fleet', 'Address Autofill', 'Navigation SDK', 'Dash', 'Search', 'Maps', 'Mobile Maps SDK',
            'Studio', 'Data', 'Vision', 'Atlas', '-', 'Pricing'
        ]
    ],
    [
        'name' => 'RESOURCES',
        'links' => [
            'Industries', 'Use Cases', 'Hot-to Videos', 'Webinars', 'Events', '', '', '', '', '', '', '', '',
        ],
    ],
    [
        'name' => 'SUPPORT',
        'links' =>  [
            'Help', 'Support Service', 'Documentation', 'Open Source', '', '', '', '', '', '', '', '', '',
        ],
    ],
    [
        'name' => 'SUPPORT',
        'links' =>  [
            'About', 'Customers', 'Community', 'Careers', 'Sustainability', 'Diversity & Inclusion',
            'Team', 'Blog', 'Press', 'Concact', '', '', '',
        ],
    ],
];

function getFooter($footer)
{
    for ($i = 0; $i < sizeof($footer); $i++) {
        if ($i == 0) {
            $carouselClass = 'footer_menu products';
        } else {
            $carouselClass = 'footer_menu';
        }
        echo '<div class="' . $carouselClass . '">
                <ul>
                    <h4>' . $footer[$i]['name'] . '</h4>';
        foreach ($footer[$i]['links'] as $link) {
            if (!empty($link)) {
                echo '<li><a href="#">' . $link . '</a></li>';
            }
        }
        echo '</ul>
              </div>';
    }
    return $footer;
}


$icons = [
    '<a href="#"><i class="bx bxl-discord-alt"></i></a>', '<a href="#"><i class="bx bxl-twitter"></i></a>',
    '<a href="#"><i class="bx bxl-linkedin"></i></a>', '<a href="#"><i class="bx bxl-facebook"></i></a>',
    '<a href="#"><i class="bx bxl-instagram-alt"></i></a>'
];

function getIcons($icons)
{
    foreach ($icons as $icon) {
        echo $icon;
    }
    return $icon;
}
