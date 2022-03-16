<x-app-layout>
    <div class="text-gray-200">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                Articles
            </h2>
        </x-slot>

        <h1 class="p-6">this is articles page </h1>

        <div class=" px-4  inline-flex  table-fixed">
            <table class="text-center   border-separate border-2 p-4 rounded border-gray-500">
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
                                <form action="post">
                                    <button type="submit" class="px-4 mx-4 border rounded bg-red-900 "> delete </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
