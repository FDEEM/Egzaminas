
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight bg-white dark:bg-slate-800">
            {{ __('Product-main Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-800 overflow-hidden shadow-xl sm:rounded-lg"> 
                {{-- <x-welcome /> --}}


                <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->


<div class="bg-white dark:bg-slate-800">
    <div class="bg-white dark:bg-slate-800 mx-auto max-w-3x4 px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Products</h2>

      
            <div href="#" class="bg-white dark:bg-slate-800 grid grid-cols-1 gap-x-10 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                
                
                <div class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-red-400 xl:aspect-h-8 xl:aspect-w-7:space-x-1">
                    <img src="https://www.nativeskatestore.co.uk/images/creature-skateboards-hitz-shed-diamond-head-skateboard-deck-8-47-p19327-46237_image.jpg" alt="M" class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Green skull</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">689€</p>
                <a href="/skateboards/1">More</a>
                
                </div>

            <div href="#" class="group">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-red-400 xl:aspect-h-8 xl:aspect-w-7:space-x-1">
                <img src="https://th.bing.com/th/id/OIP.Tl1iZZRqh5ayGfm8-wQdugHaMh?rs=1&pid=ImgDetMain" alt="B" class="h-full w-full object-cover object-center group-hover:opacity-75">
            </div>
            <h3 class="mt-4 text-sm text-gray-700">Wood ancle</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">456€</p>
            <a href="/skateboards/1">More</a>
            </div>

            <div href="#" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-red-400 xl:aspect-h-8 xl:aspect-w-7:m-10">
                <img src="https://www.nativeskatestore.co.uk/images/rat-face-m80-green-stain-old-skool-skateboard-deck-8-875-p58811-135286_image.jpg" alt="O" class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Toxic rat board</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">567€</p>
                <a href="/skateboards/1">More</a>
            </div>

            <div href="#" class="group">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-red-400 xl:aspect-h-8 xl:aspect-w-7:m-10">
                <img src="https://images.tcdn.com.br/img/img_prod/17375/2408_1_20160714133941.jpg" alt="H" class="h-full w-full object-cover object-center group-hover:opacity-75">
            </div>
            <h3 class="mt-4 text-sm text-gray-700">Rotten board </h3>
            <p class="mt-1 text-lg font-medium text-gray-900">449€</p>
            <a href="/skateboards/1">More</a>
            
            </div>

            <div href="#" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-red-400 xl:aspect-h-8 xl:aspect-w-7:m-10">
                <img src="https://i.pinimg.com/originals/7a/ab/6e/7aab6e0b0b721d634b2503a313759ec1.jpg" alt="L" class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Checkers board</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">450€</p>
                <a href="/skateboards/1">More</a>
                
            </div>
            
            <div href="#" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-red-400 xl:aspect-h-8 xl:aspect-w-7:m-10">
                <img src="https://indalosurfer.com/2644-large_default/surfskate-d-street-check-warp-32.jpg" alt="P" class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Trippler board</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">490€</p>
                <a href="/skateboards/1">More</a>
                
            </div>

            <div href="#" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-red-400 xl:aspect-h-8 xl:aspect-w-7:m-10">
                <img src="https://i.pinimg.com/originals/ba/65/4e/ba654e1b20cdc19a91c008348582a59c.jpg" alt="A" class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Lust board</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">230€</p>
                <a href="/skateboards/1">More</a>

            </div>
            <div href="#" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7:m-10">
                <img src="https://i.ebayimg.com/images/g/ZdEAAOSwJzxjHVDq/s-l1600.jpg" alt="V" class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Warrior board</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">200€</p>
                <a href="/skateboards/1">More</a>

            </div>
            <div href="#" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7:m-10">
                <img src="https://i.pinimg.com/originals/dc/f9/a4/dcf9a4d6c48c1c51ace09e17f1d89eb2.jpg" alt="I" class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Grip tape</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">75€</p>
                <a href="/skateboards/1">More</a>

            </div>

            <div href="#" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7:m-10">
                <img src="https://th.bing.com/th/id/R.158a621fee730f0e9e65d0646e93d56c?rik=HPEzd1BbRAY%2f6Q&riu=http%3a%2f%2fs7d5.scene7.com%2fis%2fimage%2fSummitSports%2f457020_457023_1.jpg%3f%24Generic1000%24&ehk=4X0cWQNR0ndUVP24WaWG6kO5jD8ErUxPQHC3t8Ogsk0%3d&risl=&pid=ImgRaw&r=0" alt="J" class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Wheels</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">120€</p>
                <a href="/skateboards/1">More</a>

            </div>


        <!-- More products... -->
      </div>
    </div>
  </div>




            </div>
        </div>
    </div>
</x-app-layout>