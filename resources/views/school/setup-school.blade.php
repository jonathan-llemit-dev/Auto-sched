<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div>
                <div class="flex items-center ml-2">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="text-lg whitespace-nowrap">AUTO - SCHED</p>
                </div>
            </div>
    
            <div class="sm:flex hidden items-start h-fit transition-all ease-in-out">
                <x-splade-form method="POST" action="{{ route('logout') }}">
                    @csrf
                    
                    <button type="submit" class="blue-btn squared-btn border-2 text-xs text-center flex items-center justify-center gap-3">
                        {{ __('LOG OUT') }}
                    </button>
                </x-splade-form>
            </div>
        </nav>
    </x-slot>    

    <div class="sm:p-20 sm:w-tabw w-full sm:h-fit h-full flex flex-wrap">
        <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-full">
            <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                <x-splade-form method="POST" action="{{ route('logout') }}">
                    @csrf
                    
                    <button type="submit" class="text-xs text-center flex items-center justify-center gap-3">
                        <i class="text-sm fa-solid fa-arrow-right-from-bracket"></i> {{ __('Log Out') }}
                    </button>
                </x-splade-form>
            </div>
    
            <div class="sm:hidden">
                <div class="flex items-center justify-center p-5 pt-0">
                    <div class="flex items-center justify-center flex-wrap">
                        <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                        <p class="text-lg text-center">AUTO - SCHED</p>
                    </div>
                </div>
    
                <div class="bg-b6 w-full p-3 flex sm:px-5 items-center justify-center">
                    <p class="text-white text-lg font-normal text-center">SETUP SCHOOL PROFILE</p>
                </div>
            </div>
    
            <div class="hidden sm:block px-3 border-l-4 border-l-b6 m-7 mb-0">
                <p class="text-lg text-b6">
                    SETUP SCHOOL PROFILE
                </p>
            </div>
    
            <div class="p-7 pt-2">
                <x-splade-form :default="$school" action="{{ route('school.store') }}">
                    <div class="">
                        <p class="mt-4 text-xs text-justify">
                            You're Almost Done, but before you can Proceed to the Dashboard you Need to Setup first your School Profile.
                        </p>
                        <p class="mt-2 mb-8 text-xs flex items-center justify-center sm:justify-start">Note: " <i class="fa-solid fa-circle text-xs3 text-red-500"></i> " Means that the Field is Required.</p>
    
                        <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                            <p class="text-md bg-white px-1 rounded-md absolute -top-3 left-3">SCHOOL DETAILS</p>
    
                            <div class="w-full">
                                <div class="relative">
                                    <x-splade-input onkeyup="validate(0, 'input', 'true', 5, 50)" class="input blue-inpt" id="schName" type="text" name="schName" :label="__('School Name')" />
                                    <p class="message mt-1"></p>
                                    <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                                </div>
                            </div>
                        </div>
    
                        <div class="relative border-gray-200 border-solid border rounded-md p-6 input-cntnr">
                            <p class="text-md bg-white absolute -top-3 left-3 px-1">SCHOOL ADDRESS DETAILS</p>
        
                            <div class="lg:grid grid-cols-3 flex flex-wrap gap-3 items-center">
                                <div class="relative h-full w-full">
                                    <x-splade-select class="input drop-down blue-inpt" placeholder="Select your Region" id="regionCode" name="regionCode" remote-url="https://psgc.gitlab.io/api/regions/" option-label="name" option-value="code" :label="__('Region')" />
                                    <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                                </div>
                                
                                <div class="relative h-full w-full">
                                    <x-splade-select class="input drop-down blue-inpt" placeholder="Select your City or Municipality" id="cityCode" name="cityCode" remote-url="`https://psgc.gitlab.io/api/regions/${form.regionCode}/cities-municipalities/`" option-label="name" option-value="code" :label="__('City/Municipality')" />
                                    <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                                </div>
                                
                                <div class="relative h-full w-full">
                                    <x-splade-select class="input drop-down blue-inpt" placeholder="Select your Barangay" id="barangayCode" name="barangayCode" remote-url="`https://psgc.gitlab.io/api/cities-municipalities/${form.cityCode}/barangays/`" option-label="name" option-value="code" :label="__('Barangay')" />
                                    <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                                </div>
                            </div>
        
                            <div class="mt-4 relative">
                                <x-splade-input onkeyup="validate(1, 'addrss', 'false', 10, 100)" class="input blue-inpt" id="schAddress" type="text" name="street" :label="__('House No./Lot/Street')" />
                                <p class="message mt-1"></p>
                            </div>
                        </div>
    
                        <div class="relative border-gray-200 border-solid border rounded-md p-6 input-cntnr">
                            <p class="text-md bg-white absolute -top-3 left-3 px-1">SCHOOL CONTACT DETAILS</p>
        
                            <div class="lg:grid grid-cols-2 flex flex-wrap gap-3 items-center">
                                <div class="relative h-full w-full">
                                    <x-splade-input onkeyup="validate(2, 'num', 'true', 8, 16)" class="input blue-inpt" id="contactNumber" type="tel" name="contactNumber" :label="__('Contact Number')" />
                                    <p class="message mt-1"></p>
                                    <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                                </div>
                
                                <div class="relative h-full w-full">
                                    <x-splade-input onkeyup="validate(3, 'email', 'true', 5, 40)" class="input blue-inpt" id="email" type="text" name="email" :label="__('Email Address')" />
                                    <p class="message mt-1"></p>
                                    <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="rounded-btn-i blue-btn-i mt-8 flex items-center justify-center">
                        <x-splade-submit :label="__('SAVE CHANGES')" />
                    </div>
                </x-splade-form>
            </div>
        </div>
    </div>
</x-guest-layout>