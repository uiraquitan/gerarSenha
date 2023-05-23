<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senha</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body>
    <main>
       
        <header>
            <h1>Gerador de senha</h1>
        </header>
        <article action="">
            <div class="article-control">
                <div class="article-group">
                    <input type="text" name="senha">
                </div>
                <select name="quantity" id="quantity" class="quantity">
                    <option value="4">4 Caracteres </option>
                    <option value="10">10 Caracteres </option>
                    <option value="14">14 Caracteres </option>
                    <option value="18">18 Caracteres </option>
                </select>
                <button id="gerar" type="submit">Gerar</button>
            </div>
        </article>
        <div class="show_password">
            <a href="#" id="copy" title="">Copy</a>
        </div>
    </main>
    <script src="./assets/js/script.js"></script>
</body>

</html>