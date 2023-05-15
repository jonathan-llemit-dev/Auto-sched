<x-coor-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            PROFESSORS
        </p>
    </x-slot>

    <!-- Content -->
    <div class="w-full h-full flex flex-col overflow-auto">
        <div class="title-btn flex w-full justify-between items-center border-b border-b-gray-300 overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden h-full">
                <div class="h-full w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">PROFESSORS</p> 
                </div>                
            </div>

            <div class="m-3 flex items-center h-fit sm:hidden">
                <Link class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('professors.create') }}">
                    <div class="mr-2 flex items-center justify-center">
                        <i class=" mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-b6 text-white"></i>
                        <i class="fa-solid fa-user-tie sm:group-hover:text-b6 text-white"></i>
                    </div>

                    ADD PROFESSOR
                </Link>
            </div>

            <div class="m-3 sm:flex items-center h-fit hidden">
                <Link modal class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('professors.create') }}">
                    <div class="mr-2 flex items-center justify-center">
                        <i class=" mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-b6 text-white"></i>
                        <i class="fa-solid fa-user-tie sm:group-hover:text-b6 text-white"></i>
                    </div>

                    ADD PROFESSOR
                </Link>
            </div>
        </div>

        <div class="overflow-auto h-full w-full flex justify-center p-3">
            <div class="h-full w-full flex justify-center xl:w-tabw">
                <div class="w-full">
                    <x-splade-table class="w-full mobtable" :for="$professors" striped>
                        @cell('profFName', $professor)
                        <div class="td" data-title="First Name">
                            {{ $professor->profFName }}
                        </div>
                        @endcell

                        @cell('profLName', $professor)
                        <div class="td" data-title="Last Name">
                            {{ $professor->profLName }}
                        </div>
                        @endcell

                        @cell('email', $professor)
                        <div class="td" data-title="Email Address">
                            {{ $professor->email }}
                        </div>
                        @endcell

                        @cell('contactNumber', $professor)
                        <div class="td" data-title="Contact Number">
                            {{ $professor->contactNumber }}
                        </div>
                        @endcell

                        @cell('profDept', $professor)
                        <div class="td" data-title="Department">
                            {{ $professor->profDept }}
                        </div>
                        @endcell
                        
                        @cell('field', $professor)
                        <div class="td" data-title="Field/s">
                            {{ implode(', ', $professor->profField)}}
                        </div>
                        @endcell
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
</x-coor-layout>