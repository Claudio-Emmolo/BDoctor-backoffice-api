@extends('layouts.app')
@section('content')
<div class="container mt-4 pt-4 bg-white border rounded-4">

    <div class="card rounded-4">
        <table class="table">
            <thead class="table">
                <tr>
                    
                    <th scope="col">Name</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Content</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                    
                    <td>{{$message->name}}</td>
                    <td>{{$message->lastname}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->content}}</td>
                    <td>
                        <form action="{{route('messages.destroy', $message->id)}}" method="post" class="d-inline-block form-deleter pt-3">
                            @csrf
                            @method('DELETE')
                            
                            <button type="submit" class="btn btn-danger"> Delete </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <button  class="btn btn-primary doc-btn my-3 me-auto">
        <a href="{{route('dashboard')}}" class="text-white text-decoration-none">Dashboard</a>
    </button>        
</div>
@endsection    



