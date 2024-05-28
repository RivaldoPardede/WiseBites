<x-main>
    <x-slot:title>Dashboard</x-slot:title>
    
    <div class="min-h-screen w-full flex flex-row bg-white dark:bg-slate-800 transition duration-300 ease-in-out">
        <!-- Sidebar - Start -->
        <div id="sidebar" class="h-[100vh] z-[999] flex flex-col w-56 fixed bg-primary transition-transform duration-700 transform">
            <div class="flex items-center justify-center h-20 mt-5 mb-12">
                <img src="../assets/svg/Logo.svg" alt="Logo" class="w-[100px]">
            </div>
            <div id="">
                <ul class="flex flex-col items-center py-4 gap-5">
                    <li class="flex flex-row relative:opacity-100 translate-x-2">
                        <span class="bg-white w-[5px] rounded-r-full relative left-[-55px]"></span>
                        <a href="/dashboard" class="w-[125px] flex flex-row items-center h-12  text-white">
                            <span class="inline-flex  items-center h-12 w-12 text-lg mr-[-15px]"><i class="fa-solid fa-house"></i></span>
                            <span class="text-sm font-medium">Dashboard</span>
                        </a>
                    </li>
                    <li class="flex flex-row opacity-[50%] relative hover:opacity-100 transform hover:translate-x-2 transition-transform ease-in duration-200">
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
                            <a href="/logout" class="flex absolute bottom-5 flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white opacity-[50%] hover:opacity-100">
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


        <div id="mainContent" class="w-full ml-0 lg:ml-56 transition-margin-left duration-700 ease-in-out">

            <!-- Navbar - Start -->
            <nav class="w-full mt-2 max-w-[1100px] px-6 py-3 mx-auto bg-white border transition duration-300 ease-in-out dark:bg-slate-900 shadow-lg dark:shadow-slate-950 rounded-xl border-slate-200 dark:border-slate-800 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200">
                <div class="flex items-center justify-between text-slate-900 dark:text-white">
                    <h1 class="mr-4 block cursor-pointer py-1.5 text-base font-semibold leading-relaxed tracking-normal text-inherit antialiased">Dashboard</h1>
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
            
            <!-- SearchBar - Start -->
            <form action="{{ route('menu.index') }}" method="GET" class="flex items-center my-10 max-w-xl mx-2 drop-shadow-md dark:shadow-slate-500 sm:mx-auto" >   
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center text-greyfont pl-3 pointer-events-none">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" name="search" id="search" autocomplete="off" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 py-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search any recipe" required />
                </div>
                <button id="filterButton" type="button" onclick="modalHandler(true)" class="p-3 ml-4 text-base font-medium text-white bg-primary rounded-lg hover:bg-darkPrimary">
                    <img src="../assets/svg/filter.svg" alt="" class="w-6 h-6">
                </button>
            </form>
            <!-- SearchBar - End --> 
            
            <!-- Filter Modal - Start -->
            <div class="py-12 transition bg-slate-900/50 h-full duration-150 ease-in-out z-10 hidden absolute top-0 right-0 bottom-0 left-0" id="modal">
                <div  role="alert" class="container mx-auto w-11/12 md:w-[75%]">
                    <div class="relative py-8 px-5 md:px-10 bg-white dark:bg-slate-600 shadow-md rounded-2xl border border-gray-400">
                        <h1 class="text-gray-800 dark:text-slate-200 text-center font-lg font-bold tracking-normal leading-tight mb-4">Filter</h1>
                        
                        <form id="filterForm" action="{{ route('menu.index') }}" method="GET">
                            @csrf
                            <hr class="py-3">

                            <!-- Bahan Makanan -->
                            <h2 class="text-md font-semibold mb-4 dark:text-slate-200">Choose your ingredients:</h2>
                            <div class="min-h-[40px] mb-5">
                                    <input type="text" name="search_ingredients" id="search_ingredients" autocomplete="off" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 py-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="If there are more than one value, please separate with space" />                                
                                {{-- <label class="relative flex sm:max-w-[100px] md:max-w-[105px] lg-[120px] max-w-[94px] items-center justify-center sm:max-h-[50px] h-[40px] bg-secondary/50 peer-checked:bg-secondary hover:bg-secondary/80 transition-colors leading-6 py-2 rounded-2xl cursor-pointer">
                                    <input type="checkbox" name="ingredient" value="chicken" class="peer hidden">
                                    <div class="flex items-center justify-center sm:gap-2 gap-1 px-2 w-full h-[40px] bg-secondary/50 peer-checked:bg-secondary hover:bg-secondary/80 rounded-2xl">
                                        <img src="../assets/svg/chicken.svg" class="sm:w-[20px] w-[15px]" alt="Chicken">
                                        <p class="text-white text-[10px] sm:text-base">Chicken</p>
                                    </div>
                                </label>
                                <label class="relative flex sm:max-w-[100px] md:max-w-[105px] lg-[120px] max-w-[94px] items-center justify-center sm:max-h-[50px] h-[40px] bg-secondary/50 peer-checked:bg-secondary hover:bg-secondary/80 transition-colors leading-6 py-2 rounded-2xl cursor-pointer">
                                    <input type="checkbox" name="ingredient" value="chicken" class="peer hidden">
                                    <div class="flex items-center justify-center sm:gap-2 gap-1 px-2 w-full h-[40px] bg-secondary/50 peer-checked:bg-secondary hover:bg-secondary/80 rounded-2xl">
                                        <img src="../assets/svg/chicken.svg" class="sm:w-[20px] w-[15px]" alt="Chicken">
                                        <p class="text-white text-[10px] sm:text-base">Chicken</p>
                                    </div>
                                </label>
                                <label class="relative flex sm:max-w-[100px] md:max-w-[105px] lg-[120px] max-w-[94px] items-center justify-center sm:max-h-[50px] h-[40px] bg-secondary/50 peer-checked:bg-secondary hover:bg-secondary/80 transition-colors leading-6 py-2 rounded-2xl cursor-pointer">
                                    <input type="checkbox" name="ingredient" value="chicken" class="peer hidden">
                                    <div class="flex items-center justify-center sm:gap-2 gap-1 px-2 w-full h-[40px] bg-secondary/50 peer-checked:bg-secondary hover:bg-secondary/80 rounded-2xl">
                                        <img src="../assets/svg/chicken.svg" class="sm:w-[20px] w-[15px]" alt="Chicken">
                                        <p class="text-white text-[10px] sm:text-base">Chicken</p>
                                    </div>
                                </label>
                                <label class="relative flex sm:max-w-[100px] md:max-w-[105px] lg-[120px] max-w-[94px] items-center justify-center sm:max-h-[50px] h-[40px] bg-secondary/50 peer-checked:bg-secondary hover:bg-secondary/80 transition-colors leading-6 py-2 rounded-2xl cursor-pointer">
                                    <input type="checkbox" name="ingredient" value="chicken" class="peer hidden">
                                    <div class="flex items-center justify-center sm:gap-2 gap-1 px-2 w-full h-[40px] bg-secondary/50 peer-checked:bg-secondary hover:bg-secondary/80 rounded-2xl">
                                        <img src="../assets/svg/chicken.svg" class="sm:w-[20px] w-[15px]" alt="Chicken">
                                        <p class="text-white text-[10px] sm:text-base">Chicken</p>
                                    </div>
                                </label>
                                <label class="relative flex sm:max-w-[100px] md:max-w-[105px] lg-[120px] max-w-[94px] items-center justify-center sm:max-h-[50px] h-[40px] bg-secondary/50 peer-checked:bg-secondary hover:bg-secondary/80 transition-colors leading-6 py-2 rounded-2xl cursor-pointer">
                                    <input type="checkbox" name="ingredient" value="chicken" class="peer hidden">
                                    <div class="flex items-center justify-center sm:gap-2 gap-1 px-2 w-full h-[40px] bg-secondary/50 peer-checked:bg-secondary hover:bg-secondary/80 rounded-2xl">
                                        <img src="../assets/svg/chicken.svg" class="sm:w-[20px] w-[15px]" alt="Chicken">
                                        <p class="text-white text-[10px] sm:text-base">Chicken</p>
                                    </div>
                                </label>
                                <label class="relative flex sm:max-w-[100px] md:max-w-[105px] lg-[120px] max-w-[94px] items-center justify-center sm:max-h-[50px] h-[40px] bg-secondary/50 peer-checked:bg-secondary hover:bg-secondary/80 transition-colors leading-6 py-2 rounded-2xl cursor-pointer">
                                    <input type="checkbox" name="ingredient" value="chicken" class="peer hidden">
                                    <div class="flex items-center justify-center sm:gap-2 gap-1 px-2 w-full h-[40px] bg-secondary/50 peer-checked:bg-secondary hover:bg-secondary/80 rounded-2xl">
                                        <img src="../assets/svg/chicken.svg" class="sm:w-[20px] w-[15px]" alt="Chicken">
                                        <p class="text-white text-[10px] sm:text-base">Chicken</p>
                                    </div>
                                </label>
                                <label class="relative flex sm:max-w-[100px] md:max-w-[105px] lg-[120px] max-w-[94px] items-center justify-center sm:max-h-[50px] h-[40px] bg-secondary/50 peer-checked:bg-secondary hover:bg-secondary/80 transition-colors leading-6 py-2 rounded-2xl cursor-pointer">
                                    <input type="checkbox" name="ingredient" value="chicken" class="peer hidden">
                                    <div class="flex items-center justify-center sm:gap-2 gap-1 px-2 w-full h-[40px] bg-secondary/50 peer-checked:bg-secondary hover:bg-secondary/80 rounded-2xl">
                                        <img src="../assets/svg/chicken.svg" class="sm:w-[20px] w-[15px]" alt="Chicken">
                                        <p class="text-white text-[10px] sm:text-base">Chicken</p>
                                    </div>
                                </label> --}}
                                

                            
                            </div>
                            <!-- Bahan Makanan -->
                            <div class="flex items-center justify-end gap-4 w-full">
                                <button class="bg-primary transition duration-150 ease-in-out hover:bg-darkPrimary rounded-xl text-white px-6 py-3 text-base" onclick="modalHandler()">Reset</button>
                                <button type="submit" class="bg-primary transition duration-150 ease-in-out hover:bg-darkPrimary rounded-xl text-white px-10 py-3 text-base">Apply</button>
                            </div>
                        </form>
                        
                        <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="modalHandler()" aria-label="close modal" role="button">
                            <svg  xmlns="http://www.w3.org/2000/svg"  class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </button>

                    </div>
                </div>
            </div> 
            <!-- Filter Modal - End -->

            <hr class="block w-full mt-2 max-w-[1100px] px-6 py-3 mx-auto shadow-inherit">

            <h1 class="text-slate-800 text-center dark:text-slate-200 text-lg font-bold tracking-normal leading-tight mb-4">All Available Recipes!</h1>

            <!-- Food Card - Start -->
            <section class="w-full max-w-[1190px] px-6 py-3 mx-auto grid grid-cols-1 min-[500px]:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-items-center gap-y-20 gap-x-14 mt-10 mb-5 menu-container">                
                @foreach ($items as $item)
                <div class="w-64 sm:w-60 py-6 bg-white dark:bg-slate-600 shadow-xl rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                    <a href="/detail/{{ $item['id'] }}">
                        <img src="{{ $item['image']  }}" alt="Product" class="w-full h-60 object-cover rounded-t-xl" />
                        <div class="px-4 py-3">
                            <p class="text-lg font-bold text-black dark:text-slate-200 truncate capitalize">{{  $item['title']  }}</p>
                            <div class="flex items-center mt-2">
                                <div class="ml-auto">
                                    <form action="{{ route('bookmark_menu.store') }}" method="post" id="bookmark-menu-form">
                                        @csrf
                                        <input type="hidden" name="menu_id" value="{{ $item['id'] }}">
                                        <button type="submit">
                                        @if ($item['is_bookmark'])
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-800 dark:text-slate-200 fill-primary" viewBox="0 0 384 512">
                                                <path d="M0 48C0 21.5 21.5 0 48 0h288c26.5 0 48 21.5 48 48v440c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/>
                                            </svg>
                                        @else 
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-800 dark:text-slate-200" fill="none" stroke="currentColor" stroke-width="32" viewBox="0 0 384 512">
                                                <path d="M0 48C0 21.5 21.5 0 48 0h288c26.5 0 48 21.5 48 48v440c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/>
                                            </svg>
                                        
                                        @endif
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach


                {{-- <div class="w-64 sm:w-60 py-6 bg-white dark:bg-slate-600 shadow-xl rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                    <a href="#">
                        <img src="../assets/png/exmFood.jpg" alt="Product" class="w-full h-60 object-cover rounded-t-xl" />
                        <div class="px-4 py-3">
                            <p class="text-lg font-bold text-black dark:text-slate-200 truncate capitalize">Italian Chicken Salad</p>
                            <div class="flex items-center mt-2">
                                <p class="text-lg font-semibold text-black dark:text-slate-200">Rp 20.000</p>
                                <div class="ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-800 dark:text-slate-200" fill="none" stroke="currentColor" stroke-width="32" viewBox="0 0 384 512">
                                    <path d="M0 48C0 21.5 21.5 0 48 0h288c26.5 0 48 21.5 48 48v440c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/>
                                </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-64 sm:w-60 py-6 bg-white dark:bg-slate-600 shadow-xl rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                    <a href="#">
                        <img src="../assets/png/exmFood.jpg" alt="Product" class="w-full h-60 object-cover rounded-t-xl" />
                        <div class="px-4 py-3">
                            <p class="text-lg font-bold text-black dark:text-slate-200 truncate capitalize">Italian Chicken Salad</p>
                            <div class="flex items-center mt-2">
                                <p class="text-lg font-semibold text-black dark:text-slate-200">Rp 20.000</p>
                                <div class="ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-800 dark:text-slate-200" fill="none" stroke="currentColor" stroke-width="32" viewBox="0 0 384 512">
                                    <path d="M0 48C0 21.5 21.5 0 48 0h288c26.5 0 48 21.5 48 48v440c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/>
                                </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-64 sm:w-60 py-6 bg-white dark:bg-slate-600 shadow-xl rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                    <a href="#">
                        <img src="../assets/png/exmFood.jpg" alt="Product" class="w-full h-60 object-cover rounded-t-xl" />
                        <div class="px-4 py-3">
                            <p class="text-lg font-bold text-black dark:text-slate-200 truncate capitalize">Italian Chicken Salad</p>
                            <div class="flex items-center mt-2">
                                <p class="text-lg font-semibold text-black dark:text-slate-200">Rp 20.000</p>
                                <div class="ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-800 dark:text-slate-200" fill="none" stroke="currentColor" stroke-width="32" viewBox="0 0 384 512">
                                    <path d="M0 48C0 21.5 21.5 0 48 0h288c26.5 0 48 21.5 48 48v440c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/>
                                </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-64 sm:w-60 py-6 bg-white dark:bg-slate-600 shadow-xl rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                    <a href="#">
                        <img src="../assets/png/exmFood.jpg" alt="Product" class="w-full h-60 object-cover rounded-t-xl" />
                        <div class="px-4 py-3">
                            <p class="text-lg font-bold text-black dark:text-slate-200 truncate capitalize">Italian Chicken Salad</p>
                            <div class="flex items-center mt-2">
                                <p class="text-lg font-semibold text-black dark:text-slate-200">Rp 20.000</p>
                                <div class="ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-800 dark:text-slate-200" fill="none" stroke="currentColor" stroke-width="32" viewBox="0 0 384 512">
                                    <path d="M0 48C0 21.5 21.5 0 48 0h288c26.5 0 48 21.5 48 48v440c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/>
                                </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-64 sm:w-60 py-6 bg-white dark:bg-slate-600 shadow-xl rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                    <a href="#">
                        <img src="../assets/png/exmFood.jpg" alt="Product" class="w-full h-60 object-cover rounded-t-xl" />
                        <div class="px-4 py-3">
                            <p class="text-lg font-bold text-black dark:text-slate-200 truncate capitalize">Italian Chicken Salad</p>
                            <div class="flex items-center mt-2">
                                <p class="text-lg font-semibold text-black dark:text-slate-200">Rp 20.000</p>
                                <div class="ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-800 dark:text-slate-200" fill="none" stroke="currentColor" stroke-width="32" viewBox="0 0 384 512">
                                    <path d="M0 48C0 21.5 21.5 0 48 0h288c26.5 0 48 21.5 48 48v440c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/>
                                </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-64 sm:w-60 py-6 bg-white dark:bg-slate-600 shadow-xl rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                    <a href="#">
                        <img src="../assets/png/exmFood.jpg" alt="Product" class="w-full h-60 object-cover rounded-t-xl" />
                        <div class="px-4 py-3">
                            <p class="text-lg font-bold text-black dark:text-slate-200 truncate capitalize">Italian Chicken Salad</p>
                            <div class="flex items-center mt-2">
                                <p class="text-lg font-semibold text-black dark:text-slate-200">Rp 20.000</p>
                                <div class="ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-800 dark:text-slate-200" fill="none" stroke="currentColor" stroke-width="32" viewBox="0 0 384 512">
                                    <path d="M0 48C0 21.5 21.5 0 48 0h288c26.5 0 48 21.5 48 48v440c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/>
                                </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-64 sm:w-60 py-6 bg-white dark:bg-slate-600 shadow-xl rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                    <a href="#">
                        <img src="../assets/png/exmFood.jpg" alt="Product" class="w-full h-60 object-cover rounded-t-xl" />
                        <div class="px-4 py-3">
                            <p class="text-lg font-bold text-black dark:text-slate-200 truncate capitalize">Italian Chicken Salad</p>
                            <div class="flex items-center mt-2">
                                <p class="text-lg font-semibold text-black dark:text-slate-200">Rp 20.000</p>
                                <div class="ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-800 dark:text-slate-200" fill="none" stroke="currentColor" stroke-width="32" viewBox="0 0 384 512">
                                    <path d="M0 48C0 21.5 21.5 0 48 0h288c26.5 0 48 21.5 48 48v440c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/>
                                </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> --}}

            </section>
            
            <!-- FOod Card - End -->
        </div>


    </div>

</x-main>