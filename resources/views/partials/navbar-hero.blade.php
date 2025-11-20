{{-- This navigation bar is designed to be absolutely positioned on top of the hero section, 
     matching the design in the provided image. --}}
<header class="absolute top-0 left-0 right-0 z-20 p-6 flex justify-between items-center bg-transparent">
    
    {{-- Logo and Site Name --}}
    <div class="flex items-center space-x-2">
        {{-- ShipX Logo (Container Icon) --}}
        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.657 0 3 .895 3 2s-1.343 2-3 2-3-.895-3-2 1.343-2 3-2z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 100 20 10 10 0 000-20z"></path>
        </svg>
        <span class="text-3xl font-bold">ShipX</span>
    </div>
    
    {{-- Navigation Links (Hidden on small screens, displayed on medium/large) --}}
    <nav class="hidden md:flex space-x-8 text-lg font-medium">
        <a href="#hero" class="hover:text-purple-400">Home</a>
        <a href="#about" class="hover:text-purple-400">About</a>
        <a href="#solutions" class="hover:text-purple-400">Solutions</a>
        <a href="#blog" class="hover:text-purple-400">Blog</a>
    </nav>
    
    {{-- Get Started Button (Purple, Rounded) --}}
    <a href="#contact" class="px-5 py-2 bg-purple-600 hover:bg-purple-700 rounded-full flex items-center space-x-2 transition">
        <span>Get Started</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
    </a>
</header>