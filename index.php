<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Come Ma Massage | Authentic Thai Massage Chiang Mai Old City</title>
    <meta name="description" content="Experience authentic Thai Massage in Chiang Mai Old City. Top-rated massage near Chiang Mai Gate offering oil massage, foot massage, and aroma therapies. Book your relaxing session today!">
    <meta name="keywords" content="Thai Massage Chiang Mai, Massage near Chiang Mai Gate, Oil Massage Chiang Mai Old City, Best Massage Chiang Mai, Come Ma Massage">
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
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-minimal-gradient min-h-screen text-brand-dark font-sans antialiased overflow-x-hidden">

    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section id="home" class="relative bg-brand-blue pt-32 pb-48 lg:pt-40 lg:pb-56 overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10">
            <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" class="w-full h-full object-cover" alt="Background Texture">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="max-w-2xl text-center lg:text-left">
                    <h1 class="text-5xl lg:text-6xl font-serif font-bold text-brand-dark leading-[1.1] mb-4" data-i18n="hero_title">
                        Your Peaceful<br>
                        <span class="text-brand-dark">Thai Massage Experience</span><br>
                        <span class="text-[0.65em] font-light">in the Heart of Chiang Mai</span>
                    </h1>
                    <p class="font-thai text-xl text-brand-accent mb-8" data-i18n="hero_subtitle">ผ่อนคลายอย่างแท้จริง ใจกลางเมืองเชียงใหม่</p>
                    <div class="flex flex-wrap justify-center lg:justify-start gap-4 mb-10">
                        <div class="flex items-center space-x-2 bg-white/60 backdrop-blur px-3 py-1.5 rounded-full shadow-sm text-sm border border-white">
                            <i class="fa-solid fa-star text-brand-gold"></i>
                            <span class="font-bold text-brand-dark">4.9/5</span>
                            <span class="text-gray-600 text-xs hidden sm:inline" data-i18n="hero_badge_google">Google Rating</span>
                        </div>
                        <div class="flex items-center space-x-2 bg-white/60 backdrop-blur px-3 py-1.5 rounded-full shadow-sm text-sm border border-white">
                            <i class="fa-regular fa-comment-dots text-brand-accent"></i>
                            <span class="font-bold text-brand-dark">1,800+</span>
                            <span class="text-gray-600 text-xs hidden sm:inline" data-i18n="hero_badge_reviews">Reviews</span>
                        </div>
                        <div class="flex items-center space-x-2 bg-white/60 backdrop-blur px-3 py-1.5 rounded-full shadow-sm text-sm border border-white">
                            <i class="fa-solid fa-globe text-brand-accent"></i>
                            <span class="font-bold text-brand-dark text-xs" data-i18n="hero_badge_global">Loved by Guests Worldwide</span>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#booking" class="w-full sm:w-auto bg-brand-gold text-white text-center px-8 py-4 rounded font-bold text-lg hover:bg-brand-goldHover shadow-lg transition-all flex justify-center items-center space-x-2">
                            <i class="fa-regular fa-calendar-check"></i>
                            <span data-i18n="hero_btn_book">BOOK NOW</span>
                        </a>
                        <a href="menu.php" class="w-full sm:w-auto bg-white text-brand-dark text-center px-8 py-4 rounded font-bold text-lg border-2 border-brand-accent/30 hover:border-brand-accent transition-all flex justify-center items-center space-x-2">
                            <span data-i18n="hero_btn_menu">VIEW OUR MENU</span>
                            <i class="fa-solid fa-arrow-down text-sm"></i>
                        </a>
                    </div>
                </div>
                <div class="relative hidden lg:block">
                    <img src="https://images.unsplash.com/photo-1600334129128-685054110230?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Thai Massage Therapist" class="rounded-t-[100px] rounded-br-[100px] object-cover h-[500px] w-full shadow-2xl border-8 border-white">
                    <div class="absolute -bottom-8 -left-8 bg-white p-4 rounded-2xl shadow-xl flex items-center space-x-3 border border-brand-blue">
                        <div class="w-12 h-12 bg-brand-blue rounded-full flex items-center justify-center text-brand-dark text-xl"><i class="fa-solid fa-spa"></i></div>
                        <div>
                            <p class="text-xs text-gray-500 font-bold" data-i18n="hero_float_sub">Come Ma Vibe</p>
                            <p class="font-bold text-brand-dark text-sm" data-i18n="hero_float_title">Clean • Relaxing • Professional</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="relative z-20 -mt-24 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-card p-8 border border-gray-100">
                <div class="text-center mb-8">
                    <h3 class="text-xl font-bold text-brand-dark font-serif" data-i18n="why_title">WHY CHOOSE COME MA MASSAGE?</h3>
                    <div class="flex justify-center items-center mt-2 space-x-2 text-brand-accent"><div class="h-px w-12 bg-brand-accent/30"></div><i class="fa-solid fa-leaf text-xs"></i><div class="h-px w-12 bg-brand-accent/30"></div></div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-6 text-center">
                    <div class="space-y-3"><div class="w-12 h-12 mx-auto text-brand-accent text-2xl flex items-center justify-center"><i class="fa-solid fa-broom"></i></div><h4 class="font-bold text-brand-dark text-sm" data-i18n="why_1_title">Clean & Comfortable</h4><p class="text-xs text-gray-500 font-thai" data-i18n="why_1_desc">ร้านสะอาด เป็นระเบียบ บรรยากาศผ่อนคลาย</p></div>
                    <div class="space-y-3"><div class="w-12 h-12 mx-auto text-brand-accent text-2xl flex items-center justify-center"><i class="fa-solid fa-hands"></i></div><h4 class="font-bold text-brand-dark text-sm" data-i18n="why_2_title">Professional Therapists</h4><p class="text-xs text-gray-500 font-thai" data-i18n="why_2_desc">พนักงานมีประสบการณ์ ผ่านการฝึกฝนเทคนิค</p></div>
                    <div class="space-y-3"><div class="w-12 h-12 mx-auto text-brand-accent text-2xl flex items-center justify-center"><i class="fa-solid fa-mug-hot"></i></div><h4 class="font-bold text-brand-dark text-sm" data-i18n="why_3_title">Little Things That Matter</h4><p class="text-xs text-gray-500 font-thai" data-i18n="why_3_desc">บริการน้ำอัญชันมะนาว ผ้าร้อน ชา และคุกกี้</p></div>
                    <div class="space-y-3"><div class="w-12 h-12 mx-auto text-brand-accent text-2xl flex items-center justify-center"><i class="fa-solid fa-earth-americas"></i></div><h4 class="font-bold text-brand-dark text-sm" data-i18n="why_4_title">Loved by Guests</h4><p class="text-xs text-gray-500 font-thai" data-i18n="why_4_desc">ได้รับความไว้วางใจ จากลูกค้าหลากหลายประเทศ</p></div>
                    <div class="space-y-3 col-span-2 md:col-span-1"><div class="w-12 h-12 mx-auto text-brand-accent text-2xl flex items-center justify-center"><i class="fa-solid fa-location-dot"></i></div><h4 class="font-bold text-brand-dark text-sm" data-i18n="why_5_title">Prime Location</h4><p class="text-xs text-gray-500 font-thai" data-i18n="why_5_desc">อยู่ในเขตเมืองเก่า ใกล้ประตูเชียงใหม่</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Massage Menu -->
    <section id="menu" class="py-16 bg-brand-grayBg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-brand-dark font-serif" data-i18n="menu_title">OUR MASSAGE MENU</h2>
                <div class="flex justify-center items-center mt-3 space-x-2 text-brand-accent"><div class="h-px w-16 bg-brand-accent/30"></div><i class="fa-solid fa-spa text-sm"></i><div class="h-px w-16 bg-brand-accent/30"></div></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <div class="bg-white rounded-xl shadow-card overflow-hidden flex flex-col group border border-gray-100 hover:shadow-soft transition-all">
                    <div class="h-48 overflow-hidden"><img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Thai Massage" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"></div>
                    <div class="p-5 flex-grow flex flex-col text-center">
                        <h4 class="font-bold text-brand-dark text-lg mb-1" data-i18n="srv_thai_title">Thai Massage</h4>
                        <p class="text-xs text-gray-500 font-thai mb-2" data-i18n="srv_thai_sub">นวดไทยผ่อนคลาย คลายกล้ามเนื้อ</p>
                        <div class="mt-auto pt-4 border-t border-gray-100 flex items-center justify-between">
                            <div class="text-left"><span class="text-[10px] text-gray-400 block uppercase" data-i18n="menu_from">FROM</span><span class="font-bold text-brand-dark text-xl">300 <span class="text-xs font-normal">THB</span></span></div>
                            <a href="#booking" class="text-[10px] font-bold border border-brand-gold text-brand-gold px-3 py-1.5 rounded hover:bg-brand-gold hover:text-white transition-colors" data-i18n="menu_btn_book">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-card overflow-hidden flex flex-col group border border-brand-gold/30 hover:shadow-soft transition-all relative">
                    <div class="absolute top-2 left-2 bg-brand-gold text-white text-[9px] font-bold px-2 py-1 rounded z-10" data-i18n="badge_popular">POPULAR</div>
                    <div class="h-48 overflow-hidden"><img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Aroma Oil Massage" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"></div>
                    <div class="p-5 flex-grow flex flex-col text-center">
                        <h4 class="font-bold text-brand-dark text-lg mb-1" data-i18n="srv_oil_title">Aroma Oil Massage</h4>
                        <p class="text-xs text-gray-500 font-thai mb-2" data-i18n="srv_oil_sub">นวดน้ำมันอโรม่า ฟื้นฟูความผ่อนคลาย</p>
                        <div class="mt-auto pt-4 border-t border-gray-100 flex items-center justify-between">
                            <div class="text-left"><span class="text-[10px] text-gray-400 block uppercase" data-i18n="menu_from">FROM</span><span class="font-bold text-brand-dark text-xl">500 <span class="text-xs font-normal">THB</span></span></div>
                            <a href="#booking" class="text-[10px] font-bold border border-brand-gold text-brand-gold px-3 py-1.5 rounded hover:bg-brand-gold hover:text-white transition-colors" data-i18n="menu_btn_book">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-card overflow-hidden flex flex-col group border border-gray-100 hover:shadow-soft transition-all">
                    <div class="h-48 overflow-hidden"><img src="https://images.unsplash.com/photo-1519824145371-29681f010376?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Foot Massage" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"></div>
                    <div class="p-5 flex-grow flex flex-col text-center">
                        <h4 class="font-bold text-brand-dark text-lg mb-1" data-i18n="srv_foot_title">Foot Massage</h4>
                        <p class="text-xs text-gray-500 font-thai mb-2" data-i18n="srv_foot_sub">นวดเท้า ผ่อนคลาย ลดความเมื่อยล้า</p>
                        <div class="mt-auto pt-4 border-t border-gray-100 flex items-center justify-between">
                            <div class="text-left"><span class="text-[10px] text-gray-400 block uppercase" data-i18n="menu_from">FROM</span><span class="font-bold text-brand-dark text-xl">250 <span class="text-xs font-normal">THB</span></span></div>
                            <a href="#booking" class="text-[10px] font-bold border border-brand-gold text-brand-gold px-3 py-1.5 rounded hover:bg-brand-gold hover:text-white transition-colors" data-i18n="menu_btn_book">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-card overflow-hidden flex flex-col group border border-gray-100 hover:shadow-soft transition-all relative">
                    <div class="absolute top-2 left-2 bg-brand-accent text-white text-[9px] font-bold px-2 py-1 rounded z-10" data-i18n="badge_recommend">RECOMMENDED</div>
                    <div class="h-48 overflow-hidden"><img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Herbal Compress" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"></div>
                    <div class="p-5 flex-grow flex flex-col text-center">
                        <h4 class="font-bold text-brand-dark text-lg mb-1" data-i18n="srv_herb_title">Herbal Compress</h4>
                        <p class="text-xs text-gray-500 font-thai mb-2" data-i18n="srv_herb_sub">ประคบสมุนไพร คลายความตึงเครียด</p>
                        <div class="mt-auto pt-4 border-t border-gray-100 flex items-center justify-between">
                            <div class="text-left"><span class="text-[10px] text-gray-400 block uppercase" data-i18n="menu_from">FROM</span><span class="font-bold text-brand-dark text-xl">700 <span class="text-xs font-normal">THB</span></span></div>
                            <a href="#booking" class="text-[10px] font-bold border border-brand-gold text-brand-gold px-3 py-1.5 rounded hover:bg-brand-gold hover:text-white transition-colors" data-i18n="menu_btn_book">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="bg-brand-blue/30 rounded-xl shadow-card p-6 flex flex-col border border-brand-accent/20">
                    <h4 class="font-bold text-brand-dark text-lg mb-4 text-center" data-i18n="srv_other_title">Other Services</h4>
                    <ul class="text-sm text-gray-700 space-y-3 flex-grow">
                        <li class="flex items-center space-x-2"><i class="fa-solid fa-check text-brand-gold text-xs"></i><span data-i18n="srv_o1">Foot Scrub</span></li>
                        <li class="flex items-center space-x-2"><i class="fa-solid fa-check text-brand-gold text-xs"></i><span data-i18n="srv_o2">Head & Shoulder</span></li>
                        <li class="flex items-center space-x-2"><i class="fa-solid fa-check text-brand-gold text-xs"></i><span data-i18n="srv_o3">Aloe Vera Massage</span></li>
                        <li class="flex items-center space-x-2"><i class="fa-solid fa-check text-brand-gold text-xs"></i><span data-i18n="srv_o4">Tok Sen Massage</span></li>
                    </ul>
                    <a href="menu.php" class="block text-center text-xs font-bold bg-white border border-brand-dark text-brand-dark py-2 rounded mt-4 hover:bg-brand-dark hover:text-white transition-colors" data-i18n="menu_btn_viewall">VIEW ALL SERVICES</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="py-16 bg-brand-blue relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-brand-dark font-serif uppercase tracking-wide" data-i18n="rev_main_title">Loved by Customers From Around The World</h2>
                <div class="flex justify-center items-center mt-4 space-x-4">
                    <span class="text-4xl font-bold text-brand-dark">4.9</span>
                    <div class="text-brand-gold text-xl"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <span class="text-sm font-bold text-gray-600" data-i18n="rev_count">1,800+ Google Reviews</span>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-card border border-white"><div class="flex items-center justify-between mb-4"><div class="flex items-center space-x-3"><div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center font-bold text-xs"><span class="flag-icon flag-kr"></span></div><h5 class="font-bold text-sm text-brand-dark">Minji Park</h5></div><i class="fa-brands fa-google text-gray-300"></i></div><div class="text-brand-gold text-xs mb-3"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><p class="text-sm text-gray-600 leading-relaxed">"매우 깨끗하고 직원분들이 정말 친절해요! 마사지 실력이 최고입니다. 다음에 또 올게요!"</p></div>
                <div class="bg-white p-6 rounded-2xl shadow-card border border-white"><div class="flex items-center justify-between mb-4"><div class="flex items-center space-x-3"><div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center font-bold text-xs"><span class="flag-icon flag-cn"></span></div><h5 class="font-bold text-sm text-brand-dark">Wei Chen</h5></div><i class="fa-brands fa-google text-gray-300"></i></div><div class="text-brand-gold text-xs mb-3"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><p class="text-sm text-gray-600 leading-relaxed">"环境超赞，按摩师专业，按完真的好放松。在清迈最喜欢的一家店！"</p></div>
                <div class="bg-white p-6 rounded-2xl shadow-card border border-white"><div class="flex items-center justify-between mb-4"><div class="flex items-center space-x-3"><div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center font-bold text-xs"><span class="flag-icon flag-en"></span></div><h5 class="font-bold text-sm text-brand-dark">Sarah Johnson</h5></div><i class="fa-brands fa-google text-gray-300"></i></div><div class="text-brand-gold text-xs mb-3"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><p class="text-sm text-gray-600 leading-relaxed">"Excellent service! Very clean and relaxing. The best massage experience in Chiang Mai. Highly recommend!"</p></div>
                <div class="bg-white p-6 rounded-2xl shadow-card border border-white hidden lg:block"><div class="flex items-center justify-between mb-4"><div class="flex items-center space-x-3"><div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center font-bold text-xs"><span class="flag-icon" style="background-image: url('https://flagcdn.com/w20/jp.png')"></span></div><h5 class="font-bold text-sm text-brand-dark">Yuki Tanaka</h5></div><i class="fa-brands fa-google text-gray-300"></i></div><div class="text-brand-gold text-xs mb-3"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><p class="text-sm text-gray-600 leading-relaxed">"とてもリラックスできる空間でした。スタッフも親切で、また必ず来ます！"</p></div>
            </div>
            <div class="text-center mt-8"><a href="#" class="inline-flex items-center space-x-2 text-brand-dark text-sm font-bold hover:text-brand-gold transition-colors"><span data-i18n="rev_btn_all">Read more reviews on Google</span><i class="fa-solid fa-arrow-right"></i></a></div>
        </div>
    </section>

    <!-- More Than a Massage -->
    <section id="about" class="py-16 bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl font-bold text-brand-dark font-serif uppercase tracking-wide" data-i18n="amen_title">More Than a Massage</h2>
                <p class="text-gray-500 text-sm mt-2" data-i18n="amen_subtitle">We believe a great massage is not only about the treatment. It's about how you feel before, during and after your experience.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 text-center">
                <div><div class="w-24 h-24 mx-auto rounded-full overflow-hidden border-4 border-brand-blue mb-3"><img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Welcome Drink" class="w-full h-full object-cover"></div><h5 class="font-bold text-brand-dark text-sm" data-i18n="amen_1_title">Welcome Drink</h5><p class="text-[10px] text-gray-500 uppercase" data-i18n="amen_1_sub">Butterfly Pea Lemon</p></div>
                <div><div class="w-24 h-24 mx-auto rounded-full overflow-hidden border-4 border-brand-blue mb-3"><img src="https://images.unsplash.com/photo-1584488349141-8608e5fc8672?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Cold Towel" class="w-full h-full object-cover"></div><h5 class="font-bold text-brand-dark text-sm" data-i18n="amen_2_title">Cold Towel</h5><p class="text-[10px] text-gray-500 uppercase" data-i18n="amen_2_sub">Refreshing</p></div>
                <div><div class="w-24 h-24 mx-auto rounded-full overflow-hidden border-4 border-brand-blue mb-3"><img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Environment" class="w-full h-full object-cover"></div><h5 class="font-bold text-brand-dark text-sm" data-i18n="amen_3_title">Clean Environment</h5><p class="text-[10px] text-gray-500 uppercase" data-i18n="amen_3_sub">Relaxing Space</p></div>
                <div><div class="w-24 h-24 mx-auto rounded-full overflow-hidden border-4 border-brand-blue mb-3"><img src="https://images.unsplash.com/photo-1564890369478-c89ca6d9cde9?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Hot Tea" class="w-full h-full object-cover"></div><h5 class="font-bold text-brand-dark text-sm" data-i18n="amen_4_title">Hot Tea</h5><p class="text-[10px] text-gray-500 uppercase" data-i18n="amen_4_sub">After Massage</p></div>
                <div><div class="w-24 h-24 mx-auto rounded-full overflow-hidden border-4 border-brand-blue mb-3"><img src="https://images.unsplash.com/photo-1499636136210-6f4ee915583e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Cookies" class="w-full h-full object-cover"></div><h5 class="font-bold text-brand-dark text-sm" data-i18n="amen_5_title">Cookies</h5><p class="text-[10px] text-gray-500 uppercase" data-i18n="amen_5_sub">Delicious Treat</p></div>
                <div><div class="w-24 h-24 mx-auto rounded-full overflow-hidden border-4 border-brand-blue mb-3"><img src="https://images.unsplash.com/photo-1620626011761-996317b8d101?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Bathroom" class="w-full h-full object-cover"></div><h5 class="font-bold text-brand-dark text-sm" data-i18n="amen_6_title">Bathroom</h5><p class="text-[10px] text-gray-500 uppercase" data-i18n="amen_6_sub">Shower Facilities</p></div>
            </div>
        </div>
    </section>

    <!-- Gallery & Location -->
    <section id="gallery" class="py-16 bg-brand-grayBg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-xl font-bold text-brand-dark font-serif uppercase text-center mb-6" data-i18n="gal_title">Come Ma Experience</h3>
                    <div class="grid grid-cols-3 gap-2">
                        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&w=400&q=80" class="col-span-2 row-span-2 w-full h-full object-cover rounded-tl-xl">
                        <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?ixlib=rb-4.0.3&w=200&q=80" class="w-full h-32 object-cover rounded-tr-xl">
                        <img src="https://images.unsplash.com/photo-1600334129128-685054110230?ixlib=rb-4.0.3&w=200&q=80" class="w-full h-32 object-cover">
                        <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?ixlib=rb-4.0.3&w=200&q=80" class="w-full h-32 object-cover rounded-bl-xl">
                        <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?ixlib=rb-4.0.3&w=200&q=80" class="w-full h-32 object-cover">
                        <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?ixlib=rb-4.0.3&w=200&q=80" class="w-full h-32 object-cover rounded-br-xl">
                    </div>
                    <div class="text-center mt-6"><a href="#" class="inline-block border border-brand-accent text-brand-dark px-6 py-2 rounded text-sm font-bold hover:bg-brand-accent hover:text-white transition-colors" data-i18n="gal_btn">VIEW GALLERY</a></div>
                </div>
                <div id="location">
                    <h3 class="text-xl font-bold text-brand-dark font-serif uppercase text-center mb-6" data-i18n="loc_title">Perfect Stop After Exploring</h3>
                    <div class="bg-brand-blue rounded-xl p-6 mb-6">
                        <div class="flex justify-between items-center text-center border-b border-brand-accent/20 pb-6 mb-6 relative">
                            <div class="absolute top-4 left-10 right-10 h-0.5 bg-brand-accent/30 -z-0 hidden md:block"></div>
                            <div class="relative z-10 bg-brand-blue px-2"><i class="fa-solid fa-archway text-xl text-brand-dark mb-2"></i><p class="text-xs font-bold text-brand-dark">Chiang Mai Gate</p><p class="text-[10px] text-gray-500">3 mins walk</p></div>
                            <div class="relative z-10 bg-brand-blue px-2"><i class="fa-solid fa-shop text-xl text-brand-dark mb-2"></i><p class="text-xs font-bold text-brand-dark">Wualai Walking St.</p><p class="text-[10px] text-gray-500">200 m.</p></div>
                            <div class="relative z-10 bg-brand-blue px-2 hidden md:block"><i class="fa-solid fa-vihara text-xl text-brand-dark mb-2"></i><p class="text-xs font-bold text-brand-dark">Chedi Luang</p><p class="text-[10px] text-gray-500">10 mins walk</p></div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-6 items-center bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex-grow">
                                <h4 class="font-bold text-brand-dark text-lg mb-2">COME MA MASSAGE</h4>
                                <p class="text-xs text-gray-600 mb-1 leading-relaxed">58 ถ. พระปกเกล้า Old City ตำบล พระสิงห์<br>อำเภอเมืองเชียงใหม่ เชียงใหม่ 50200</p>
                                <p class="text-[10px] text-brand-accent mb-3">(ใกล้ประตูเชียงใหม่ และถนนคนเดินวัวลาย)</p>
                                <a href="https://maps.google.com/?cid=14946888993797757576" target="_blank" class="inline-block border border-brand-dark text-brand-dark px-4 py-1.5 rounded text-xs font-bold hover:bg-brand-dark hover:text-white transition-colors" data-i18n="loc_btn_map">GET DIRECTIONS <i class="fa-solid fa-arrow-up-right-from-square ml-1"></i></a>
                            </div>
                            <div class="w-full sm:w-1/2 h-32 bg-gray-200 rounded overflow-hidden relative border border-gray-100">
                                <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?ixlib=rb-4.0.3&w=400&q=80" class="w-full h-full object-cover opacity-70">
                                <div class="absolute inset-0 flex items-center justify-center"><i class="fa-solid fa-location-dot text-3xl text-red-500 drop-shadow-md"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Booking -->
    <section id="booking" class="bg-brand-dark py-12 border-b-4 border-brand-gold">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex flex-col md:flex-row justify-center items-center gap-8">
                <div class="text-left">
                    <h2 class="text-3xl font-serif italic text-white mb-1" data-i18n="cta_title">Ready to Relax?</h2>
                    <p class="text-brand-accent text-sm" data-i18n="cta_sub">Your Chiang Mai massage experience starts here.</p>
                </div>
                <a href="javascript:void(0)" onclick="alert('Prototype: Opens Line/WhatsApp or Booking System')" class="bg-brand-gold text-white px-8 py-4 rounded text-lg font-bold hover:bg-brand-goldHover shadow-lg transition-all flex items-center space-x-3">
                    <i class="fa-regular fa-calendar-check text-2xl"></i>
                    <span data-i18n="cta_btn">BOOK YOUR MASSAGE</span>
                </a>
            </div>
            <div class="flex justify-center flex-wrap gap-8 mt-8 text-white/70 text-xs">
                <div class="flex flex-col items-center"><i class="fa-solid fa-shield-halved text-xl mb-1 text-brand-accent"></i><span data-i18n="guar_1">Best Price<br>Guarantee</span></div>
                <div class="flex flex-col items-center"><i class="fa-solid fa-money-bill-wave text-xl mb-1 text-brand-accent"></i><span data-i18n="guar_2">No Booking Fee</span></div>
                <div class="flex flex-col items-center"><i class="fa-solid fa-bolt text-xl mb-1 text-brand-accent"></i><span data-i18n="guar_3">Instant<br>Confirmation</span></div>
                <div class="flex flex-col items-center"><i class="fa-solid fa-headset text-xl mb-1 text-brand-accent"></i><span data-i18n="guar_4">Friendly<br>Support</span></div>
            </div>
        </div>
    </section>

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
