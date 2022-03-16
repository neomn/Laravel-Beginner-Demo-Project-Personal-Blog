<x-app-layout>
    <div class="text-gray-200">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                Articles
            </h2>
        </x-slot>

        <h1 class="p-6">this is articles page </h1>

        <div class=" px-4  inline-flex  table-fixed">
            <table class="text-center   border-separate border border-gray-500">
                <thead class="border-b">
                <tr>
                    <th scope="col" class="px-4">ID</th>
                    <th scope="col">title</th>
                    <th scope="col">content</th>
                    <th scope="col">date</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($article as $article)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->content}}</td>
                            <td>{{$article->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
