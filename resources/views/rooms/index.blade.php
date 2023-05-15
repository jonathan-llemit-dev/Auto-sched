<x-coor-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            ROOMS
        </p>
    </x-slot>

    <!-- Content -->
    <div class="w-full h-full flex flex-col overflow-auto">
        <div class="title-btn flex w-full justify-between items-center border-b border-b-gray-300 overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden h-full">
                <div class="h-full w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">ROOMS</p> 
                </div>                
            </div>

            <div class="m-3 flex items-center h-fit sm:hidden">
                <Link class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('rooms.create') }}">
                    <div class="mr-2 flex items-center justify-center">
                        <i class=" mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-b6 text-white"></i>
                        <i class="fa-solid fa-door-open sm:group-hover:text-b6 text-white"></i>
                    </div>

                    ADD ROOM
                </Link>
            </div>

            <div class="m-3 sm:flex items-center h-fit hidden">
                <Link modal class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('rooms.create') }}">
                    <div class="mr-2 flex items-center justify-center">
                        <i class=" mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-b6 text-white"></i>
                        <i class="fa-solid fa-door-open sm:group-hover:text-b6 text-white"></i>
                    </div>

                    ADD ROOM
                </Link>
            </div>
        </div>

        <div class="overflow-auto h-full w-full flex justify-center p-3">
            <div class="h-full w-full flex justify-center xl:w-tabw">
                <div class="w-full">
                    <x-splade-table class="w-full mobtable" :for="$rooms" striped>
                        @cell('roomNumber', $room)
                        <div class="td" data-title="Room Number">
                            {{ $room->roomNumber }}
                        </div>
                        @endcell

                        @cell('roomDepartment', $room)
                        <div class="td" data-title="Department">
                            {{ $room->roomDepartment }}
                        </div>
                        @endcell

                        @cell('roomSchool', $room)
                        <div class="td" data-title="School Name">
                            {{ $room->roomSchool }}
                        </div>
                        @endcell
                        
                        @cell('action', $room)
                        <div class="td" data-title="Actions">
                            <div class="flex gap-2">
                                <Link onclick="start()" href="{{ route('rooms.edit', $room->id) }}" class="flex sm:hidden group squared-btn green-btn border">
                                    <div class="h-full w-full relative">
                                        <i class="fa-solid fa-pen-to-square text-white sm:group-hover:text-green-500"></i>
    
                                        <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-70 rounded-md p-2 hidden w-fit group-hover:block">
                                            <p class="text-green-500 text-xs">
                                                EDIT ROOM
                                            </p>
                                        </div>
                                    </div>
                                </Link>

                                <Link modal onclick="start()" href="{{ route('rooms.edit', $room->id) }}" class="sm:flex hidden group squared-btn green-btn border">
                                    <div class="h-full w-full relative">
                                        <i class="fa-solid fa-pen-to-square text-white sm:group-hover:text-green-500"></i>
    
                                        <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-70 rounded-md p-2 hidden w-fit group-hover:block">
                                            <p class="text-green-500 text-xs">
                                                EDIT ROOM
                                            </p>
                                        </div>
                                    </div>
                                </Link>
                
                                <Link class="group squared-btn red-btn border" confirm="DELETE ROOM" confirm-text="Are You Sure?" confirm-button="Yes" cancel-button="Cancel" href="{{ route('rooms.destroy', $room->id) }}" method="DELETE">
                                    <div class="h-full w-full relative">
                                        <i class="fa-solid fa-trash text-white sm:group-hover:text-red-500"></i>
    
                                        <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-70 rounded-md p-2 hidden w-fit group-hover:block">
                                            <p class="text-red-500 text-xs">
                                                DELETE ROOM
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