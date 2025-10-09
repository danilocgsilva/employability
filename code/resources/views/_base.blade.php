<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnterpriseHub - Login</title>

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    @vite('resources/css/app.css')

    
    <style>
        /* Custom styles to match the original design */
        body {
            background: linear-gradient(135deg, #111827 0%, #1f2937 50%, #111827 100%);
        }

        /* Fixed mobile menu animation */
        #mobile-menu {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out, opacity 0.2s ease-in-out;
        }

        #mobile-menu.open {
            max-height: 300px;
            opacity: 1;
        }

        /* Smooth transitions for all interactive elements */
        button,
        a,
        input {
            transition: all 0.2s ease-in-out;
        }

        /* Fixed top navigation for mobile */
        @media (max-width: 767px) {
            nav {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                z-index: 50;
            }

            body {
                padding-top: 4rem;
                /* h-16 = 4rem */
            }

            /* Blur effect for page content when menu is open */
            #page-content {
                transition: filter 0.3s ease-in-out;
            }

            body.menu-open #page-content {
                filter: blur(4px);
                pointer-events: none;
            }

            /* Optional overlay behind mobile menu */
            #mobile-menu-overlay {
                position: fixed;
                top: 4rem;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.5);
                opacity: 0;
                visibility: hidden;
                transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
                z-index: 40;
            }

            body.menu-open #mobile-menu-overlay {
                opacity: 1;
                visibility: visible;
            }
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
    <!-- Navigation -->
    <nav class="{{ $baseModelView->getBackgroundMain() }} border-b border-gray-700 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <h1 class="text-2xl font-bold text-white">Enterprise<span class="text-gray-400">Hub</span></h1>
                </div>

                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-8">
                        <a href="{{ route('welcome') }}"
                            class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium transition-colors">Home</a>
                        <a href="#"
                            class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium transition-colors">Products</a>
                        <a href="#"
                            class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium transition-colors">Solutions</a>
                        <a href="#"
                            class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium transition-colors">About</a>
                        <a href="#"
                            class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium transition-colors">Contact</a>
                    </div>
                </div>

                <div class="md:hidden">
                    <button id="menu-toggle"
                        class="text-gray-300 hover:text-white p-2 transition-transform hover:scale-110">
                        <!-- Default hamburger icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-menu" aria-hidden="true">
                            <path d="M4 5h16"></path>
                            <path d="M4 12h16"></path>
                            <path d="M4 19h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden bg-gray-800 border-t border-gray-700">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('welcome') }}"
                    class="text-gray-300 hover:text-white block px-3 py-2 text-base font-medium transition-colors hover:bg-gray-700 rounded">Home</a>
                <a href="#"
                    class="text-gray-300 hover:text-white block px-3 py-2 text-base font-medium transition-colors hover:bg-gray-700 rounded">Products</a>
                <a href="#"
                    class="text-gray-300 hover:text-white block px-3 py-2 text-base font-medium transition-colors hover:bg-gray-700 rounded">Solutions</a>
                <a href="#"
                    class="text-gray-300 hover:text-white block px-3 py-2 text-base font-medium transition-colors hover:bg-gray-700 rounded">About</a>
                <a href="#"
                    class="text-gray-300 hover:text-white block px-3 py-2 text-base font-medium transition-colors hover:bg-gray-700 rounded">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Overlay for mobile menu (only visible on mobile) -->
    <div id="mobile-menu-overlay" class="md:hidden"></div>

    @yield('content')

    <script>
        // Mobile menu toggle functionality with animation
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const body = document.body;
        let isMenuOpen = false;

        function toHamburger() {
            const innerHtml = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu" aria-hidden="true"><path d="M4 5h16"></path><path d="M4 12h16"></path><path d="M4 19h16"></path></svg>`;
            menuToggle.innerHTML = innerHtml;
        }

        function toX() {
            const innerHtml = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>`;
            menuToggle.innerHTML = innerHtml;
        }

        function toggleMenu() {
            if (!isMenuOpen) {
                // Open the menu with animation
                mobileMenu.classList.add('open');
                body.classList.add('menu-open');
                toX();
                isMenuOpen = true;
            } else {
                // Close the menu with animation
                mobileMenu.classList.remove('open');
                body.classList.remove('menu-open');
                toHamburger();
                isMenuOpen = false;
            }
        }

        menuToggle.addEventListener('click', toggleMenu);

        // Close menu when clicking on a menu item or overlay
        const menuItems = mobileMenu.querySelectorAll('a');
        const overlay = document.getElementById('mobile-menu-overlay');

        menuItems.forEach(item => {
            item.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                body.classList.remove('menu-open');
                toHamburger();
                isMenuOpen = false;
            });
        });

        // Close menu when clicking on overlay
        overlay.addEventListener('click', () => {
            mobileMenu.classList.remove('open');
            body.classList.remove('menu-open');
            toHamburger();
            isMenuOpen = false;
        });

        // Login functionality
        const loginButton = document.getElementById('login-button');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');

        function handleSubmit() {
            const email = emailInput.value;
            const password = passwordInput.value;

            if (email && password) {
                alert('Login successful! (Demo only)');
            }
        }

        loginButton.addEventListener('click', handleSubmit);

        // Allow Enter key to submit form
        passwordInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                handleSubmit();
            }
        });
    </script>
</body>

</html>