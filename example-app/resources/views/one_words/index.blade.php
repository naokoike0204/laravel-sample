<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OneWords|ひとこと作成</title>
</head>
<body>
  <div>
    <header>
    @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </header>
    <div>
    <h1>ひとこと掲示板</h1>
    @if (Auth::check())
      <form action="/" method="POST">
        @csrf
        <label for="word">ひとこと</label>
        <input type="input" id="word" name="word" />
        <input type="submit" value="投稿" />
      </form>
      @endif
      <hr/>
      @foreach($one_words as $one_word)
        <p>ID:{{ $one_word->id }}</p>
        <p>{{ $one_word->word }}</p>
        {{ $one_word->converted_created_at }}
        <a href="{{ route('edit', ['one_word_id' => $one_word->id ]) }}">編集</a>
        <form action="{{ route('delete', ['one_word_id' => $one_word->id ]) }}" method="POST" id="form2" name="form2">
        @csrf
        <a href="javascript:void(0)" onClick="confirmFunction1()">削除</a>
        </form>
        @endforeach
    </div>
    <footer>
    </footer>
  </div>
  <script>
    function confirmFunction1() {
    //ret変数に確認ダイアログの結果を代入する。
    ret = confirm("本当に削除しますか？");
    //確認ダイアログの結果がOKの場合外部リンクを開く
    if (ret == true){
        document.form2.submit();
    }
    }
    </script>
</body>
</html>
