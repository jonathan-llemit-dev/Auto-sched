<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div class="flex items-center">
                <div class="pr-3 border-r border-gray-300">
                    <Link class="flex items-center justify-center gap-3 blue-btn squared-btn border-2" href="{{ route('school.index') }}">
                        <i class="text-sm fa-solid fa-calendar-days"></i>
                        <p class="text-xs text-center">SCHOOL PROFILE</p>
                    </Link>
                </div>
    
                <div class="flex items-center ml-2">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="text-lg whitespace-nowrap">AUTO - SCHED</p>
                </div>
            </div>
        </nav>
    </x-slot>  
    
    <div class="sm:p-20 sm:w-tabw w-full sm:h-fit h-full flex flex-wrap">
        <x-splade-modal class="rounded-xl p-0 modal blue-btn-x" max-width="4xl">
            <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-full">
                <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                    <Link class="flex items-center justify-center gap-3" href="{{ route('school.index') }}">
                        <i class="text-sm fa-solid fa-school"></i>
                        <p class="text-xs text-center">School Profile</p>
                    </Link>
                </div>
        
                <div class="sm:hidden">
                    <div class="bg-b6 w-full p-3 flex sm:px-5 items-center justify-center">
                        <p class="text-white sm:text-lg text-sm font-normal text-center">UPDATE SCHOOL PROFILE</p>
                    </div>
                </div>
        
                <div class="hidden sm:block px-3 border-l-4 border-l-b6 m-7 mb-0">
                    <p class="sm:text-lg text-sm text-b6">
                        UPDATE SCHOOL PROFILE
                    </p>
                </div>
        
                <div class="p-7 pt-2">
                    <x-splade-form :default="$school" action="{{ route('school.store') }}">
                        <div class="">
                            <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">SCHOOL DETAILS</p>
        
                                <div class="w-full">
                                    <div class="relative">
                                        <x-splade-input onkeyup="validate(0, 'input', 'true', 5, 50)" class="input blue-inpt" id="schName" type="text" name="schName" :label="__('School Name')" />
                                        <p class="message mt-1"></p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="relative border-gray-200 border-solid border rounded-md p-6 input-cntnr">
                                <p class="sm:text-base text-sm bg-white absolute -top-3 left-3 px-1">SCHOOL ADDRESS DETAILS</p>
            
                                <div class="lg:grid grid-cols-3 flex flex-wrap gap-3 items-center">
                                    <div class="relative h-full w-full">
                                        <x-splade-select class="drop-down blue-inpt" placeholder="Select your Region" id="regionCode" name="regionCode" remote-url="https://psgc.gitlab.io/api/regions/" option-label="name" option-value="code" :label="__('Region')" />
                                    </div>
                                    
                                    <div class="relative h-full w-full">
                                        <x-splade-select class="drop-down blue-inpt" placeholder="Select your City or Municipality" id="cityCode" name="cityCode" remote-url="`https://psgc.gitlab.io/api/regions/${form.regionCode}/cities-municipalities/`" option-label="name" option-value="code" :label="__('City/Municipality')" />
                                    </div>
                                    
                                    <div class="relative h-full w-full">
                                        <x-splade-select class="drop-down blue-inpt" placeholder="Select your Barangay" id="barangayCode" name="barangayCode" remote-url="`https://psgc.gitlab.io/api/cities-municipalities/${form.cityCode}/barangays/`" option-label="name" option-value="code" :label="__('Barangay')" />
                                    </div>
                                </div>
            
                                <div class="mt-4 relative">
                                    <x-splade-input onkeyup="validate(1, 'addrss', 'false', 10, 100)" class="input blue-inpt" id="schAddress" type="text" name="street" :label="__('House No./Lot/Street')" />
                                    <p class="message mt-1"></p>
                                </div>
                            </div>
        
                            <div class="relative border-gray-200 border-solid border rounded-md p-6 input-cntnr">
                                <p class="sm:text-base text-sm bg-white absolute -top-3 left-3 px-1">SCHOOL CONTACT DETAILS</p>
            
                                <div class="lg:grid grid-cols-2 flex flex-wrap gap-3 items-center">
                                    <div class="relative h-full w-full">
                                        <x-splade-input onkeyup="validate(2, 'num', 'true', 8, 16)" class="input blue-inpt" id="contactNumber" type="tel" name="contactNumber" :label="__('Contact Number')" />
                                        <p class="message mt-1"></p>
                                    </div>
                    
                                    <div class="relative h-full w-full">
                                        <x-splade-input onkeyup="validate(3, 'email', 'true', 5, 40)" class="input blue-inpt" id="email" type="text" name="email" :label="__('Email Address')" />
                                        <p class="message mt-1"></p>
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
        </x-splade-modal>
    </div>
</x-guest-layout>