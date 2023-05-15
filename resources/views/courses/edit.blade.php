<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div class="flex items-center">
                <div class="pr-3 border-r border-gray-300">
                    <Link class="flex items-center justify-center gap-3 green-btn squared-btn border-2" href="{{ route('courses.index') }}">
                        <i class="text-sm fa-solid fa-graduation-cap"></i>
                        <p class="text-xs text-center">COURSES</p>
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
                    <Link class="flex items-center justify-center gap-3" href="{{ route('courses.index') }}">
                        <i class="text-sm fa-solid fa-graduation-cap"></i>
                        <p class="text-xs text-center">Courses</p>
                    </Link>
                </div>
        
                <div class="sm:hidden">
                    <div class="bg-green-500 w-full p-3 flex sm:px-5 items-center justify-center">
                        <p class="text-white sm:text-lg text-sm font-normal text-center">EDIT COURSE</p>
                    </div>
                </div>
        
                <div class="hidden sm:block px-3 border-l-4 border-l-green-500 m-7 mb-0">
                    <p class="sm:text-lg text-sm text-green-500">
                        EDIT COURSE
                    </p>
                </div>
        
                <div class="p-7 pt-2">
                    <x-splade-form :default="$course" method="PUT" action="{{ route('courses.update', $course->id) }}" class="bg-white rounded-md">
                        <div>
                            <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">COURSE DETAILS</p>
        
                                <div class="w-full">
                                    <div class="">
                                        <x-splade-input class="input green-inpt" id="courseName" type="text" name="courseName" :label="__('Course')" required autofocus />
                                    </div>
                    
                                    <div class="mt-4">
                                        <x-splade-input class="input green-inpt" id="courseYearLevels" type="number" name="courseYearLevels" :label="__('Year Levels')" required />
                                    </div>
                                </div>
                            </div>
        
                            <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">OTHER DETAILS</p>
        
                                <div class="w-full">
                                    <div class="">
                                        <x-splade-select class="input drop-down green-inpt" placeholder="Select the Department" id="courseDept" name="courseDept" :label="__('Department')" required :options="$dept" />
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="rounded-btn-i green-btn-i mt-8 flex items-center justify-center">
                            <x-splade-submit :label="__('SAVE CHANGES')" />
                        </div>
                    </x-splade-form>
                </div>
            </div>
        </x-splade-modal>
    </div>
</x-guest-layout>