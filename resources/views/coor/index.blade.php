<x-coor-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            SUBJECTS
        </p>
    </x-slot>

    <!-- Content -->
    <div class="w-full h-full flex flex-col overflow-auto">
        <div class="title-btn flex w-full justify-between items-center border-b border-b-gray-300 overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden">
                <div class="z-10 h-full w-fit rounded-br-3xl bg-b7 sm:flex hidden justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">SUBJECTS</p> 
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
                                <Link onclick="start()" href="{{ route('addCourses', $subject->id) }}" class="group squared-btn blue-btn border">
                                    <div class="h-full w-full relative">
                                        <div class="flex items-center justify-center h-full w-full">
                                            <i class="mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-b6 text-white"></i>
                                            <i class="fa-solid fa-graduation-cap sm:group-hover:text-b6 text-white"></i>
                                        </div>

                                        <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-70 rounded-md p-2 hidden w-fit group-hover:block">
                                            <p class="text-b6 text-xs">
                                                ADD COURSE TO THIS SUBJECT
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