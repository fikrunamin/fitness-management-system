<div class="grid grid-cols-1 text-sm">
    <div class="col px-5 relative flex flex-wrap content-center justify-between">
        <div>
            <h6 class="font-bold text-xl">Web Project</h6>
        </div>
        <div class=" absolute right-0 toggle-menu" onclick="toggle_menu(this)">
            <button class=" bg-blue-500 w-10 h-10 flex justify-center items-center rounded-l-lg focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
    <div class="col p-5">
        <h2 class="font-semibold">Main Menu</h2>
        <div class="grid grid-cols-1 gap-y-3 mt-5">
            <div class="relative col font-semibold bg-blue-100 text-blue-500 rounded-lg h-14 px-5 flex items-center">
                <a href="/" class="w-full h-full flex items-center">
                    Home
                </a>
                <div class="bg-blue-500 absolute -right-5 w-1.5 h-full rounded-l-lg">
                </div>
            </div>
            <div class="col">
                <div class="grid grid-cols-1 gap-y-3">
                    <div class="font-semibold col rounded-lg h-14 px-5 flex items-center text-gray-700 cursor-pointer" onclick="open_submenu(this)">
                        <h2 class="w-full">List of Workouts</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500 w-6 h-6">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="col ml-5 px-5 py-5 bg-blue-100 text-black text-opacity-70 rounded-lg submenu hidden">
                        <div class="grid grid-cols-1 gap-y-2">
                            <div class="col rounded-lg h-10 hover:bg-blue-500 hover:text-blue-100 px-5 flex items-center">
                                Full Body
                            </div>
                            <div class="col rounded-lg h-10 hover:bg-blue-500 hover:text-blue-100 px-5 flex items-center">
                                Upper Body
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative col font-semibold hover:bg-blue-100 text-gray-700 hover:text-blue-500 rounded-lg h-14 px-5 flex items-center">
                List of Healthy Foods
                <div class="bg-white absolute -right-5 w-1.5 h-full rounded-l-lg">
                </div>
            </div>
        </div>
    </div>
    <div class="col p-5">
        <h2 class="font-semibold">Other Menu</h2>
        <div class="grid grid-cols-1 gap-y-3 mt-5">
            <div class="font-semibold col rounded-lg h-14 px-5 flex items-center text-gray-700 cursor-pointer" onclick="open_submenu(this)">
                <h2 class="w-full">Profile</h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500 w-6 h-6">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="col ml-5 px-5 py-5 bg-blue-100 text-black text-opacity-70 rounded-lg submenu hidden">
                <div class="grid grid-cols-1 gap-y-2">
                    <div class="col rounded-lg h-10 hover:bg-blue-500 hover:text-blue-100 px-5 flex items-center">
                        Edit Profile
                    </div>
                    <div class="col rounded-lg h-10 hover:bg-blue-500 hover:text-blue-100 px-5 flex items-center">
                        Logout
                    </div>
                </div>
            </div>
            <div class="font-semibold col rounded-lg h-14 px-5 flex items-center text-gray-700">
                History
            </div>
        </div>
    </div>
</div>