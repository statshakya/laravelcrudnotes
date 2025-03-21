<x-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-center text-3xl text-black font-bold mb-6">Create Note</h1>
        <div class="flex justify-between mb-4">
            <a href="{{ route('note.edit',$note) }}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">
                Edit Note
            </a>
            <a href="{{ route('note.index',$note) }}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">
                Back
            </a>
        </div>
        <div class="p-5 bg-amber-200 rounded-lg shadow-md group">
                <!-- Make textarea fill the available space -->
                <h2 class="text-center text-2xl text-black font-bold mb-6">{{$note->title}}</h2>
                <textarea class="w-full h-32 text-cyan-800 p-5 bg-teal-400 rounded mb-4" placeholder="Please enter your notes here">
                  {{$note->note}}
                </textarea>

                <!-- <div class="flex space-x-2">
                    <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Submit</button>
                    <a href="{{ route('note.index') }}" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Cancel</a>
                </div> -->
            
        </div>
    </div>
</x-layout>
