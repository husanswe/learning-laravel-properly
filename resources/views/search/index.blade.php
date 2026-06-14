<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Search Index file</title>
    </head>

    <body>
        <div>
            <h1>This is Laravel Requests lesson. Task 1. Accessing basic input</h1>

            <form method="POST" action="/search">
                @csrf
                <div>
                    <input type="text" name="name">
                </div>
                <div>
                    <input type="number" name="age">
                </div>
                <button>Search</button>
            </form>
        </div>
    </body>
</html>
