<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          LiteNotes
        </h2>
    </x-slot>

    <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white p-4 max-w-2xl  m-auto  overflow-hidden shadow-sm sm:rounded-lg">
<form action="{{ route("notes.update",$note) }}" method="POST" >
@csrf
@method('PATCH')

<x-text-input name='title' class="w-full" placeholder='enter note title...'  value="{{old('title',$note->title) }}"
></x-text-input>
@error('title')
    <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
@enderror
<x-text-area class="w-full  mt-6"     value="{{old('text',$note->text) }}"
 name='text' placeholder='Type your note here...' rows=8></x-text-area>
@error('text')
    <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
@enderror
<x-primary-button class="mt-6">edit Note</x-primary-button>

</form>            </div>
      
    </div>
    </div>
</x-app-layout>
