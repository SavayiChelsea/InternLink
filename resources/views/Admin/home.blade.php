<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Hello {{ Auth::user()->name }}!
        </h2>
    </x-slot>

    <div class ="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 1g:px-8">
            This is the admin page
        </div>
    </div>


</x-app-layout>
