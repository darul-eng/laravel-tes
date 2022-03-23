<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div>
                    <a href="{{ route('add') }}" class="btn btn-primary">Add company</a>
                </div>
                <br>
                <div>
                    <table class="table">
                        <tr>
                            <th>No.</th>
                            <th>Logo</th>
                            <th>Company</th>
                            <th>Website</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($company as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->logo }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->website }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ route('edit', $item->id) }}" class="badge badge-warning">edit</a>
                                <a href="{{ route('delete', $item->id) }}" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
