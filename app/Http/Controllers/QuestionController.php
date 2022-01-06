<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;


class QuestionController extends Controller
{

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $question = Question::latest()->get();
            return view('admin.question.index',compact('question')) ;
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $quiz = Quiz::latest()->get();
            return view('admin.question.Create',compact('quiz'));
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $request->validate([
                'quiz_id' => 'required',
                'question' => 'required',
                'answer1' => 'required',
                'answer2' => 'required',
                'answer3' => 'required',
                'answer4' => 'required',
                'correct' => 'required',
            ]);
            Question::create($request->all());
            return redirect()->route('admin.question.index')->with('success','Question created successfully.');
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(Question $Question)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit(Question $Question)
        {
            return view('admin.question.edit',compact('Question'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Question $Question)
        {
            $request->validate([
                'question' => 'required',
                'answer1' => 'required',
                'answer5' => 'required',
                'answer3' => 'required',
                'answer4' => 'required',
                'correct' => 'required',
            ]);
            $Question->update($request->all());
            return redirect()->back()->with('message', 'Success Question updated ....');
        }
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(Question $Question)
        {
            $Question->delete();
            return redirect()->back()->with('success','Post deleted successfully');
        }
    }

