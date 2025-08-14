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

        .cta-button {
            background-color: var(--accent);
            color: white;
            padding: 0.7rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
        }

        .cta-button:hover {
            background-color: #3daa8a;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .mobile-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            padding: 15rem 0 14rem;
            background: linear-gradient(rgba(74, 111, 165, 0.9), rgba(22, 96, 136, 0.9)), url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
        }

        .secondary-button {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 0.7rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
        }

        .secondary-button:hover {
            background-color: white;
            color: var(--primary);
        }

        /* Features Section */
        .section {
            padding: 5rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 1rem;
        }

        .section-title p {
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--accent);
            margin-bottom: 1.5rem;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--secondary);
        }

        /* Dashboard Preview */
        .dashboard-preview {
            background-color: var(--light);
            padding: 5rem 0;
        }

        .dashboard-container {
            display: flex;
            align-items: center;
            gap: 3rem;
        }

        .dashboard-text {
            flex: 1;
        }

        .dashboard-text h2 {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 1.5rem;
        }

        .dashboard-text p {
            margin-bottom: 1.5rem;
            color: #555;
        }

        .dashboard-image {
            flex: 1;
            position: relative;
        }

        .dashboard-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .dashboard-image:hover img {
            transform: scale(1.02);
        }

        .highlight-box {
            background-color: var(--accent);
            color: white;
            padding: 1.5rem;
            border-radius: 10px;
            margin-top: 2rem;
        }

        .highlight-box h3 {
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        /* Testimonials */
        .testimonials {
            background-color: white;
            padding: 5rem 0;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background-color: var(--light);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: var(--shadow);
            position: relative;
        }

        .testimonial-card:before {
            content: '"';
            font-size: 5rem;
            color: rgba(0, 0, 0, 0.05);
            position: absolute;
            top: 10px;
            left: 20px;
            line-height: 1;
        }

        .testimonial-content {
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 1rem;
        }

        .author-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            font-size: 1.1rem;
            margin-bottom: 0.2rem;
        }

        .author-info p {
            color: #666;
            font-size: 0.9rem;
        }

        /* Pricing */
        .pricing {
            background-color: var(--light);
            padding: 5rem 0;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .pricing-card {
            background-color: white;
            border-radius: 10px;
            padding: 2.5rem 2rem;
            box-shadow: var(--shadow);
            text-align: center;
            transition: var(--transition);
        }

        .pricing-card:hover {
            transform: translateY(-10px);
        }

        .pricing-card.popular {
            border: 2px solid var(--accent);
            position: relative;
        }

        .popular-tag {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background-color: var(--accent);
            color: white;
            padding: 0.3rem 1.5rem;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .pricing-card h3 {
            font-size: 1.5rem;
            color: var(--secondary);
            margin-bottom: 1rem;
        }

        .price {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1.5rem;
        }

        .price span {
            font-size: 1rem;
            color: #666;
            font-weight: 400;
        }

        .pricing-features {
            margin-bottom: 2rem;
        }

        .pricing-features li {
            list-style: none;
            padding: 0.7rem 0;
            border-bottom: 1px solid #eee;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 5rem 0;
            text-align: center;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .cta-section p {
            max-width: 700px;
            margin: 0 auto 2rem;
            font-size: 1.1rem;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 4rem 0 2rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .footer-col h3 {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footer-col h3:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent);
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 0.8rem;
        }

        .footer-col ul li a {
            color: #bbb;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-col ul li a:hover {
            color: white;
            padding-left: 5px;
        }

        .footer-col p {
            color: #bbb;
            margin-bottom: 1.5rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--accent);
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bbb;
            font-size: 0.9rem;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .dashboard-container {
                flex-direction: column;
            }

            .dashboard-text,
            .dashboard-image {
                flex: none;
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            nav ul {
                display: none;
            }

            .mobile-menu {
                display: block;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .section-title h2 {
                font-size: 2rem;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate {
            animation: fadeIn 0.8s ease forwards;
        }

        .delay-1 {
            animation-delay: 0.2s;
        }

        .delay-2 {
            animation-delay: 0.4s;
        }

        .delay-3 {
            animation-delay: 0.6s;
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
                        @if (Route::has('central.login'))
                        <nav class="flex items-center justify-end gap-3">
                            @auth
                            <a href="{{ url('/dashboard') }}"
                                class="px-4 py-2 text-sm rounded-md border border-gray-300 text-gray-800 dark:text-gray-100 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                Dashboard
                            </a>
                            @else
                            <a href="{{ route('central.login') }}"
                                class="px-4 py-2 text-sm rounded-md border border-gray-300 text-gray-800 dark:text-gray-100 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                Log in
                            </a>

                            @if (Route::has('central.register'))
                            <a href="{{ route('central.register') }}"
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
            <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>

    </header>


    <!-- Hero Section -->
    <section class="hero ">
        <div class="container">
            <h1 class="animate">Revolutionize Your Clinic Management</h1>
            <p class="animate delay-1">MediCare Pro is a comprehensive clinic management system designed to streamline
                operations, enhance patient care, and boost your practice's efficiency.</p>
            <div class="hero-buttons">
                <a href="#pricing" class="cta-button animate delay-2">View Plans</a>
                <a href="#features" class="secondary-button animate delay-3">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section" id="features">
        <div class="container">
            <div class="section-title">
                <h2>Powerful Features</h2>
                <p>Everything you need to manage your clinic efficiently in one integrated platform</p>
            </div>
            <div class="features-grid">
                <div class="feature-card animate">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Appointment Scheduling</h3>
                    <p>Intuitive calendar with automated reminders reduces no-shows and optimizes your schedule.</p>
                </div>
                <div class="feature-card animate delay-1">
                    <div class="feature-icon">
                        <i class="fas fa-user-injured"></i>
                    </div>
                    <h3>Patient Management</h3>
                    <p>Comprehensive patient records with medical history, prescriptions, and treatment plans.</p>
                </div>
                <div class="feature-card animate delay-2">
                    <div class="feature-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h3>Billing & Invoicing</h3>
                    <p>Automated billing system with insurance claim processing and payment tracking.</p>
                </div>
                <div class="feature-card animate">
                    <div class="feature-icon">
                        <i class="fas fa-pills"></i>
                    </div>
                    <h3>Inventory Management</h3>
                    <p>Track medications and supplies with low-stock alerts and automated reordering.</p>
                </div>
                <div class="feature-card animate delay-1">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Analytics & Reporting</h3>
                    <p>Generate insightful reports on clinic performance, finances, and patient statistics.</p>
                </div>
                <div class="feature-card animate delay-2">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile Access</h3>
                    <p>Access your clinic data anytime, anywhere with our secure mobile application.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Preview -->
    <section class="section dashboard-preview" id="dashboard">
        <div class="container dashboard-container">
            <div class="dashboard-text">
                <h2>Intuitive Dashboard</h2>
                <p>Our user-friendly interface provides a comprehensive overview of your clinic's operations at a
                    glance. Monitor appointments, patient flow, and financial metrics in real-time.</p>
                <p>Customizable widgets allow you to prioritize the information that matters most to your practice,
                    while our clean design ensures you spend less time navigating and more time with patients.</p>
                <div class="highlight-box">
                    <h3>Key Benefits</h3>
                    <p>Reduce administrative workload by up to 60% while improving patient satisfaction and clinic
                        revenue with our all-in-one management solution.</p>
                </div>
            </div>
            <div class="dashboard-image">
                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                    alt="Clinic Management System Dashboard">
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section testimonials" id="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Trusted by Healthcare Professionals</h2>
                <p>Hear what our customers say about transforming their practices with MediCare Pro</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card animate">
                    <div class="testimonial-content">
                        <p>Since implementing MediCare Pro, our clinic has seen a 40% reduction in administrative time
                            and a significant improvement in patient satisfaction scores. The system pays for itself in
                            efficiency gains.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Dr. Sarah Johnson">
                        </div>
                        <div class="author-info">
                            <h4>Dr. Sarah Johnson</h4>
                            <p>Family Practice, Boston</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card animate delay-1">
                    <div class="testimonial-content">
                        <p>The billing module alone has saved us countless hours. Insurance claims are processed faster,
                            and we've reduced our accounts receivable days by 35%. Highly recommended for any medical
                            practice.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Dr. Michael Chen">
                        </div>
                        <div class="author-info">
                            <h4>Dr. Michael Chen</h4>
                            <p>Cardiology Center, Chicago</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card animate delay-2">
                    <div class="testimonial-content">
                        <p>As a small practice, we needed an affordable solution that could grow with us. MediCare Pro
                            has exceeded our expectations with its scalability and excellent customer support.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Dr. Angela Martinez">
                        </div>
                        <div class="author-info">
                            <h4>Dr. Angela Martinez</h4>
                            <p>Pediatric Clinic, Austin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="section pricing" id="pricing">
        <div class="container">
            <div class="section-title">
                <h2>Simple, Transparent Pricing</h2>
                <p>Choose the plan that fits your practice size and needs</p>
            </div>
            <div class="pricing-grid">
                <div class="pricing-card animate">
                    <h3>Starter</h3>
                    <div class="price">$99<span>/month</span></div>
                    <ul class="pricing-features">
                        <li>Up to 5 users</li>
                        <li>Basic appointment scheduling</li>
                        <li>Patient records management</li>
                        <li>Email support</li>
                        <li>Basic reporting</li>
                    </ul>
                    <a href="#" class="secondary-button">Get Started</a>
                </div>
                <div class="pricing-card popular animate delay-1">
                    <div class="popular-tag">Most Popular</div>
                    <h3>Professional</h3>
                    <div class="price">$199<span>/month</span></div>
                    <ul class="pricing-features">
                        <li>Up to 15 users</li>
                        <li>Advanced scheduling</li>
                        <li>Billing & invoicing</li>
                        <li>Inventory management</li>
                        <li>Priority support</li>
                        <li>Advanced analytics</li>
                    </ul>
                    <a href="#" class="cta-button">Get Started</a>
                </div>
                <div class="pricing-card animate delay-2">
                    <h3>Enterprise</h3>
                    <div class="price">$399<span>/month</span></div>
                    <ul class="pricing-features">
                        <li>Unlimited users</li>
                        <li>Multi-location support</li>
                        <li>Custom reporting</li>
                        <li>API access</li>
                        <li>Dedicated account manager</li>
                        <li>24/7 premium support</li>
                    </ul>
                    <a href="#" class="secondary-button">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta-section">
        <div class="container">
            <h2 class="animate">Ready to Transform Your Clinic?</h2>
            <p class="animate delay-1">Join thousands of healthcare providers who trust MediCare Pro to streamline their
                operations and deliver better patient care.</p>
            <a href="#" class="cta-button animate delay-2">Start Your Free 14-Day Trial</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>MediCare Pro</h3>
                    <p>Comprehensive clinic management software designed to help healthcare providers deliver
                        exceptional patient care while optimizing practice operations.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Features</h3>
                    <ul>
                        <li><a href="#">Appointment Scheduling</a></li>
                        <li><a href="#">Patient Management</a></li>
                        <li><a href="#">Billing & Invoicing</a></li>
                        <li><a href="#">Inventory Control</a></li>
                        <li><a href="#">Reporting & Analytics</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Resources</h3>
                    <ul>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Webinars</a></li>
                        <li><a href="#">API Developer Portal</a></li>
                        <li><a href="#">Community Forum</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 MediCare Pro. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.animate');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });

            animateElements.forEach(el => {
                el.style.opacity = 0;
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });

            // Mobile menu toggle
            const mobileMenu = document.querySelector('.mobile-menu');
            const nav = document.querySelector('nav ul');

            mobileMenu.addEventListener('click', () => {
                nav.style.display = nav.style.display === 'flex' ? 'none' : 'flex';
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });

                        // Close mobile menu if open
                        if (window.innerWidth <= 768) {
                            nav.style.display = 'none';
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>