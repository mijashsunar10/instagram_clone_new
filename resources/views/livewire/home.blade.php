<div class="w-full">
    
    {{-- header --}}

    <header>
        
    </header>

    {{-- main --}}

    <main class="grid lg:grid-cols-12 gap-8 md:mt-10 ">
        <aside class="lg:col-span-8 border overflow-hidden h-[1000px]" >

            {{-- Stories --}}
            <section>

                <ul class="flex overflow-x-auto items-center gap-2  scrollbar-hide">
                    
                        {{-- Heere if image source is not available then avatar source will automativally come here --}}
                      
                        {{-- <x-avatar story src="https://picsum.photos/500" class="h-14 w-14"/>  --}}
                        {{-- <x-avatar src="https://source.unsplash.com/random/500x500/?face,portrait" class="h-14 w-14" /> --}}

                        @for($i=0;$i<10;$i++)
                        <li class="flex flex-col justify-center w-20 gap-1 p-2">

                           
                                <x-avatar story src="https://picsum.photos/500?random={{ rand(1, 100000) }}" class="h-14 w-14"/> 
                                  {{-- <x-avatar src="https://source.unsplash.com/500x500?face-{{$i}}" class="h-14 w-14"/>  --}}
                               
                                <p class="text-xs font-medium truncate">
                                    {{fake()->name}}
    
                            </p>
                        </li>
                        @endfor
                </ul>

            </section>

        </aside>

        {{-- suggestions --}}

        <aside class="lg:col-span-4 border hidden lg:block p-4">

            <div class="flex items-center gap-2">
                <x-avatar src="https://picsum.photos/500?random={{ rand(1, 100000) }}" class="w-12 h-12"/>
                <h4 class="font-medium">{{fake()->name}}</h4>
            </div>

            {{-- suggestions --}}

            <section class="mt-4">
                <div class=" grid grid-cols-7 w-full gap-2">
                    <div class="col-span-5" >
                        <h4 class="font-bold text-gray-600/95">
                            Suggestions for you

                        </h4>
                    </div>
                    <div class="col-span-2 flex text-right justify-end">
                        <button class="font-bold text-blue-500 ml-auto text-sm">Follow</button>
                    </div>
                </div>

                <ul class="my-2 space-y-3">
                    @for($i=0;$i<5;$i++)
                        <li>
                            <li class="flex items-center gap-3">

                                <x-avatar src="https://picsum.photos/500?random={{ rand(1, 100000) }}" class="w-12 h-12"/>
                                <div class="grid grid-cols-7 w-full gap-2">
                                    <div class="col-span-5">
                                        <h5 class="font-semibold truncate text-sm">
                                            {{fake()->name}}
                                        </h5>
                                        <p class="text-xs truncate">Followed by {{fake()->name}}</p>
                            
                                    </div>
                                    <div class="col-span-2 flex text-right justify-end">
                                        <button class="font-bold text-blue-500 ml-auto text-sm">Follow</button>
                                    </div>
                                </div>
                            </li>

                        </li>
                    @endfor

                </ul>
            </section>

            {{-- App links --}}

            <ul class="flex gap-5 flex-wrap list-disc mt-5 m-3">
                <li class="text-xs text-gray-400 font-medium ">
                <a href="#" class="hover:underline">About</a>
                </li>
                <li class="text-xs text-gray-400 font-medium ">
                <a href="#" class="hover:underline">Help</a>
                </li>
                <li class="text-xs text-gray-400 font-medium ">
                <a href="#" class="hover:underline">Press</a>
                </li>
                <li class="text-xs text-gray-400 font-medium ">
                <a href="#" class="hover:underline">API</a>
                </li>
                <li class="text-xs text-gray-400 font-medium ">
                <a href="#" class="hover:underline">Jobs</a>
                </li>
                <li class="text-xs text-gray-400 font-medium ">
                <a href="#" class="hover:underline">Privacy</a>
                </li>
                <li class="text-xs text-gray-400 font-medium ">
                <a href="#" class="hover:underline">Terms</a>
                </li>
                <li class="text-xs text-gray-400 font-medium ">
                <a href="#" class="hover:underline">Locations</a>
                </li>
                <li class="text-xs text-gray-400 font-medium ">
                <a href="#" class="hover:underline">Language</a>
                </li>
                <li class="text-xs text-gray-400 font-medium ">
                <a href="#" class="hover:underline">Meta Verified</a>
                </li>
            </ul>

            <p class="text-sm mt-3  text-gray-400">&#169; 2024 INSTAGRAM FROM META</p>
            
        </aside>
    </main>
</div>
