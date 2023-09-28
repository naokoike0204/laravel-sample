<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\OneWord;
use Illuminate\Support\Facades\Auth;

class OneWordsController extends Controller
{
    //
    public function index(): View
    {


        if (Auth::check()) {
            $one_words = OneWord::where('user_id','=',Auth::user()->id)->get();
        }else{
            $one_words = [];
        }

      return view('one_words.index', [
          "one_words" => $one_words
      ]);
    }

    public function store(Request $request){
        $one_word = new OneWord;
        $one_word->word = $request->word;
        $one_word->user_id = Auth::user()->id;
        $one_word->save();

        return redirect('/');

    }

    public function edit($one_word_id)
    {

        $one_word = OneWord::where('id','=',$one_word_id)->first();
        return view('one_words.edit', [
            'one_word' => $one_word
        ]);
    }

    public function update($one_word_id, Request $request)
    {
      $one_word = OneWord::where('id','=',$one_word_id)->first();
      $one_word->word = $request->word;
      $one_word->save();

      return redirect('/');
    }
}
