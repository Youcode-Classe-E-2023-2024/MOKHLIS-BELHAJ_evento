<x-organisateur-layout>
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">Events</h2>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal text-center">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center  text-xs font-semibold text-gray-700 uppercase ">
                                    id
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-centre text-xs font-semibold text-gray-700 uppercase ">
                                    titre
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-centre text-xs font-semibold text-gray-700 uppercase ">
                                    image
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-centre text-xs font-semibold text-gray-700 uppercase ">
                                    date
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-centre text-xs font-semibold text-gray-700 uppercase ">
                                    price</th>

                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-centre text-xs font-semibold text-gray-700 uppercase ">
                                    categorie</th>

                             
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-centre text-xs font-semibold text-gray-700 uppercase ">
                                    nombre de places</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-centre text-xs font-semibold text-gray-700 uppercase ">
                                    lieu</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-centre text-xs font-semibold text-gray-700 uppercase ">
                                    validation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $event->id }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $event->titre }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <img class="w-20 h-16 " src=" {{ $event->image }}" alt="" />
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $event->date }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $event->price }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $event->categorie_id }}
                                    </td>
                                    
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $event->nombre_de_places }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $event->lieu_id }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        
                                         
                                                @if ($event->validation)
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5 fill-green-500" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <title>validate</title>
                                                        <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                                                        <path fill-rule="evenodd"
                                                            d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5 fill-red-500" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <title>invalidate</title>
                                                        <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                                                        <path fill-rule="evenodd"
                                                            d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @endif
                                         
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{ $events->links() }}
    </div>
    
</x-organisateur-layout>