<x-main>
    <x-slot:title>{{  $title  }}</x-slot:title>
    <div class="flex h-screen">
        <!-- Left Page -->
        <div class="hidden lg:flex items-center justify-center flex-1 text-white bg-primary">
            <div class=" max-w-lg mt-7 text-center">
                <h2 class="text-[23px] font-semibold">Find food recipes with you ingredients and create your cooking list</h2>
                <img draggable="false" src="../assets/svg/chef.svg" class="w-[500px]" alt="">
            </div>
        </div>
        <!-- Right Page -->
        <div class="w-full lg:w-1/2 flex items-center justify-center">
            <div class="max-w-md w-full pb-10">
                <h1 class="text-3xl font-extrabold mb-10 text-black text-center">Create Account</h1>

                <div class="mt-4 flex flex-col lg:flex-row items-center justify-between">
                    <div class="w-full mb-2 lg:mb-0">
                        <a href="/auth/redirect" class="w-full p-3 flex justify-center items-center gap-2 bg-white text-[12px] text-gray-600 rounded-md hover:bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5" id="google">
                                <path fill="#fbbb00" d="M113.47 309.408 95.648 375.94l-65.139 1.378C11.042 341.211 0 299.9 0 256c0-42.451 10.324-82.483 28.624-117.732h.014L86.63 148.9l25.404 57.644c-5.317 15.501-8.215 32.141-8.215 49.456.002 18.792 3.406 36.797 9.651 53.408z"></path>
                                <path fill="#518ef8" d="M507.527 208.176C510.467 223.662 512 239.655 512 256c0 18.328-1.927 36.206-5.598 53.451-12.462 58.683-45.025 109.925-90.134 146.187l-.014-.014-73.044-3.727-10.338-64.535c29.932-17.554 53.324-45.025 65.646-77.911h-136.89V208.176h245.899z"></path>
                                <path fill="#28b446" d="m416.253 455.624.014.014C372.396 490.901 316.666 512 256 512c-97.491 0-182.252-54.491-225.491-134.681l82.961-67.91c21.619 57.698 77.278 98.771 142.53 98.771 28.047 0 54.323-7.582 76.87-20.818l83.383 68.262z"></path>
                                <path fill="#f14336" d="m419.404 58.936-82.933 67.896C313.136 112.246 285.552 103.82 256 103.82c-66.729 0-123.429 42.957-143.965 102.724l-83.397-68.276h-.014C71.23 56.123 157.06 0 256 0c62.115 0 119.068 22.126 163.404 58.936z"></path>
                            </svg> Sign Up with Google 
                        </a>
                    </div>
                </div>
                
                <div class="my-7 text-sm text-slate-400 text-center">
                    <p> - OR - </p>
                </div>

                <form action="/signup" method="POST" class="space-y-4">
                    @csrf
                    <div class="flex flex-col gap-8">
                        <div class="relative h-11 w-full min-w-[200px]">
                            <input placeholder="Jhon Doe" name="name" id="name" required class="peer h-full w-full border-b border-slate-200 bg-transparent pt-4 pb-3 font-sans text-sm 
                            font-normal text-slate-700 outline outline-0 transition-all placeholder-shown:border-slate-200 
                            focus:border-slate-500 focus:outline-0 disabled:border-0 disabled:bg-slate-50 placeholder:opacity-0 
                            focus:placeholder:opacity-100"/>
                            <label class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none 
                            !overflow-visible truncate text-[13px] font-normal leading-tight text-slate-500 transition-all after:absolute 
                            after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-slate-500 
                            after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] 
                            peer-placeholder-shown:text-slate-500 peer-focus:text-[13px] peer-focus:leading-tight peer-focus:text-slate-800 
                            peer-focus:after:scale-x-100 peer-focus:after:border-slate-800 peer-disabled:text-transparent 
                            peer-disabled:peer-placeholder-shown:text-slate-500">Full Name</label>
                        </div>

                        <div class="relative h-11 w-full min-w-[200px]">
                            <input type="email" name="email" id="email" required placeholder="JohnDoe@gmail.com" class="peer h-full w-full border-b border-slate-200 bg-transparent pt-4 pb-3 font-sans text-sm 
                            font-normal text-slate-700 outline outline-0 transition-all placeholder-shown:border-slate-200 
                            focus:border-slate-500 focus:outline-0 disabled:border-0 disabled:bg-slate-50 placeholder:opacity-0 
                            focus:placeholder:opacity-100"/>
                            <label class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none 
                            !overflow-visible truncate text-[13px] font-normal leading-tight text-slate-500 transition-all after:absolute 
                            after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-slate-500 
                            after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] 
                            peer-placeholder-shown:text-slate-500 peer-focus:text-[13px] peer-focus:leading-tight peer-focus:text-slate-800 
                            peer-focus:after:scale-x-100 peer-focus:after:border-slate-800 peer-disabled:text-transparent 
                            peer-disabled:peer-placeholder-shown:text-slate-500">Email Address</label>
                        </div>

                        <div class="relative h-11 w-full min-w-[200px]">
                            <input placeholder="" name="password" id="password" type="password" required class="peer h-full w-full border-b border-slate-200 bg-transparent pt-4 pb-3 font-sans text-sm 
                            font-normal text-slate-700 outline outline-0 transition-all placeholder-shown:border-slate-200 
                            focus:border-slate-500 focus:outline-0 disabled:border-0 disabled:bg-slate-50 placeholder:opacity-0 
                            focus:placeholder:opacity-100"/>
                            <label class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none 
                            !overflow-visible truncate text-[13px] font-normal leading-tight text-slate-500 transition-all after:absolute 
                            after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-slate-500 
                            after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] 
                            peer-placeholder-shown:text-slate-500 peer-focus:text-[13px] peer-focus:leading-tight peer-focus:text-slate-800 
                            peer-focus:after:scale-x-100 peer-focus:after:border-slate-800 peer-disabled:text-transparent 
                            peer-disabled:peer-placeholder-shown:text-slate-500">Password</label>
                        </div>

                        <div class="">
                            <button type="submit" class="relative h-11 w-full inline-flex items-center justify-start px-6 py-3 overflow-hidden font-medium transition-all bg-red-500 rounded-xl group shadow-xl shadow-primary/50">
                                <span class="absolute top-0 right-0 inline-block w-4 h-4 transition-all duration-500 ease-in-out bg-red-700 rounded group-hover:-mr-4 group-hover:-mt-4">
                                <span class="absolute top-0 right-0 w-5 h-5 rotate-45 translate-x-1/2 -translate-y-1/2 bg-white"></span>
                                </span>
                                <span class="absolute bottom-0 left-0 w-full h-full transition-all duration-500 ease-in-out delay-200 -translate-x-full translate-y-full bg-red-600 rounded-2xl group-hover:mb-12 group-hover:translate-x-0"></span>
                                <span class="relative w-full text-center text-white transition-colors duration-200 ease-in-out group-hover:text-white">Create Account</span>
                            </button>
                        </div>
                    </div>
                    
                </form>

                <div class="mt-7 text-sm text-slate-400 text-center">
                    <p>Already have an account? 
                        <a href="/signin" class="text-slate-700 hover:text-primary hover:underline transition duration-300">Sign In</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</x-main>