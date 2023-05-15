<x-guest-layout>
    <x-slot name="navbar">
    </x-slot>

    <div class="a4 bg-white rounded-md p-10">
        <div class="h-fit w-full flex flex-col items-center justify-center gap-2">
            {{-- @if ($school->schLogo == "")
                <div class="absolute background-image -top-32 w-40 h-40 flex items-center justify-center border-4 border-b6 rounded-full p-2 shadow-md bg-white" style="background-image:url('{{ asset('image/logo-as.png') }}')">
            @else
                <div class="absolute background-image -top-32 w-40 h-40 flex items-center justify-center border-4 border-b6 rounded-full p-2 shadow-md bg-white" style="background-image:url('{{ asset('storage/'.$school->schLogo) }}')">
            @endif --}}

            <div class="flex gap-2 items-center">
                <div>
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11">
                </div>

                <div>
                    <p class="text-lg">
                        SCHOOL NAME
                    </p>
                </div>
            </div>
            
            <div class="text-xs text-center">
                <p>
                    School Address
                </p>

                <p>
                    School Email | School Phone Number
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>