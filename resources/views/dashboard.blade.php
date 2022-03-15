<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

 <h2 class="p-6 bg-slate-700 text-gray-200 " >you have written {{$articleCount}} article till now </h2>
</x-app-layout>
