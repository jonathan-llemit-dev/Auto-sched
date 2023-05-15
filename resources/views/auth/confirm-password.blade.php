<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div>
                <div class="flex items-center ml-2">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="sm:text-lg text-sm whitespace-nowrap">AUTO - SCHED</p>
                </div>
            </div>
        </nav>
    </x-slot>

    <div class="sm:p-20 sm:max-w-lg w-full sm:h-fit h-full flex flex-wrap">
        <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-fit">
            {{-- <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                <Link class="flex items-center justify-center gap-3" href="{{ route('login') }}">
                    <i class="text-sm fa-solid fa-arrow-left"></i>
                    <p class="text-xs text-center">Exit</p>
                </Link>
            </div> --}}

            <div class="sm:hidden flex items-center justify-center p-5 sm:p-5">
                <div class="flex items-center justify-center flex-wrap">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="sm:text-lg text-sm text-center">AUTO - SCHED</p>
                </div>
            </div>

            <div class="bg-b6 sm:hidden w-full p-3 flex sm:px-5 items-center justify-center">
                <p class="text-white sm:text-lg text-sm font-normal text-center">CONFIRM YOUR PASSWORD</p>
            </div>

            <div class="px-3 border-l-4 border-l-b6 hidden sm:block m-7 mb-0">
                <p class="sm:text-lg text-sm text-b6">
                    CONFIRM YOUR PASSWORD
                </p>
            </div>

            <div class="m-7 mt-2">
                <div class="my-4">
                    <p class="text-xs text-justify">
                        This is a Secure Area of the Application. Please Confirm your Password before Continuing.
                    </p>

                    <p class="mt-2 text-xs flex items-center justify-center sm:justify-start">Note: " <i class="fa-solid fa-circle text-xs3 text-red-500"></i> " Means that the Field is Required.</p>
                </div>
                
                <div class="mt-4">
                    <x-splade-form action="{{ route('password.confirm') }}">
                        <div class="relative h-full w-full">
                            <div onclick="togglepass()" class="group cursor-pointer bg-white w-11 flex items-center justify-center mt-5 p-2 absolute right-0 border-gray-300 border-solid border rounded-md rounded-tl-none rounded-bl-none">
                                <span class="cursor-pointer text-base">
                                    <i id="eyes" class="fa-solid fa-eye text-gray-400 group-hover:text-gray-500"></i>
                                </span>
                            </div>

                            <x-splade-input onkeyup="validate(0, 'addrss', 'true')" class="input blue-inpt" id="password" type="password" name="password" :label="__('Password')" />
                            <p class="message mt-1"></p>
                            <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                        </div>
                        
                        <div class="flex items-center w-full sm:justify-between mt-8">
                            <div class="squared-btn-i blue-btn-i w-full flex flex-col sm:items-end">
                                <x-splade-submit :label="__('CONFIRM PASSWORD')" />
                            </div>
                        </div>
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>