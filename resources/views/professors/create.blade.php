<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div class="flex items-center">
                <div class="pr-3 border-r border-gray-300">
                    <Link class="flex items-center justify-center gap-3 blue-btn squared-btn border-2" href="{{ route('professors.index') }}">
                        <i class="text-sm fa-solid fa-user-tie"></i>
                        <p class="text-xs text-center">PROFESSORS</p>
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
        <x-splade-modal class="rounded-xl p-0 modal blue-btn-x" max-width="md">
            <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-full">
                <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                    <Link class="flex items-center justify-center gap-3" href="{{ route('professors.index') }}">
                        <i class="text-sm fa-solid fa-user-tie"></i>
                        <p class="text-xs text-center">Professors</p>
                    </Link>
                </div>
        
                <div class="sm:hidden">
                    <div class="bg-b6 w-full p-3 flex sm:px-5 items-center justify-center">
                        <p class="text-white sm:text-lg text-sm font-normal text-center">ADD PROFESSOR</p>
                    </div>
                </div>
        
                <div class="hidden sm:block px-3 border-l-4 border-l-b6 m-7 mb-0">
                    <p class="sm:text-lg text-sm text-b6">
                        ADD PROFESSOR
                    </p>
                </div>
        
                <div class="p-7 pt-2">
                    <x-splade-form action="{{ route('professors.store') }}" class="bg-white rounded-md">
                        <div class="">
                            <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">PERSONAL DETAILS</p>
        
                                <div class="w-full">
                                    <div class="">
                                        <x-splade-input class="input blue-inpt" id="profFName" type="text" name="profFName" :label="__('First Name')" />
                                    </div>
                    
                                    <div class="mt-4">
                                        <x-splade-input class="input blue-inpt" id="profLName" type="text" name="profLName" :label="__('Last Name')" />
                                    </div>
                                </div>
                            </div>
        
                            <div class="relative border-gray-200 border rounded-md p-6 input-cntnr">
                                <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">CONTACT DETAILS</p>
        
                                <div class="w-full">
                                    <div class="">
                                        <x-splade-input class="input blue-inpt" id="profEmail" type="email" name="email" :label="__('Email')" />
                                    </div>
        
                                    <div class="flex items-end w-full relative h-full mt-4">
                                        <div class="w-full">
                                            <x-splade-input class="input blue-inpt" id="contactNumber" type="text" name="contactNumber" :label="__('Contact No.')" />
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="relative border-gray-200 border rounded-md p-6 input-cntnr">
                                <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">OTHER DETAILS</p>
        
                                <div class="">
                                    <x-splade-select class="input drop-down blue-inpt" placeholder="Select the Department" id="profDept" name="profDept" :label="__('Department')" :options="$dept"/>
                                    {{-- <x-splade-input class="input blue-inpt" id="profDept" type="text" name="profDept" :label="__('Department')" required :options="$dept" /> --}}
                                </div>
                
                                <div class="mt-4">
                                    <x-splade-select class="input" placeholder="Select the Field" id="profField" name="profField[]" :label="__('Field')" :options="$subjectField" choices multiple/>
                                    {{-- <x-splade-input class="input blue-inpt" id="profField" type="text" name="profField" :label="__('Field')" required /> --}}
                                </div>
        
                                
                            </div>
                        </div>
                        
                        <div class="rounded-btn-i blue-btn-i mt-8 flex items-center justify-center">
                            <x-splade-submit :label="__('ADD PROFESSOR')" />
                        </div>
                    </x-splade-form>
                </div>
            </div>
        </x-splade-modal>
    </div>
</x-guest-layout>