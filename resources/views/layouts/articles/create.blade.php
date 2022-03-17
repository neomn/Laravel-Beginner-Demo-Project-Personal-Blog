<x-app-layout>
    <div class="text-gray-200">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                Create New Article
            </h2>
        </x-slot>
    </div>
    <div class=" inline-flex px-10 w-full h-screen">
        <form action="post" class="w-full h-full">
            <input class=" border rounded w-1/2 my-2 bg-gray-500 text-gray-200 " type="text" placeholder=" title ">
            <input class="border rounded block my-2 w-full h-72 text-left text-  bg-gray-500 text-gray-200" type="text" placeholder="  content ">
            <button class="border p-2 my-2 rounded bg-lime-900 text-gray-200" type="submit">Create</button>
        </form>
    </div>
</x-app-layout>
