<div class="flex flex-wrap justify-between h-full w-full">
    <div class="w-full min-h-full relative bg-white sm:bg-gray-100 flex flex-wrap">
        {{ $navbar }}
    
        <div class="w-full flex justify-center flex-wrap">
            <div class="flex justify-center items-center w-full h-full">
                {{ $slot }}
            </div>
        </div>
    </div>
    
    <footer class="hidden w-full p-5 sm:flex justify-center items-center align-bottom h-40 border-t border-gray-300 bg-white">
        <p class="text-xs0">TERMS AND CONDITIONS</p>
    </footer>
</div>