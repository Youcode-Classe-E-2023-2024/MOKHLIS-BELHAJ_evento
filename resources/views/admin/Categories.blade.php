<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if(session('success'))
    <div id="successMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 1 0-.707-.708L10 9.293 5.357 4.652a.5.5 0 1 0-.707.708L9.293 10l-4.64 4.643a.5.5 0 1 0 .707.708L10 10.707l4.643 4.64a.5.5 0 1 0 .708-.707L10.707 10l4.641-4.643z"/></svg>
        </span>
    </div>
@endif
                <div class="p-6 bg-white  border-b border-gray-200">
                    Dashboard
                </div>
            </div>
            <div class="mt-4 p-6  overflow-hidden shadow-sm sm:rounded-lg">
                
                    <form action="{{route('Categorie.new')}}" method="POST" class=" flex justify-around mt-4 p-6 bg-white  min-w-full shadow-md rounded-lg ">
                        @csrf
                        <div>
                         <input type="text"class="text-base text-black outline-none border-2 px-4 py-2 rounded-lg" name="categorie"  placeholder='new categorie'>
                        </div>
                        <button  type="submit" class="flex  px-5 rounded-lg  font-medium text-white bg-teal-700 items-center">
                         <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-10 fill-green-500" viewBox="0 0 20 20" fill="currentColor">
                             <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"/>
                           </svg>
                           new
                        </button>
                    </form>

                
                <div class="container mx-auto px-4 sm:px-8">
                    <div class="py-8">
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                         
                        <div
                          class="inline-block min-w-full shadow-md rounded-lg overflow-hidden"
                        >
                          <table class="min-w-full leading-normal">
                            <thead>
                              <tr>
                                <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                                >
                                  name
                                </th>
                                <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                                >
                                  action
                                </th>
                                
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $categorie)
                                <tr>
                                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                          {{$categorie->name}}
                                        </p>
                                  </td>
                                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm flex" >
                                  {{-- {{$categorie->id}} --}}
                                  <a href="{{route('Categorie.edit',$categorie->id)}}">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-10 fill-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                      </svg>
                                    </a>
                                  <form action="{{ route('categorie.delete', $categorie->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-10 fill-red-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </form>
                                
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div></div>
            </div>
        </div>
    </div>
    <script>
        // After page load, hide the success message after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var successMessage = document.getElementById('successMessage');
                successMessage.style.display = 'none';
            }, 5000); // 5000 milliseconds = 5 seconds
        });
    </script>
</x-admin-layout>
