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
            <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                <x-splade-form method="POST" action="{{ route('logout') }}">
                    @csrf
                    
                    <button type="submit" class="text-xs text-center flex items-center justify-center gap-3">
                        <i class="text-sm fa-solid fa-arrow-right-from-bracket"></i> {{ __('Log Out') }}
                    </button>
                </x-splade-form>
            </div>

            <div class="sm:hidden flex items-center justify-center p-5 pt-0 sm:p-5">
                <div class="flex items-center justify-center flex-wrap">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="sm:text-lg text-sm text-center">AUTO - SCHED</p>
                </div>
            </div>

            <div class="bg-b6 sm:hidden w-full p-3 flex sm:px-5 items-center justify-center">
                <p class="text-white sm:text-lg text-sm font-normal text-center">VERIFYING YOUR EMAIL</p>
            </div>

            <div class="px-3 border-l-4 border-l-b6 hidden sm:block m-7 mb-0">
                <p class="sm:text-lg text-sm text-b6">
                    VERIFYING YOUR EMAIL
                </p>
            </div>

            <div class="m-7 mt-2">
                @if (session('status') == 'verification-link-sent')
                    <div class="text-xs text-justify text-green-500 p-2 mt-4 border-y border-r border-l-4 border-gray-300 border-l-green-500 rounded-md shadow-sm">
                        {{ __('A New Email Verification Link has been Sent to the Email Address you Provided during Registration.') }}
                    </div>
                @endif

                <div class="my-4">
                    <p class="text-xs text-justify">
                        Thanks for Signing Up! Before getting Started, could you Verify your Email Address by Clicking on the Link we just Emailed to you? If you didn't Receive the Email, we will gladly Send you Another.
                    </p>
                </div>
                
                <div class="mt-8 flex items-center justify-between w-full">
                    <x-splade-form class="hidden sm:block" method="POST" action="{{ route('logout') }}">
                        @csrf
        
                        <button type="submit" class="text-blc1 text-xs mr-2 transition-all ease-in-out hover:text-b7">
                            {{ __('Log Out') }}
                        </button>
                    </x-splade-form>
                    
                    <div class="w-full sm:w-fit">
                        <x-splade-form class="w-full" action="{{ route('verification.send') }}">
                            <div class="squared-btn-i blue-btn-i w-full flex flex-col">
                                <x-splade-submit :label="__('RESEND EMAIL VERIFICATION LINK')" />
                            </div>
                        </x-splade-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>