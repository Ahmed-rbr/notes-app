<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          LiteNotes
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  text-gray-900">
                        <x-link-btn  href='{{ route("notes.index") }}'>Go Back</x-link-btn>
   </div>
            </div>
            
  <li class="flex  w-full  shadow-sm rounded-lg bg-white  p-4 flex-col gap-3 mb-6">
<h2 class=""></h2>
<h2  class="text-2xl font-bold text-red-400 hover:text-red-600 ">{{$note->title}}</h2>
<p class="mt-2">{{$note->text}}</p>

<p class="text-sm text-gray-400">last modified at: {{$note->updated_at?->diffForHumans() ?? ' N/A'}}</p>
  </li>

        </div>
    </div>
</x-app-layout>
