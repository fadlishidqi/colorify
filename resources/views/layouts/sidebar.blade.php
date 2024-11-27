<div class="sidebar fixed h-screen w-64 bg-white border-r border-gray-200">
    <div class="h-16 px-4 flex items-center border-b border-gray-200">
        <!-- Menu Toggle -->
        <button class="p-2 hover:bg-gray-100 rounded-lg mr-2">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
        <span class="text-xl font-semibold">COLORIFY</span>
    </div>

    <div class="p-4">
        <!-- Navigation Menu -->
        <nav class="space-y-1">
            <!-- Create Section -->
            <div class="mb-6">
                <a href="#" class="flex items-center px-3 py-2 text-gray-900 rounded-lg hover:bg-gray-50">
                    <img src="{{ asset('images/create.png') }}" alt="Create" class="w-5 h-5 mr-3">
                    <span class="text-pink-500 font-medium">Create</span>
                </a>
            </div>

            <!-- Collection Section -->
            <div class="mb-6">
                <a href="#" class="flex items-center px-3 py-2 text-gray-900 hover:bg-gray-50 rounded-lg">
                    <img src="{{ asset('assets/collection-icon.svg') }}" alt="Collection" class="w-5 h-5 mr-3">
                    <span>Collection</span>
                </a>

                <!-- Collection Subitems -->
                <div class="ml-11 mt-2 space-y-2">
                    <div class="text-gray-600 py-1">Calm Colour</div>
                    <div class="text-gray-600 py-1">For Project one</div>
                    <div class="text-pink-500 py-1 cursor-pointer">+ Add more</div>
                </div>
            </div>

            <!-- Presets Section -->
            <div class="mb-4">
                <a href="#" class="flex items-center px-3 py-2 text-gray-900 hover:bg-gray-50 rounded-lg">
                    <img src="{{ asset('assets/presets-icon.svg') }}" alt="Presets" class="w-5 h-5 mr-3">
                    <span>Presets</span>
                </a>
            </div>

            <!-- Templates Section -->
            <div class="mb-4">
                <a href="#" class="flex items-center px-3 py-2 text-gray-900 hover:bg-gray-50 rounded-lg">
                    <img src="{{ asset('assets/templates-icon.svg') }}" alt="Templates" class="w-5 h-5 mr-3">
                    <span>Templates</span>
                </a>
            </div>
        </nav>
    </div>

    <!-- Search Bar -->
    <div class="absolute bottom-4 left-0 right-0 px-4">
        <div class="relative">
            <img src="{{ asset('assets/search-icon.svg') }}" alt="Search" class="absolute left-3 top-2.5 w-4 h-4 text-gray-400">
            <input type="text" 
                placeholder="Search for" 
                class="w-full pl-10 pr-4 py-2 text-sm border border-gray-200 rounded-lg focus:outline-none focus:border-gray-300 bg-gray-50"
            >
        </div>
    </div>
</div>