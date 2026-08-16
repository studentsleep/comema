<!-- Main Navigation (Unified) -->
<nav class="fixed w-full z-50 glass-nav border-b border-brand-accent/20 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center cursor-pointer" onclick="window.location.href='index.php'">
                <div class="flex flex-col">
                    <span class="font-serif text-3xl font-bold text-brand-dark leading-none">Come Ma</span>
                    <span class="text-[10px] tracking-widest text-brand-gold font-bold uppercase mt-1">Massage</span>
                </div>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="index.php#home" class="text-xs font-bold text-brand-dark hover:text-brand-gold transition-colors" data-i18n="nav_home">HOME</a>
                <a href="menu.php" class="text-xs font-bold text-brand-dark hover:text-brand-gold transition-colors" data-i18n="nav_menu">MASSAGE MENU</a>
                <a href="index.php#about" class="text-xs font-bold text-brand-dark hover:text-brand-gold transition-colors" data-i18n="nav_about">ABOUT US</a>
                <a href="index.php#reviews" class="text-xs font-bold text-brand-dark hover:text-brand-gold transition-colors" data-i18n="nav_reviews">REVIEWS</a>
                <a href="index.php#gallery" class="text-xs font-bold text-brand-dark hover:text-brand-gold transition-colors" data-i18n="nav_gallery">GALLERY</a>
                <a href="index.php#location" class="text-xs font-bold text-brand-dark hover:text-brand-gold transition-colors" data-i18n="nav_location">LOCATION</a>
            </div>

            <!-- Right Side Actions (Lang + CTA) -->
            <div class="hidden md:flex items-center space-x-6">
                <!-- Language Selection -->
                <div class="flex items-center space-x-3 text-[10px] font-bold">
                    <button onclick="changeLanguage('th')" class="flex items-center space-x-1 hover:text-brand-gold transition"><span class="flag-icon flag-th"></span> <span class="hidden xl:inline">TH</span></button>
                    <button onclick="changeLanguage('en')" class="flex items-center space-x-1 text-brand-gold transition"><span class="flag-icon flag-en"></span> <span class="hidden xl:inline">EN</span></button>
                    <button onclick="changeLanguage('cn')" class="flex items-center space-x-1 hover:text-brand-gold transition"><span class="flag-icon flag-cn"></span> <span class="hidden xl:inline">CN</span></button>
                    <button onclick="changeLanguage('kr')" class="flex items-center space-x-1 hover:text-brand-gold transition"><span class="flag-icon flag-kr"></span> <span class="hidden xl:inline">KR</span></button>
                </div>

                <!-- CTA Button -->
                <a href="index.php#booking" class="bg-brand-gold text-white px-5 py-2 rounded text-xs font-bold hover:bg-brand-goldHover shadow-sm transition-all flex items-center space-x-2">
                    <i class="fa-regular fa-calendar-check"></i>
                    <span data-i18n="nav_book">BOOK NOW</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden flex items-center space-x-4">
                <!-- Smaller CTA for mobile -->
                <a href="index.php#booking" class="md:hidden bg-brand-gold text-white px-3 py-1.5 rounded text-[10px] font-bold shadow-sm flex items-center">
                    <span data-i18n="nav_book">BOOK</span>
                </a>
                <button id="mobile-menu-btn" class="text-brand-dark hover:text-brand-gold focus:outline-none">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-brand-accent/20 absolute w-full shadow-xl">
        <div class="px-4 pt-2 pb-6 space-y-2 text-center">
            <a href="index.php#home" class="block px-3 py-3 text-sm font-bold text-brand-dark" data-i18n="nav_home">HOME</a>
            <a href="menu.php" class="block px-3 py-3 text-sm font-bold text-brand-dark" data-i18n="nav_menu">MASSAGE MENU</a>
            <a href="index.php#reviews" class="block px-3 py-3 text-sm font-bold text-brand-dark" data-i18n="nav_reviews">REVIEWS</a>
            <a href="index.php#location" class="block px-3 py-3 text-sm font-bold text-brand-dark" data-i18n="nav_location">LOCATION</a>
            
            <!-- Mobile Languages -->
            <div class="flex justify-center space-x-4 py-4 border-t border-gray-100 mt-2">
                <button onclick="changeLanguage('th')" class="text-xs font-bold text-gray-500 hover:text-brand-gold">TH</button>
                <button onclick="changeLanguage('en')" class="text-xs font-bold text-brand-gold">EN</button>
                <button onclick="changeLanguage('cn')" class="text-xs font-bold text-gray-500 hover:text-brand-gold">CN</button>
                <button onclick="changeLanguage('kr')" class="text-xs font-bold text-gray-500 hover:text-brand-gold">KR</button>
            </div>

            <a href="index.php#booking" class="block mt-4 bg-brand-gold text-white px-6 py-3 rounded text-sm font-bold mx-4 shadow-md flex justify-center items-center space-x-2">
                <i class="fa-regular fa-calendar-check"></i>
                <span data-i18n="nav_book">BOOK NOW</span>
            </a>
        </div>
    </div>
</nav>
