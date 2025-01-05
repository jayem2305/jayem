<!DOCTYPE html>
<<<<<<< HEAD
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
                <a href="mailto:jayenrique2305@gmail.com" target="_blank" class="hover:text-blue-500 flex items-center">
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
=======
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background-color: #1f1f1f;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        .nav-link {
            font-size: 1rem;
            padding: 10px 15px;
            color: #d1d5db;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #0d6efd;
        }
        .icon-button {
            font-size: 1.5rem;
            color: #d1d5db;
            transition: color 0.3s ease;
        }
        .icon-button:hover {
            color: #0d6efd;
        }
        .section {
            padding: 60px 20px;
        }
        .section h1, .section h2 {
            font-weight: bold;
        }
        .card {
            background-color: #1f1f1f;
            color: #e2e8f0;
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }
        .dark-mode {
            background-color: #262B3F;
            color: #d1d5db;
        }
        .dark-mode .card {
            background-color: #313c59;
            color: #f8f9fa;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #1f1f1f;
            color: #9a9a9a;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        footer.light-mode {
            background-color: #f8f9fa;
            color: #343a40;
        }
        footer a {
            color: #0d6efd;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        .light-navbar {
            background-color: #f8f9fa;
            color: #343a40;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .light-navbar .nav-link {
            color: #343a40;
        }
        .light-navbar .nav-link:hover {
            color: #0d6efd;
        }
        .light-navbar .navbar-brand {
            color: #343a40;
        }
        .dark-navbar .navbar-brand {
            color: #ffffff;
        }
        footer .icon-button {
            font-size: 1.5rem;
            color: #9a9a9a;
            transition: color 0.3s ease;
        }
        footer .icon-button:hover {
            color: #0d6efd;
        }
        .card-img-top {
    width: 100%;
    height: 250px; /* Set the height as desired */
    object-fit: cover; /* This ensures the images retain their aspect ratio while covering the area */
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-person-circle me-2"></i>My Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home"><i class="bi bi-house me-1"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio"><i class="bi bi-briefcase me-1"></i> Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><i class="bi bi-person me-1"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><i class="bi bi-envelope me-1"></i> Contact</a>
                    </li>
                    <li class="nav-item">
                        <span class="icon-button ms-3" id="toggle-dark-mode"><i class="bi bi-moon"></i></span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="home" class="section text-center">
        <h1>Welcome</h1>
        <p>Discover my professional journey, skills, and achievements.</p>
    </div>

    <div id="portfolio" class="section text-center">
    <h2>Portfolio</h2>
    <p>Welcome to my portfolio, showcasing a collection of my most impactful and innovative projects. With a strong foundation in mobile, web, and application development, I specialize in creating seamless and user-friendly systems tailored to meet diverse business needs.</p>
    <div class="container">

        <!-- Web Projects Section -->
        <h3 class="mt-5">Web Projects</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/brgy (1).png" class="card-img-top" alt="Barangay 781 zone 85 System">
                    <div class="card-body">
                        <h5 class="card-title">Barangay 781 zone 85 System</h5>
                        <p class="card-text">A comprehensive barangay management system designed to streamline administrative tasks and improve governance efficiency. The system includes modules for managing resident records, issuing permits, and addressing grievances. Additionally, it facilitates processing residents' requested documents, such as Indigency Certificates, ensuring a seamless and organized workflow for barangay staff and constituents.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/facerecog.png" class="card-img-top" alt="Face Recognition System">
                    <div class="card-body">
                        <h5 class="card-title">Face Recognition System</h5>
                        <p class="card-text">A robust face recognition solution that uses convolutional neural networks (CNN) for secure identity verification. This system integrates with Laravel for real-time facial matching against a pre-trained dataset.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/librarymain.png" class="card-img-top" alt="Library System">
                    <div class="card-body">
                        <h5 class="card-title">Library System</h5>
                        <p class="card-text">A modern library management platform enabling librarians to manage books, track borrow/return transactions, and monitor overdue items. The system supports barcode scanning for quick processing.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/wings88_main.png" class="card-img-top" alt="Wings 88 Ordering System">
                    <div class="card-body">
                        <h5 class="card-title">Wings 88 Ordering System</h5>
                        <p class="card-text">A user-friendly online ordering platform for Wings 88 that allows customers to browse the menu, place orders, and track their delivery status. The system supports Cash on Delivery (COD) as the sole payment method, ensuring a straightforward and secure transaction process tailored to the needs of the business.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/iggyworks.png" class="card-img-top" alt="Iggy Works Motor Shop E-Commerce System">
                    <div class="card-body">
                        <h5 class="card-title">Iggy Works Motor Shop E-Commerce System</h5>
                        <p class="card-text">An e-commerce website tailored for a motor shop, providing an inventory of motorcycle parts and accessories. It features a seamless shopping cart experience and real-time stock updates.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/POS.png" class="card-img-top" alt="POS Rentals System Sunlink Co.">
                    <div class="card-body">
                        <h5 class="card-title">POS Rentals System Sunlink Co.</h5>
                        <p class="card-text">A point-of-sale rental management system designed exclusively for Sunlink Co. The platform enables authorized company employees to monitor equipment check-ins and check-outs efficiently. It tracks rental transactions, manages equipment availability, and generates detailed invoices for clients, ensuring smooth and accurate operations within the company.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Projects Section -->
        <h3 class="mt-5">Mobile Projects</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/mobilebrgy1.jpg" class="card-img-top" alt="Barangay 781 zone 85 mobile System">
                    <div class="card-body">
                        <h5 class="card-title">Barangay 781 zone 85 Mobile System</h5>
                        <p class="card-text">A mobile extension of the barangay management system, enabling barangay officials to manage resident data and handle requests on-the-go. The app supports push notifications for real-time updates.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/Dailyreminder.jpg" class="card-img-top" alt="Daily Reminder Mobile System">
                    <div class="card-body">
                        <h5 class="card-title">Daily Reminder Mobile System</h5>
                        <p class="card-text">A productivity-focused mobile app designed to keep users organized. It allows setting daily reminders for tasks and events with customizable notifications and progress tracking features.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Custom Application Projects Section -->
        <h3 class="mt-5">Custom Application Projects</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/optimal.png" class="card-img-top" alt="Optimal Page Replacement Algorithm">
                    <div class="card-body">
                        <h5 class="card-title">Optimal Page Replacement Algorithm</h5>
                        <p class="card-text">A simulation of the Optimal Page Replacement Algorithm, designed to minimize page faults in memory management systems. This application is ideal for educational and research purposes in computer science.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/sjf.png" class="card-img-top" alt="Shortest Job First">
                    <div class="card-body">
                        <h5 class="card-title">Shortest Job First</h5>
                        <p class="card-text">An implementation of the Shortest Job First scheduling algorithm, which prioritizes processes with the shortest execution time. The application visualizes process scheduling and enhances understanding of operating system concepts.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


    <div id="about" class="section text-center">
    <h2>About Me</h2>
    <p>I am a dedicated student eager to apply my skills in web development and data science through any related opportunity. My passion lies in using modern technologies to solve real-world problems, and I am always seeking opportunities to learn and grow in a practical work environment.</p>
    <p>With experience in a variety of programming languages and frameworks, I am confident in my ability to contribute to the success of any project while expanding my knowledge. I’m excited about collaborating with experienced professionals and being exposed to industry best practices.</p>
    <p>In my spare time, I explore innovative ideas, contribute to open-source projects, and stay updated with the latest trends in technology. My goal is to work in a dynamic environment where I can apply my skills while learning from the best in the industry.</p>
    
    <h3>Skills</h3>
    <div class="d-flex justify-content-center">
        <!-- HTML -->
        <div class="skill-icon me-4">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/html-5.png" alt="HTML" width="50">
            <p>HTML</p>
        </div>
        
        <!-- CSS -->
        <div class="skill-icon me-4">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/css3.png" alt="CSS" width="50">
            <p>CSS</p>
        </div>
        
        <!-- JavaScript -->
        <div class="skill-icon me-4">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/javascript.png" alt="JavaScript" width="50">
            <p>JavaScript</p>
        </div>
        
        <!-- Python -->
        <div class="skill-icon me-4">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/python.png" alt="Python" width="50">
            <p>Python</p>
        </div>
        
        <!-- GCP -->
        <div class="skill-icon me-4">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/google-cloud-platform.png" alt="GCP" width="50">
            <p>GCP</p>
        </div>
        
        <!-- Bootstrap -->
        <div class="skill-icon me-4">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/bootstrap.png" alt="Bootstrap" width="50">
            <p>Bootstrap</p>
        </div>
        
        <!-- Laravel -->
        <div class="skill-icon me-4">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/laravel.png" alt="Laravel" width="50">
            <p>Laravel</p>
        </div>
        
        <!-- AJAX -->
        <div class="skill-icon me-4">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/jquery.png" alt="AJAX" width="50">
            <p>JQuery</p>
        </div>

        <!-- PHP -->
        <div class="skill-icon me-4">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/php.png" alt="PHP" width="50">
            <p>PHP</p>
        </div>
    </div>
</div>




    <div id="contact" class="section text-center">
        <h2>Contact</h2>
        <p>I'm always open to new opportunities and collaborations. Feel free to get in touch with me through any of the following channels:</p>
        <p><i class="bi bi-envelope me-2"></i> myemail@example.com</p>
        <p><i class="bi bi-linkedin me-2"></i> LinkedIn Profile</p>
    </div>

    <footer>
        <p>&copy; 2025 My Portfolio. Made with Bootstrap.</p>
        <div>
            <a href="https://twitter.com" target="_blank" class="icon-button me-3">
                <i class="bi bi-google"></i>
            </a>
            <a href="https://facebook.com" target="_blank" class="icon-button me-3">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" class="icon-button me-3">
                <i class="bi bi-linkedin"></i>
            </a>
            <a href="https://github.com" target="_blank" class="icon-button">
                <i class="bi bi-github"></i>
            </a>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Dark Mode Toggle Script
        const toggleButton = document.getElementById('toggle-dark-mode');
        const body = document.body;
        const footer = document.querySelector('footer');
        const navbar = document.querySelector('.navbar');
        
        toggleButton.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            footer.classList.toggle('light-mode');
            navbar.classList.toggle('light-navbar');
        });
>>>>>>> master
    </script>
</body>
</html>
