<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div class="flex items-center">
                <div class="pr-3 border-r border-gray-300">
                    <Link class="flex items-center justify-center gap-3 blue-btn squared-btn border-2" href="{{ route('school.index') }}">
                        <i class="text-sm fa-solid fa-calendar-days"></i>
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
        <x-splade-modal class="rounded-xl p-0 modal" max-width="md">
            <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-full">
                <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                    <Link class="flex items-center justify-center gap-3" href="{{ route('school.index') }}">
                        <i class="text-sm fa-solid fa-school"></i>
                        <p class="text-xs text-center">School Profile</p>
                    </Link>
                </div>
        
                <div class="sm:hidden">
                    <div class="bg-b6 w-full p-3 flex sm:px-5 items-center justify-center">
                        <p class="text-white sm:text-lg text-sm font-normal text-center">CHANGE SCHOOL LOGO</p>
                    </div>
                </div>
        
                <div class="hidden sm:block px-3 border-l-4 border-l-b6 m-7 mb-0">
                    <p class="sm:text-lg text-sm text-b6">
                        CHANGE SCHOOL LOGO
                    </p>
                </div>
        
                <div class="p-7 pt-2 flex justify-center">
                    <x-splade-form action="{{ route('schoolLogo') }}">
                        <div class="w-fit">
                            <div class="relative border-gray-200 border rounded-md p-5 mt-5 input-cntnr">
                                <p class="sm:text-base text-sm bg-white px-1 rounded-md absolute -top-3 left-3">BROWSE A SCHOOL LOGO</p>
        
                                <div class="w-full">
                                    @if ($school->schLogo == "")
                                        <div class="h-full w-full relative sch-logo-bg" style="background: url('{{ asset('image/logo-as.png') }}') no-repeat; ">
                                    @else
                                        <div class="h-full w-full relative sch-logo-bg" style="background: url('{{ asset('storage/'.$school->schLogo) }}') no-repeat;">
                                    @endif

                                    {{-- <div class="h-full w-full relative sch-logo-bg" style="background: url('{{ asset('storage/'.$school->schLogo) }}') no-repeat"> --}}
                                        <x-splade-file preview filepond class="sch-logo" id="schLogo" accept="image/png, image/jpeg, image/jpg" name="schLogo" required autofocus />
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