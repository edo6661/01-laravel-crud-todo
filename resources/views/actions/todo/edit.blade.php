@extends('layout.main')

@section('title', 'Edit Todo')

@section('content')

<section>
    <form action="/update/{{$todo->id}}" method="POST">
    @csrf
    @method('put')
        <div class="flex flex-col gap-2">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{$todo->title}}">
            <label for="description">Description</label>
            <input type="text" name="description" value="{{$todo->description}}">
            <x-button type="submit">Update</x-button>
        </div>
    </form>
</section>

@endsection