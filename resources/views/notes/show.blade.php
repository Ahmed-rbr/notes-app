<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          LiteNotes
        </h2>
    </x-slot>

    <div class="py-12">
      <div class=" max-w-7xl  mx-auto p-2 md:max-w-3xl sm:px-6   gap-2  justify-between">

<x-flash-msg> {{session('success')}}</x-flash-msg>             <x-link-btn   href='{{ route("notes.index") }}'>Go Back</x-link-btn>
</div>


      <div class=" max-w-7xl mx-auto p-2 md:max-w-3xl sm:px-6  flex flex-col  sm:flex-row gap-2  justify-between">
        <p class="text-sm text-gray-400">Created at: {{$note->created_at?->diffForHumans() ?? ' N/A'}}</p>
<p class="text-sm text-gray-400">Last modified at: {{$note->updated_at?->diffForHumans() ?? ' N/A'}}</p>
</div>
    <div class="max-w-7xl mx-auto p-2 md:max-w-4xl  sm:px-6 lg:px-8">
            
            
  <li class="flex w-full   shadow-xl  bg-white  md:p-6 p-4 flex-col gap-3 ">
<h2  class="text-2xl font-bold hover:cursor-pointer text-red-400 hover:text-red-600 ">{{$note->title}}</h2>
<p class="mt-2 whitespace-pre-wrap">{{$note->text}}</p>

  </li>
<div class="bg-white  overflow-hidden shadow-sm ">
                <div class="p-6 flex-col items-baseline sm:flex-row flex justify-end gap-6  text-gray-900">
                      <form action="{{ route('notes.destroy',$note) }}" method="POST">
                       @csrf
                        @method('DELETE')
                      <x-primary-button  class="bg-red-500 hover:bg-red-700 hover:underline" href='{{ route("notes.index") }}' 
                       onclick=" return confirm('are you sure you want to Delete this')">Move to Trash</x-primary-button>  
                      
                      </form>  
                        <x-link-btn class="bg-blue-400 hover:bg-blue-500 hover:underline"  href='{{ route("notes.edit",$note)}}'>Edit Note</x-link-btn>
   </div>
            </div>
        </div>
    </div>
</x-app-layout>
