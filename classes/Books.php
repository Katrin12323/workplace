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