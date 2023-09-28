
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OneWords|ひとこと編集</title>
</head>
<body>
  <div>
    <header>
    </header>
    <div>
      <h1>ひとこと掲示板</h1>
      <form action="{{ route('edit', ['one_word_id' => $one_word->id]) }}" method="POST">
        @csrf
        <label for="word">ひとこと</label>
        <input type="text" id="word" name="word" value="{{ $one_word->word }}" />
        <input type="submit" value="更新" />
      </form>
      <a href="/">戻る</a>
    </div>
    <footer>
    </footer>
  </div>
</body>
</html>