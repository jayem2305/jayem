<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jhon Mark A. Enrique - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMA+Uj0EZ5ebl5Zwo8U4s7Fd2zD06lZ+e3b2Wm0" crossorigin="anonymous">
</head>
<body class="bg-gray-900 text-gray-100 font-sans leading-normal tracking-normal">
    <!-- Dark Mode Toggle Button -->
    <div class="fixed top-4 right-4">
        <button onclick="toggleDarkMode()" class="p-2 bg-yellow-300 text-black rounded dark:bg-blue-500 dark:text-white">
            Toggle Light Mode
        </button>
    </div>

    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-gray-800 shadow p-4 flex justify-center space-x-8">
        <a href="#home" class="text-blue-300 hover:text-blue-500">Home</a>
        <a href="#portfolio" class="text-blue-300 hover:text-blue-500">Portfolio</a>
        <a href="#about" class="text-blue-300 hover:text-blue-500">About</a>
        <a href="#contact" class="text-blue-300 hover:text-blue-500">Contact</a>
    </nav>

    <!-- Home Section -->
    <section id="home" class="h-screen flex flex-col justify-center items-center pt-16">
        <h1 class="text-4xl font-bold text-blue-400">Jhon Mark A. Enrique</h1>
        <p class="text-gray-300 mt-2">Computer Science Student Major in Application Development</p>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="p-6 bg-gray-800">
        <h2 class="text-2xl font-bold text-blue-400 text-center">Portfolio</h2>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 bg-gray-700 shadow rounded">
                <h3 class="text-lg font-semibold">Web Application Project</h3>
                <p class="text-gray-300">Type: Web</p>
            </div>
            <div class="p-4 bg-gray-700 shadow rounded">
                <h3 class="text-lg font-semibold">Mobile App Project</h3>
                <p class="text-gray-300">Type: Mobile</p>
            </div>
        </div>
    </section>

    <!-- About Me Section -->
    <section id="about" class="p-6 bg-gray-900">
        <h2 class="text-2xl font-bold text-blue-400 text-center">About Me</h2>
        <p class="mt-4 text-gray-300 text-center">
            I'm Jhon Mark A. Enrique, currently taking a Bachelor of Science in Computer Science Major in Application Development. I am a web app developer skilled in Laravel, MySQL, Bootstrap, and Ajax. I am currently also the Lead programmer, Project manager, and Leader in my current thesis and capstone. I focus on creating scalable, user-friendly applications with secure authentication and real-time databases.
        </p>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="p-6 bg-gray-800">
        <h2 class="text-2xl font-bold text-blue-400 text-center">Contact Me</h2>
        <div class="mt-4 flex flex-col items-center space-y-4">
            <p class="text-gray-300">Feel free to reach out to me through any of the following platforms:</p>
            <div class="flex space-x-6 text-blue-300">
                <a href="mailto:jhonmark@gmail.com" target="_blank" class="hover:text-blue-500 flex items-center">
                    <i class="fas fa-envelope fa-lg mr-2"></i> <!-- Adjusted size and added margin -->
                    Email
                </a>
                <a href="tel:+1234567890" target="_blank" class="hover:text-blue-500 flex items-center">
                    <i class="fas fa-phone fa-lg mr-2"></i> <!-- Adjusted size and added margin -->
                    +63-999-872-6506
                </a>
                <a href="https://www.facebook.com/JaY.M.EnRiQuE" target="_blank" class="hover:text-blue-500 flex items-center">
                    <i class="fab fa-facebook fa-lg mr-2"></i> <!-- Adjusted size and added margin -->
                    Facebook
                </a>
                <a href="https://www.instagram.com/jayjayemem/" target="_blank" class="hover:text-blue-500 flex items-center">
                    <i class="fab fa-instagram fa-lg mr-2"></i> <!-- Adjusted size and added margin -->
                    Instagram
                </a>
                <a href="https://github.com/jayem2305" target="_blank" class="hover:text-blue-500 flex items-center">
                    <i class="fab fa-github fa-lg mr-2"></i> <!-- Adjusted size and added margin -->
                    GitHub
                </a>
            </div>
        </div>
    </section>

    <!-- Smooth Scrolling and Dark Mode Script -->
    <script>
        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Dark Mode Toggle
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
        }

        // Set initial theme based on local storage
        if (localStorage.getItem('darkMode') !== 'false') {
            document.documentElement.classList.add('dark');
        }
    </script>
</body>
</html>
