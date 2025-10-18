<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnterpriseHub - Login</title>

    @vite('resources/css/app.css')

    <style>

        /* Fixed top navigation for mobile */
        @media (max-width: 767px) {
            
                background:
                    {{ $baseModelView->getOverlay() }}
                ;
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br {{ $baseModelView->getGradient() }}">
    <nav class="{{ $baseModelView->getBackgroundMain() }} border-b {{ $baseModelView->getBorder() }} shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <h1 class="text-2xl font-bold {{ $baseModelView->getTextMain() }}">Enterprise<span
                            class="{{ $baseModelView->getTextMain() }}">Hub</span></h1>
                </div>

                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-8">
                        {!! $baseModelView->getDesktopMenu() !!}
                    </div>
                </div>

                <div class="md:hidden">
                    <button id="menu-toggle"
                        class="{{ $baseModelView->getTextSecondary() }} hover:{{ $baseModelView->getTextMain() }} p-2 transition-transform hover:scale-110">
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

        <div id="mobile-menu"
            class="md:hidden {{ $baseModelView->getBackground2() }} border-t {{ $baseModelView->getBorder() }}">
            <div class="px-2 pt-2 pb-3 space-y-1">
                {!! $baseModelView->getMobileMenu() !!}
            </div>
        </div>
    </nav>

    <div id="mobile-menu-overlay" class="md:hidden"></div>

    <x-flash 
        primary-data="Login failed"
        secondary-data="Login failed"
        tertiary-data="Login failed"
    />

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
    </script>
</body>

</html>