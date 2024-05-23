<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <!-- link ke google font  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <!-- link ke google font  -->

        <!-- link ke icon fontAwesome -->
        <script src="https://kit.fontawesome.com/4fcf61398f.js" crossorigin="anonymous"></script>
        <title>{{  $title  }}</title>
        @vite('resources/js/app.js')
    </head>
    <body class="font-Inter">
        {{  $slot  }}

        <script src="./js/dashboard.js"></script>
        <script src="./js/theme.js"></script>
    </body>
</html>