<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" >
            {{ __('Meus Livros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="background-color:rgb(44, 155, 44) >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100"  style="background-color:rgb(44, 155, 44)">
                    {{ __("Seja bem vindo") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
