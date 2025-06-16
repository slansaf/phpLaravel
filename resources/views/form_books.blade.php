<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="add-books__form-wrapper">
        @if (session('success'))
            <div>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <form name="add-new-book" id="add-new-book" action="{{Route('store_books')}}" method="POST">
            @csrf
            <div class="form-section">
                <label for="title">Tatle</label>
                <input type="text" id="title" name="title" class="form-control" required maxlength="255">
            </div>
            <div class="form-section">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" class="form-control" required maxlength="100">
            </div>
             <div class="form-section">
                <label for="genre">Choose Genre:</label>
                <select name="genre" id="genre" required>
                    <option value="fantasy">Fantasy</option>
                    <option value="sci-fi">Sci-Fi</option>
                    <option value="mystery">Mystery</option>
                    <option value="drama">Drama</option>
                </select>
            </div>
            <input type="submit" value="Добавить книгу">
        </form>

       <h2>Список книг</h2>
        <table border="1">
        <thead>
            <tr>
                <th>Название</th>
                <th>Автор</th>
                <th>Жанр</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->genre }}</td>
                </tr>
            @endforeach
        </tbody>
        </table>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>