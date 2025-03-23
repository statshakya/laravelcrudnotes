<x-app-layout>
    <x-slot name="header" class="bg-amber-200">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(key: 'Dashboard') }} of {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 grid grid-flow-col grid-rows-1 gap-4 bg-amber-200" >
                    <div>Total Notes:{{$notes}}</div>
                    <div>Total Blogs: 2</div>
                  
                </div>
                <!-- <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div> -->
            </div>
        </div>
    </div>
</x-app-layout>
