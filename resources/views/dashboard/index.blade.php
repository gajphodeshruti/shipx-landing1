@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-6">

    <h1 class="text-2xl font-bold mb-4">Leads Dashboard</h1>

    @if(session('success'))
        <div class="p-3 mb-3 text-green-800 bg-green-200 rounded">
            {{ session('success') }}
        </div>
    @endif
    
    @if(session('error'))
        <div class="p-3 mb-3 text-red-800 bg-red-200 rounded">
            {{ session('error') }}
        </div>
    @endif

    <table class="w-full border-collapse border border-gray-400">
        <thead>
        <tr class="bg-gray-200">
            <th class="border border-gray-400 p-2">ID</th>
            <th class="border border-gray-400 p-2">Name</th>
            <th class="border border-gray-400 p-2">Email</th>
            <th class="border border-gray-400 p-2">Phone</th>
            <th class="border border-gray-400 p-2">Message</th>
            <th class="border border-gray-400 p-2">Attachment</th>
            <th class="border border-gray-400 p-2">Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach($leads as $lead)
            <tr>
                <td class="border border-gray-400 p-2">{{ $lead->id }}</td>
                <td class="border border-gray-400 p-2">{{ $lead->name }}</td>
                <td class="border border-gray-400 p-2">{{ $lead->email }}</td>
                <td class="border border-gray-400 p-2">{{ $lead->phone }}</td>
                <td class="border border-gray-400 p-2">{{ $lead->your_message }}</td>
                <td class="border border-gray-400 p-2">
                    @if($lead->attachment)
                        <a href="{{ asset('uploads/'.$lead->attachment) }}" target="_blank" class="text-blue-600 underline">View</a>
                    @else
                        No File
                    @endif
                </td>
                <td class="border border-gray-400 p-2">
                    <a href="{{ route('dashboard.edit', $lead->id) }}" class="text-blue-600">Edit</a>

                    <form action="{{ route('dashboard.destroy', $lead->id) }}" method="POST" onsubmit="return confirm('Delete this lead?')" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 ml-2">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
</div>
@endsection
