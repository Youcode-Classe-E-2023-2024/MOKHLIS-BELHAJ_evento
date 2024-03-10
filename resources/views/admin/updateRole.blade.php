    <x-admin-layout>
        <div class="p-40">
        
    <div class="bg-white overflow-hidden shadow rounded-lg border">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                User Profile
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
            </p>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Full name
                    </dt>
                    <div class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{$user->name}}

                    </div>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Email
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{$user->email}}
                        
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                       Role
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{$user->roles['0']->name}}
                        </dd>
                </div>
            </dl>
        </div>
        <div class="p-10 flex justify-center gap-3">
<form action="{{route('role.edite')}}" method="post">
    @csrf
    <input type="hidden" name='user_id' value="{{$user->id}}" >

    <select class="text-base text-gray-800 outline-none border-2 px-4 py-2 rounded-lg" name="role" id="">
        <option value="" selected disabled>new role</option>
        @foreach ($roles as $role)
        <option value="{{$role->name}}"> {{$role->name}}</option>
        @endforeach
    </select>
    <button type="submit" class="py-2.5 px-6 rounded-lg text-sm font-medium text-white bg-teal-600">Confirm</button>
    <a  href="{{route('Role')}}" class="py-2.5 px-6 rounded-lg text-sm font-medium bg-teal-200 text-teal-800">Cancel</a>
</form>
            

        </div>

    </div>
</div>
</x-admin-layout>
