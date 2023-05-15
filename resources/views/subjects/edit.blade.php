<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div class="flex items-center">
                <div class="pr-3 border-r border-gray-300">
                    <Link class="flex items-center justify-center gap-3 green-btn squared-btn border-2" href="{{ route('subjects.index') }}">
                        <i class="text-sm fa-solid fa-book"></i>
                        <p class="text-xs text-center">SUBJECTS</p>
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
        <x-splade-modal class="rounded-xl p-0 modal green-btn-x" max-width="md">
            <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-full">
                <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                    <Link class="flex items-center justify-center gap-3" href="{{ route('subjects.index') }}">
                        <i class="text-sm fa-solid fa-book"></i>
                        <p class="text-xs text-center">Subjects</p>
                    </Link>
                </div>

                <div class="sm:hidden">
                    <div class="bg-green-500 w-full p-3 flex sm:px-5 items-center justify-center">
                        <p class="text-white sm:text-lg text-sm font-normal text-center">EDIT SUBJECT</p>
                    </div>
                </div>
        
                <div class="hidden sm:block px-3 border-l-4 border-l-green-500 m-7 mb-0">
                    <p class="sm:text-lg text-sm text-green-500">
                        EDIT SUBJECT
                    </p>
                </div>
        
                <div class="p-7 pt-2">
                    <x-splade-form :default="$subject" method="PUT" action="{{ route('subjects.update', $subject->id) }}" class="bg-white rounded-md">
                        <div>
                            <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">SUBJECT DETAILS</p>
        
                                <div class="w-full">
                                    <div class="">
                                        <x-splade-input class="input green-inpt" id="subTitle" type="text" name="subTitle" :label="__('Subject Description')" required autofocus />
                                    </div>
                    
                                    <div class="mt-4">
                                        <x-splade-input class="input green-inpt" id="subCode" type="text" name="subCode" :label="__('Subject Code')" required />
                                    </div>
        
                                    <div class="mt-4">
                                        <x-splade-input class="input green-inpt" id="subUnits" type="number" name="subUnits" :label="__('Units')" required />
                                    </div>
                                </div>
                            </div>
        
                            <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                <p class="sm:text-md text-xs bg-white px-1 rounded-md absolute -top-3 left-3">OTHER DETAILS</p>
        
                                <div class="w-full">
                                    <div class="">
                                        <x-splade-input class="input green-inpt" id="subField" type="text" name="subField" :label="__('Field')" required />
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="rounded-btn-i green-btn-i mt-8 flex items-center justify-center">
                            <x-splade-submit  :label="__('SAVE CHANGES')" />
                        </div>
                    </x-splade-form>
                </div>
            </div>
        </x-splade-modal>
    </div>
</x-guest-layout>