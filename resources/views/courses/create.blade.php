<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div class="flex items-center">
                <div class="pr-3 border-r border-gray-300">
                    <Link class="flex items-center justify-center gap-3 blue-btn squared-btn border-2" href="{{ route('courses.index') }}">
                        <i class="text-sm fa-solid fa-graduation-cap"></i>
                        <p class="text-xs text-center">COURSES</p>
                    </Link>
                </div>
    
                <div class="flex items-center ml-2">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="sm:text-lg text-sm whitespace-nowrap">AUTO - SCHED</p>
                </div>
            </div>
        </nav>
    </x-slot> 

    <div class="sm:p-20 sm:max-w-xl w-full sm:h-fit h-full flex flex-wrap">
        <x-splade-modal class="rounded-xl p-0 modal blue-btn-x" max-width="md">
            <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-full">
                <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                    <Link class="flex items-center justify-center gap-3" href="{{ route('courses.index') }}">
                        <i class="text-sm fa-solid fa-graduation-cap"></i>
                        <p class="text-xs text-center">Courses</p>
                    </Link>
                </div>
        
                <div class="sm:hidden">
                    <div class="bg-b6 w-full p-3 flex sm:px-5 items-center justify-center">
                        <p class="text-white sm:text-lg text-sm font-normal text-center">ADD COURSE</p>
                    </div>
                </div>
        
                <div class="hidden sm:block px-3 border-l-4 border-l-b6 m-7 mb-0">
                    <p class="sm:text-lg text-sm text-b6">
                        ADD COURSE
                    </p>
                </div>
        
                <div class="p-7 pt-2">
                    <x-splade-form action="{{ route('courses.store') }}" class="bg-white rounded-md">
                        <div>
                            <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">COURSE DETAILS</p>
        
                                <div class="w-full">
                                    <div class="">
                                        <x-splade-input class="input blue-inpt" id="courseName" type="text" name="courseName" :label="__('Course')" required autofocus />
                                    </div>
                    
                                    <div class="mt-4">
                                        <x-splade-input class="input blue-inpt" id="courseYearLevels" type="number" name="courseYearLevels" :label="__('Year Levels')" required />
                                    </div>
        
                                    <div class="mt-4 flex items-end gap-3">
                                        <div class="relative w-full">
                                            <x-splade-select class="input drop-down blue-inpt leftlabel" placeholder="---" name="courseSection" id="courseSection" label="Section">
                                                <option value="" disabled>---</option>
                                                <option value="A" selected>A</option>
                                            </x-splade-select>
                                            <label class="cursor-pointer text-xs w-12 flex items-center justify-center bg-white rounded-l-md absolute mt-5 py-3 px-2 left-0 top-0 border border-gray-300" for="courseSection">
                                                From
                                            </label>
                                        </div>
        
                                        <div class="relative w-full">
                                            <x-splade-select class="input drop-down blue-inpt leftlabel" placeholder="---" name="courseSection1" id="courseSection1">
                                                <option value="" disabled selected>---</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                                <option value="I">I</option>
                                                <option value="J">J</option>
                                                <option value="K">K</option>
                                                <option value="L">L</option>
                                                <option value="M">M</option>
                                                <option value="N">N</option>
                                                <option value="O">O</option>
                                                <option value="P">P</option>
                                                <option value="Q">Q</option>
                                                <option value="R">R</option>
                                                <option value="S">S</option>
                                                <option value="T">T</option>
                                                <option value="U">U</option>
                                                <option value="V">V</option>
                                                <option value="W">W</option>
                                                <option value="X">X</option>
                                                <option value="Y">Y</option>
                                                <option value="Z">Z</option>
                                            </x-splade-select>
                                            <label class="cursor-pointer text-xs w-12 flex items-center justify-center bg-white rounded-l-md absolute mt-0 py-3 px-2 left-0 top-0 border border-gray-300" for="courseSection1">
                                                To
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="relative border-gray-200 border rounded-md p-6 mt-5 input-cntnr">
                                <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">OTHER DETAILS</p>
        
                                <div class="w-full">
                                    <div class="">
                                        <x-splade-select class="drop-down blue-inpt" placeholder="Select the Department" id="courseDept" name="courseDept" :label="__('Department')" required :options="$dept" />
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="rounded-btn-i blue-btn-i mt-8 flex items-center justify-center">
                            <x-splade-submit :label="__('ADD COURSE')" />
                        </div>
                    </x-splade-form>
                </div>
            </div>
        </x-splade-modal>
    </div>
</x-guest-layout>