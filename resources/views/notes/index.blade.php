<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          LiteNotes
        </h2>
    </x-slot>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-flash-msg> {{session('success')}}</x-flash-msg>  
    <div class="p-3 flex justify-end  text-gray-900">
      @if (request()->routeIs('notes.index'))
        <x-link-btn class="justify-end"  href='{{ route("notes.create") }}'>New Note</x-link-btn>

      @endif
    </div>
<ul class="flex md:w-3/5 m-auto  w-full mt-4 flex-col ">
 @forelse ($notes as $note)
  <li class="flex  w-full  shadow-sm rounded-lg bg-white  p-4 flex-col gap-3 mb-6">
     <a     @if (request()->routeIs('notes.index'))

     href='{{ route('notes.show',$note) }}' 
          @else

               href='{{ route('trashed.show',$note) }}' 

                @endif


    
    class="text-2xl hover:underline font-bold text-red-400 hover:text-red-600 ">{{$note->title}}</a>
    <p class="mt-2">{{Str::limit($note->text,200,'...')}}</p>
    <p class="text-sm text-gray-400">last modified at: {{$note->updated_at?->diffForHumans() ?? ' N/A'}}</p>
  </li>
 @empty
        <li class="text-gray-500 text-center py-4">No notes available.</li>
 @endforelse

{{ $notes->links() }}

</ul>
        </div>
    </div>
</x-app-layout>
