<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <br>
                        <form action="{{ route('store') }}" method="POST" enctype='multipart/form-data'>
                            @csrf
                            <label for="logo">logo:</label><br>
                            <input type="file" id="logo" name="logo"><br>
                            <label for="name">name:</label><br>
                            <input type="text" id="name" name="name"><br>
                            <label for="website">website:</label><br>
                            <input type="text" id="website" name="website"><br>
                            <label for="email">email:</label><br>
                            <input type="text" id="email" name="email"><br><br>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
