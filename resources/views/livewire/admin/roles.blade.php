<div>
  <!-- component -->
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

  <div class="w-full xl:w-full mb-12 xl:mb-0 px-4 mx-auto mt-10">
      <div class="block w-full ">
          <table class="items-center bg-transparent w-full border-collapse ">
              <thead>
                  <tr>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">id</th>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">name</th>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">email</th>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">roles</th>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($users as $user)
                  <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">{{$user->id}}</th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">{{$user->name}}</td>
                      <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$user->email}}</td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$user->roles->first()->name}}</td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 flex">
                          <a href="{{route('role.update',$user->id)}}">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                  <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                              </svg>
                            </a>
                           
                            <button wire:click="block({{ $user->id }})" wire:click="updater">
                            @if ($user->banned)
                            <svg xmlns="http://www.w3.org/2000/svg"  class="h-5 w-5 fill-green-500" viewBox="0 0 20 20" fill="currentColor">
                              <title>block</title>
                              <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"/>
                              <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"/>
                            </svg>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-red-500" viewBox="0 0 20 20" fill="currentColor">
                              <title>Unblock</title>
                              <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"/>
                              <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"/>
                            </svg>
                            @endif
                          </button>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
    {{ $users->links()}}
 
</div>


