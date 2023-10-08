<?php
namespace app\models;



class BookModel{
    protected $name;
    protected $author;
    protected $isbn;
    protected $mysqli;

    public function __construct()
    {
        require_once(__DIR__ . '/../../config/db.php');
        $this->mysqli = $mysqli;
    }

    // Get Methods

    public function getName(){
        return $this->name;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getISBN(){
        return $this->isbn;
    }

    // Set Methods

    public function setName(string $name){
        $this->name = $name;
    }

    public function setAuthor(string $author){
        $this->author = $author;
    }

    public function setISBN(int $isbn){
        $this->isbn = $isbn;
    }

    // CRUD OPs

    public function create(){
        // Prepare the SQL statement
        $sql = "INSERT INTO books (name, author, isbn) VALUES (?, ?, ?)";

        // Create a prepared statement
        $stmt = $this->mysqli->prepare($sql);

        // Bind parameters
        $stmt->bind_param("ssi", $this->name, $this->author, $this->isbn);

        // Execute the statement
        if($stmt->execute()){
            // Successful insertion
            echo "Book added successfully!";
        } else {
            // Error handling for insertion failure
            echo "Error: " . $stmt->error;
        }

        // Close the statement and database connection
        $stmt->close();
        $this->mysqli->close();
    }

    public function read(int $isbn){
        // Prepare the SQL statement
        $sql = "SELECT * FROM books WHERE isbn = ?";

        // Create a prepared statement
        $stmt = $this->mysqli->prepare($sql);

        // Bind the ISBN parameter
        $stmt->bind_param("i", $isbn);

        // Execute the statement
        $stmt->execute();

        // Bind result variables
        $id = $name = $author = $isbn = NULL;
        $stmt->bind_result($id, $name, $author, $isbn);

        // Fetch the result
        if ($stmt->fetch()) {
            // You can store the fetched values in class properties or return them as needed
            $this->name = $name;
            $this->author = $author;
            $this->isbn = $isbn;
        } else {
            // ISBN not found in the database
            echo "Book not found!";
        }

        // Close the statement and database connection
        $stmt->close();
        $this->mysqli->close();
    }
}