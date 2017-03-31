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
}
$annaKarenina = new Books($_POST['booksName'], $_POST['genre'], $_POST['author'], $_POST['yearOfIssue'], $_POST['resume'],$_POST['whatIsYourOpinion']);

echo "The book: " . $annaKarenina->booksName. " is " .$annaKarenina->genre;
echo " by " . $annaKarenina->author. "<br/>";
echo "Year of issue of the book is: " .$annaKarenina->yearOfIssue . "<br/>";
echo "A little part of the book: " .$annaKarenina->resume. "<br/>";
echo "My opinion: ". $annaKarenina->whatIsYourOpinion . "<br/>";

