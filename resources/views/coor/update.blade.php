<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div class="flex items-center">
                <div class="pr-3 border-r border-gray-300">
                    <Link class="flex items-center justify-center gap-3 blue-btn squared-btn border-2" href="{{ route('coor.dashboard') }}">
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
                <Link class="flex items-center justify-center gap-3" href="{{ route('coor.dashboard') }}">
                    <i class="text-sm fa-solid fa-border-all"></i>
                    <p class="text-xs text-center">Dashboard</p>
                </Link>
            </div>
    
            <div class="sm:hidden">
                <div class="bg-b6 w-full p-4 flex items-center justify-center">
                    <p class="text-white sm:text-lg text-sm font-normal text-center">UPDATE YOUR PROFILE</p>
                </div>
            </div>
    
            <div class="hidden sm:block px-3 border-l-4 border-l-b6 m-7 mb-0">
                <p class="sm:text-lg text-sm text-b6">
                    UPDATE YOUR PROFILE
                </p>
            </div>
    
            <x-splade-form :default="$user" action="{{ route('coordinator-save-profile') }}" class="space-y-4">
                <div class="m-7 mt-2">
                    <div class="relative border-gray-200 border rounded-md p-6 mt-6 input-cntnr">
                        <p class="text-md bg-white px-1 rounded-md absolute -top-3 left-3">COORDINATOR PERSONAL DETAILS</p>
    
                        <div class="w-full">
                            <div class="">
                                <x-splade-input class="input blue-inpt" id="coorFName" type="text" name="coorFName" :label="__('First Name')" />
                            </div>
            
                            <div class="mt-4">
                                <x-splade-input class="input blue-inpt" id="coorLName" type="text" name="coorLName" :label="__('Last Name')" />
                            </div>
                        </div>
                    </div>
    
                    <div class="relative border-gray-200 border rounded-md p-6 input-cntnr">
                        <p class="text-md bg-white px-1 rounded-md absolute -top-3 left-3">CONTACT DETAILS</p>
    
                        <div class="w-full">
                            <div class="">
                                <x-splade-input class="input blue-inpt" id="email" type="email" name="email" :label="__('Email')" />
                            </div>
    
                            <div class="flex items-end w-full relative h-full mt-4">
                                <div class="w-full">
                                    <x-splade-input class="input blue-inpt" id="contactNumber" type="text" name="contactNumber" :label="__('Contact No.')" />
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="rounded-btn-i blue-btn-i mt-8 flex items-center justify-center">
                        <x-splade-submit onclick="start()" :label="__('SAVE CHANGES')" />
                    </div>
                </div>
            </x-splade-form>
        </div>
    </div>
</x-guest-layout>
