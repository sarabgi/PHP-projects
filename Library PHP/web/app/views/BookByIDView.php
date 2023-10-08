<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Find Book</title>
</head>
<body>
    <section class="container w-50 justify-content-md-center mt-5">
        <h1><?php echo $book->getName() !== NULL ? "Result Found" : "Result Not Found"; ?></h1>
        <?php echo $book->getName() !== NULL ? 
            "<ul>
                <li>ISBN: ". $book->getISBN() . "</li>
                <li>Book Name: " . $book->getName() . "</li>
                <li>Author's Name: " .$book->getAuthor() . "</li>
            </ul>"
        : 
            "Try another ISBN number!"; 
        ?>
        
    <section>
    <a href=<?php __DIR__ . "/../../public/index.php" ?>>Main Page</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>