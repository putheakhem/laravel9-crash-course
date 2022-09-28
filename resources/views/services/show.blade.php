<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>

    <div>
       <h1 class="text-3xl font-bold text-green-500">
           {{ $services['title'] }}
       </h1>
        <p> {{ $services['description'] }}</p>
    </div>
</x-app-layout>
