<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Library</title>
</head>
<body>
    <section class="container w-50 justify-content-md-center mt-5">
        <h3 class="mb-3">Welcome to e-library</h3>

        <!-- Add a Book  -->
        <h4 class="mt-5">Add a Book</h4>
        <form action="index.php" method="POST" class="form-group">
            <label for="name-add">Enter Book Name</label>
            <input type="text" name="name-add" id="name-add" class="form-control" placeholder="ex: Harry Potter">
            <label for="author-add">Enter Author Name</label>
            <input type="text" name="author-add" id="author-add" class="form-control" placeholder="ex: J. K. Rowling">
            <label for="isbn-add">Enter Book ISBN Number</label>
            <input type="text" name="isbn-add" id="isbn-add" class="form-control" placeholder="ex: 2101510">
            <button type="submit" class="btn btn-primary mt-3" name="add-book">Add the Book</button>
        </form>

        <!-- Find a Book  -->
        <h4 class="mt-5">Find a Book</h4>
        <form action="index.php" method="POST" class="form-group">
            <label for="isbn-find">Enter Book ISBN Number</label>
            <input type="text" name="isbn-find" id="isbn-find" class="form-control" placeholder="ex: 2101510">
            <button type="submit" class="btn btn-primary mt-3" name="find-book">Find the Book</button>
        </form>
    <section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>