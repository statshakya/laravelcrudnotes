<x-app-layout>
    <div class="p-6 bg-amber-200 flex justify-between items-center mb-4">
        <!-- New Note Button on the Left -->
        <div class="flex justify-start">
            <a href="{{ route('note.create') }}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5">
                New Note
            </a>
        </div>

        <!-- Title Centered -->
        <div class="flex justify-center items-center flex-grow">
            <h1 class="text-3xl text-black font-bold mb-6">List of Notes</h1>
        </div>
    </div>

    <div class="container mx-auto px-4">
        <!-- Notes Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($notes as $note)
                <div class="p-5 bg-amber-200 rounded-lg shadow-md group transition-all duration-300 ease-in-out transform scale-100 group-hover:scale-105">
                    <h2 class="text-center text-2xl text-black font-bold mb-6">{{$note->title}}</h2>
                    <div class="text-cyan-800 p-5 bg-teal-400 rounded">
                        {{ Str::words($note->note, 40) }}
                    </div>
                    <!-- Buttons on Hover -->
                    <div class="mt-4 flex space-x-2 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-2 transition-all duration-300 ease-in-out">
                        <a href="{{ route('note.show', $note) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">View</a>
                        <a href="{{ route('note.edit',$note) }}" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Edit</a>
                        <form action="{{ route('note.destroy',$note)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="pt-10">
            {{$notes->links()}}
        </div>
    </div>
</x-app-layout>
