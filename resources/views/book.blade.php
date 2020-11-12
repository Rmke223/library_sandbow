<html>

<head>
    <title>Books</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d59df2d2d1.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mx-auto mt-4">
        <div class="row text-center">
            <div class="col-6 border mx-auto">
                <h1 class="border">All books     <a href="/books/create"><i class="far fa-plus-square text-success"></i></a></h1>
                <div class="overflow-auto" style="height: 300px">
                @foreach ($book as $book)
                <h3>{{$book->title}}     <a href="/books/{{$book->id}}/edit"><i class="far fa-edit"></i></a></h3>
                <p>{{$book->author}}-({{$book->genre}})</p>
                @if($book->checked == 0)
                    <p class="text-success">Available</p>
                @else 
                <p class="text-danger">Checked out</p>
                @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

</html>