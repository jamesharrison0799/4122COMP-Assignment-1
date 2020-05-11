<?php

class Game{
  //Game Properties
  public $id;
  public $name;
  public $price;
  public $rating;
  public $isGotW;
  public $genre;
  public $short_desc;
  public $review;
  public $link;

  //Game methods

  //set Properties
  public function setProps($id,$name,$price,$rating,$isGotW,$genre,$short_desc,$review,$link){
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
    $this->rating = $rating;
    $this->isGotW = $isGotW;
    $this->genre = $genre;
    $this->short_desc = $short_desc;
    $this->review = $review;
    $this->link = $link;
  }


  //is Game of the Year?
  // public function isGotW(){
  //   if ($this->isGotW == "1"){
  //     return true;
  //   }
}
