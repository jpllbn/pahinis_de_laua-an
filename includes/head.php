<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($title) ? $title : 'Pahinis de Laua-an'; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/imports.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Poppins', 'sans-serif'],
          },
          colors: {
            primary: '#F59E0B',
            secondary: '#D97706',
            dark: '#1F2937',
            'primary-dark': '#0f1f3d',
            'secondary-dark': '#b7791f',
            'secondary-light': '#ecc94b',
            accent: '#ecc94b',
            background: '#f7fafc',
            text: '#2d3748',
            'text-light': '#718096',
          },
          spacing: {
            'xs': '0.25rem',
            'sm': '0.5rem',
            'md': '1rem',
            'lg': '1.5rem',
            'xl': '2rem',
          },
          borderRadius: {
            'sm': '0.25rem',
            'md': '0.5rem',
            'lg': '1rem',
          },
          boxShadow: {
            'sm': '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
            'md': '0 4px 6px -1px rgba(0, 0, 0, 0.1)',
            'lg': '0 10px 15px -3px rgba(0, 0, 0, 0.1)',
          },
        }
      }
    }
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.21.0/dist/sweetalert2.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>