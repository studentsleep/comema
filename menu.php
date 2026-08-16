<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Come Ma Massage | Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            blue: '#E1EFFF',
                            dark: '#1E3A5F',
                            accent: '#A9CCE3',
                            gold: '#C5A880',
                            goldHover: '#B3956D',
                            white: '#FFFFFF',
                            grayBg: '#F5F9FF'
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        serif: ['"Playfair Display"', 'serif'],
                        thai: ['"Prompt"', 'sans-serif'],
                    },
                    boxShadow: {
                        'soft': '0 10px 40px -10px rgba(27, 59, 90, 0.08)',
                        'card': '0 4px 20px rgba(0,0,0,0.05)'
                    },
                    backgroundImage: {
                        'minimal-gradient': 'linear-gradient(135deg, #E6F2FF 0%, #F5F9FF 50%, #DFEFFF 100%)',
                    }
                }
            }
        }
    </script>
    <style>
        .glass-nav { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); }
        .flag-th { background-image: url('https://flagcdn.com/w20/th.png'); }
        .flag-en { background-image: url('https://flagcdn.com/w20/gb.png'); }
        .flag-cn { background-image: url('https://flagcdn.com/w20/cn.png'); }
        .flag-kr { background-image: url('https://flagcdn.com/w20/kr.png'); }
        .flag-icon { width: 20px; height: 15px; background-size: cover; display: inline-block; border-radius: 2px; }
        .glass-card { background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.5); box-shadow: 0 10px 30px -10px rgba(30, 58, 95, 0.08); }
    </style>
</head>
<body class="bg-minimal-gradient min-h-screen text-brand-dark font-sans antialiased overflow-x-hidden">

    <?php include 'navbar.php'; ?>

    <!-- Menu Header -->
    <header class="pt-32 pb-12 text-center px-4">
        <h2 class="font-serif text-4xl md:text-5xl text-brand-dark mb-4" data-i18n="menuTitle">Our Massage Menu</h2>
        <p class="text-brand-dark/70 max-w-2xl mx-auto text-lg" data-i18n="menuSubtitle">Discover our curated selection of treatments designed to relax your body and soothe your mind.</p>
    </header>

    <!-- Menu Items -->
    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-24 space-y-8">
        <!-- Item 1: Traditional Thai Massage -->
        <div class="glass-card rounded-2xl overflow-hidden flex flex-col md:flex-row group transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <div class="md:w-2/5 h-64 md:h-auto relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" alt="Thai Massage" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-brand-dark text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Signature</div>
            </div>
            <div class="md:w-3/5 p-8 flex flex-col justify-center">
                <h3 class="font-serif text-2xl font-bold text-brand-dark mb-2" data-i18n="item1Title">Traditional Thai Massage</h3>
                <p class="text-brand-dark/70 text-sm mb-6 leading-relaxed" data-i18n="item1Desc">An ancient healing system combining acupressure, Indian Ayurvedic principles, and assisted yoga postures. Perfect for relieving muscle tension and improving flexibility.</p>
                <div class="mt-auto">
                    <div class="flex flex-col sm:flex-row justify-between items-center pt-6 border-t border-brand-dark/10 gap-4">
                        <div class="flex space-x-6 text-brand-dark">
                            <div><span class="block text-xs uppercase tracking-wider opacity-70">60 Min</span><span class="font-semibold text-lg">฿350</span></div>
                            <div><span class="block text-xs uppercase tracking-wider opacity-70">90 Min</span><span class="font-semibold text-lg">฿500</span></div>
                            <div><span class="block text-xs uppercase tracking-wider opacity-70">120 Min</span><span class="font-semibold text-lg">฿700</span></div>
                        </div>
                        <button class="w-full sm:w-auto px-6 py-2.5 rounded-full border border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white transition-colors text-sm font-semibold tracking-wide" data-i18n="btnSelect">Select</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Item 2: Aroma Oil Massage -->
        <div class="glass-card rounded-2xl overflow-hidden flex flex-col md:flex-row-reverse group transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <div class="md:w-2/5 h-64 md:h-auto relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" alt="Aroma Oil Massage" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute top-4 right-4 bg-brand-gold text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Popular</div>
            </div>
            <div class="md:w-3/5 p-8 flex flex-col justify-center">
                <h3 class="font-serif text-2xl font-bold text-brand-dark mb-2" data-i18n="item2Title">Aroma Oil Massage</h3>
                <p class="text-brand-dark/70 text-sm mb-6 leading-relaxed" data-i18n="item2Desc">A smooth, gentle, flowing style that promotes general relaxation, relieves muscular tension, and improves circulation. Choose from our 3 signature essential oil blends.</p>
                <div class="mt-auto">
                    <div class="flex flex-col sm:flex-row justify-between items-center pt-6 border-t border-brand-dark/10 gap-4">
                        <div class="flex space-x-6 text-brand-dark">
                            <div><span class="block text-xs uppercase tracking-wider opacity-70">60 Min</span><span class="font-semibold text-lg">฿500</span></div>
                            <div><span class="block text-xs uppercase tracking-wider opacity-70">90 Min</span><span class="font-semibold text-lg">฿750</span></div>
                            <div><span class="block text-xs uppercase tracking-wider opacity-70">120 Min</span><span class="font-semibold text-lg">฿1,000</span></div>
                        </div>
                        <button class="w-full sm:w-auto px-6 py-2.5 rounded-full border border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white transition-colors text-sm font-semibold tracking-wide" data-i18n="btnSelect">Select</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Item 3: Foot Massage -->
        <div class="glass-card rounded-2xl overflow-hidden flex flex-col md:flex-row group transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <div class="md:w-2/5 h-64 md:h-auto relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1374&q=80" alt="Foot Massage" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            </div>
            <div class="md:w-3/5 p-8 flex flex-col justify-center">
                <h3 class="font-serif text-2xl font-bold text-brand-dark mb-2" data-i18n="item3Title">Foot Reflexology</h3>
                <p class="text-brand-dark/70 text-sm mb-6 leading-relaxed" data-i18n="item3Desc">Focuses on pressure points in the feet that correspond to various body organs. Excellent for travelers after a long day of walking around the Old City.</p>
                <div class="mt-auto">
                    <div class="flex flex-col sm:flex-row justify-between items-center pt-6 border-t border-brand-dark/10 gap-4">
                        <div class="flex space-x-6 text-brand-dark">
                            <div><span class="block text-xs uppercase tracking-wider opacity-70">60 Min</span><span class="font-semibold text-lg">฿350</span></div>
                            <div><span class="block text-xs uppercase tracking-wider opacity-70">90 Min</span><span class="font-semibold text-lg">฿500</span></div>
                        </div>
                        <button class="w-full sm:w-auto px-6 py-2.5 rounded-full border border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white transition-colors text-sm font-semibold tracking-wide" data-i18n="btnSelect">Select</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="translations.js"></script>
    <script>
        window.addEventListener('scroll', () => { const nav = document.getElementById('navbar'); if (window.scrollY > 20) { nav.classList.add('shadow-sm'); } else { nav.classList.remove('shadow-sm'); } });
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => { menu.classList.toggle('hidden'); });
        menu.querySelectorAll('a').forEach(link => { link.addEventListener('click', () => menu.classList.add('hidden')); });
    </script>
</body>
</html>
