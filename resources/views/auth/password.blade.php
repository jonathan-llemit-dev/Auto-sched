{{-- <h1>Administrator Update Password</h1>
<x-splade-form  method="POST" action="{{ route('save-password-administrator') }}">


<x-splade-input type="password"  class="input blue-inpt leftlabel" id="currentPassword" name="current_password" label="Current Password" />
<x-splade-input type="password" class="input blue-inpt leftlabel" id="password" name="password" label="New Password" />
<x-splade-input type="password"  class="input blue-inpt leftlabel" id="password" name="password_confirmation" label="New Password" />

<x-splade-submit :label="__('Update Password')" />

</x-splade-form> --}}

<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div class="flex items-center">
                <div class="pr-3 border-r border-gray-300">
                    <Link class="flex items-center justify-center gap-3 red-btn squared-btn border-2" href="{{ route('dashboard') }}">
                        <i class="text-sm fa-solid fa-border-all"></i>
                        <p class="text-xs text-center">DASHBOARD</p>
                    </Link>
                </div>
    
                <div class="flex items-center ml-2">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="sm:text-lg text-sm whitespace-nowrap">AUTO - SCHED</p>
                </div>
            </div>
        </nav>
    </x-slot>

    <div class="sm:p-20 sm:max-w-xl w-full sm:h-fit h-full flex flex-wrap">
        <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-full">
            <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                <Link class="flex items-center justify-center gap-3" href="{{ route('dashboard') }}">
                    <i class="text-sm fa-solid fa-border-all"></i>
                    <p class="text-xs text-center">Dashboard</p>
                </Link>
            </div>
    
            <div class="sm:hidden">
                <div class="bg-red-500 w-full p-4 flex items-center justify-center">
                    <p class="text-white sm:text-lg text-sm font-normal text-center">CHANGE YOUR PASSWORD</p>
                </div>
            </div>
    
            <div class="hidden sm:block px-3 border-l-4 border-l-red-500 m-7 mb-0">
                <p class="sm:text-lg text-sm text-red-500">
                    CHANGE YOUR PASSWORD
                </p>
            </div>
    
            <x-splade-form method="POST" action="{{ route('save-password-administrator') }}" class="space-y-4">
                <div class="m-7 mt-2">
                    <div class="relative border-gray-200 border rounded-md p-6 mt-6 input-cntnr">
                        <p class="text-md bg-white px-1 rounded-md absolute -top-3 left-3">CURRENT PASSWORD</p>
    
                        <div class="flex items-end w-full relative h-full">
                            <div class="w-full">
                                <div onclick="togglecurrpass()" class="z-10 group cursor-pointer bg-white w-11 flex items-center justify-center mt-5 p-2 absolute right-0 border-gray-300 border-solid border rounded-md rounded-tl-none rounded-bl-none">
                                    <span class="cursor-pointer text-base">
                                        <i id="eyescurr" class="fa-solid fa-eye text-gray-400 group-hover:text-gray-500"></i>
                                    </span>
                                </div>

                                <x-splade-input type="password" class="input red-inpt" id="currentPassword" name="current_password" label="Password" />
                            </div>
                        </div>
                    </div>
    
                    <div class="relative border-gray-200 border rounded-md p-6 input-cntnr">
                        <p class="text-md bg-white px-1 rounded-md absolute -top-3 left-3">NEW PASSWORD</p>
    
                        <div class="w-full">
                            <div class="flex items-end w-full relative h-full">
                                <div class="w-full">
                                    <div onclick="togglepass()" class="z-10 group cursor-pointer bg-white w-11 flex items-center justify-center mt-5 p-2 absolute right-0 border-gray-300 border-solid border rounded-md rounded-tl-none rounded-bl-none">
                                        <span class="cursor-pointer text-base">
                                            <i id="eyes" class="fa-solid fa-eye text-gray-400 group-hover:text-gray-500"></i>
                                        </span>
                                    </div>
    
                                    <x-splade-input type="password" class="input red-inpt" id="password" name="password" label="Password" />
                                </div>
                            </div>
    
                            <div class="flex items-end w-full relative h-full mt-4">
                                <div class="w-full">
                                    <div onclick="togglecnfrm()" class="z-10 group cursor-pointer bg-white w-11 flex items-center justify-center mt-5 p-2 absolute right-0 border-gray-300 border-solid border rounded-md rounded-tl-none rounded-bl-none">
                                        <span class="cursor-pointer text-base">
                                            <i id="eyescnfrm" class="fa-solid fa-eye text-gray-400 group-hover:text-gray-500"></i>
                                        </span>
                                    </div>

                                    <x-splade-input type="password" class="input red-inpt" id="password_confirmation" name="password_confirmation" label="Confirm Password" />
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="rounded-btn-i red-btn-i mt-8 flex items-center justify-center">
                        <x-splade-submit onclick="start()" :label="__('SAVE CHANGES')" />
                    </div>
                </div>
            </x-splade-form>
        </div>
    </div>
</x-guest-layout>