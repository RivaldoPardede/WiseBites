<x-main>
    <x-slot:title>{{  $title  }}</x-slot:title>
    <main class="relative h-screen flex flex-1 flex-col overflow-hidden px-4 sm:px-6 lg:px-8">
        <div class="absolute inset-0 text-slate-900/[0.1] [mask-image:linear-gradient(to_bottom_left,white,transparent,transparent)]">
            <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid-bg" width="32" height="32" patternUnits="userSpaceOnUse" x="100%" patternTransform="translate(0 -1)">
                        <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid-bg)"></rect>
            </svg>
        </div>
        <div class="relative flex flex-1 flex-col items-center justify-center pb-16 pt-12">
            <div class="max-w-sm w-full px-8 shadow-2xl drop-shadow-lg rounded-lg">
                <img src="../assets/svg/Logo.svg" class="mx-auto pt-10 w-20" alt="">
                <h1 class="mb-2 text-center pb-10 text-xl font-semibold text-gray-900">Reset your password</h1>
                <form action="{{route('password.reset_password')}}" method="POST" class="w-full pb-10">
                    @csrf
                    <input type="hidden" name="password_reset_token" value="{{$token}}">
                    <div class="mb-5 relative">
                        <label for="password" class="block text-sm font-semibold leading-6 text-gray-900">New Password</label>
                        <input type="password" name="password" id="password" class="mt-2 appearance-none text-slate-900 bg-white rounded-md block w-full px-3 h-10 
                        shadow-sm sm:text-sm focus:outline-none placeholder:text-slate-400 focus:ring-2 focus:ring-slate-800 ring-1 
                        ring-slate-200" required="" autofocus="" value="">
                    </div>
                    <div class="relative">
                        <label for="confirm-password" class="block text-sm font-semibold leading-6 text-gray-900">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="mt-2 appearance-none text-slate-900 bg-white rounded-md block w-full px-3 h-10 
                        shadow-sm sm:text-sm focus:outline-none placeholder:text-slate-400 focus:ring-2 focus:ring-slate-800 ring-1 
                        ring-slate-200" required="" autofocus="" value="">
                    </div>
                    <button type="submit" class="py-2.5 px-4 relative rounded-lg group w-full text-white font-semibold mt-6 inline-block text-sm text-center">
                        <span class="absolute top-0 left-0 w-full h-full rounded opacity-50 filter blur-sm bg-gradient-to-br from-darkPrimary to-primary"></span>
                        <span class="h-full w-full inset-0 absolute mt-0.5 ml-0.5 bg-gradient-to-br filter group-active:opacity-0 rounded opacity-50 from-darkPrimary to-primary"></span>
                        <span class="absolute inset-0 w-full h-full transition-all duration-200 ease-out rounded shadow-xl bg-gradient-to-br filter group-active:opacity-0 group-hover:blur-sm from-darkPrimary to-primary"></span>
                        <span class="absolute inset-0 w-full h-full transition duration-200 ease-out rounded bg-gradient-to-br to-darkPrimary from-primary"></span>
                        <span class="relative">Reset Password</span>
                    <button>
                </form>
            </div>
        </div>
    </main>
</x-main>