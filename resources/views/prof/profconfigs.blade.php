<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div class="flex items-center">
                <div class="pr-3 border-r border-gray-300">
                    <Link class="flex items-center justify-center gap-3 blue-btn squared-btn border-2" href="{{ route('prof-class-calendar') }}">
                        <i class="text-sm fa-solid fa-calendar-days"></i>
                        <p class="text-xs text-center">SCHOOL CALENDAR</p>
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
        <x-splade-modal class="rounded-xl p-0 modal blue-btn-x" max-width="md">
            <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full sm:w-100 h-full sm:h-fit">
                <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                    <Link class="flex items-center justify-center gap-3" href="{{ route('prof-class-calendar') }}">
                        <i class="text-sm fa-solid fa-calendar-days"></i>
                        <p class="text-xs text-center">SCHOOL CALENDAR</p>
                    </Link>
                </div>
        
                <div class="sm:hidden">
                    <div class="flex items-center justify-center p-5 pt-0">
                        <div class="flex items-center justify-center flex-wrap">
                            <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                            <p class="text-lg text-center">AUTO - SCHED</p>
                        </div>
                    </div>
        
                    <div class="bg-b6 w-full p-4 flex items-center justify-center">
                        <p class="text-white text-lg font-normal text-center">SETUP DAY AND TIME AVAILABILITY</p>
                    </div>
                </div>
        
                <div class="hidden sm:block px-3 py-1 border-l-4 border-l-b6 m-7 mb-0">
                    <p class="text-lg text-b6">
                        SETUP DAY AND TIME AVAILABILITY
                    </p>
                </div>
        
                <div class="p-7 pt-2">
                    <x-splade-form :default="$profconfig" method="POST" action="{{ route('save-configs') }}">
                        <div class="">
                            <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                <p class="text-md bg-white px-1 rounded-md absolute -top-3 left-3">TYPE OF EMPLOYMENT</p>
                    
                                <div class="flex flex-col flex-wrap gap-3">
                                    <div class="relative">
                                        <x-splade-radio class="blue-chck" name="employment" value="FullTime" label="Full Time" />
                                    </div>
                    
                                    <div class="relative">
                                        <x-splade-radio class="blue-chck" name="employment" value="PartTime" label="Part Time" />
                                    </div>
                                </div>
                            </div>
    
                            <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                <p class="text-md bg-white px-1 rounded-md absolute -top-3 left-3">PREFERRED MODE OF CLASS</p>
    
                                <div class="flex flex-col flex-wrap gap-3">

                                    <div class="relative">
                                        <x-splade-radio class="blue-chck" name="mode" value="{{ $profconfig->mode }}" label="{{ $profconfig->mode }}" />
                                    </div>
    
                                    {{-- <div class="relative">
                                        <x-splade-radio class="blue-chck" name="mode" value="Online" label="Online" />
                                    </div>
    
                                    <div class="relative">
                                        <x-splade-radio class="blue-chck" name="mode" value="Hybrid" label="Hybrid" />
                                    </div> --}}

                                </div>
                            </div>
        
                            <div class="relative border-gray-200 border-solid border rounded-md p-6 input-cntnr">
                                <p class="text-md bg-white absolute -top-3 left-3 px-1">DAYS AND ITS TIME</p>
            
                                <div class="flex flex-col flex-wrap gap-3">

                                    <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">

                                        <div class="relative w-full">
                                            <x-splade-input placeholder="07:00" class="input blue-inpt leftlabel" id="fromtimeSun" name="prefTimeStartSun" label="Sunday" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-5 p-3 left-0 top-0 border border-gray-300" for="fromtimeSun">
                                                From
                                            </label>
                                        </div>
    
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="21:00" class="input blue-inpt leftlabel" id="totimeSun" name="prefTimeEndSun" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-0 p-3 left-0 top-0 border border-gray-300" for="totimeSun">
                                                To
                                            </label>
                                        </div>

                                    </div>

                                    {{-- preferred teaching mode if hybrid --}}
                                    @if ($profconfig->mode == "Hybrid")

                                        <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">

                                            <x-splade-radio class="blue-chck" name="prefModeSun" value="face-face" label="Face to Face" />

                                            <x-splade-radio class="blue-chck" name="prefModeSun" value="Online" label="Online" />
                                            
                                        </div>
                                        
                                    @endif
                                    {{-- end --}}

                                    
    
                                    <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="07:00" class="input blue-inpt leftlabel" id="fromtimeMon" name="prefTimeStartMon" label="Monday" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-5 p-3 left-0 top-0 border border-gray-300" for="fromtimeMon">
                                                From
                                            </label>
                                        </div>
    
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="13:00" class="input blue-inpt leftlabel" id="totimeMon" name="prefTimeEndMon" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-0 p-3 left-0 top-0 border border-gray-300" for="totimeMon">
                                                To
                                            </label>
                                        </div>
                                    </div>

                                    {{-- preferred teaching mode if hybrid --}}
                                    @if ($profconfig->mode == "Hybrid")

                                        <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">

                                            <x-splade-radio class="blue-chck" name="prefModeMon" value="face-face" label="Face to Face" />

                                            <x-splade-radio class="blue-chck" name="prefModeMon" value="Online" label="Online" />
                                            
                                        </div>
                                        
                                    @endif
                                    {{-- end --}}
    
                                    <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="07:00" class="input blue-inpt leftlabel" id="fromtimeTue" name="prefTimeStartTue" label="Tuesday" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-5 p-3 left-0 top-0 border border-gray-300" for="fromtimeTue">
                                                From
                                            </label>
                                        </div>
    
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="13:00" class="input blue-inpt leftlabel" id="totimeTue" name="prefTimeEndTue" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-0 p-3 left-0 top-0 border border-gray-300" for="totimeTue">
                                                To
                                            </label>
                                        </div>
                                    </div>

                                    {{-- preferred teaching mode if hybrid --}}
                                    @if ($profconfig->mode == "Hybrid")

                                        <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">

                                            <x-splade-radio class="blue-chck" name="prefModeTue" value="face-face" label="Face to Face" />

                                            <x-splade-radio class="blue-chck" name="prefModeTue" value="Online" label="Online" />
                                            
                                        </div>
                                        
                                    @endif
                                    {{-- end --}}
    
                                    <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="07:00" class="input blue-inpt leftlabel" id="fromtimeWed" name="prefTimeStartWed" label="Wednesday" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-5 p-3 left-0 top-0 border border-gray-300" for="fromtimeWed">
                                                From
                                            </label>
                                        </div>
    
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="13:00" class="input blue-inpt leftlabel" id="totimeWed" name="prefTimeEndWed" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-0 p-3 left-0 top-0 border border-gray-300" for="totimeWed">
                                                To
                                            </label>
                                        </div>
                                    </div>

                                    {{-- preferred teaching mode if hybrid --}}
                                    @if ($profconfig->mode == "Hybrid")

                                        <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">

                                            <x-splade-radio class="blue-chck" name="prefModeWed" value="face-face" label="Face to Face" />

                                            <x-splade-radio class="blue-chck" name="prefModeWed" value="Online" label="Online" />
                                            
                                        </div>
                                        
                                    @endif
                                    {{-- end --}}
    
                                    <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="07:00" class="input blue-inpt leftlabel" id="fromtimeThu" name="prefTimeStartThu" label="Thursday" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-5 p-3 left-0 top-0 border border-gray-300" for="fromtimeThu">
                                                From
                                            </label>
                                        </div>
    
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="13:00" class="input blue-inpt leftlabel" id="totimeThu" name="prefTimeEndThu" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-0 p-3 left-0 top-0 border border-gray-300" for="totimeThu">
                                                To
                                            </label>
                                        </div>
                                    </div>

                                    {{-- preferred teaching mode if hybrid --}}
                                    @if ($profconfig->mode == "Hybrid")

                                        <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">

                                            <x-splade-radio class="blue-chck" name="prefModeThu" value="face-face" label="Face to Face" />

                                            <x-splade-radio class="blue-chck" name="prefModeThu" value="Online" label="Online" />
                                            
                                        </div>
                                        
                                    @endif
                                    {{-- end --}}
    
                                    <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="07:00" class="input blue-inpt leftlabel" id="fromtimeFri" name="prefTimeStartFri" label="Friday" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-5 p-3 left-0 top-0 border border-gray-300" for="fromtimeFri">
                                                From
                                            </label>
                                        </div>
    
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="13:00" class="input blue-inpt leftlabel" id="totimeFri" name="prefTimeEndFri" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-0 p-3 left-0 top-0 border border-gray-300" for="totimeFri">
                                                To
                                            </label>
                                        </div>
                                    </div>

                                    {{-- preferred teaching mode if hybrid --}}
                                    @if ($profconfig->mode == "Hybrid")

                                        <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">

                                            <x-splade-radio class="blue-chck" name="prefModeFri" value="face-face" label="Face to Face" />

                                            <x-splade-radio class="blue-chck" name="prefModeFri" value="Online" label="Online" />
                                            
                                        </div>
                                        
                                    @endif
                                    {{-- end --}}
    
                                    <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="07:00" class="input blue-inpt leftlabel" id="fromtimeSat" name="prefTimeStartSat" label="Saturday" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-5 p-3 left-0 top-0 border border-gray-300" for="fromtimeSat">
                                                From
                                            </label>
                                        </div>
    
                                        <div class="relative w-full">
                                            <x-splade-input placeholder="13:00" class="input blue-inpt leftlabel" id="totimeSat" name="prefTimeEndSat" time />
                                            <label class="cursor-pointer text-xs w-14 flex items-center justify-center bg-white rounded-l-md absolute mt-0 p-3 left-0 top-0 border border-gray-300" for="totimeSat">
                                                To
                                            </label>
                                        </div>
                                    </div>

                                    {{-- preferred teaching mode if hybrid --}}
                                    @if ($profconfig->mode == "Hybrid")

                                        <div class="flex items-end gap-3 flex-wrap sm:flex-nowrap">

                                            <x-splade-radio class="blue-chck" name="prefModeSat" value="face-face" label="Face to Face" />

                                            <x-splade-radio class="blue-chck" name="prefModeSat" value="Online" label="Online" />
                                            
                                        </div>
                                        
                                    @endif
                                    {{-- end --}}

                                </div>
                            </div>
    
                            <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                <p class="text-md bg-white px-1 rounded-md absolute -top-3 left-3">OTHER DETAILS</p>
        
                                <div class="w-full">
                                    <div class="">
                                        <x-splade-input class="input blue-inpt" id="loadUnit" type="text" name="loadUnit" :label="__('Units')" required />
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="rounded-btn-i blue-btn-i mt-8 flex items-center justify-center">
                            <x-splade-submit :label="__('SAVE CHANGES')" />
                        </div>
                    </x-splade-form>
                </div>
            </div>
        </x-splade-modal>
    </div>
</x-guest-layout>
