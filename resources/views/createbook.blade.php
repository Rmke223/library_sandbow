<!doctype html>
<html lang="en">

<head>
    <title>Create Book</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d59df2d2d1.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mx-auto text-center">
        <h1>Add New Book</h1>
        <form method="POST" action="/books">
        @csrf
            <div class="field">
                <label class="label" for="title">Enter Title</label>
                <div class="control">
                    <input class="input text-center" type="text" name="title" placeholder="EX. Mody Dick" id="title">
                    @if($errors->has('title'))
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                    @endif
                </div>
            </div>
            <div class="field text-center">
                <label class="label" for="author">Enter Author</label>
                <div class="control">
                    <input class="input text-center" type="text" name="author" placeholder="EX. Austin Carson" id="author">
                    @if($errors->has('author'))
                    <p class="text-danger">{{ $errors->first('author') }}</p>
                    @endif
                </div>
            </div>
            <div class="field">
                <label class="label" for="genre">Enter Genre</label>
                <div class="control">
                    <input class="input text-center" type="text" name="genre" placeholder="EX. Comedy" id="genre">
                    @if($errors->has('genre'))
                    <p class="text-danger">{{ $errors->first('genre') }}</p>
                    @endif
                </div>
            </div>
            <div class="field is-grouped">
            <div class="control">
                <button class="button is-link mt-4 mb-4 btn btn-primary" type="submit">Add Book</button>
            </div>
        </div>
        </form>
        <a href="/books"><i class="fas fa-undo-alt text-danger"></i></a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>