<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card__header">
                <h1>Регистрация пользователя</h1>
            </div>
            <div class="card__body">
                <form method="post" action="{{url('form')}}">
                @csrf
                    <div class="form-group">
                       
                        <label for="username">Имя</label>
                        <input type="text" id="username" name="username" require="">
                        <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" require="">
                    </div>
                    <button type="submit">Отправить</button>
                </form>
    
            </div>
        </div>
    </div>
</body>
</html>