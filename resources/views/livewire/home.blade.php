<div class="w-full">
    
    {{-- header --}}

    <header>
        
    </header>

    {{-- main --}}

    <main class="grid lg:grid-cols-12 gap-8 md:mt-10 ">
        <aside class="lg:col-span-8 border overflow-hidden h-[1000px]" >

            {{-- Stories --}}
            <section>

                <ul class="flex overflow-x-auto items-center gap-2">
                    
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

        <aside class="lg:col-span-4 border hidden lg:block p-4">
            
        </aside>
    </main>
</div>
