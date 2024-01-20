@extends('layout.main')
@section('title', 'Home Page')

@section('content')

<section>
    <x-title>Home</x-title>
    <a href="/create">Add Todo</a>
    <div class="shadow-sm shadow-slate-500 px-2 py-4 rounded-xl flex flex-col gap-2">
        @foreach ($todos as $todo)
        <div class="flex justify-between">
            <div>
                <p> {{$todo->title}} </p> 
                <p class="text-slate-500">{{$todo->description}}</p>
            </div>
            <div class="flex gap-2">
                <a href="/edit/{{$todo->id}}">Edit</a>
                <form action="/delete/{{$todo->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
        @endforeach 
    </div>
</section>

@endsection

