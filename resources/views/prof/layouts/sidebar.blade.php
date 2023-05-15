<x-splade-toggle>
    <!-- Side Bar -->
    <div v-bind:class="{ sideclose: toggled, sideopen: !toggled }" class="sidebar h-full bg-white relative flex flex-col shadow-md">
        <!-- Tabs -->
        <div v-bind:class="{ tabclose: toggled, tabopen: !toggled }" class="tab flex flex-row content-start flex-wrap h-full w-full overflow-auto p-8 pl-0">
            <x-sidebar-link class="sm:w-full w-11/12" v-bind:class="{ tabnameclose: toggled, tabnameopen: !toggled }" :href="route('prof.dashboard')" :active="request()->routeIs('prof.dashboard')">
                <div v-bind:class="{ tablinkclose: toggled, tablinkopen: !toggled }" class="transition-all ease-in-out tablink cursor-pointer flex items-center rounded-r-3xl group hover:bg-b5 w-full">
                    <span class="p-2 mx-3 my-2 h-8 w-8 flex justify-center items-center">
                        <i class="fa-solid fa-border-all text-sm group-hover:text-white"></i>
                    </span>

                    <p class="p-2 mr-3 my-2 h-8 whitespace-nowrap flex items-center text-xs group-hover:text-white">
                        DASHBOARD
                    </p>
                </div>
            </x-sidebar-link>


            <x-sidebar-link class="sm:w-full w-11/12" v-bind:class="{ tabnameclose: toggled, tabnameopen: !toggled }" :href="route('prof-subjects')" :active="request()->routeIs('prof-subjects')">
                <div v-bind:class="{ tablinkclose: toggled, tablinkopen: !toggled }" class="transition-all ease-in-out tablink cursor-pointer flex items-center rounded-r-3xl group hover:bg-b5 w-full">
                    <span class="p-2 mx-3 my-2 h-8 w-8 flex justify-center items-center">
                        <i class="fa-solid fa-book text-sm group-hover:text-white"></i>
                    </span>

                    <p class="p-2 mr-3 my-2 h-8 whitespace-nowrap flex items-center text-xs group-hover:text-white">
                        SUBJECTS
                    </p>
                </div>
            </x-sidebar-link>

            <x-sidebar-link class="sm:w-full w-11/12" :href="route('prof-class-calendar')" :active="request()->routeIs('prof-class-calendar')">
                <div v-bind:class="{ tablinkclose: toggled, tablinkopen: !toggled }" class="transition-all ease-in-out tablink cursor-pointer flex items-center rounded-r-3xl group hover:bg-b5 w-full">
                    <span class="p-2 mx-3 my-2 h-8 w-8 flex justify-center items-center">
                        <i class="fa-solid fa-calendar-days text-sm group-hover:text-white"></i>
                    </span>

                    <p v-bind:class="{ tabnameclose: toggled, tabnameopen: !toggled }" class="p-2 mr-3 my-2 h-8 whitespace-nowrap flex items-center text-xs group-hover:text-white">
                        CLASS CALENDAR
                    </p>
                </div>
            </x-sidebar-link>
        </div>
        <!-- End -->

        <!-- Mini Profile -->
        <div v-bind:class="{ proftabclose: toggled, proftabopen: !toggled }" class="w-full h-16">
            <div class="proftab overflow-hidden h-full flex items-center bg-b6  justify-between">
                <div class="flex items-center">
                    <div class="p-2 m-3 h-8 w-8 rounded-md bg-white flex items-center justify-center">
                        <img src="{{ asset('image/logo-as.png') }}" alt="auto-sched-logo" class="w-6">
                    </div>
    
                    <div v-bind:class="{ profclose: toggled, profopen: !toggled }" class="h-8 duration-500 max-w-namew flex flex-col justify-center">
                        <p class="text-white text-xs overflow-hidden text-ellipsis whitespace-nowrap">
                            {{ Auth::user()->profFName.' '.Auth::user()->profLName }}
                        </p>
                        <p class="text-white text-xs1">
                            Administrator
                        </p>
                    </div>
                </div>
    
                <div class="h-full">
                    <x-splade-form method="POST" action="{{ route('prof.logout') }}">
                        @csrf
                        
                        <button type="submit" class="text-xs text-center flex items-center justify-center gap-3">
                            <div class="prof h-full flex items-center justify-center bg-b4 p-6 ml-2">
                                <i class="fa-solid fa-arrow-right-from-bracket text-white text-sm"></i>
                            </div>
                        </button>
                    </x-splade-form>
                </div>
            </div>
        </div> 
        <!-- End -->

        <!-- Sidebar Open Close Btn -->
        {{-- <div @click.prevent="toggle" v-bind:class="{ menuclose: toggled, menuopen: !toggled }" class="menu w-5 h-5 duration-500 cursor-pointer flex items-center justify-center absolute top-0 right-0 p-4 bg-b4 rounded-bl-md">
            <span>
                <i v-bind:class="{ hidden: toggled, block: !toggled}" class="fa-solid fa-angles-left text-white text-sm"></i>
                <i v-bind:class="{ block: toggled, hidden: !toggled }" class="fa-solid fa-bars text-white text-sm"></i>
            </span>
        </div> --}}
        <!-- End -->
    </div>
    <!-- End -->
</x-splade-toggle>