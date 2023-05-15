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
        <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-fit">
            <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                <Link class="flex items-center justify-center gap-3" href="{{ route('login') }}">
                    <i class="text-sm fa-solid fa-arrow-left"></i>
                    <p class="text-xs text-center">Back</p>
                </Link>
            </div>

            <div class="sm:hidden flex items-center justify-center p-5 pt-0 sm:p-5">
                <div class="flex items-center justify-center flex-wrap">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="sm:text-lg text-sm text-center">AUTO - SCHED</p>
                </div>
            </div>

            <div class="bg-red-500 sm:hidden w-full p-3 flex sm:px-5 items-center justify-center">
                <p class="text-white sm:text-lg text-sm font-normal text-center">FORGOT PASSWORD?</p>
            </div>

            <div class="px-3 border-l-4 border-l-red-500 hidden sm:block m-7 mb-0">
                <p class="sm:text-lg text-sm text-red-500">
                    FORGOT PASSWORD?
                </p>
            </div>

            <div class="m-7 mt-2">
                <!-- Session Status -->
                <x-auth-session-status/>
                
                <div class="my-4">
                    <p class="text-xs text-justify">
                        Forgot your Password? No Problem. Just let us know your Email Address and we will email you a Password Reset Link that will Allow you to Create a New Password.
                    </p>
                </div>
                
                <div class="mt-4">
                    <x-splade-form action="{{ route('password.email') }}">
                        <div class="w-full">
                            <x-splade-input id="email" class="input red-inpt" type="email" name="email" :label="__('Email')" required autofocus />
                        </div>
                        
                        <div class="flex items-center w-full sm:justify-between mt-8">
                            <Link class="hidden sm:block text-blc1 text-xs mr-2 transition-all ease-in-out hover:text-b6" href="{{ route('login') }}">
                                Go Back to Log In Form.
                            </Link>

                            <div class="squared-btn-i red-btn-i w-full flex flex-col sm:items-end">
                                <x-splade-submit :label="__('EMAIL PASSWORD RESET LINK')" />
                            </div>
                        </div>
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
