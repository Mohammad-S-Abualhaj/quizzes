@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD with Image</h2>
            </div>

        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Title</th>
            <th>description</th>
            <th>Actions</th>
        </tr>
        @foreach ($quiz as $quizz)
        <tr>
            <td>{{ $quizz->id}}</td>
            <td><img src="/uploads/{{ $quizz->image }}" width="100px"></td>
            <td>{{ $quizz->name }}</td>
            <td>{{ substr($quizz->description,0,200) }}</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{route('quiz.edit',$quizz->id) }}">Edit</a>
                <form action="{{ route('quiz.destroy',$quizz->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection