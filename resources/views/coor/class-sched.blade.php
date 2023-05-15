<x-coor-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            CLASS SCHEDULES
        </p>
    </x-slot>

    <!-- Content -->
    <div class="overflow-auto w-full h-full flex flex-col">
        <div class="title-btn flex w-full justify-between items-center overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden">
                <div class="z-10 h-full w-fit rounded-br-3xl bg-b7 sm:flex hidden justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">CLASS SCHEDULES</p> 
                </div>                
            </div>
        </div>

        <div class="overflow-auto h-full w-full flex flex-wrap justify-center p-3">
            <div class="w-full h-full flex flex-wrap justify-center xl:w-tabw">
                <div class="w-full">
                    <x-splade-table  class="w-full mobtable" :for="$Stud_sched" striped>
                        @cell('action', $Stud_sched)
                            <a href="{{ route('coor-class-pdf', ['Course'=>$Stud_sched->studCourse, 'Year'=>$Stud_sched->studYear, 'Section'=>$Stud_sched->studSection, 'School'=>$Stud_sched->schName]) }}">Generate PDF</a>
                        @endcell
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
</x-coor-layout>


