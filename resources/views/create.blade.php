@extends('layout.main')

@section('title', 'Create Todo')

@section('content')

<section>
    <form action="/store" method="POST">
    @csrf
        <div class="flex flex-col gap-2">
            <label for="title">Title</label>
            <input type="text" name="title"">
            <label for="description">Description</label>
            <input type="text" name="description"">
            <x-button type="submit">Create</x-button>
        </div>
    </form>
</section>

@endsection