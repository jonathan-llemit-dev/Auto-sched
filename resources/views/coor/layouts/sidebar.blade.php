<x-splade-toggle>
    <!-- Side Bar -->
    <div v-bind:class="{ sideclose: toggled, sideopen: !toggled }" class="sidebar h-full bg-white relative flex flex-col shadow-md">
        <!-- Tabs -->
        <div v-bind:class="{ tabclose: toggled, tabopen: !toggled }" class="tab flex flex-row content-start flex-wrap h-full w-full overflow-auto p-8 pl-0">
            <x-sidebar-link class="sm:w-full w-11/12" v-bind:class="{ tabnameclose: toggled, tabnameopen: !toggled }" :href="route('coor.dashboard')" :active="request()->routeIs('coor.dashboard')">
                <div v-bind:class="{ tablinkclose: toggled, tablinkopen: !toggled }" class="transition-all ease-in-out tablink cursor-pointer flex items-center rounded-r-3xl group hover:bg-b5 w-full">
                    <span class="p-2 mx-3 my-2 h-8 w-8 flex justify-center items-center">
                        <i class="fa-solid fa-border-all text-sm group-hover:text-white"></i>
                    </span>

                    <p class="p-2 mr-3 my-2 h-8 whitespace-nowrap flex items-center text-xs group-hover:text-white">
                        DASHBOARD
                    </p>
                </div>
            </x-sidebar-link>

            <x-sidebar-link class="sm:w-full w-11/12" v-bind:class="{ tabnameclose: toggled, tabnameopen: !toggled }" :href="route('subjectlist.index')" :active="request()->routeIs('subjectlist.index')">
                <div v-bind:class="{ tablinkclose: toggled, tablinkopen: !toggled }" class="transition-all ease-in-out tablink cursor-pointer flex items-center rounded-r-3xl group hover:bg-b5 w-full">
                    <span class="p-2 mx-3 my-2 h-8 w-8 flex justify-center items-center">
                        <i class="fa-solid fa-graduation-cap text-sm group-hover:text-white"></i>
                    </span>

                    <p class="p-2 mr-3 my-2 h-8 whitespace-nowrap flex items-center text-xs group-hover:text-white">
                        SUBJECTS
                    </p>
                </div>
            </x-sidebar-link>

            <x-sidebar-link class="sm:w-full w-11/12" v-bind:class="{ tabnameclose: toggled, tabnameopen: !toggled }" :href="route('courses.index')" :active="request()->routeIs('courses.index')">
                <div v-bind:class="{ tablinkclose: toggled, tablinkopen: !toggled }" class="transition-all ease-in-out tablink cursor-pointer flex items-center rounded-r-3xl group hover:bg-b5 w-full">
                    <span class="p-2 mx-3 my-2 h-8 w-8 flex justify-center items-center">
                        <i class="fa-solid fa-graduation-cap text-sm group-hover:text-white"></i>
                    </span>

                    <p class="p-2 mr-3 my-2 h-8 whitespace-nowrap flex items-center text-xs group-hover:text-white">
                        COURSES
                    </p>
                </div>
            </x-sidebar-link>

            <x-sidebar-link class="sm:w-full w-11/12" v-bind:class="{ tabnameclose: toggled, tabnameopen: !toggled }" :href="route('rooms.index')" :active="request()->routeIs('rooms.index')">
                <div v-bind:class="{ tablinkclose: toggled, tablinkopen: !toggled }" class="transition-all ease-in-out tablink cursor-pointer flex items-center rounded-r-3xl group hover:bg-b5 w-full">
                    <span class="p-2 mx-3 my-2 h-8 w-8 flex justify-center items-center">
                        <i class="fa-solid fa-door-open text-sm group-hover:text-white"></i>
                    </span>

                    <p class="p-2 mr-3 my-2 h-8 whitespace-nowrap flex items-center text-xs group-hover:text-white">
                        ROOMS
                    </p>
                </div>
            </x-sidebar-link>

            <x-sidebar-link class="sm:w-full w-11/12" v-bind:class="{ tabnameclose: toggled, tabnameopen: !toggled }" :href="route('professors.index')" :active="request()->routeIs('professors.index')">
                <div v-bind:class="{ tablinkclose: toggled, tablinkopen: !toggled }" class="transition-all ease-in-out tablink cursor-pointer flex items-center rounded-r-3xl group hover:bg-b5 w-full">
                    <span class="p-2 mx-3 my-2 h-8 w-8 flex justify-center items-center">
                        <i class="fa-solid fa-user-tie text-sm group-hover:text-white"></i>
                    </span>

                    <p class="p-2 mr-3 my-2 h-8 whitespace-nowrap flex items-center text-xs group-hover:text-white">
                        PROFESSORS
                    </p>
                </div>
            </x-sidebar-link>

            <div v-bind:class="{ tabnameclose: toggled, tabnameopen: !toggled }" class="sm:w-full w-11/12">
                <x-splade-data remember="content">
                    <div v-show="!data.show" class="h-12 overflow-hidden transition-all ease-in-out tablink cursor-pointer flex rounded-r-3xl hover:bg-b5 w-full">
                        <div class="flex flex-col items-center w-full">
                            <div @click="data.show = true" class="flex items-center justify-between w-full group">
                                <div class="flex items-center">
                                    <span class="p-2 mx-3 my-2 h-8 w-8 flex justify-center items-center">
                                        <i class="fa-solid fa-calendar-day text-sm group-hover:text-white"></i>
                                    </span>
                
                                    <p class="p-2 mr-3 my-2 h-8 whitespace-nowrap flex items-center text-xs group-hover:text-white">
                                        SCHEDULES
                                    </p>
                                </div>
            
                                <div class="-rotate-90 transition-all ease-in-out sched-drop m-2 p-4 h-1 w-1 rounded-full flex items-center justify-center group-hover:bg-white">
                                    <i class="flex items-center justify-center fa-solid fa-chevron-down text-xs text-b5 opacity-0 group-hover:opacity-100"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-show="data.show" class="schedopen overflow-hidden transition-all ease-in-out tablink cursor-pointer flex rounded-r-3xl hover:bg-b5 w-full">
                        <div class="flex flex-col items-center w-full">
                            <div @click="data.show = false" class="flex items-center justify-between w-full group">
                                <div class="flex items-center">
                                    <span class="p-2 mx-3 my-2 h-8 w-8 flex justify-center items-center">
                                        <i class="fa-solid fa-calendar-day text-sm group-hover:text-white"></i>
                                    </span>
                
                                    <p class="p-2 mr-3 my-2 h-8 whitespace-nowrap flex items-center text-xs group-hover:text-white">
                                        SCHEDULES
                                    </p>
                                </div>
            
                                <div class="-rotate-90 transition-all ease-in-out sched-drop m-2 p-4 h-1 w-1 rounded-full flex items-center justify-center group-hover:bg-white">
                                    <i class="flex items-center justify-center fa-solid fa-chevron-down text-xs text-b5 opacity-0 group-hover:opacity-100"></i>
                                </div>
                            </div>
    
                            <x-sched-link class="w-full" :href="route('prof-sched')" :active="request()->routeIs('prof-sched')">
                                <div class="tab transition-all ease-in-out sub-sched bg-b4 flex items-center justify-between w-full group hover:bg-b1">
                                    <div class="flex items-center">
                                        <span class="p-2 mx-3 my-2 h-8 w-8 flex justify-center items-center relative">
                                            <i class="fa-solid fa-calendar-day text-sm group-hover:text-b6"></i>
                                            <i class="absolute bottom-1 right-1 side-icon fa-solid fa-user-tie text-xs1 group-hover:text-b6"></i>
                                        </span>
                    
                                        <p v-bind:class="{ tabnameclose: toggled, tabnameopen: !toggled }" class="p-2 mr-3 my-2 h-8 whitespace-nowrap flex items-center text-xs group-hover:text-b6">
                                            PROFESSOR SCHEDULES
                                        </p>
                                    </div>
                                </div>
                            </x-sched-link>

                            <x-sched-link class="w-full" :href="route('room-sched')" :active="request()->routeIs('room-sched')">
                                <div class="tab transition-all ease-in-out sub-sched bg-b4 flex items-center justify-between w-full group hover:bg-b1">
                                    <div class="flex items-center">
                                        <span class="p-2 mx-3 my-2 h-8 w-8 flex justify-center items-center relative">
                                            <i class="fa-solid fa-calendar-day text-sm group-hover:text-b6"></i>
                                            <i class="absolute bottom-1 right-1 side-icon fa-solid fa-door-open text-xs1 group-hover:text-b6"></i>
                                        </span>
                    
                                        <p v-bind:class="{ tabnameclose: toggled, tabnameopen: !toggled }" class="p-2 mr-3 my-2 h-8 whitespace-nowrap flex items-center text-xs group-hover:text-b6">
                                            ROOM SCHEDULES
                                        </p>
                                    </div>
                                </div>
                            </x-sched-link>

                            <x-sched-link class="w-full" :href="route('class-sched')" :active="request()->routeIs('class-sched')">
                                <div class="tab transition-all ease-in-out sub-sched bg-b4 flex items-center justify-between w-full group hover:bg-b1">
                                    <div class="flex items-center">
                                        <span class="p-2 mx-3 my-2 h-8 w-8 flex justify-center items-center relative">
                                            <i class="fa-solid fa-calendar-day text-sm group-hover:text-b6"></i>
                                            <i class="absolute bottom-1 right-1 side-icon fa-solid fa-users text-xs1 group-hover:text-b6"></i>
                                        </span>
                    
                                        <p v-bind:class="{ tabnameclose: toggled, tabnameopen: !toggled }" class="p-2 mr-3 my-2 h-8 whitespace-nowrap flex items-center text-xs group-hover:text-b6">
                                            CLASS SCHEDULES
                                        </p>
                                    </div>
                                </div>
                            </x-sched-link>
                        </div>
                    </div>
                </x-splade-data>
            </div>

            {{-- <x-sidebar-link :href="route('prof-class-calendar')" :active="request()->routeIs('prof-class-calendar')">
                <div v-bind:class="{ tablinkclose: toggled, tablinkopen: !toggled }" class="transition-all ease-in-out tablink cursor-pointer flex items-center rounded-r-3xl group hover:bg-b5 w-full">
                    <span class="p-2 mx-3 my-2 h-8 w-8 flex justify-center items-center">
                        <i class="fa-solid fa-calendar-days text-sm group-hover:text-white"></i>
                    </span>

                    <p v-bind:class="{ tabnameclose: toggled, tabnameopen: !toggled }" class="p-2 mr-3 my-2 h-8 whitespace-nowrap flex items-center text-xs group-hover:text-white">
                        CLASS CALENDAR
                    </p>
                </div>
            </x-sidebar-link> --}}
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
                            {{ Auth::user()->coorFName.' '.Auth::user()->coorLName }}
                        </p>
                        <p class="text-white text-xs1">
                            Coordinator
                        </p>
                    </div>
                </div>
    
                <div class="h-full">
                    {{-- <x-splade-form method="POST" action="{{ route('coor.logout') }}">
                        @csrf
                        
                        <button type="submit" class="text-xs text-center flex items-center justify-center gap-3">
                            <div class="prof h-full flex items-center justify-center bg-b4 p-6 ml-2">
                                <i class="fa-solid fa-arrow-right-from-bracket text-white text-sm"></i>
                            </div>
                        </button>
                    </x-splade-form> --}}

                    <Link class="text-xs text-center flex items-center justify-center gap-3" href="{{ route('coor.logout') }}" confirm="LOG OUT" confirm-text="Are You Sure?" confirm-button="Yes" cancel-button="Cancel" method="POST">
                        <div class="prof h-full flex items-center justify-center bg-b4 p-6">
                            <i class="fa-solid fa-arrow-right-from-bracket text-white text-sm"></i>
                        </div>
                    </Link>
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