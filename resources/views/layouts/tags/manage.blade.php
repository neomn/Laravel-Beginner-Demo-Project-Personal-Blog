<x-app-layout>


    <div class="text-gray-200">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                Manage Tags
            </h2>
        </x-slot>


        <h1 hidden > {{ $id = app('request')->input('id')  }}  </h1>
        @isset($id)
            <div class=" p-3 ml-4">
                <form action="{{route('tags.update',$tag[$id]->title)}}" method="post">
                    @csrf
                    @method('put')
                    <button class="border rounded bg-lime-900 p-2 px-4 mr-4" type="submit" > Update </button>
                    <input class="border rounded bg-gray-700 text-gray-200 w-96" name="title" type="text" value="{{$tag[$id]->title}}" >
                </form>
            </div>
        @endisset

        {{-- Create a new Category --}}
        @if(!isset($id))
            <div class=" p-3 ml-4">
                <form action="{{route('tags.store')}}" method="post">
                    @csrf
                    <button class="border rounded bg-lime-900 p-2 px-4 mr-4" type="submit" > Create </button>
                    <input class="border rounded bg-gray-700 text-gray-200 w-96" name="title" type="text" placeholder="enter tag to create a new one" >
                </form>
            </div>
        @endif

        {{--display all tags in a table --}}
        <div class=" px-4  inline-flex  table-fixed">
            <table class="text-center   border-separate border-2 p-4 ml-4 rounded border-gray-500">
                <thead class="border-b">
                <tr>
                    <th scope="col" class="px-3 border-b">ID</th>
                    <th scope="col" class="px-3 border-b w-96">Tag</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tag as $tag)
                    <tr>
                        <td class="px-3">{{$loop->iteration}}</td>
                        <td class="px-3">{{$tag->title}}</td>
                        <td>
                            <form action="{{route('tags.destroy',$tag->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="px-4 mx-4 border rounded bg-red-900 "> delete</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('tags.edit',$loop->iteration-1)}}" method="get">
                                <button type="submit" class=" px-4 border rounded bg-amber-500 text-gray-900 "> Edit </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
