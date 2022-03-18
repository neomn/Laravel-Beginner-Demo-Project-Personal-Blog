<x-app-layout>

    @isset($message)
        <h2>{{$message}}</h2>
    @endisset

    <div class="text-gray-200">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                Manage Categories
            </h2>
        </x-slot>

        {{-- Create a new Category --}}
        <div>
            <form action="{{route('categories.create')}}" method="post"></form>
            @csrf
            <button type="submit" > Create </button>
            <input type="text" placeholder="enter category to create a new one" >
        </div>

        <div class=" px-4  inline-flex  table-fixed">
            <table class="text-center   border-separate border-2 p-4 ml-4 rounded border-gray-500">
                <thead class="border-b">
                <tr>
                    <th scope="col" class="px-3 border-b">ID</th>
                    <th scope="col" class="px-3 border-b">Category</th>
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
