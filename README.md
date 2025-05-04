# Pahinis de Laua-an Festival Website

A modern, responsive website for the Pahinis Festival in Laua-an, Antique, celebrating the rich heritage of muscovado sugar production.

## Project Overview

The Pahinis Festival website showcases the annual celebration of muscovado sugar production in Laua-an, Antique. The website features information about the festival, event schedules, photo galleries, and contact information.

## Features

- **Responsive Design**: Fully responsive layout that works on all devices
- **Modern UI**: Clean and modern interface using Tailwind CSS
- **Dynamic Content**: PHP-based dynamic content management
- **Interactive Schedule**: Filterable event schedule with detailed event information
- **Photo Gallery**: Categorized photo gallery with pagination
- **Contact Form**: Interactive contact form with file upload capability
- **PDF Generation**: Schedule PDF generation feature

## Technical Stack

- **Frontend**:
  - HTML5
  - Tailwind CSS
  - JavaScript
  - Font Awesome Icons

- **Backend**:
  - PHP
  - MySQL (for contact form submissions)

## Directory Structure

```
pahinis_de_laua-an/
├── includes/
│   ├── config.php
│   ├── head.php
│   ├── nav.php
│   └── footer.php
├── php/
│   ├── index.php
│   ├── about.php
│   ├── contact.php
│   ├── schedule.php
│   ├── event-details.php
│   ├── gallery.php
│   ├── process_contact.php
│   └── generate_pdf.php
├── images/
│   ├── festival-gallery/
│   ├── celebrations/
│   ├── performances/
│   ├── traditional-activities/
│   ├── moscuvado-production/
│   └── tourism/
└── README.md
```

## Setup Instructions

1. **Prerequisites**:
   - XAMPP or similar local server environment
   - PHP 7.4 or higher
   - MySQL database

2. **Installation**:
   - Clone the repository to your local machine
   - Place the project in your XAMPP htdocs directory
   - Import the database schema (if provided)
   - Configure database connection in `includes/config.php`

3. **Configuration**:
   - Update the base path in `includes/config.php` if needed
   - Configure email settings in `process_contact.php` for contact form functionality

## Usage

1. **Home Page** (`index.php`):
   - Landing page with festival overview
   - Quick access to main sections

2. **About Page** (`about.php`):
   - Festival history and significance
   - Muscovado production information

3. **Schedule Page** (`schedule.php`):
   - Interactive event schedule
   - Filter by event categories
   - Download PDF schedule

4. **Gallery Page** (`gallery.php`):
   - Photo gallery with categories
   - Pagination support
   - Video highlights section

5. **Contact Page** (`contact.php`):
   - Contact form with file upload
   - Location information
   - FAQ section

## Development Guidelines

1. **Code Style**:
   - Follow PSR-4 autoloading standards
   - Use meaningful variable names
   - Comment complex logic

2. **File Organization**:
   - Keep PHP logic at the top of files
   - Separate HTML structure from PHP logic
   - Use includes for reusable components

3. **Security**:
   - Sanitize all user inputs
   - Use prepared statements for database queries
   - Implement proper file upload validation

## Contributing

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Acknowledgments

- Laua-an Municipal Government
- Pahinis Festival Committee
- Local Muscovado Producers Association

## Contact

For questions or support, please contact:
- Email: info@pahinisfestival.com
- Phone: +63 (36) 123-4567
