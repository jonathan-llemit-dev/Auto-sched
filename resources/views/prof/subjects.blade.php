<x-prof-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            SUBJECTS
        </p>
    </x-slot>  

    <!-- Content -->
    <div class="w-full h-full flex flex-col">
        <div class="sm:flex hidden">
            <div class="z-10 w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">SUBJECTS</p> 
            </div>
        </div>

        <div class="overflow-auto h-full w-full flex flex-wrap justify-center p-3">
            <div class="w-full h-full flex flex-wrap justify-center xl:w-tabw">
                <div class="h-full w-full flex items-center justify-center">
                    <div class="h-full w-full flex items-center flex-wrap justify-center p-2 gap-3">
                        <i class="text-2xl text-gray-500 fa-solid fa-screwdriver-wrench"></i>
                        <p class="text-2xl text-gray-500">
                            UNDER CONSTRUCTION
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->    
</x-prof-layout>