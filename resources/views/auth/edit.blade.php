<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div class="flex items-center">
                <div class="pr-3 border-r border-gray-300">
                    <Link class="flex items-center justify-center gap-3 blue-btn squared-btn border-2" href="{{ route('dashboard') }}">
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

    <div class="sm:p-20 sm:w-fit lg:w-tabw w-full sm:h-fit h-full flex flex-wrap">
        <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-full">
            <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                <Link class="flex items-center justify-center gap-3" href="{{ route('dashboard') }}">
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
    
            <x-splade-form confirm="UPDATE PROFILE" confirm-text="Are You Sure?" confirm-button="Confirm" cancel-button="Cancel" method="POST" :default="$user" action="profileUpdateCoor" class="space-y-4">
                <div class="m-7 mt-2">
                    <p class="mt-4 mb-8 text-xs0 flex items-center justify-center sm:justify-start">Note: " <i class="fa-solid fa-circle text-xs3 text-red-500"></i> " Means that the Field is Required.</p>
    
                    <div class="relative border-gray-200 border-solid border rounded-md p-6 input-cntnr">
                        <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">PERSONAL DETAILS</p>
    
                        <div class="lg:grid grid-cols-3 flex flex-wrap gap-3 items-center">
                            <div class="relative h-full w-full">
                                <x-splade-input onkeyup="validate(0, 'input', 'true', 2, 40)" class="input blue-inpt" id="adminFName" type="text" name="adminFName" :label="__('First Name')" :show-errors="false" required />
                                <p class="message"></p>
                                <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                            </div>
            
                            <div class="h-full w-full">
                                <x-splade-input onkeyup="validate(1, 'input', 'false', 2, 40)" class="input blue-inpt" id="adminMName" type="text" name="adminMName" :label="__('Middle Name (Optional)')"  :show-errors="false" />
                                <p class="message"></p>
                            </div>
            
                            <div class="relative h-full w-full">
                                <x-splade-input onkeyup="validate(2, 'input', 'true', 2, 40)" class="input blue-inpt" id="adminLName" type="text" name="adminLName" :label="__('Last Name')"  :show-errors="false" required />
                                <p class="message"></p>
                                <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                            </div>
                        </div>
                    </div>
    
                    <div class="relative border-gray-200 border-solid border rounded-md p-6 input-cntnr">
                        <p class="sm:text-base text-sm bg-white absolute -top-3 left-3 px-1">ADDRESS DETAILS</p>
    
                        <div class="lg:grid grid-cols-3 flex flex-wrap gap-3 items-center">
                            <div class="relative h-full w-full">
                                <x-splade-select class="drop-down blue-inpt" placeholder="Select your Region" id="regionCode" name="regionCode" remote-url="https://psgc.gitlab.io/api/regions/" option-label="name" option-value="code" :label="__('Region')" required />
                                <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                            </div>
                            
                            <div class="relative h-full w-full">
                                <x-splade-select class="drop-down blue-inpt" placeholder="Select your City or Municipality" id="cityCode" name="cityCode" remote-url="`https://psgc.gitlab.io/api/regions/${form.regionCode}/cities-municipalities/`" option-label="name" option-value="code" :label="__('City/Municipality')" required />
                                <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                            </div>
                            
                            <div class="relative h-full w-full">
                                <x-splade-select class="drop-down blue-inpt" placeholder="Select your Barangay" id="barangayCode" name="barangayCode" remote-url="`https://psgc.gitlab.io/api/cities-municipalities/${form.cityCode}/barangays/`" option-label="name" option-value="code" :label="__('Barangay')" required />
                                <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                            </div>
                        </div>
    
                        <div class="mt-4 relative h-full w-full">
                            <x-splade-input onkeyup="validate(3, 'addrss', 'false', 10, 100)" class="input blue-inpt" id="schAddress" type="text" name="street" :label="__('House No./Lot/Street')"  :show-errors="false" />
                            <p class="message"></p>
                        </div>
                    </div>
    
                    <div class="relative border-gray-200 border-solid border rounded-md p-6 input-cntnr">
                        <p class="sm:text-base text-sm bg-white absolute -top-3 left-3 px-1">CONTACT DETAILS</p>
    
                        <div class="lg:grid grid-cols-2 flex flex-wrap gap-3 items-center">
                            <div class="relative h-full w-full">
                                <x-splade-input onkeyup="validate(4, 'num', 'true', 8, 16)" class="input blue-inpt" id="contactNumber" type="tel" name="contactNumber" :label="__('Contact Number')" required />
                                <p class="message"></p>
                                <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                            </div>
            
                            <div class="relative h-full w-full">
                                <x-splade-input onkeyup="validate(5, 'email', 'true', 5, 40)" class="input blue-inpt" id="email" type="text" name="email" :label="__('Email Address')" required />
                                <p class="message"></p>
                                <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                            </div>
                        </div>
                    </div>
    
                    <div class="flex items-center w-full justify-center sm:justify-end">
                        <div class="squared-btn-i blue-btn-i w-full sm:w-fit flex flex-col sm:p-0">
                            <x-splade-submit onclick="start()" :label="__('SAVE CHANGES')" />
                        </div>
                    </div>
                </div>
            </x-splade-form>
        </div>
    </div>
</x-guest-layout>