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
            <div class="max-w-sm px-8 shadow-2xl drop-shadow-lg rounded-lg">
                <img src="../assets/svg/Logo.svg" class="mx-auto pt-10 w-20" alt="">
                <h1 class="mb-2 text-center pb-10 text-xl font-semibold text-gray-900">Verify Your Email</h1>
                <p class="mb-10 text-center text-sm">Verification has been sent to your email, please click the button to verify.</p>
            </div>
        </div>
    </main>
</x-main>