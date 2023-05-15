<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div class="flex items-center">
                <div class="pr-3 border-r border-gray-300">
                    <Link class="flex items-center justify-center gap-3 green-btn squared-btn border-2" href="{{ route('school.index') }}">
                        <i class="text-sm fa-solid fa-school"></i>
                        <p class="text-xs text-center">SCHOOL PROFILE</p>
                    </Link>
                </div>
    
                <div class="flex items-center ml-2">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="text-lg whitespace-nowrap">AUTO - SCHED</p>
                </div>
            </div>
        </nav>
    </x-slot>   
    
    <div class="sm:p-20 sm:max-w-xl w-full sm:h-fit h-full flex flex-wrap">
        <x-splade-modal class="rounded-xl p-0 modal green-btn-x" max-width="xl">
            <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-full">
                <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                    <Link class="flex items-center justify-center gap-3" href="{{ route('school.index') }}">
                        <i class="text-sm fa-solid fa-school"></i>
                        <p class="text-xs text-center">School Profile</p>
                    </Link>
                </div>
        
                <div class="sm:hidden">
                    <div class="bg-green-500 w-full p-3 flex sm:px-5 items-center justify-center">
                        <p class="text-white text-lg font-normal text-center">UPDATE SCHOOL HOURS</p>
                    </div>
                </div>
        
                <div class="hidden sm:block px-3 border-l-4 border-l-green-500 m-7 mb-0">
                    <p class="text-lg text-green-500">
                        UPDATE SCHOOL HOURS
                    </p>
                </div>
        
                <div class="p-7 pt-2">
                    <x-splade-form :default="$school" method="POST" action="storeSchooltime">
                        <div class="">
                            <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">MODE OF CLASS</p>

                                <div class="flex flex-col flex-wrap gap-3">
                                    <div class="relative">
                                        <x-splade-radio class="green-chck" name="mode" value="face-face" label="Face to Face" />
                                    </div>

                                    <div class="relative">
                                        <x-splade-radio class="green-chck" name="mode" value="Online" label="Online" />
                                    </div>

                                    <div class="relative">
                                        <x-splade-radio class="green-chck" name="mode" value="Hybrid" label="Hybrid" />
                                    </div>
                                </div>
                            </div>

                            @if ($school->autoRoom == 1)
                                <x-splade-toggle>
                                    <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                        <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">ENABLE AUTO ALLOCATION ROOM</p>
            
                                        <div class="flex flex-col flex-wrap gap-3">
                                            <div class="relative">
                                                <x-splade-radio @click="setToggle(false)" class="green-chck" name="autoRoom" value=1 label="Enable" />
                                            </div>
            
                                            <div class="relative">
                                                <x-splade-radio @click="setToggle(true)" class="green-chck" name="autoRoom" value=0 label="Disable" />
                                            </div>
                                        </div>
                                    </div>
            
                                    <div v-bind:class="{ hidden: toggled, block: !toggled }" class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                        <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">TYPE AUTO ALLOCATION ROOM</p>
            
                                        <div class="flex flex-col flex-wrap gap-3">
                                            <div class="relative">
                                                <x-splade-radio class="green-chck" name="allocationWay" value=0 label="All Rooms for all Department" />
                                            </div>
            
                                            <div class="relative">
                                                <x-splade-radio class="green-chck" name="allocationWay" value=1 label="Room by Deparment" />
                                            </div>
                                        </div>
                                    </div>
                                </x-splade-toggle>
                            @else
                                <x-splade-toggle>
                                    <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                        <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">ENABLE AUTO ALLOCATION ROOM</p>
            
                                        <div class="flex flex-col flex-wrap gap-3">
                                            <div class="relative">
                                                <x-splade-radio @click="setToggle(true)" class="green-chck" name="autoRoom" value=1 label="Enable" />
                                            </div>
            
                                            <div class="relative">
                                                <x-splade-radio @click="setToggle(false)" class="green-chck" name="autoRoom" value=0 label="Disable" />
                                            </div>
                                        </div>
                                    </div>
            
                                    <div v-bind:class="{ block: toggled, hidden: !toggled }" class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                        <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">TYPE AUTO ALLOCATION ROOM</p>
            
                                        <div class="flex flex-col flex-wrap gap-3">
                                            <div class="relative">
                                                <x-splade-radio class="green-chck" name="allocationWay" value=0 label="All Rooms for all Department" />
                                            </div>
            
                                            <div class="relative">
                                                <x-splade-radio class="green-chck" name="allocationWay" value=1 label="Room by Deparment" />
                                            </div>
                                        </div>
                                    </div>
                                </x-splade-toggle>
                            @endif

                            <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">SEM</p>

                                <div class="flex flex-col flex-wrap gap-3">
                                    <div class="relative">
                                        <x-splade-radio  class="green-chck" name="sem" value=1 label="First Sem" />
                                    </div>

                                    <div class="relative">
                                        <x-splade-radio  class="green-chck" name="sem" value=2 label="Second Sem" />
                                    </div>

                                    <div class="relative">
                                        <x-splade-radio  class="green-chck" name="sem" value=3 label="Third Sem" />
                                    </div>
                                </div>
                            </div>
        
                            <div class="relative border-gray-200 border-solid border rounded-md p-6 input-cntnr">
                                <p class="sm:text-base text-sm bg-white absolute -top-3 left-3 px-1">DAYS AND ITS TIME</p>
            
                                <div class="flex flex-col flex-wrap gap-3">
                                    <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="07:00" class="input green-inpt leftlabel" id="fromtimeSun" name="schTimeStartSun" label="Sunday" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-5 p-3 left-0 top-0 border border-gray-300" for="fromtimeSun">
                                                From
                                            </label>
                                        </div>

                                        <div class="relative w-full">
                                            <x-splade-input placeholder="13:00" class="input green-inpt leftlabel" id="totimeSun" name="schTimeEndSun" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-0 p-3 left-0 top-0 border border-gray-300" for="totimeSun">
                                                To
                                            </label>
                                        </div>
                                    </div>

                                    <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="07:00" class="input green-inpt leftlabel" id="fromtimeMon" name="schTimeStartMon" label="Monday" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-5 p-3 left-0 top-0 border border-gray-300" for="fromtimeMon">
                                                From
                                            </label>
                                        </div>

                                        <div class="relative w-full">
                                            <x-splade-input placeholder="13:00" class="input green-inpt leftlabel" id="totimeMon" name="schTimeEndMon" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-0 p-3 left-0 top-0 border border-gray-300" for="totimeMon">
                                                To
                                            </label>
                                        </div>
                                    </div>

                                    <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="07:00" class="input green-inpt leftlabel" id="fromtimeTue" name="schTimeStartTue" label="Tuesday" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-5 p-3 left-0 top-0 border border-gray-300" for="fromtimeTue">
                                                From
                                            </label>
                                        </div>

                                        <div class="relative w-full">
                                            <x-splade-input placeholder="13:00" class="input green-inpt leftlabel" id="totimeTue" name="schTimeEndTue" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-0 p-3 left-0 top-0 border border-gray-300" for="totimeTue">
                                                To
                                            </label>
                                        </div>
                                    </div>

                                    <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="07:00" class="input green-inpt leftlabel" id="fromtimeWed" name="schTimeStartWed" label="Wednesday" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-5 p-3 left-0 top-0 border border-gray-300" for="fromtimeWed">
                                                From
                                            </label>
                                        </div>

                                        <div class="relative w-full">
                                            <x-splade-input placeholder="13:00" class="input green-inpt leftlabel" id="totimeWed" name="schTimeEndWed" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-0 p-3 left-0 top-0 border border-gray-300" for="totimeWed">
                                                To
                                            </label>
                                        </div>
                                    </div>

                                    <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="07:00" class="input green-inpt leftlabel" id="fromtimeThu" name="schTimeStartThu" label="Thursday" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-5 p-3 left-0 top-0 border border-gray-300" for="fromtimeThu">
                                                From
                                            </label>
                                        </div>

                                        <div class="relative w-full">
                                            <x-splade-input placeholder="13:00" class="input green-inpt leftlabel" id="totimeThu" name="schTimeEndThu" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-0 p-3 left-0 top-0 border border-gray-300" for="totimeThu">
                                                To
                                            </label>
                                        </div>
                                    </div>

                                    <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="07:00" class="input green-inpt leftlabel" id="fromtimeFri" name="schTimeStartFri" label="Friday" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-5 p-3 left-0 top-0 border border-gray-300" for="fromtimeFri">
                                                From
                                            </label>
                                        </div>

                                        <div class="relative w-full">
                                            <x-splade-input placeholder="13:00" class="input green-inpt leftlabel" id="totimeFri" name="schTimeEndFri" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-0 p-3 left-0 top-0 border border-gray-300" for="totimeFri">
                                                To
                                            </label>
                                        </div>
                                    </div>

                                    <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="07:00" class="input green-inpt leftlabel" id="fromtimeSat" name="schTimeStartSat" label="Saturday" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-5 p-3 left-0 top-0 border border-gray-300" for="fromtimeSat">
                                                From
                                            </label>
                                        </div>

                                        <div class="relative w-full">
                                            <x-splade-input placeholder="13:00" class="input green-inpt leftlabel" id="totimeSat" name="schTimeEndSat" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-0 p-3 left-0 top-0 border border-gray-300" for="totimeSat">
                                                To
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="rounded-btn-i green-btn-i mt-8 flex items-center justify-center">
                            <x-splade-submit :label="__('SAVE CHANGES')" />
                        </div>
                    </x-splade-form>
                </div>
            </div>
        </x-splade-modal>
    </div>
</x-guest-layout>
