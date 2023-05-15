<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <Link href="/">
                <div class="flex items-center ml-2">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="sm:text-lg text-sm whitespace-nowrap">AUTO - SCHED</p>
                </div>
            </Link>
        </nav>
    </x-slot>    

    <div class="sm:p-20 sm:max-w-lg w-full sm:h-fit h-full flex flex-wrap">
        <x-splade-modal class="rounded-xl p-0 modal" max-width="sm" :close-button="false">
            <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-full sm:block flex flex-col flex-wrap justify-between">
                <div class="">    
                    <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                        <Link class="flex items-center justify-center gap-3" href="/">
                            <i class="text-sm fa-solid fa-arrow-left"></i>
                            <p class="text-xs text-center">Back</p>
                        </Link>
                    </div>
                    
                    <div>
                        <div class="flex items-center justify-center p-5 pt-0 sm:p-5">
                            <div class="flex items-center justify-center flex-wrap">
                                <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                                <p class="sm:text-lg text-sm text-center">AUTO - SCHED</p>
                            </div>
                        </div>
            
                        <div class="bg-b6 w-full p-3 flex sm:px-5 items-center justify-center">
                            <p class="text-white sm:text-lg text-sm font-normal text-center">ADMINISTRATOR'S LOG IN FORM</p>
                        </div>
                    </div>
        
                    <x-splade-form action="{{ route('login') }}">
                        <div class="m-7">
                            <div class="w-full">
                                <x-splade-input class="input blue-inpt" id="email" type="email" name="email" :label="__('Email')" />
                            </div>
        
                            <div class="relative h-full w-full mt-3">
                                <div onclick="togglepass()" class="z-10 group cursor-pointer bg-white w-11 flex items-center justify-center mt-5 p-2 absolute right-0 border-gray-300 border-solid border rounded-md rounded-tl-none rounded-bl-none">
                                    <span class="cursor-pointer text-base">
                                        <i id="eyes" class="fa-solid fa-eye text-gray-400 group-hover:text-gray-500"></i>
                                    </span>
                                </div>
        
                                <x-splade-input class="input blue-inpt" id="password" type="password" name="password" :label="__('Password')" />
                            </div>
        
                            <div class="mt-4 check w-fit">
                                <x-splade-checkbox id="remember_me" name="remember" :label="__('Remember me')" />
                            </div>
                        </div>
        
                        <div class="flex items-center justify-center flex-col w-full">
                            <div class="rounded-btn-i blue-btn-i mb-5">
                                <x-splade-submit onclick="start()" :label="__('LOG IN')" />
                            </div>
                        </div>
                    </x-splade-form>
                </div>
    
                @if (Route::has('password.request'))
                    <div class="flex flex-col items-center mb-8">
                        <Link class="text-xs text-red-500 sm:hover:text-red-300 mb-1" href="{{ route('password.request') }}" >
                            {{ __('Forgot your password?') }}
                        </Link>
    
                        <div class="flex items-center justify-center">
                            <p class="text-blc1 text-xs mr-2">No Account Yet? </p>
        
                            <Link class="text-xs text-b6 sm:hover:text-b4" onclick="start()" href="{{ route('register') }}">
                                Register Here.
                            </Link>
                        </div>
                    </div>
                @else  
                    <div class="flex flex-col items-center mb-8">
                        <div class="flex items-center justify-center">
                            <p class="text-blc1 text-xs mr-2">No Account Yet? </p>
        
                            <Link class="text-xs text-b6 sm:hover:text-b4" onclick="start()" href="{{ route('register') }}">
                                Register Here.
                            </Link>
                        </div>
                    </div>
                @endif
            </div>
        </x-splade-modal>
    </div>
</x-guest-layout>