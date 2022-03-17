<x-app-layout>
    <div class="text-gray-200">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                Edit Article
            </h2>
        </x-slot>


        <div class=" inline-block px-10 w-full h-screen">
            <form action="{{route('articles.update',$article->id)}}" method="post" class="w-full h-full">
                @csrf
                @method('PUT')
                <input name="title" class=" border rounded w-1/2 my-2 bg-gray-500 text-gray-200"
                       type="text" value="{{$article->title}}" >

                <input name="contents" class="border rounded block my-2 w-full h-72 bg-gray-500 text-gray-200
                 align-text-top" type="text" value="{{$article->content}}" >

                <button class="border p-2 my-2 rounded bg-lime-900 text-gray-200"
                        type="submit">Save</button>
            </form>
        </div>
    </div>
</x-app-layout>
