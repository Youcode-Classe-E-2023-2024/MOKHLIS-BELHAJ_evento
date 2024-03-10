<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white  border-b border-gray-200">
                    Update categorie name
                </div>
                
            </div>
            @if(session('success'))
            <div id="successMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 1 0-.707-.708L10 9.293 5.357 4.652a.5.5 0 1 0-.707.708L9.293 10l-4.64 4.643a.5.5 0 1 0 .707.708L10 10.707l4.643 4.64a.5.5 0 1 0 .708-.707L10.707 10l4.641-4.643z"/></svg>
                </span>
            </div>
        @endif
            <div class="mt-4 p-6 bg-white text-center overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{route('Categorie.update',$categorie->id)}}" method="post">
                    @csrf
                    @method('Put')
                    <label for="name" class="font-bold text-xl">Name</label>
                    <input class="py-2 px-5 rounded-lg  font-medium" type="text" id="name" name="categorie" value="{{$categorie->name}}">
                    <button type="submit"  class="py-2 px-5 rounded-lg  font-medium text-white bg-teal-700 ">submit</button>
                 </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var successMessage = document.getElementById('successMessage');
                successMessage.style.display = 'none';
            }, 5000); 
        });
    </script>
</x-admin-layout>
