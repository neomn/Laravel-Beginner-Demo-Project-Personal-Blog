<x-app-layout>


    <div class="text-gray-200">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                Manage Categories
            </h2>
        </x-slot>

        {{-- Create a new Category --}}
        <div class=" p-3 ml-4">
            <form action="{{route('categories.store')}}" method="post">
                @csrf
                <button class="border rounded bg-lime-900 p-2 px-4 mr-4" type="submit" > Create </button>
                <input class="border rounded bg-gray-700 text-gray-200 w-96" name="title" type="text" placeholder="enter category to create a new one" >
            </form>
        </div>

        {{--display all categories in a table --}}
        <div class=" px-4  inline-flex  table-fixed">
            <table class="text-center   border-separate border-2 p-4 ml-4 rounded border-gray-500">
                <thead class="border-b">
                <tr>
                    <th scope="col" class="px-3 border-b">ID</th>
                    <th scope="col" class="px-3 border-b w-96">Category</th>
                </tr>
                </thead>
                <tbody>
                @foreach($category as $category)
                    <tr>
                        <td class="px-3">{{$loop->iteration}}</td>
                        <td class="px-3">{{$category->title}}</td>
                        <td>
                            <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="px-4 mx-4 border rounded bg-red-900 "> delete</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('categories.edit',$category->id)}}" method="get">
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
