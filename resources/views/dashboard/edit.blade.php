@extends('layouts.app')

@section('content')

<div class="w-full min-h-screen flex justify-center items-start pt-20 bg-gray-100 text-black">
    <div class="w-full max-w-xl bg-white p-6 rounded-lg shadow-lg">

        <h2 class="text-2xl font-bold mb-4">Edit Lead</h2>

        <form action="{{ route('dashboard.update', $lead->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label>Name</label>
                <input type="text" name="name" value="{{ $lead->name }}" class="w-full border px-3 py-2 rounded">
            </div>

            <div class="mb-4">
                <label>Email</label>
                <input type="email" name="email" value="{{ $lead->email }}" class="w-full border px-3 py-2 rounded">
            </div>

            <div class="mb-4">
                <label>Phone</label>
                <input type="text" name="phone" value="{{ $lead->phone }}" class="w-full border px-3 py-2 rounded">
            </div>

            <div class="mb-4">
                <label>Message</label>
                <textarea name="message" class="w-full border px-3 py-2 rounded">{{ $lead->message }}</textarea>
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
        </form>

    </div>
</div>

@endsection
