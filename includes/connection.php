<?php

class Entry {
private $article_id;
private $article_title;
private $article_content;
private $auther;
private $article_timestamp;

function __construct()
{
    $this->dbh = new PDO('mysql:host=localhost;dbname=projectdb','root','');
}

function createNew()
{
    $this->setByParams( -1,$article_title, $article_content, $auther, date("d.m.Y h:m", $auther));
}

function createNewFromPOST($post){
    $this->createNew (
        $post['article_id'],
        $post['article_title'],
        $post['article_content'],
        $post['auther'],
        $post['article_timestamp']
    );
}

function setByParams($article_id,$article_title, $article_content, $auther, $article_timestamp){
    $this->article_id = $article_id;
    $this->article_title = $article_title;
    $this->article_content = $article_content;
    $this->auther = $auther;
    $this->article_timestamp = $article_timestamp;
    
}

public function setByRow(){
    $this->setByParams (
        $row['article_id'],
        $row['article_title'],
        $row['article_content'],
        $row['auther'],
        $row['article_timestamp']
    );
}
public function SqlInsertEntry(){
    $query = "
    INSERT INTO article (article_id, article_title, article_content,
    auther, article_timestamp)
    VALUES( 
        :article_id , :article_title , :article_content , :auther , :article_timestamp
    )";

    $stmt = $this->dbh->prepare($query);
}
public function SqlSelectEntryById($article_id){

}
public function SqlUpdateEntryById($article_id){

}
private function ValidateString(){

}

public function getId()
{

    return $this->article_id;
}

public function setId()
{
    $this->article_id = $article_id;
}

public function getTitle()
{

    return $this->article_title;
}

public function setTitle()
{
    $this->article_title = $article_title;
}

public function getContent()
{

    return $this->article_content;
}

public function setContent()
{
    $this->article_content = $article_content;
}
public function getAuther()
{

    return $this->auther;
}

public function setAuther()
{
    $this->auther = $auther;
}
public function getTimeStamp()
{

    return $this->article_timestamp;
}

// @return self;

public function setTimeStamp()
{
    $this->article_timestamp = $article_timestamp;

    return $this;
}



}


?>