<nav class="fixed right-0 left-64 top-0 h-16 bg-white border-b border-gray-200 z-10">
    <div class="h-full px-4 flex items-center justify-end space-x-4">
        <!-- Help Icon -->
        <button class="p-2 text-gray-500 hover:text-gray-700">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1-7v2h2v-2h-2zm2-1.645A3.502 3.502 0 0012 6.5a3.501 3.501 0 00-3.433 2.813l1.962.393A1.5 1.5 0 1112 11.5a1 1 0 00-1 1V14h2v-.645z" fill="currentColor"/>
            </svg>
        </button>

        <!-- Settings Icon -->
        <button class="p-2 text-gray-500 hover:text-gray-700">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" stroke="currentColor" stroke-width="2"/>
                <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z" stroke="currentColor" stroke-width="2"/>
            </svg>
        </button>

        <!-- Login Button -->
        <a href="/login" class="px-4 py-2 bg-[#FDEBB6] text-gray-700 font-bold rounded-lg hover:bg-[#f8e0a0] transition-colors">
            Log in
        </a>

        <!-- Export Button -->
        <button class="p-2 text-gray-500 hover:text-gray-700">
            <img src="{{ asset('images/sampinglogin.png') }}" alt="Export" class="w-10 h-10">
        </button>
    </div>
</nav>