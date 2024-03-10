<div class="">
    <div class="mt-96 mx-auto  max-w-7xl   flex justify-center items-center">
      <div class="container mx-auto bg-indigo-500 rounded-lg p-14">
        <form>		
            <div class="sm:flex items-center bg-white rounded-lg overflow-hidden px-2 py-1 justify-between">
              <input wire:model='search' wire:keydown="updater" class="text-base text-gray-400 flex-grow outline-none px-2 " type="search" placeholder="Search" />
              <div class="ms:flex items-center px-2 rounded-lg space-x-4 mx-auto ">
                <select wire:model="filtercategories" wire:change='updater' class="text-base text-gray-800 outline-none border-2 px-4 py-2 rounded-lg">
                <option value="" selected>tous les categories</option>
                @foreach ($categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                        
                    @endforeach
              </select>
                <select wire:model='filterLieux'  wire:change='updater' class="text-base text-gray-800 outline-none border-2 px-4 py-2 rounded-lg">
                    <option value="" selected>tous les lieux</option>
                    @foreach ($lieux as $lieu)
                    <option value="{{$lieu->id}}">{{$lieu->name}}</option>
                        
                    @endforeach
                </select>
              <input type="date" id="myDateInput" wire:model='filterdate' wire:change='updater'  >

              </div>
            </div>
        </form>
      </div>
    </div>
    
    <div class=" grid-cols-1 sm:grid md:grid-cols-4  mx-auto">
        @foreach ($events as $event)
        <div
          class="mx-3 mt-6 max-w-lg flex flex-col rounded-lg bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
          <a href="{{route('DetailPage',$event->id)}}">
            <img
              class="  rounded-t-lg "
              src="{{$event->image}}"
              alt="Skyscrapers" />
          </a>
          <div class="p-6">
            <h5 class="mb-2 text-xl font-medium leading-tight">{{$event->titre}}</h5>
         
          </div>
          <div
            class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
            <small>{{$event->date}}</small>

          </div>
        </div>
        @endforeach
        
    </div>
    <div class="mt-10 flex justify-center  bg-gray-200">

        {{ $events->links() }}
    </div>
   
 
</div>
<script>
    const dateInput = document.getElementById('myDateInput');
    const currentDate = new Date();
    const formattedDate = currentDate.toISOString().slice(0, 10);
    dateInput.min = formattedDate;
</script>