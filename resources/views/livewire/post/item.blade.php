<div class="max-w-lg mx-auto">
    {{-- Stop trying to control. --}}
    {{-- header --}}

    <header class="flex items-center gap-3">

        <x-avatar src="https://picsum.photos/500?random={{ rand(1, 100000) }}" class="h-9 w-9"/> 
        <div class="grid grid-cols-7 w-full gap-2">

        <div class="col-span-5">

            <h5 class="font-semibold truncate text-sm">
                {{fake()->name}}
            </h5>

        </div>

        <div class="col-span-2 flex text-right justify-end">
            <button class="text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                  </svg>
            </button>
        </div>

        </div>



    </header>


</div>
