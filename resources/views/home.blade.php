<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link rel="icon" href="{{ asset('assets/svg/Logo.svg') }}">
        <!-- link ke google font  -->

        <!-- link ke icon fontAwesome -->
        <script src="https://kit.fontawesome.com/4fcf61398f.js" crossorigin="anonymous"></script>
        <title>{{  $title  }}</title>
        @vite('resources/js/app.js')
    </head>
    <body class="font-Inter max-h-[100vh] overflow-hidden transform-gpu">

        <section id="navbar">
            <div class="container relative">
                <div class="container flex justify-between max-w-full py-6 px-14 items-center">
                    <div class="">
                        <img src="assets/svg/Logo.svg" alt="" width="70%">
                    </div>
                    <div id="signInUp" class="font-medium flex z-[999]">
                        <div id="signIn" class="px-6 py-1 rounded-full">
                            <a href="/signin" class="text-sm">Sign In</a>
                        </div>
                        <div id="signUp" class=" px-5 py-1 rounded-full border-2 border-[#1F272D]/[.64]">
                            <a href="/signup" class="text-sm">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="mainContent">
            <div class="container">
                <div class="flex flex-wrap relative ml-14 mt-7">

                    <div id="text" class="w-full lg:w-1/2">
                        <h1 class="text-[75px] leading-[1] font-bold">Choose <br/> Your <br/> Ingredients</h1>
                        <p class="text-base py-7">Find food recipes with <br/> your ingredients and <br/> create your cooking list</p>

                        <div id="btn" class="flex gap-3">
                            <button id="btn-1" class="ingredient-btn flex before:relative items-center justify-center gap-1 min-w-[100px] hover:scale-[1.2] focus:scale-[1.2] text-sm py-4 leading-6 text-white shadow-xl 
                            shadow-secondary/50 hover:shadow-primary/50 focus:shadow-primary/50 duration-300 bg-secondary rounded-[25px] md:w-auto 
                            hover:bg-primary focus:bg-primary lineStyle button-hover focus:lineStyle focus:button-hover">
                                <img src="assets/svg/chicken.svg" alt="" class="w-[20px]">
                                <p class="text-sm">Chicken</p>
                            </button>

                            <button id="btn-2" class="ingredient-btn flex before:relative items-center justify-center gap-1 min-w-[100px] hover:scale-[1.2] focus:scale-[1.2] text-sm py-4 leading-6 text-white shadow-xl 
                            shadow-secondary/50 hover:shadow-primary/50 focus:shadow-primary/50 duration-300 bg-secondary rounded-[25px] md:w-auto 
                            hover:bg-primary focus:bg-primary lineStyle button-hover focus:lineStyle focus:button-hover">
                                <img src="assets/svg/egg.svg" alt="" class="w-[20px]">
                                <p class="text-sm">Egg</p>
                            </button>

                            <button id="btn-3" class="ingredient-btn flex before:relative items-center justify-center gap-1 min-w-[100px] hover:scale-[1.2] focus:scale-[1.2] text-sm py-4 leading-6 text-white shadow-xl 
                            shadow-secondary/50 hover:shadow-primary/50 focus:shadow-primary/50 duration-300 bg-secondary rounded-[25px] md:w-auto 
                            hover:bg-primary focus:bg-primary lineStyle button-hover focus:lineStyle focus:button-hover">
                                <img src="assets/svg/beef.svg" alt="" class="w-[20px]">
                                <p class="text-sm">Beef</p>
                            </button>

                            <button id="btn-4" class="ingredient-btn flex before:relative items-center justify-center gap-1 min-w-[100px] hover:scale-[1.2] focus:scale-[1.2] text-sm py-4 leading-6 text-white shadow-xl 
                            shadow-secondary/50 hover:shadow-primary/50 focus:shadow-primary/50 duration-300 bg-secondary rounded-[25px] md:w-auto 
                            hover:bg-primary focus:bg-primary lineStyle button-hover focus:lineStyle focus:button-hover">
                                <img src="assets/svg/fish.svg" alt="" class="w-[20px]">
                                <p class="text-sm">Fish</p>
                            </button>
                        </div>
                    </div>

                    <div id="circle" class="rotate-circle absolute bottom-0 right-0 transform translate-x-[56%] translate-y-[55%]">
                        <img src="./assets/svg/animatedFood.svg" draggable="false" class="lg:min-w-[1300px]" alt="">
                    </div>
                    
                    </div>
                </div>
            </div>
        </section>

        <script src="./js/index.js"></script>
    </body>
</html>
