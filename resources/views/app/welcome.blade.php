<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare Pro - Advanced Clinic Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #4a6fa5;
            --secondary: #166088;
            --accent: #4fc3a1;
            --light: #f8f9fa;
            --dark: #343a40;
            --success: #28a745;
            --warning: #ffc107;
            --danger: #dc3545;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: #f5f7fa;
            overflow-x: hidden;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.8rem;
            font-weight: 700;
        }

        .logo i {
            margin-right: 10px;
            color: var(--accent);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 2rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            padding: 0.5rem 1rem;
            border-radius: 4px;
        }

        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <i class="fas fa-clinic-medical"></i>
                <span>MediCare Pro</span>
            </div>
            <nav>
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#dashboard">Dashboard</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li>
                        @if (Route::has('login'))
                        <nav class="flex items-center justify-end gap-3">
                            @auth
                            <a href="{{ url('/dashboard') }}"
                                class="px-4 py-2 text-sm rounded-md border border-gray-300 text-gray-800 dark:text-gray-100 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                Dashboard
                            </a>
                            @else
                            <a href="{{ route('login') }}"
                                class="px-4 py-2 text-sm rounded-md border border-gray-300 text-gray-800 dark:text-gray-100 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                Log in
                            </a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="px-4 py-2 text-sm rounded-md border border-gray-300 text-gray-800 dark:text-gray-100 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                Register
                            </a>
                            @endif
                            @endauth
                        </nav>
                        @endif
                    </li>
                </ul>
            </nav>

        </div>

    </header>

</body>

</html>