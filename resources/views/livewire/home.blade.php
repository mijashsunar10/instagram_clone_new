<div class="w-full">
    
    {{-- header --}}

    <header class="md:hidden sticky top-0 bg-white">
        <div class="grid grid-cols-12 gap-2 items-center">

            <div class="col-span-3">

                <img src="{{asset('assets/logo.png')}}" alt="logo" class="h-12 max-w-lg w-full">

            </div>
            <div class="col-span-8 flex justify-center px-2">
                <input type="text" placeholder="Search" class="border-0 outline-none w-full focus:outline-none bg-gray-100 rounded-lg focus:ring-0 hover:ring-0">


            </div>
            <div class="col-span-1 flex justify-center">
                <a href="#">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.9" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                          </svg>
                          

                    </span>
                </a>


            </div>
        </div>


        
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

            {{-- posts --}}

            <section class="mt-5 space-y-4 p2">
                
                <livewire:post.item/>

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
                        <button class="font-bold text-blue-500 ml-auto text-sm">See All</button>
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

            <ul class="flex gap-3 flex-wrap  mt-5 ">
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

            <p class="text-sm mt-4  text-gray-400">&#169; 2024 INSTAGRAM FROM META</p>
            
        </aside>
    </main>
</div>
