<x-coor-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            PROFESSOR SCHEDULES
        </p>
    </x-slot>
    
    <!-- Content -->
    <div class="overflow-auto w-full h-full flex flex-col">
        <div class="title-btn flex w-full justify-between items-center border-b border-b-gray-300 overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden">
                <div class="z-10 h-full w-fit rounded-br-3xl bg-b7 sm:flex hidden justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">PROFESSOR SCHEDULES</p> 
                </div>                
            </div>

            <div class="m-3 flex items-center h-fit">
                <div class="pr-2">
                    {{-- <Link class="whitespace-nowrap squared-btn green-btn text-xs0 border group flex items-center justify-center" confirm="GENERATE SCHEDULE" confirm-text="Are You Sure?" confirm-button="Yes" cancel-button="Cancel" href="{{ route('generate.create') }}">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="fa-solid fa-clock text-white group-hover:text-green-500"></i>
                        </div>
                        GENERATE CLASS SCHEDULES
                    </Link> --}}
                </div>

            </div>

        </div>

        <div class="overflow-auto h-full w-full flex flex-wrap justify-center p-3">
            <div class="w-full h-full flex flex-wrap justify-center xl:w-tabw">
                <div class="w-full">
                    <x-splade-table  class="w-full mobtable" :for="$Prof_sched" striped>
                        @cell('action', $Prof_sched)
                            <a href="{{ route('coor-prof-pdf', ['Prof_Name' => $Prof_sched->profName, 'Prof_School' => $Prof_sched->profSchool]) }}">Generate PDF</a>
                        @endcell
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
</x-coor-layout>


