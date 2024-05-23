<x-main>
    <x-slot:title>{{  $title  }}</x-slot:title>

    <div class="min-h-screen flex flex-row bg-gray-100 dark:bg-slate-800">

        <!-- Sidebar - Start -->
        <div id="sidebar" class="h-[100vh] flex flex-col w-56 fixed z-[999] bg-primary transition-transform duration-700 transform">
            <div class="flex items-center justify-center h-20 mt-5 mb-12">
                <img src="../assets/svg/Logo.svg" alt="Logo" class="w-[100px]">
            </div>
            <div>
                <ul class="flex flex-col items-center py-4 gap-5">
                    <li class="flex flex-row opacity-[50%] relative hover:opacity-100 transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="bg-white w-[5px] rounded-r-full relative left-[-55px]"></span>
                        <a href="/dashboard" class="w-[125px] flex flex-row items-center h-12  text-white">
                            <span class="inline-flex  items-center h-12 w-12 text-lg mr-[-15px]"><i class="fa-solid fa-house"></i></span>
                            <span class="text-sm font-medium">Dashboard</span>
                        </a>
                    </li>
                    <li class="flex flex-row relative:opacity-100 translate-x-2">
                        <span class="bg-white w-[5px] rounded-r-full relative left-[-55px]"></span>
                        <a href="/profile" class="w-[125px] flex flex-row items-center h-12  text-white">
                            <span class="inline-flex items-center h-12 w-12 text-lg mr-[-15px]"><i class="fa-solid fa-user"></i></i></span>
                            <span class="text-sm font-medium">Profile</span>
                        </a>
                    </li>
                    <li class="flex flex-row opacity-[50%] relative hover:opacity-100 transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="bg-white w-[5px] rounded-r-full relative left-[-55px]"></span>
                        <a href="/bookmark" class="w-[125px] flex flex-row items-center h-12  text-white">
                            <span class="inline-flex items-center h-12 w-12 text-lg mr-[-15px]"><i class="fa-solid fa-bookmark"></i></span>
                            <span class="text-sm font-medium">Bookmark</span>
                        </a>
                    </li>
                    <li class="flex flex-row opacity-[50%] relative hover:opacity-100 transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="bg-white w-[5px] rounded-r-full relative left-[-55px]"></span>
                        <a href="/setting" class="w-[125px] flex flex-row items-center h-12  text-white">
                            <span class="inline-flex items-center h-12 w-12 text-lg mr-[-15px]"><i class="fa-solid fa-gear"></i></span>
                            <span class="text-sm font-medium">Settings</span>
                        </a>
                    </li>
                </ul>
                <div id="logOut-btn" class="flex flex-col items-center py-4">
                    <ul class="flex flex-col items-center py-4">
                        <li class="w-[125px]">
                            <a href="/" class="flex absolute bottom-5 flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white opacity-[50%] hover:opacity-100">
                                <span class="inline-flex items-center h-12 w-12 text-lg mr-[-15px] "><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                                <span class="text-sm font-medium">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Toggle Collapsed Sidebar - Start -->
            <div class="flex-1 p-4 absolute top-[40%] left-[207px]">
                <button id="toggleButton" class="bg-secondary dark:bg-white text-white dark:text-secondary p-2 rounded-r-lg rounded-l-sm w-[30px] h-[50px]">
                    <i id="toggleIcon" class="fa-sharp fa-solid fa-chevron-left"></i>
                </button>
            </div>
            <!-- Toggle Collapsed Sidebar - End -->
            
        </div>
        <!-- Sidebar - End -->

        <!-- Main Content - Start -->
        <div id="mainContent" class="w-full ml-0 lg:ml-56 transition-margin-left duration-700 ease-in-out">
            <!-- Navbar - Start -->
            <nav class="w-full mt-2 max-w-[1100px] px-6 py-3 mx-auto bg-white border transition duration-300 ease-in-out dark:bg-slate-900 shadow-lg dark:shadow-slate-950 rounded-xl border-slate-200 dark:border-slate-800 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200">
                <div class="flex items-center justify-between text-slate-900 dark:text-white">
                    <h1 class="mr-4 block cursor-pointer py-1.5 text-base font-semibold leading-relaxed tracking-normal text-inherit antialiased">Profile</h1>
                    <div class="">
                        <ul class="flex flex-row gap-2 my-2 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                            <li class="block p-1 text-sm antialiased">
                                <button id="theme-toggle" type="button" class="mr-0 text-secondary  dark:text-yellow-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-sm p-2.5">
                                    <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                    </svg>
                                    <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar - End -->

            <!-- Detail Content - Start -->
            <div class="flex flex-col justify-items-center mx-auto mt-12 mb-5 w-[80%] py-12 px-10 rounded-lg bg-white dark:bg-slate-900">
                <div class="w-36 h-36 mx-auto">
                    <img class="w-full h-full" src="../assets/png/profile_img.png" alt="Photo_profile">
                </div>
                <div class="text-center mt-4 mb-12">
                    <div class="text-xl font-semibold dark:text-gray-300" id="name">Lisa Nobadan</div>
                    <div class="text-lg text-gray-600 dark:text-gray-300" id="email">lisanobandan@gmail.com</div>
                </div>
                <button class="bg-profilebtn rounded-xl mx-auto py-3 px-6 text-white font-medium drop-shadow-xl hover:bg-secondary flex items-center">
                    <span>Update Profile</span>
                    <i class="fa-regular fa-pen-to-square ml-3"></i>
                </button>
                <div class="text-center mt-14 opacity-50 hover:opacity-100 hover:text-secondary">
                    <a href="bookmark.html" class="text-gray-600 dark:text-gray-300 flex items-center justify-center">
                        <span class="text-lg font-medium">Bookmark List</span>
                        <span class="ml-3 font-semibold">&gt;</span>
                    </a>
                </div>
            </div>
            <!-- Detail Content - End --> 
        </div>
        <!-- Main Content - End -->
    </div>
</x-main>