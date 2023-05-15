<x-app-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            SCHOOL PROFILE
        </p>
    </x-slot>

    <!-- Content -->
    <div class="w-full h-full flex flex-col overflow-auto">
        <div class="title-btn flex w-full justify-between items-center border-b border-b-gray-300 overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden h-full">
                <div class="h-full w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">SCHOOL PROFILE</p> 
                </div>                
            </div>

            <div class="m-3 flex items-center h-fit sm:hidden">
                <div class="pr-2 border-r border-r-gray-300">
                    <Link class="whitespace-nowrap squared-btn red-btn text-xs0 border group flex items-center justify-center" href="#">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-red-500 text-white"></i>
                            <i class="fa-solid fa-calendar-days sm:group-hover:text-red-500 text-white"></i>
                        </div>
    
                        ADD SCHOOL EVENTS
                    </Link>
                </div>

                <div class="pl-2 pr-2 border-r border-r-gray-300">
                    <Link class="whitespace-nowrap squared-btn green-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="schoolConfig">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="fa-solid fa-clock text-white sm:group-hover:text-green-500"></i>
                        </div>
    
                        UPDATE SCHOOL HOURS
                    </Link>
                </div>

                <div class="pl-2">
                    <Link class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('school.edit', $school) }}">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="fa-solid fa-pen-to-square sm:group-hover:text-b6 text-white"></i>
                        </div>
    
                        UPDATE SCHOOL PROFILE
                    </Link>
                </div>
            </div>

            <div class="m-3 sm:flex items-center h-fit hidden">
                <div class="pr-2 border-r border-r-gray-300">
                    <Link class="whitespace-nowrap squared-btn red-btn text-xs0 border group flex items-center justify-center" href="#">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-red-500 text-white"></i>
                            <i class="fa-solid fa-calendar-days sm:group-hover:text-red-500 text-white"></i>
                        </div>
    
                        ADD SCHOOL EVENTS
                    </Link>
                </div>

                <div class="pl-2 pr-2 border-r border-r-gray-300">
                    <Link class="whitespace-nowrap squared-btn green-btn text-xs0 border group flex items-center justify-center" modal onclick="start()" href="schoolConfig">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="fa-solid fa-clock text-white sm:group-hover:text-green-500"></i>
                        </div>
    
                        UPDATE SCHOOL HOURS
                    </Link>
                </div>

                <div class="pl-2">
                    <Link modal class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('school.edit', $school) }}">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="fa-solid fa-pen-to-square sm:group-hover:text-b6 text-white"></i>
                        </div>
    
                        UPDATE SCHOOL PROFILE
                    </Link>
                </div>
            </div>
        </div>

        <div class="overflow-auto h-full w-full p-3 gap-3 flex flex-col items-center">
            <div class="w-full rounded-2xl shadow-sm bg-white xl:w-tabw">
                <div class="w-full">
                    <div class="flex items-center justify-center h-40 bg-b4 rounded-t-2xl">
                    </div>

                    <div class="flex items-center px-6 relative justify-center sm:justify-start">
                        @if ($school->schLogo == "")
                            <div class="absolute background-image -top-32 w-40 h-40 flex items-center justify-center border-4 border-b6 rounded-full p-2 shadow-md bg-white" style="background-image:url('{{ asset('image/logo-as.png') }}')">
                        @else
                            <div class="absolute background-image -top-32 w-40 h-40 flex items-center justify-center border-4 border-b6 rounded-full p-2 shadow-md bg-white" style="background-image:url('{{ asset('storage/'.$school->schLogo) }}')">
                        @endif
                        
                            <div class="absolute bottom-1 right-1 sm:flex hidden">
                                <Link modal class="transition-all ease-in-out p-4 w-2 h-2 rounded-50 blue-btn text-xs0 border-2 group flex items-center justify-center" onclick="start()" href="{{ route('editLogo') }}">
                                    <i class="fa-solid fa-camera sm:group-hover:text-b6 text-white"></i>
                                </Link>
                            </div>
                            <div class="absolute bottom-1 right-1 flex sm:hidden">
                                <Link class="transition-all ease-in-out p-4 w-2 h-2 rounded-50 blue-btn text-xs0 border-2 group flex items-center justify-center" onclick="start()" href="{{ route('editLogo') }}">
                                    <i class="fa-solid fa-camera sm:group-hover:text-b6 text-white"></i>
                                </Link>
                            </div>
                        </div>

                        <div class="py-10 px-4"> 
                            <p class="sm:text-2xl text-xl">{{ $school->schName }}</p>

                            <div class="mt-3">
                                <p class="text-xs0">{{ $school->contactNumber }}</p>
                                <p class="text-xs0">{{ $school->email }}</p>
                                <p class="text-xs0">{{ $school->street." ".$school->barangay.", ".$school->city." (".$school->region.")" }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div>

                    </div>
                    <div>

                    </div>
                </div>
            </div>

            <div class="w-full rounded-2xl shadow-sm bg-white flex flex-wrap sm:flex-nowrap gap-3 p-4 xl:w-tabw">
                <div class="w-full">
                    <div class="p-2 px-3 w-full border-l-4 border-l-b6 border border-gray-300 rounded-md">
                        <p class="sm:text-lg text-sm">
                            CURRENT EVENTS
                        </p>
                    </div>
                </div>

                <div class="w-full">
                    <div class="p-2 px-3 border-l-4 w-full border-l-b6 border border-gray-300 rounded-md">
                        <p class="sm:text-lg text-sm">
                            DEPARMENTS
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
</x-app-layout>


