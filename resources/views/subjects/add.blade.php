<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div class="flex items-center">
                <div class="pr-3 border-r border-gray-300">
                    <Link class="flex items-center justify-center gap-3 blue-btn squared-btn border-2" href="{{ route('subjects.index') }}">
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
    
    <div class="flex flex-wrap items-center justify-center sm:w-tabw w-full h-fit gap-5 sm:p-20">
        <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-full">
            <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                <Link class="flex items-center justify-center gap-3" href="{{ route('subjects.index') }}">
                    <i class="text-sm fa-solid fa-book"></i>
                    <p class="text-xs text-center">Subjects</p>
                </Link>
            </div>
    
            <div class="sm:hidden">
                <div class="bg-b6 w-full p-3 flex sm:px-5 items-center justify-center">
                    <p class="text-white sm:text-lg text-sm font-normal text-center">ADD COURSE TO THIS SUBJECT</p>
                </div>
            </div>
    
            <div class="hidden sm:block px-3 border-l-4 border-l-b6 m-7 mb-0">
                <p class="sm:text-lg text-sm text-b6">
                    ADD COURSE TO THIS SUBJECT
                </p>
            </div>
    
            <x-splade-form :default="$subject" action="{{ route('save', $subject->id) }}" class="space-y-4">
                <div class="m-7">
                    <div class="relative border-gray-200 border-solid border rounded-md mt-5 p-6 input-cntnr">
                        <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">SUBJECT DETAILS</p>
    
                        <div class="w-full">
                            <div class="">
                                <x-splade-input class="input blue-inpt" id="subTitle" type="text" name="subTitle" :label="__('Subject Description')" readonly />
                            </div>
            
                            <div class="mt-4">
                                <x-splade-input class="input blue-inpt" id="subCode" type="text" name="subCode" :label="__('Subject Code')" readonly />
                            </div>
    
                            <div class="mt-4">
                                <x-splade-input class="input blue-inpt" id="subUnits" type="number" name="subUnits" :label="__('Units')" readonly />
                            </div>
    
                            <div class="mt-4">
                                <x-splade-select class="drop-down blue-inpt" placeholder="Select Course" id="course" name="course" :label="__('Course')" :options="$course" />
                            </div>
    
                            <div class="mt-4">
                                <x-splade-select class="drop-down blue-inpt" placeholder="Select Year" id="year" name="year" :label="__('Year')" :options="$year" />
                            </div>
                        </div>
                    </div>
    
                    <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                        <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">SEM</p>
    
                        <div class="flex flex-col flex-wrap gap-3">
                            <div class="relative">
                                <x-splade-radio class="blue-chck" name="sem" value=1 label="First Sem" />
                            </div>
    
                            <div class="relative">
                                <x-splade-radio class="blue-chck" name="sem" value=2 label="Second Sem" />
                            </div>
    
                            <div class="relative">
                                <x-splade-radio class="blue-chck" name="sem" value=3 label="Third Sem" />
                            </div>
                        </div>
                    </div>
    
                    <div class="rounded-btn-i blue-btn-i mt-8 flex items-center justify-center">
                        <x-splade-submit :label="__('ADD COURSE')" />
                    </div>
                </div>
            </x-splade-form>
        </div>
    
        <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-full">
            <div class="hidden sm:block px-3 border-l-4 border-l-red-500 m-7 mb-0">
                <p class="sm:text-lg text-sm text-red-500">
                    LISTS OF COURSE/S ADDED
                </p>
            </div>
    
            <div class="sm:hidden">
                <div class="bg-red-500 w-full p-3 flex sm:px-5 items-center justify-center">
                    <p class="text-white sm:text-lg text-sm font-normal text-center">LISTS OF COURSE/S ADDED</p>
                </div>
            </div>
    
            <div class="h-full w-full p-7 pt-5">
                <div class="h-full w-full">
                    <x-splade-table class="w-full mobtable" :for="$Class_With_Subs" striped>
                        @cell('course', $Class_With_Subs)
                        <div class="td" data-title="Course">
                            {{ $Class_With_Subs->course }}
                        </div>
                        @endcell
    
                        @cell('year', $Class_With_Subs)
                        <div class="td" data-title="Year">
                            {{ $Class_With_Subs->year }}
                        </div>
                        @endcell
    
                        @cell('section', $Class_With_Subs)
                        <div class="td" data-title="Section">
                            {{ $Class_With_Subs->section }}
                        </div>
                        @endcell
    
                        @cell('subject_code', $Class_With_Subs)
                        <div class="td" data-title="Subject Code">
                            {{ $Class_With_Subs->subject_code }}
                        </div>
                        @endcell
    
                        @cell('subject_title', $Class_With_Subs)
                        <div class="td" data-title="Subject Title">
                            {{ $Class_With_Subs->subject_title }}
                        </div>
                        @endcell
    
                        @cell('subject_units', $Class_With_Subs)
                        <div class="td" data-title="Subject Units">
                            {{ $Class_With_Subs->subject_units }}
                        </div>
                        @endcell
    
                        @cell('sem', $Class_With_Subs)
                        <div class="td" data-title="Semester">
                            {{ $Class_With_Subs->sem }}
                        </div>
                        @endcell
    
                        @cell('schName', $Class_With_Subs)
                        <div class="td" data-title="School Name">
                            {{ $Class_With_Subs->schName }}
                        </div>
                        @endcell
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>