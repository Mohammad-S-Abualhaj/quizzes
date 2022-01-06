@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Question</h2>
        </div>

    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('question.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quiz select</strong>
                <select name="quiz_id">
                    @foreach ($quiz as $value)
                     <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
             </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="question" class="form-control" placeholder="Title" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Answer(1):</strong>
                <input type="text" name="answer1" class="form-control" placeholder="Answer(1)" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Answer(2):</strong>
                <input type="text" name="answer2" class="form-control" placeholder="Answer(2)" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Answer(3):</strong>
                <input type="text" name="answer3" class="form-control" placeholder="Answer(3)" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Answer(4):</strong>
                <input type="text" name="answer4" class="form-control" placeholder="Answer(4)" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>correct </strong>
                <select name="correct">
                     <option value="0">Answer(1)</option>
                     <option value="1">Answer(2)</option>
                     <option value="2">Answer(3)</option>
                     <option value="3">Answer(4)</option>

                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Add Question</button>
        </div>
    </div>

</form>
@endsection
