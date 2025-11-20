@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-6 px-4 sm:px-6 lg:px-8">

    <h1 class="text-3xl font-extrabold text-gray-900 mb-6">Leads Dashboard</h1>

    @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            {{ session('success') }}
        </div>
    @endif
    
    @if(session('error'))
        <div class="p-4 mb-4 text-sm text-red-800 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">ID</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">Name</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">Email</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">Phone</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">Message</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">Attachment</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($leads as $lead)
                <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-gray-100 transition duration-150 ease-in-out">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border-r border-gray-200">{{ $lead->id }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 border-r border-gray-200">{{ $lead->name }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 border-r border-gray-200">{{ $lead->email }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 border-r border-gray-200">{{ $lead->phone }}</td>
                    <td class="px-4 py-4 max-w-xs overflow-hidden text-sm text-gray-500 border-r border-gray-200 truncate">{{ $lead->your_message }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm border-r border-gray-200">
                        @if($lead->attachment)
                            <a href="{{ asset('uploads/'.$lead->attachment) }}" target="_blank" class="text-indigo-600 hover:text-indigo-900 font-semibold">View File</a>
                        @else
                            <span class="text-gray-400">No File</span>
                        @endif
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('dashboard.edit', $lead->id) }}" class="text-blue-600 hover:text-blue-900 transition duration-150 ease-in-out">Edit</a>

                        <form action="{{ route('dashboard.destroy', $lead->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this lead? This action cannot be undone.')" class="inline ml-3">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 transition duration-150 ease-in-out">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection