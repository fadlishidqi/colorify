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
        <nav class="flex flex-col space-y-3">
            <!-- Create Section -->
            <div>
                <div class="menu-item flex items-center space-x-3 p-2.5 rounded-lg hover:bg-gray-100 cursor-pointer" data-menu="create">
                    <img src="../images/create.png" class="w-8 h-8" alt="Create icon" />
                    <span class="text-lg text-gray-600 pl-1">Create</span>
                </div>
            </div>

            <!-- Collection Section -->
            <div>
                <div class="menu-item flex items-center space-x-3 p-2.5 rounded-lg hover:bg-gray-100 cursor-pointer" data-menu="collection" onclick="toggleCollection()">
                    <img src="../images/collection.png" class="w-8 h-8" alt="Collection icon" />
                    <span class="text-lg text-gray-600 pl-1">Collection</span>
                </div>
                
                <div id="collectionDropdown" class="ml-14 mt-0 space-y-4 transition-all duration-300 ease-in-out" style="max-height: 0; overflow: hidden;">
                    <div class="text-gray-500 hover:text-gray-700 cursor-pointer text-lg">Calm Colour</div>
                    <div class="text-gray-500 hover:text-gray-700 cursor-pointer text-lg">For Project one</div>
                    <div class="text-gray-500 hover:text-gray-700 cursor-pointer text-lg">+ Add more</div>
                </div>
            </div>

            <script>
            function toggleCollection() {
                const dropdown = document.getElementById('collectionDropdown');
                if (dropdown.style.maxHeight === '0px' || dropdown.style.maxHeight === '') {
                    dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
                } else {
                    dropdown.style.maxHeight = '0px';
                }
            }
            </script>

            <!-- Presets Section -->
            <div>
                <div class="menu-item flex items-center space-x-3 p-2.5 rounded-lg hover:bg-gray-100 cursor-pointer" data-menu="presets">
                    <img src="../images/preset.png" class="w-6 h-6 ml-1" alt="Presets icon" />
                    <span class="text-lg text-gray-600 pl-2">Presets</span>
                </div>
            </div>

            <!-- Templates Section -->
            <div>
                <div class="menu-item flex items-center space-x-3 p-2.5 rounded-lg hover:bg-gray-100 cursor-pointer" data-menu="templates">
                    <img src="../images/Files.png" class="w-6 h-6 ml-1" alt="Templates icon" />
                    <span class="text-lg text-gray-600 pl-2">Templates</span>
                </div>
            </div>

            {{-- Section Content --}}
            <div class="flex flex-col h-full">
                <div class="border-t border-gray-200 mt-auto"></div>
                
                {{-- Search Bar --}}
                <div class="mt-auto pt-6 border-t border-gray-200">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-3 flex items-center">
                            <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <input
                            type="text"
                            placeholder="Search for"
                            class="w-full py-2.5 pl-10 pr-4 bg-gray-100 rounded-lg focus:outline-none text-gray-600 placeholder-gray-500"
                        />
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<script>
    function toggleCollection() {
        const dropdown = document.getElementById('collectionDropdown');
        if (dropdown.style.maxHeight === '0px' || dropdown.style.maxHeight === '') {
            dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
        } else {
            dropdown.style.maxHeight = '0px';
        }
    }
    
    // Menambahkan event listener untuk menu items
    document.querySelectorAll('.menu-item').forEach(item => {
        item.addEventListener('click', function() {
            // Hapus active state dari semua menu items
            document.querySelectorAll('.menu-item').forEach(menuItem => {
                menuItem.classList.remove('bg-blue-50');
                menuItem.querySelector('span').classList.remove('text-[#1a1a1a]', 'font-medium');
                menuItem.querySelector('span').classList.add('text-gray-600');
            });
            
            // Tambahkan active state ke menu item yang diklik
            this.classList.add('bg-blue-50');
            this.querySelector('span').classList.remove('text-gray-600');
            this.querySelector('span').classList.add('text-[#1a1a1a]', 'font-medium');
        });
    });
    </script>