<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\OneWord;

class OneWordsController extends Controller
{
    //
    public function index(): View
    {
        $one_words = OneWord::all();

      return view('one_words.index', [
          "one_words" => $one_words
      ]);
    }

    public function store(Request $request){
        $one_word = new OneWord;
        $one_word->word = $request->word;
        $one_word->save();

        return redirect('/');

    }
}