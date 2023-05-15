<x-prof-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            CLASS CALENDAR
        </p>
    </x-slot>  

    <!-- Content -->
    <div class="overflow-auto w-full h-full flex flex-col">
        <div class="flex justify-between items-center border-b border-b-gray-300">
            <div class="sm:flex hidden">
                <div class="z-10 w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">CLASS CALENDAR</p> 
                </div>
            </div>

            <div class="m-3 sm:flex items-center h-fit hidden">
                <div class="pr-0 border-r-0 border-r-gray-300">
                    <Link class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" modal href="{{ route('prof-save-time') }}">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="fa-solid fa-clock text-white sm:group-hover:text-b6"></i>
                        </div>
    
                        SETUP DAY AND TIME AVAILABILITY
                    </Link>
                </div>
            </div>

            <div class="m-3 sm:hidden items-center h-fit flex">
                <div class="pr-0 border-r-0 border-r-gray-300">
                    <Link class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('prof-save-time') }}">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="fa-solid fa-clock text-white sm:group-hover:text-b6"></i>
                        </div>
    
                        SETUP DAY AND TIME AVAILABILITY
                    </Link>
                </div>
            </div>
        </div>

        <div class="overflow-auto h-full w-full flex justify-center p-3">
            <div class="w-full h-full flex justify-center xl:w-tabw">
                <div class="w-full">
                    <x-splade-table class="w-full mobtable" :for="$Prof_sched" striped>
                        {{-- @cell('action', $Prof_sched)
                            <a href="{{ route('prof-generate-pdf', $Prof_sched->profId ) }}">Generate PDF</a>
                        @endcell --}}
                    </x-splade-table>

                    <a href="{{ route('professor-pdf') }}">Generate PDF</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->    
</x-prof-layout>