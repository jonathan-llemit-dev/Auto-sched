<x-coor-guest-layout>
    <div class="bg-white sm:rounded-xl relative sm:shadow-md lg:w-tabw w-full">
        <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
            <Link class="flex items-center justify-center gap-3" href="{{ route('coor.login') }}">
                <i class="text-sm fa-solid fa-arrow-left"></i>
                <p class="text-xs text-center">Back</p>
            </Link>
        </div>

        <div class="sm:hidden">
            <div class="flex items-center justify-center p-5 pt-0">
                <Link class="flex items-center justify-center flex-wrap" href="/">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="text-lg text-center">AUTO - SCHED</p>
                </Link>
            </div>

            <div class="bg-b6 w-full p-4 flex items-center justify-center">
                <p class="text-white text-lg font-normal text-center">COORDINATOR'S REGISTRATION FORM</p>
            </div>
        </div>

        <div class="hidden sm:block px-3 py-1 border-l-4 border-l-b6 m-7 mb-0">
            <p class="text-lg text-b6">
                COORDINATOR'S REGISTRATION FORM
            </p>
        </div>

        <x-splade-form action="{{ route('coor.register') }}" class="space-y-4">
            <div class="m-7 mt-2">
                <p class="mt-4 mb-8 text-xs0 flex items-center justify-center sm:justify-start">Note: " <i class="fa-solid fa-circle text-xs3 text-red-500"></i> " Means that the Field is Required.</p>

                <div class="relative border-gray-200 border-solid border rounded-md p-6 input-cntnr">
                    <p class="text-md bg-white px-1 rounded-md absolute -top-3 left-3">PERSONAL DETAILS</p>

                    <div class="lg:grid grid-cols-3 flex flex-wrap gap-3 items-center">
                        <div class="relative h-full w-full">
                            <x-splade-input class="input blue-inpt" id="coorFName" type="text" name="profFName" :label="__('First Name')" :show-errors="false" required />
                            <p class="message"></p>
                            <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                        </div>
        
                        <div class="relative h-full w-full">
                            <x-splade-input class="input blue-inpt" id="coorLName" type="text" name="profLName" :label="__('Last Name')"  :show-errors="false" required />
                            <p class="message"></p>
                            <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                        </div>
                    </div>
                </div>

                <div class="relative border-gray-200 border-solid border rounded-md p-6 input-cntnr">
                    <p class="text-md bg-white absolute -top-3 left-3 px-1">CONTACT DETAILS</p>

                    <div class="lg:grid grid-cols-2 flex flex-wrap gap-3 items-center">
                        <div class="relative h-full w-full">
                            <x-splade-input class="input blue-inpt" id="contactNumber" type="text" name="contactNumber" :label="__('Contact Number')" required />
                            <p class="message"></p>
                            <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                        </div>
        
                        <div class="relative h-full w-full">
                            <x-splade-input class="input blue-inpt" id="email" type="text" name="email" :label="__('Email Address')" required />
                            <p class="message"></p>
                            <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                        </div>
                    </div>
                </div>

                <div class="relative border-gray-200 border-solid border rounded-md p-6 input-cntnr">
                    <p class="text-md bg-white absolute -top-3 left-3 px-1">SECURITY DETAILS</p>

                    <div class="lg:grid grid-cols-2 flex flex-wrap gap-3 items-center">
                        <div class="relative h-full w-full">
                            <div onclick="togglepass()" class="group cursor-pointer bg-white w-11 flex items-center justify-center mt-5 p-2 absolute right-0 border-gray-300 border-solid border rounded-md rounded-tl-none rounded-bl-none">
                                <span class="cursor-pointer text-base">
                                    <i id="eyes" class="fa-solid fa-eye text-gray-400 group-hover:text-gray-500"></i>
                                </span>
                            </div>

                            <span class="group cursor-pointer rounded-full bg-gray-400 w-4 h-4 right-0 flex items-center justify-center absolute">
                                <i class="fa-solid fa-question text-xs2 text-white relative flex justify-center">
                                    <div class="rounded-md opacity-0 invisible absolute -top-32 -right-3 sm:-right-1 transition-all ease-in-out bg-white group-hover:opacity-100 group-hover:visible">
                                        <div class="relative flex justify-center items-center rounded-md shadow-md bg-white border border-gray-600">
                                            <i class="fa-solid fa-caret-down absolute -bottom-4 right-2 sm:right-0 text-lg text-gray-600"></i>
                                            <p class="whitespace-nowrap p-2 text-xs font-normal text-blc1">Password Requires Atleast: <br> 1 Lowercase Letter <br> 1 Uppercase Letter <br> 1 Number <br> 1 Symbol <br> And Should have Atleast 8 Characters Long.</p>
                                        </div>
                                    </div>
                                </i>
                            </span>

                            <x-splade-input class="input blue-inpt" id="password" type="password" name="password" :show-errors="false" :label="__('Password')" required />
                            <p class="message"></p>
                            <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                        </div>
            
                        <div class="relative h-full w-full">
                            <div onclick="togglecnfrm()" class="group cursor-pointer bg-white w-11 flex items-center justify-center mt-5 p-2 absolute right-0 border-gray-300 border-solid border rounded-md rounded-tl-none rounded-bl-none">
                                <span class="cursor-pointer text-base">
                                    <i id="eyescnfrm" class="fa-solid fa-eye text-gray-400 group-hover:text-gray-500"></i>
                                </span>
                            </div>
    
                            <x-splade-input class="input blue-inpt" id="password_confirmation" type="password" name="password_confirmation" :label="__('Confirm Password')"  :show-errors="false" required />
                            <p class="message"></p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center w-full justify-center sm:justify-end">
                    <div class="hidden sm:flex flex-wrap items-center text-xs0 mr-4">
                        <p class="text-xs mr-2">Already Have An Account?</p>

                        <Link class="sm:text-blc1 text-b6 text-xs mr-2 transition-all ease-in-out hover:text-b6" href="{{ route('coor.login') }}">
                            Log In Here.
                        </Link>
                    </div>
                    
                    <div class="squared-btn-i blue-btn-i w-full sm:w-fit flex flex-col sm:p-0">
                        <x-splade-submit :label="__('REGISTER')" />
                    </div>
                </div>
            </div>
        </x-splade-form>
    </div>
</x-coor-guest-layout>
