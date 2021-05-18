<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Report') }}
        </h2>
        
    </x-slot>
    <!--- Display Success Message if User registered successfully -->
    @if(session()->has('status'))
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div x-data="{ show: true }" x-show="show" class="w-11/12 md:w-3/5 bg-white my-2 rounded-r-md px-6 border-l-4 -ml-4 border-gray-100 bg-green-500">
    <div class="flex items-center py-4">
        <div class="ml-5">
            <p class="text-white">{{ session()->get('status') }}</p>
        </div>
        <div>
            <button type="button"  @click="show = false"  class="px-6 text-yellow-100">
                <span class="text-2xl">&times;</span>
            </button>
        </div>
        </div>
        </div>
    </div>
    @endif
<!-- Admin Report Table -->
<div class="py-12">
 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <div class="shadow overflow-hidden rounded border-b border-gray-200">
    <table class="min-w-full bg-white">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="w-3 text-left py-1 px-1 uppercase font-semibold text-sm">First Name</th>
          <th class="w-3 text-left py-1 px-1 uppercase font-semibold text-sm">Last name</th>
          <th class="w-3 text-left py-1 px-1 uppercase font-semibold text-sm">Address1</th>
          <th class="w-3 text-left py-1 px-1 uppercase font-semibold text-sm">Address2</th>
          <th class="w-3 text-left py-1 px-1 uppercase font-semibold text-sm">City</th>
          <th class="w-3 text-left py-1 px-1 uppercase font-semibold text-sm">State</th>
          <th class="w-3 text-left py-1 px-1 uppercase font-semibold text-sm">Zip</th>
          <th class="w-3 text-left py-1 px-1 uppercase font-semibold text-sm">Country</th>
          <th class="w-3 text-left py-1 px-1 uppercase font-semibold text-sm">Date</th>
        </tr>
      </thead>
    <tbody class="text-gray-700">
     @foreach ($users as $user)
      <tr>
        <td class="w-3 text-left py-1 px-1">{{$user->firstname}}</td>
        <td class="w-3 text-left py-1 px-1">{{$user->lastname}}</td>
        <td class="w-3 text-left py-1 px-1">{{$user->address1}}</td>
        <td class="w-3 text-left py-1 px-1">{{$user->address2}}</td>
        <td class="w-3 text-left py-1 px-1">{{$user->city}}</td>
        <td class="w-3 text-left py-1 px-1">{{$user->state}}</td>
        <td class="w-3 text-left py-1 px-1">{{$user->zip}}</td>
        <td class="w-3 text-left py-1 px-1">{{$user->country}}</td>
        <td class="w-3 text-left py-1 px-1">{{$user->created_at}}</td>
      </tr>
      @endforeach
    </tbody>
    </table>
    <!-- Pagination Links -->
     <div class="d-flex justify-content-center">
    {!! $users->links() !!}
     </div>
   </div>
  </div>
</div>
</x-app-layout>
