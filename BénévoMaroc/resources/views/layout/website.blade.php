<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/hero.css') }}">

</head>

<body class="bg-gray-50">
  <div class=" bg-[#C9559B] text-white py-2">
    <div class="container mx-auto px-4 flex justify-between items-center text-xs sm:text-sm">
      <div class="flex items-center space-x-2 sm:space-x-4">
        <span><i class="fas fa-envelope mr-1 sm:mr-2"></i>contact@benevolat.org</span>
        <span><i class="fas fa-phone mr-1 sm:mr-2"></i>+212 5 37 57 19 87</span>
      </div>
      <div class="flex space-x-2 sm:space-x-4">
        <a href="#" class="hover:text-gray-200"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="hover:text-gray-200"><i class="fab fa-twitter"></i></a>
        <a href="#" class="hover:text-gray-200"><i class="fab fa-instagram"></i></a>
        <a href="#" class="hover:text-gray-200"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
  

     <header class="bg-white navbar-shadow">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between h-16 items-center px-4">
                <div class="flex items-center">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center ">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="BénévoMaroc Logo" class="w-10 h-10" />
                            </div>
                            <h1 class="text-2xl font-bold text-gray-800" style="font-family: 'ProfessionalFont', sans-serif;"><span style="color: #00B3AD;">BÉNÉVO</span><span>MAROC</span></h1>                    

                        </div>
                </div>
                
                <nav class="hidden md:flex space-x-6">
                    <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-[#C93EA1] hover:text-[#C93EA1] border-b-2 border-[#C93EA1]' : 'text-gray-600 hover:text-gray-900' }} py-2 text-sm">Accueil</a>    
                    <a href="{{url('opportunités')}}" class="{{request()->is('opportunités') ? 'text-[#C93EA1] hover:text-[#C93EA1] border-b-2 border-[#C93EA1]' : 'text-gray-600 hover:text-gray-900' }} py-2 text-sm">Opportunités</a>
                    <a href="{{url('faq')}}" class="{{ request()->is('faq') ? 'text-[#C93EA1] hover:text-[#C93EA1] border-b-2 border-[#C93EA1]' : 'text-gray-600 hover:text-gray-900' }} py-2 text-sm">FAQ</a>
                    <a href="{{url('propos')}}" class="{{ request()->is('propos') ? 'text-[#C93EA1] hover:text-[#C93EA1] border-b-2 border-[#C93EA1]' : 'text-gray-600 hover:text-gray-900' }} py-2 text-sm">A propos</a>
                    <a href="{{url('contact')}}" class="{{ request()->is('contact') ? 'text-[#C93EA1] hover:text-[#C93EA1] border-b-2 border-[#C93EA1]' : 'text-gray-600 hover:text-gray-900' }} py-2 text-sm">Contact</a>
                </nav>
                
                <div class="hidden md:block">
                    <a href="{{ url('inscription') }}">
                        <button class="signup-button text-white rounded-md focus:outline-none bg-[#00B3AD] hover:bg-[#3BAFA8] transition-colors">
                            S'inscrire 
                        </button>
                    </a>
             
                </div>
                
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="p-1 text-gray-500 focus:outline-none">
                        <svg id="menu-open-icon" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="menu-close-icon" class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <div id="mobile-menu" class="mobile-menu md:hidden border-t border-gray-200">
                <div class="px-4 py-2 space-y-1">
                    <a href="#" class="block text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Accueil</a>
                    <a href="#" class="block text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Opportunités</a>
                    <a href="#" class="block text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">FAQ</a>
                    <a href="#" class="block text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">A propos</a>
                    <a href="#" class="block text-gray-600 hover:bg-gray-50 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Contact</a>
                </div>
                <div class="px-4 py-3">
                    <button class="w-full signup-button text-white rounded-md focus:outline-none hover:bg-blue-700 transition-colors">
                        S'inscrire
                    </button>
                </div>
            </div>
        </div>
    </header>
    
    <div class="bg-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto">
            <div class="px-4 py-2">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="overflow-x-auto -mx-4 px-4 md:mx-0 no-scrollbar mb-4 md:mb-0">
                        <div class="flex items-center space-x-3 min-w-max">
    
                            <div class="flex items-center bg-gray-50 rounded-lg px-3 py-1.5">
                                <svg class="w-4 h-4 text-[#00B3AD] mr-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="text-sm font-medium text-gray-600 whitespace-nowrap">2025-03-05</span>
                            </div>
    
                            <div class="flex items-center bg-gray-50 rounded-lg px-3 py-1.5">
                                <svg class="w-4 h-4 text-[#00B3AD] mr-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-sm font-medium text-gray-600 whitespace-nowrap">22:50:04</span>
                                <span class="ml-2 text-xs text-gray-400">UTC</span>
                            </div>
    
                            <div class="flex items-center bg-gray-50 rounded-lg px-3 py-1.5">
                                <svg class="w-4 h-4 text-[#00B3AD] mr-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>
                                <span class="text-sm font-medium text-gray-600 whitespace-nowrap">Casablanca</span>
                                <span class="ml-2 text-xs text-gray-400">Maroc</span>
                            </div>
                        </div>
                    </div>
    
                    <div class="overflow-x-auto -mx-4 px-4 md:mx-0">
                        <nav class="flex space-x-6 min-w-max">
                            <a href="#" class="flex items-center py-2 border-b-2 border-transparent hover:border-[#00B3AD] transition-colors duration-200 group">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-[#00B3AD] mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span class="text-sm font-medium text-gray-600 group-hover:text-[#00B3AD] whitespace-nowrap">Bénévoles</span>
                            </a>
    
                            <a href="#" class="flex items-center py-2 border-b-2 border-transparent hover:border-[#00B3AD] transition-colors duration-200 group">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-[#00B3AD] mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <span class="text-sm font-medium text-gray-600 group-hover:text-[#00B3AD] whitespace-nowrap">Associations</span>
                            </a>
    
                            <a href="#" class="flex items-center py-2 border-b-2 border-transparent hover:border-[#00B3AD] transition-colors duration-200 group">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-[#00B3AD] mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span class="text-sm font-medium text-gray-600 group-hover:text-[#00B3AD] whitespace-nowrap">Ensemble</span>
                            </a>
    
                            <a href="#" class="flex items-center py-2 border-b-2 border-transparent hover:border-[#00B3AD] transition-colors duration-200 group">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-[#00B3AD] mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <span class="text-sm font-medium text-gray-600 group-hover:text-[#00B3AD] whitespace-nowrap">Formation</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div >
        @yield('content') 
    </div>
<footer class="bg-white pt-16 pb-12 border-t border-gray-100">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-16">
            <div class="space-y-4 lg:col-span-2 text-center md:text-left">
                <div class="flex items-center space-x-2 justify-center md:justify-start">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="BénévoMaroc Logo" class="w-10 h-10" />
                    <h3 class="text-xl font-bold">
                        <span class="text-[#00B3AD]">BÉNÉVO</span><span class="text-gray-800">MAROC</span>
                    </h3>
                </div>
                <p class="text-gray-500 text-sm">
                    Plateforme de mise en relation entre bénévoles et associations au Maroc. Ensemble, créons un impact positif dans notre communauté.
                </p>
                <div class="text-xs text-gray-400 pt-2">
                    <p>Connecté en tant que: <span class="font-medium">bouchta65</span></p>
                    <p>2025-03-05 01:35:36</p>
                </div>
            </div>

            <div class="text-center md:text-left">
                <button class="md:hidden w-full flex items-center justify-between mb-2 px-4 py-2 bg-gray-50 rounded-md" 
                        onclick="toggleSection('nav-menu')">
                    <h3 class="text-gray-800 font-semibold">Navigation</h3>
                    <i class="fas fa-chevron-down text-gray-400 transition-transform duration-200" 
                       id="nav-menu-icon"></i>
                </button>
                <h3 class="hidden md:block text-gray-800 font-semibold mb-4">Navigation</h3>
                <ul id="nav-menu" class="space-y-3 hidden md:block">
                    <li><a href="#" class="text-gray-500 hover:text-[#C9559B] text-sm">Accueil</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#C9559B] text-sm">Opportunités</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#C9559B] text-sm">FAQ</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#C9559B] text-sm">A propos</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#C9559B] text-sm">Contact</a></li>
                </ul>
            </div>

            <div class="text-center md:text-left">
                <button class="md:hidden w-full flex items-center justify-between mb-2 px-4 py-2 bg-gray-50 rounded-md" 
                        onclick="toggleSection('cat-menu')">
                    <h3 class="text-gray-800 font-semibold">Catégories</h3>
                    <i class="fas fa-chevron-down text-gray-400 transition-transform duration-200" 
                       id="cat-menu-icon"></i>
                </button>
                <h3 class="hidden md:block text-gray-800 font-semibold mb-4">Catégories</h3>
                <ul id="cat-menu" class="space-y-3 hidden md:block">
                    <li><a href="#" class="text-gray-500 hover:text-[#C9559B] text-sm">Bénévoles</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#C9559B] text-sm">Associations</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#C9559B] text-sm">Ensemble</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#C9559B] text-sm">Formation</a></li>
                </ul>
            </div>

            <div class="text-center md:text-left">
                <div class="mb-8">
                    <button class="md:hidden w-full flex items-center justify-between mb-2 px-4 py-2 bg-gray-50 rounded-md" 
                            onclick="toggleSection('contact-menu')">
                        <h3 class="text-gray-800 font-semibold">Contact</h3>
                        <i class="fas fa-chevron-down text-gray-400 transition-transform duration-200" 
                           id="contact-menu-icon"></i>
                    </button>
                    <h3 class="hidden md:block text-gray-800 font-semibold mb-4">Contact</h3>
                    <ul id="contact-menu" class="space-y-3 hidden md:block">
                        <li class="flex items-center space-x-3 text-gray-500 text-sm justify-center md:justify-start">
                            <i class="fas fa-map-marker-alt text-[#C9559B]"></i>
                            <span>123 Rue Example, Ville, Maroc</span>
                        </li>
                        <li class="flex items-center space-x-3 text-gray-500 text-sm justify-center md:justify-start">
                            <i class="fas fa-phone text-[#C9559B]"></i>
                            <span>+212 5 37 57 19 87</span>
                        </li>
                        <li class="flex items-center space-x-3 text-gray-500 text-sm justify-center md:justify-start">
                            <i class="fas fa-envelope text-[#C9559B]"></i>
                            <span>contact@benevolat.org</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-gray-800 font-semibold mb-4">Newsletter</h3>
                    <form class="space-y-3">
                        <div class="flex items-center justify-center md:justify-start">
                            <input type="email" 
                                   placeholder="Votre email" 
                                   class="w-full max-w-[200px] md:max-w-none px-4 py-2 rounded-l-md border border-gray-300 focus:outline-none focus:border-[#00B3AD]">
                            <button type="submit" 
                                    class="bg-[#00B3AD] text-white px-4 py-2 rounded-r-md hover:bg-[#009B96] transition-colors">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-100 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-gray-500 text-sm text-center md:text-left">
                    © 2025 BénévoMaroc. Tous droits réservés.
                </div>

                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-[#C9559B] transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#C9559B] transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#C9559B] transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#C9559B] transition-colors">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>



    <script src="{{ asset('assets/js/navbar.js') }}"></script>  
    <script src="{{ asset('assets/js/time.js') }}"></script>  
    <script src="{{ asset('assets/js/footer.js') }}"></script>  
</body>
</html>



