<x-coor-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            COURSES
        </p>
    </x-slot>

    <!-- Content -->
    <div class="w-full h-full flex flex-col overflow-auto">
        <div class="title-btn flex w-full justify-between items-center border-b border-b-gray-300 overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden h-full">
                <div class="h-full w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">COURSES</p> 
                </div>                
            </div>

            <div class="m-3 flex items-center h-fit sm:hidden">
                <Link class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('courses.create') }}">
                    <div class="mr-2 flex items-center justify-center">
                        <i class=" mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-b6 text-white"></i>
                        <i class="fa-solid fa-graduation-cap sm:group-hover:text-b6 text-white"></i>
                    </div>

                    ADD COURSE
                </Link>
            </div>

            <div class="m-3 sm:flex items-center h-fit hidden">
                <Link modal class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('courses.create') }}">
                    <div class="mr-2 flex items-center justify-center">
                        <i class=" mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-b6 text-white"></i>
                        <i class="fa-solid fa-graduation-cap sm:group-hover:text-b6 text-white"></i>
                    </div>

                    ADD COURSE
                </Link>
            </div>
        </div>

        <div class="overflow-auto h-full w-full flex justify-center p-3">
            <div class="h-full w-full flex justify-center xl:w-tabw">
                <div class="w-full">
                    <x-splade-table class="w-full mobtable" :for="$courses" striped>
                        @cell('courseName', $course)
                        <div class="td" data-title="Course">
                            {{ $course->courseName }}
                        </div>
                        @endcell

                        @cell('courseDept', $course)
                        <div class="td" data-title="Department">
                            {{ $course->courseDept }}
                        </div>
                        @endcell

                        @cell('courseYearLevels', $course)
                        <div class="td" data-title="Year Levels">
                            {{ $course->courseYearLevels }}
                        </div>
                        @endcell


                        @cell('courseSchool', $course)
                        <div class="td" data-title="School Name">
                            {{ $course->courseSchool }}
                        </div>
                        @endcell

                        @cell('action', $course)
                        <div class="td" data-title="Actions">
                            <div class="flex gap-2">
                                <Link onclick="start()" href="{{ route('courses.edit', $course->id) }}" class="flex sm:hidden group squared-btn green-btn border">
                                    <div class="h-full w-full relative">
                                        <i class="fa-solid fa-pen-to-square text-white sm:group-hover:text-green-500"></i>
    
                                        <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-70 rounded-md p-2 hidden w-fit group-hover:block">
                                            <p class="text-green-500 text-xs">
                                                EDIT COURSE
                                            </p>
                                        </div>
                                    </div>
                                </Link>

                                <Link modal onclick="start()" href="{{ route('courses.edit', $course->id) }}" class="sm:flex hidden group squared-btn green-btn border">
                                    <div class="h-full w-full relative">
                                        <i class="fa-solid fa-pen-to-square text-white sm:group-hover:text-green-500"></i>
    
                                        <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-70 rounded-md p-2 hidden w-fit group-hover:block">
                                            <p class="text-green-500 text-xs">
                                                EDIT COURSE
                                            </p>
                                        </div>
                                    </div>
                                </Link>
                
                                <Link class="group squared-btn red-btn border" confirm="DELETE COURSE" confirm-text="Are You Sure?" confirm-button="Yes" cancel-button="Cancel" href="{{ route('courses.destroy', $course->id) }}" method="DELETE">
                                    <div class="h-full w-full relative">
                                        <i class="fa-solid fa-trash text-white sm:group-hover:text-red-500"></i>
    
                                        <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-70 rounded-md p-2 hidden w-fit group-hover:block">
                                            <p class="text-red-500 text-xs">
                                                DELETE COURSE
                                            </p>
                                        </div>
                                    </div>
                                </Link>
                            </div>
                        </div>
                        @endcell
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
</x-coor-layout>
