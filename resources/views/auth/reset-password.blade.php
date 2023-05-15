<x-guest-layout>    
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div>
                <div class="flex items-center ml-2">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="sm:text-lg text-sm whitespace-nowrap">AUTO - SCHED</p>
                </div>
            </div>
        </nav>
    </x-slot>    

    <div class="sm:p-20 sm:max-w-lg w-full sm:h-fit h-full flex flex-wrap">
        <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-fit">
            <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                <Link class="flex items-center justify-center gap-3" href="{{ route('login') }}">
                    <i class="text-sm fa-solid fa-arrow-left"></i>
                    <p class="text-xs text-center">Exit</p>
                </Link>
            </div>

            <div class="sm:hidden flex items-center justify-center p-5 pt-0 sm:p-5">
                <div class="flex items-center justify-center flex-wrap">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="sm:text-lg text-sm text-center">AUTO - SCHED</p>
                </div>
            </div>

            <div class="bg-red-500 sm:hidden w-full p-3 flex sm:px-5 items-center justify-center">
                <p class="text-white sm:text-lg text-sm font-normal text-center">RESET YOUR PASSWORD</p>
            </div>

            <div class="px-3 border-l-4 border-l-red-500 hidden sm:block m-7 mb-0">
                <p class="sm:text-lg text-sm text-red-500">
                    RESET YOUR PASSWORD
                </p>
            </div>

            <div class="m-7 mt-2">
                <div class="my-4">
                    <p class="text-xs text-justify">
                        You're Almost Done. Now Enter your New Password and Confirm.
                    </p>

                    <p class="mt-2 text-xs flex items-center justify-center sm:justify-start">Note: " <i class="fa-solid fa-circle text-xs3 text-red-500"></i> " Means that the Field is Required.</p>
                </div>
                
                <div class="mt-4">
                    <x-splade-form :default="['email' => $request->email, 'token' => $request->route('token')]" action="{{ route('password.store') }}">
                        <div class="w-full">
                            <x-splade-input id="email" class="input red-inpt" type="email" name="email" :label="__('Email')" readonly />
                            <p class="message mt-1"></p>
                        </div>

                        <div class="relative h-full w-full mt-3">
                            <div onclick="togglepass()" class="group cursor-pointer bg-white w-11 flex items-center justify-center mt-5 p-2 absolute right-0 border-gray-300 border-solid border rounded-md rounded-tl-none rounded-bl-none">
                                <span class="cursor-pointer text-base">
                                    <i id="eyes" class="fa-solid fa-eye text-gray-400 group-hover:text-gray-500"></i>
                                </span>
                            </div>

                            <span class="group cursor-pointer rounded-full bg-gray-400 w-4 h-4 right-0 flex items-center justify-center absolute">
                                <i class="fa-solid fa-question text-xs2 text-white relative flex justify-center">
                                    <div class="rounded-md opacity-0 invisible absolute -top-32 -right-3 sm:-right-1 transition-all ease-in-out bg-white group-hover:opacity-100 group-hover:visible">
                                        <div class="relative flex justify-center items-center rounded-md shadow-md bg-white border border-gray-600">
                                            <i class="fa-solid fa-caret-down absolute -bottom-4 right-2 sm:right-0 text-lg text-gray-600"></i>
                                            <p class="whitespace-nowrap p-2 text-xs font-normal text-blc1">Password Requires Atleast: <br> 1 Lowercase Letter <br> 1 Uppercase Letter <br> 1 Number <br> 1 Symbol <br> And Should have Atleast 8 Characters Long.</p>
                                        </div>
                                    </div>
                                </i>
                            </span>

                            <x-splade-input onkeyup="validate(1, 'pass', 'true', 8, 40)" class="input red-inpt" id="password" type="password" name="password" :label="__('Password')" />
                            <p class="message mt-1"></p>
                            <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                        </div>
            
                        <div class="relative h-full w-full mt-3">
                            <div onclick="togglecnfrm()" class="group cursor-pointer bg-white w-11 flex items-center justify-center mt-5 p-2 absolute right-0 border-gray-300 border-solid border rounded-md rounded-tl-none rounded-bl-none">
                                <span class="cursor-pointer text-base">
                                    <i id="eyescnfrm" class="fa-solid fa-eye text-gray-400 group-hover:text-gray-500"></i>
                                </span>
                            </div>
    
                            <x-splade-input onkeyup="validate(2, 'cnfrm', 'false')" class="input red-inpt" id="password_confirmation" type="password" name="password_confirmation" :label="__('Confirm Password')" />
                            <p class="message mt-1"></p>
                        </div>
                        
                        <div class="flex items-center w-full sm:justify-between mt-8">
                            <Link class="hidden sm:block text-blc1 text-xs mr-2 transition-all ease-in-out hover:text-b6" href="{{ route('login') }}">
                                Go Back to Log In Form.
                            </Link>

                            <div class="squared-btn-i red-btn-i w-full flex flex-col sm:items-end">
                                <x-splade-submit :label="__('CONFIRM NEW PASSWORD')" />
                            </div>
                        </div>
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>