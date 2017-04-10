<?php
class Books {
    public $booksName;
    public $genre;
    public $author;
    public $yearOfIssue;
    public $resume;
    public $whatIsYourOpinion;
    public $pages;

    public function __construct($_booksName, $_genre, $_author, $_yearOfIssue, $_resume, $_whatIsYourOpinion)
    {
        $this->booksName = $_booksName;
        $this->genre = $_genre;
        $this->author = $_author;
        $this->yearOfIssue = $_yearOfIssue;
        $this->resume = $_resume;
        $this->whatIsYourOpinion = $_whatIsYourOpinion;
        $this->pages = array(
            'page1' => 'Lorem ipsum ....',
            'page2' => 'Lorem ipsum page 2 ...',
            'page3' => 'Lorem ipsum page 3 ...',
            'page4' => 'Lorem ipsum page 4 ...',
            'page5' => 'Lorem ipsum page 5 ...',
        );
    }
    public function turnOnPage($pageIndex) {
        echo $this->pages[$pageIndex];
    }

    public function showBooksInfo () {
        echo "The book: " . $this->booksName. " is " .$this->genre;
        echo " by " . $this->author. "<br/>";
        echo "Year of issue of the book is: " .$this->yearOfIssue . "<br/>";
        echo "A little part of the book: " .$this->resume. "<br/>";
        echo "My opinion: ". $this->whatIsYourOpinion . "<br/>";
    }
}
$annaKarenina = new Books($_POST['booksName'], $_POST['genre'], $_POST['author'], $_POST['yearOfIssue'], $_POST['resume'],$_POST['whatIsYourOpinion']);
$annaKarenina->turnOnPage($_GET['pageIndex']);

$connectionToDatabase = new mysqli('localhost','root', 'xaxanepozna', 'workplace');

if ($connectionToDatabase->connect_error) {
    echo "Connection failed: " . $connectionToDatabase->connect_error;
exit;
} else {
    echo "Connection successfully";
}

$insertQuery = "INSERT INTO  Books (booksName, genre, author, yearOfIssue, Resume, whatIsYourOpinion ) 
VALUE('$annaKarenina->booksName', '$annaKarenina->genre', '$annaKarenina->author', '$annaKarenina->yearOfIssue', '$annaKarenina->resume', '$annaKarenina->whatIsYourOpinion');";

mysqli_query($connectionToDatabase, $insertQuery);
mysqli_close ($connectionToDatabase);


