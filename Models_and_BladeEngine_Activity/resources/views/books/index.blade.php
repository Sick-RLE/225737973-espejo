@extends('layouts.app')

@section('title', 'Book List')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <table class="min-w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">ID</th>
                    <th class="border p-2">ISBN</th>
                    <th class="border p-2">Title</th>
                    <th class="border p-2">Author</th>
                    <th class="border p-2">Description</th>
                    <th class="border p-2">Published Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr class="border">
                        <td class="border p-2">{{ $book->id }}</td>
                        <td class="border p-2">{{ $book->isbn }}</td>
                        <td class="border p-2">{{ $book->title }}</td>
                        <td class="border p-2">{{ $book->author }}</td>
                        <td class="border p-2">{{ $book->description }}</td>
                        <td class="border p-2">{{ $book->date_published }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
