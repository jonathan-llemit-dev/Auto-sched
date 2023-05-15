<x-app-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            CLASS SCHEDULES
        </p>
    </x-slot>

    <!-- Content -->
    <div class="w-full h-full flex flex-col overflow-auto">
        <div class="border-b border-b-gray-300 title-btn flex w-full justify-between items-center overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden h-full">
                <div class="h-full w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">COORDINATORS</p> 
                </div>                
            </div>

            <div class="m-3 flex items-center h-fit sm:hidden">
                <Link class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('coordinator.create') }}">
                    <div class="mr-2 flex items-center justify-center">
                        <i class=" mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-b6 text-white"></i>
                        <i class="fa-solid fa-user-tie sm:group-hover:text-b6 text-white"></i>
                    </div>

                    ADD COORDINATOR
                </Link>
            </div>

            <div class="m-3 sm:flex items-center h-fit hidden">
                <Link modal class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('coordinator.create') }}">
                    <div class="mr-2 flex items-center justify-center">
                        <i class=" mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-b6 text-white"></i>
                        <i class="fa-solid fa-user-tie sm:group-hover:text-b6 text-white"></i>
                    </div>

                    ADD COORDINATOR
                </Link>
            </div>
        </div>

        <div class="overflow-auto h-full w-full flex flex-wrap justify-center p-3">
            <div class="w-full h-full flex flex-wrap justify-center xl:w-tabw">
                <x-splade-table class="w-full mobtable" :for="$Coor_info" striped>
                </x-splade-table>

                {{-- <div class="h-full w-full flex items-center justify-center">
                    <div class="h-full w-full flex items-center flex-wrap justify-center p-2 gap-3">
                        <i class="text-2xl text-gray-500 fa-solid fa-screwdriver-wrench"></i>
                        <p class="text-2xl text-gray-500">
                            UNDER CONSTRUCTION
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- End -->
</x-app-layout>