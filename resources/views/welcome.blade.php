<x-guest-layout>
    <!-- Navbar -->
    <x-slot name="navbar">
        <nav class="hidden sm:flex w-full justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <Link href="/">
                <div class="flex items-center ml-2">
                    <div class="w-11 h-11 mr-2 background-image" style="background-image: url('{{ asset('image/logo-main.png') }}')">
                    </div>
                    
                    <p class="text-lg whitespace-nowrap">AUTO - SCHED</p>
                </div>
            </Link>
        
            <div class="flex text-xs items-center gap-4">
                <Link modal href="{{ route('login') }}" class="squared-btn blue-btn border-2 transition-all ease-in-out">LOG IN</Link>
            </div>
        </nav>
    </x-slot>
    <!-- End -->

    <!-- Content -->
    <div class="w-full flex justify-center flex-wrap">
        <div class="w-full flex justify-center flex-wrap items-center p-10 gap-1 sm:p-20 sm:gap-20">
            <div class="flex items-center justify-center w-48 h-48 sm:w-100 sm:h-100">
                <div class="w-full h-full background-image" style="background-image: url('{{ asset('image/logo-as.png') }}')">
                </div>
            </div> 

            <div class="flex flex-col titi items-center justify-center w-100">
                <p class="whitespace-nowrap text-3xl sm:text-6xl text-center xl:text-left w-full mb-3">AUTO - SCHED</p>
                <p class="text-sm sm:text-xl text-center w-full xl:text-justify">Create your school schedules with ease with the help of Auto - Sched, a web app that helps you to create school schedules way faster and conflict-free.</p>
            </div>

            <div class="sm:hidden px-5 w-full flex text-xs items-center justify-center flex-wrap">
                <Link href="{{ route('login') }}" class="rounded-btn blue-btn border-2 text-center text-b6 m-4 mx-6 transition-all ease-in-out">LOG IN</Link>
            </div>
        </div>
    </div>
    <!-- End -->
</x-guest-layout>