<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GT Fitness — Strength. Confidence. Greatness.</title>
    <meta name="description" content="GT Fitness in San Isidro Ilaya, Brgy. Maslun, Liliw. Strength training, cardio, and personal training. Join today.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              ink: '#0D0F0C',
              surface: '#1A1D18',
              bone: '#E8E6DF',
              red: '#C81E1E',
              turf: '#2F9E44',
            },
            fontFamily: {
              display: ['Oswald', 'sans-serif'],
              body: ['Inter', 'sans-serif'],
            }
          }
        }
      }
    </script>
    <style>
      html { scroll-behavior: smooth; }
      .text-outline {
        -webkit-text-stroke: 1px #E8E6DF;
        color: transparent;
      }
      ::selection { background: #C81E1E; color: #E8E6DF; }
    </style>
</head>
<body class="bg-ink text-bone font-body antialiased">

    <x-navbar />

    @yield('content')

    <x-footer />

</body>
</html>
