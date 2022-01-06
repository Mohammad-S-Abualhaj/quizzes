@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Question</h2>
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
            <th>Title</th>
            <th>Answer(1)</th>
            <th>Answer(2)</th>
            <th>Answer(3)</th>
            <th>Answer(4)</th>
            <th>correct</th>
            <th></th>


        </tr>
        @foreach ($question as $value)
        <tr>
            <td>{{ $value->id}}</td>
            <td>{{ $value->question }}</td>
            <td>{{ substr($value->answer1,0,30) }}</td>
            <td>{{ substr($value->answer2,0,30) }}</td>
            <td>{{ substr($value->answer3,0,30) }}</td>
            <td>{{ substr($value->answer4,0,30) }}</td>
            <td>{{ $value->correct}}</td>

            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('question.edit',$value->id) }}">Edit</a>
                <form action="{{ route('question.destroy',$value->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
