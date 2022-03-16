<x-app-layout>
    <div class="text-gray-200">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                Articles
            </h2>
        </x-slot>

        <h1 class="p-6">this is articles page </h1>

        <div class=" px-4  inline-flex  table-fixed">
            <table class="text-center   border-separate border border-gray-300">
                <thead>
                <tr>
                    <th scope="col">   ID   </th>
                    <th scope="col">title</th>
                    <th scope="col">content</th>
                    <th scope="col">date</th>
                </tr>
                </thead>
                <tbody>
{{--                    @foreach($article as $article)--}}
{{--                        <tr>--}}
{{--                            <td>{{$loop->iteration}}</td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
                <tr>
                    <td>   1   </td>
                    <td>test title</td>
                    <td>2022/3/15</td>
                </tr>
                {{--                <tr>--}}
                {{--                    <td> record 2</td>--}}
                {{--                </tr>--}}
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
