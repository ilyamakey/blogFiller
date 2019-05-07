<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create record</title>
</head>
<body>
<h1>Here you can create a record:</h1>
<form method="POST" action="/records">
    @csrf
    <div>
        <input type="text" name="article" placeholder="Article name">
    </div>
    <div>
        <textarea name="content" placeholder="Leave your text here"></textarea>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
</body>
</html>