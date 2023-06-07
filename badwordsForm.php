<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Bad Words</h1>
        <form action="badwordsCheck.php" method="$_GET">
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
            <div>
                <label for="word">Word to replace</label>
                <input type="text" name="word" id="word">
                <button type="submit">SUBMIT</button>
            </div>
            <button type="submit">REPLACE ENGLISH BADWORDS</button>
        </form>        
    </main>
</body>

</html>

