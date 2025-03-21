<x-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-center text-3xl text-black font-bold mb-6">List of Notes</h1>

        <div class="mb-4">
            <a href="{{ route('note.create') }}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">
                New Note
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($notes as $note)
                <!-- Group wrapper for hover effects -->
                <div class="p-5 bg-amber-200 rounded-lg shadow-md group transition-all duration-300 ease-in-out transform scale-100 group-hover:scale-105">
                    <h2 class="text-center text-2xl text-black font-bold mb-6">{{$note->title}}</h2>
                    <div class="text-cyan-800 p-5 bg-teal-400 rounded">
                        {{ Str::words($note->note, 40) }}
                    </div>
                    
                    <!-- Buttons are hidden by default and appear on hover -->
                    <div class="mt-4 flex space-x-2 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-2 transition-all duration-300 ease-in-out">
                        <a href="{{ route('note.show', $note) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">View</a>
                        <a href="{{ route('note.edit',$note) }}" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Edit</a>
                        <form action="{{ route('note.destroy',$note)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pt-10">
        {{$notes->links()}}
        </div>
    </div>
</x-layout>
