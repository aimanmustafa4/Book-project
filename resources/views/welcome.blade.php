<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Welcome to book store</h1>
    @if($books -> isNotEmpty())

    <ol>
        @foreach ($books as $book)
        <li>
            Book name: {{$book -> Book_name ,}}
            <br>
            Author name:{{$book -> Author}}
            <br>
            Book Review: {{$book -> Book_review}}
            <br>
            Price : ${{$book -> price}}
        </li>

        @endforeach
    </ol>

    @else
    <div>no books to show and buy</div>
    @endif
</body>
</html>
