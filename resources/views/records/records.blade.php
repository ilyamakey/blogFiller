<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All records</title>
</head>
<body>

<section style="display: flex;flex-direction: column;max-width: 400px;">
    @foreach ($records as $record)
        <div style="margin-bottom: 10px;padding: 10px 15px;border: 2px solid gainsboro; border-radius: 5px">
            <h4>{{$record->article}}</h4>
            <p>{{$record->content}}</p>
        </div>
    @endforeach
</section>


</body>
</html>