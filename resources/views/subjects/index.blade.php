<x-app-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            SUBJECTS
        </p>
    </x-slot>

    <!-- Content -->
    <div class="w-full h-full flex flex-col overflow-auto">
        <div class="title-btn flex w-full justify-between items-center border-b border-b-gray-300 overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden h-full">
                <div class="h-full w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">SUBJECTS</p> 
                </div>                
            </div>

            <div class="m-3 flex items-center h-fit sm:hidden">
                <div class="pr-2 border-r border-r-gray-300">
                    <Link class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('subjects.create') }}">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-b6 text-white"></i>
                            <i class="fa-solid fa-book sm:group-hover:text-b6 text-white"></i>
                        </div>
    
                        ADD SUBJECT
                    </Link>
                </div>

                <div>
                    <Link class="ml-2 whitespace-nowrap squared-btn green-btn text-xs0 border group flex items-center justify-center" href="{{ route('import-sub') }}">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="fa-solid fa-download sm:group-hover:text-green-500 text-white text-xs"></i>
                        </div>
    
                        IMPORT
                    </Link>
                </div>
            </div>

            <div class="m-3 sm:flex items-center h-fit hidden">
                <div class="pr-2 border-r border-r-gray-300">
                    <Link modal class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('subjects.create') }}">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-b6 text-white"></i>
                            <i class="fa-solid fa-book sm:group-hover:text-b6 text-white"></i>
                        </div>
    
                        ADD SUBJECT
                    </Link>
                </div>

                <div>
                    <Link modal class="ml-2 whitespace-nowrap squared-btn green-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('import-sub') }}">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="fa-solid fa-download sm:group-hover:text-green-500 text-white text-xs"></i>
                        </div>
    
                        IMPORT
                    </Link>
                </div>
            </div>
        </div>

        <div class="overflow-auto h-full w-full flex justify-center p-3">
            <div class="h-full w-full flex justify-center xl:w-tabw">
                <div class="w-full">
                    <x-splade-table class="w-full mobtable" :for="$subjects" striped>
                        @cell('subTitle', $subject)
                            <div class="td" data-title="Subject Description">
                                {{ $subject->subTitle }}
                            </div>
                        @endcell

                        @cell('subCode', $subject)
                            <div class="td" data-title="Subject Code">
                                {{ $subject->subCode }}
                            </div>
                        @endcell

                        @cell('subUnits', $subject)
                            <div class="td" data-title="Units">
                                {{ $subject->subUnits }}
                            </div>
                        @endcell

                        @cell('subField', $subject)
                            <div class="td" data-title="Field">
                                {{ $subject->subField }}
                            </div>
                        @endcell

                        @cell('subSchool', $subject)
                            <div class="td" data-title="School Name">
                                {{ $subject->subSchool }}
                            </div>
                        @endcell

                        @cell('action', $subject)
                        <div class="td" data-title="Action">
                            <div class="flex gap-2">
                                <Link confirm="EDIT SUBJECT" confirm-text="Are You Sure?" onclick="start()" href="{{ route('subjects.edit', $subject->id) }}" class="flex sm:hidden group squared-btn green-btn border">
                                    <div class="h-full w-full relative">
                                        <i class="fa-solid fa-pen-to-square text-white sm:group-hover:text-green-500"></i>
    
                                        <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-70 rounded-md p-2 hidden w-fit group-hover:block">
                                            <p class="text-green-500 text-xs">
                                                EDIT SUBJECT
                                            </p>
                                        </div>
                                    </div>
                                </Link>
                
                                <Link modal confirm="EDIT SUBJECT" confirm-text="Are You Sure?" onclick="start()" href="{{ route('subjects.edit', $subject->id) }}" class="sm:flex hidden group squared-btn green-btn border">
                                    <div class="h-full w-full relative">
                                        <i class="fa-solid fa-pen-to-square text-white sm:group-hover:text-green-500"></i>
    
                                        <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-70 rounded-md p-2 hidden w-fit group-hover:block">
                                            <p class="text-green-500 text-xs">
                                                EDIT SUBJECT
                                            </p>
                                        </div>
                                    </div>
                                </Link>
                                
                                <Link class="group squared-btn red-btn border" confirm="DELETE SUBJECT" confirm-text="Are You Sure?" confirm-button="Confirm" cancel-button="Cancel" href="{{ route('subjects.destroy', $subject->id) }}" method="DELETE">
                                    <div class="h-full w-full relative">
                                        <i class="fa-solid fa-trash text-white sm:group-hover:text-red-500"></i>
    
                                        <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-70 rounded-md p-2 hidden w-fit group-hover:block">
                                            <p class="text-red-500 text-xs">
                                                DELETE SUBJECT
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
</x-app-layout>