<?php
class Books{
    public $booksName;
    public $genre;
    public $author;
    public $yearOfIssue;
    public $resume;
    public $whatIsYourOpinion;

    public function __construct($_booksName, $_genre, $_author, $_yearOfIssue, $_resume, $_whatIsYourOpinion)
    {
        $this->booksName = "$_booksName";
        $this->genre = "$_genre";
        $this->author = "$_author";
        $this->yearOfIssue = "$_yearOfIssue";
        $this->resume = "$_resume";
        $this->whatIsYourOpinion = "$_whatIsYourOpinion";
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
$annaKarenina->showBooksInfo();


