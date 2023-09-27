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
    </header>
    <div>
    <h1>ひとこと掲示板</h1>
      <form action="/" method="POST">
        @csrf
        <label for="word">ひとこと</label>
        <input type="input" id="word" name="word" />
        <input type="submit" value="投稿" />
      </form>
      <hr/>
      @foreach($one_words as $one_word)
        <p>ID:{{ $one_word->id }}</p> 
        <p>{{ $one_word->word }}</p>
        <p>{{ $one_word->converted_created_at }}</p> 
      @endforeach
    </div>
    <footer>
    </footer>
  </div>
</body>
</html>