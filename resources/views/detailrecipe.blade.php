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

        <!-- Main Content - Start -->
        <div id="mainContent" class="w-full ml-0 lg:ml-56 transition-margin-left duration-700 ease-in-out">
            <!-- Navbar - Start -->
            <nav class="w-full mt-2 max-w-[1100px] px-6 py-3 mx-auto bg-white border transition duration-300 ease-in-out dark:bg-slate-900 shadow-lg dark:shadow-slate-950 rounded-xl border-slate-200 dark:border-slate-800 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200">
                <div class="flex items-center justify-between text-slate-900 dark:text-white">
                    <h1 class="mr-4 block cursor-pointer py-1.5 text-base font-semibold leading-relaxed tracking-normal text-inherit antialiased">Detail Recipe</h1>
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
                    <!-- Detail Atas - Start -->
                <div class="flex flex-col lg:flex-row mb-5 ">
                    <!-- Menu Detail - Start -->
                    <div class="flex-shrink-0 dark:text-gray-300">
                        <img src="{{ $recipe['image'] }}" alt="Italian Chicken Salad" class="rounded-2xl w-full max-w-lg h-full max-h-[470px] px-6 mb-8">
                        <h1 class="text-[32px] mb-3 px-6">{{ $recipe['title'] }}</h1>
                        <p class="text-[32px] font-semibold text-secondary dark:text-gray-300 mb-3.5 px-6">{{ $recipe['pricePerServing']}}</p>
                        <div class="flex gap-x-16 ml-8 lg:ml-72 mb-5">
                            <button id="showEstimationBtn" class="rounded-2xl shadow-sm lg:shadow-2xl shadow-black py-1 px-4 hover:bg-primary hover:text-white transition duration-200 ease-in">
                                <span class="text-[12px] font-semibold">Estimate Price</span>
                                <i class="fa-regular fa-dollar-sign ml-2"></i>
                            </button>                    
                            
                            <a href="#" class="hover:text-primary">
                                <i class="fa-solid fa-share-nodes my-2"></i>
                            </a>                    
                            </div>
                    </div>
                    <!-- Menu Detail - End -->

                    <!-- Description - Start -->
                    <div class="mt-4 ml-10 lg:mt-0 lg:ml-6 flex-grow">
                        <div class="bg-greybg dark:bg-secondary rounded-xl ">
                            <div class="py-10 px-10 ">
                                <p class="text-greyfont dark:text-gray-300 text-2xl font-semibold text-center ">Description</p>
                                <p class="text-greyfont dark:text-gray-300 text-xl pt-5">
                                    {!! $recipe['summary'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Description - End -->
                </div>
                <!-- Detail Atas - End -->


                <!-- Detail Bawah - Start -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 px-10 mb-10 wf">
                    <!-- Ingredients - Start -->
                    <div class="bg-greybg dark:bg-secondary rounded-xl px-11 py-9">
                        <h2 class="text-2xl font-semibold text-center text-greyfont dark:text-gray-300 pb-9">Ingredients</h2>
                        <ol class="custom-disc list-inside text-greyfont dark:text-gray-300 grid grid-cols-1 lg:grid-cols-2 gap-x-6 gap-y-2">
                            @foreach ($recipe['extendedIngredients'] as $ingredient)
                                <li>{{ $ingredient['measures']['metric']['amount']}} {{ $ingredient['measures']['metric']['unitShort'] }} {{ $ingredient['name'] }}</li>
                            @endforeach
                        </ol>
                    </div>
                    <!-- Ingredients - End -->


                    <!-- Direction - Start -->
                    <div class="bg-greybg dark:bg-secondary rounded-xl px-11 py-9">
                        <h2 class="text-2xl font-semibold text-center text-greyfont dark:text-gray-300 pb-9">Directions</h2>
                        <p class="text-greyFont dark:text-gray-300">{!! $recipe['instructions'] !!}</p>
                    </div>
                    <!-- Direction - End -->
                </div>
                </div>
                <!-- Detail Content - End -->
                </div>

                <!-- Estimation - Start -->
                {{-- <div id="Estimation" class="fixed inset-0 bg-gray-700 bg-opacity-75 items-center justify-center hidden">
                    <div class="bg-white rounded-lg shadow-lg max-w-3xl max-h-fit w-full p-6 relative">
                        <span id="closeEstimationBtn" class="absolute top-0 right-0 p-4 cursor-pointer text-greyfont font-semibold">&times;</span>
                        <h2 class="text-center text-2xl font-bold mb-6">Estimation Price</h2>
                        <table class="w-full">
                            <tbody>
                                <tr class="border-b mb-3">
                                    <td class="text-greyfont py-2">50gr Lettuce</td>
                                    <td class="text-right text-primary font-semibold py-2">Rp.2k</td>
                                </tr>
                                <tr class="border-b mb-3">
                                    <td class="text-greyfont py-2">10gr Purple cabbage</td>
                                    <td class="text-right text-primary font-semibold py-2">Rp.2k</td>
                                </tr>
                                <tr class="border-b mb-3">
                                    <td class="text-greyfont py-2">10gr Cucumber</td>
                                    <td class="text-right text-primary font-semibold py-2">Rp.2k</td>
                                </tr>
                                <tr class="border-b mb-3">
                                    <td class="text-greyfont py-2">2 Eggs</td>
                                    <td class="text-right text-primary font-semibold py-2">Rp.5k</td>
                                </tr>
                                <tr class="border-b mb-3">
                                    <td class="text-greyfont py-2">100gr Grilled chicken</td>
                                    <td class="text-right text-primary font-semibold py-2">Rp.6k</td>
                                </tr>
                                <tr class="border-b mb-3">
                                    <td class="text-greyfont py-2">20gr Boiled Corn</td>
                                    <td class="text-right text-primary font-semibold py-2">Rp.1k</td>
                                </tr>
                                <tr class="border-b mb-3">
                                    <td class="text-greyfont py-2">10gr Salad Dressing</td>
                                    <td class="text-right text-primary font-semibold py-2">Rp.1k</td>
                                </tr>
                                <tr class="font-bold">
                                    <td class="text-greyfont py-4">Total</td>
                                    <td class="text-right py-4">Rp.19k</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}
                <!-- Estimation End -->
        </div>
        <!-- Main Content - End -->
    </div>
</x-main>