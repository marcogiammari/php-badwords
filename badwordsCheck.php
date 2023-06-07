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
    <?php 
        $text = $_GET["text"];
        $word = $_GET['word'];
    ?>

    <main>
        <h2>Original Text</h1>
        <p><?php echo $text ?></p>

        <h2>Censored Text</h2>
        <p><?php echo str_replace($word, '***', $text)  ?></p>
    </main>
</body>

</html>


