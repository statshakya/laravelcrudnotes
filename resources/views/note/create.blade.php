<x-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-center text-3xl text-black font-bold mb-6">Create Note</h1>
        
        <div class="p-5 bg-amber-200 rounded-lg shadow-md group">
            <form action="{{route('note.store')}}" method="POST" class="">
                @csrf
                <!-- Make textarea fill the available space -->
                 <input type="text" name="title" value="" class="w-full text-cyan-800 p-5 bg-teal-400 rounded mb-4" placeholder="Please enter your title here"/>
                <textarea name="note" class="w-full h-32 text-cyan-800 p-5 bg-teal-400 rounded mb-4" placeholder="Please enter your notes here"></textarea>

                <div class="flex space-x-2">
                    <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Submit</button>
                    <a href="{{ route('note.index') }}" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
