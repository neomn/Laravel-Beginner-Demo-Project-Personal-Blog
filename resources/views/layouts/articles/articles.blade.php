<x-app-layout>

    @isset($message)
        <h2>{{$message}}</h2>
    @endisset

    <div class="text-gray-200">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                Articles
            </h2>
        </x-slot>

        <div class=" px-4  inline-flex  table-fixed">
            <table class="text-center   border-separate border-2 p-4 ml-4 rounded border-gray-500">
                <thead class="border-b">
                <tr>
                    <th scope="col" class="px-3 border-b">ID</th>
                    <th scope="col" class="px-3 border-b">title</th>
                    <th scope="col" class="px-3 border-b">content</th>
                    <th scope="col" class="px-3 border-b">date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($article as $article)
                    <tr>
                        <td class="px-3">{{$loop->iteration}}</td>
                        <td class="px-3">{{$article->title}}</td>
                        <td class="px-3">{{$article->content}}</td>
                        <td class="px-3">{{$article->created_at}}</td>
                        <td>
                            <form action="{{route('articles.destroy',$article->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="px-4 mx-4 border rounded bg-red-900 "> delete</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('articles.edit',$article->id)}}" method="get">
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
