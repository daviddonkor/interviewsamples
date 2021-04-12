<?php
/**
 * BookShell Class
 * Designed by David Siaw Donkor
 * Email: donkorsiawdavid@gmail.com
 * Tel: +233554401351
 */

class Bookshelf
{
    private $capacity;
    private $storeditems;
    /**
     * Access   Public
     * @param   $capacity number of total books the shelf can take
     */
    public function __construct($capacity)
    {
        try{
            $this->capacity=(int) $capacity;
        }catch(Exception $e){
            throw Exception("Capacity must be an integer");
        }
        $this->storeditems=0;
        
    }

    /**
     * This helps us to store an item in our class
     * @return bool indicating whether item was stored successfully or not.
     */

    public function storeItem($item):bool
    {   
        $this->storeditems++;

        return true;
    }

    /**
     * Remove an item from the shelve. This will return an item but since item is not currently created we are using bool as a return type
     * @return bool indicating whether item was retrieved successfully or not.
     */
    public function retrieveItem(Item $item):Item
    {
       
        $this->storeditems--;
       return $item;
       
    }

    /**
     * Gets the number of slots for adding more books
     * @return int
     */
    public function getStatus():int
    {
        return $this->capacity-$this->storeditems;
    }

    /**
     * Gets the number of items that have been stored
     * @return int
     */
    public function getStoreCount()
    {
        return $this->storeditems;
    }

}


 /**
     * Defines an item in th bookshell
     */
abstract class Item{
   abstract public function read($pageid):String;
}


//Book Class for creating books
class Book extends Item
{
    private $title;
    private $author;
    public function __construct()
    {
        $this->title="";
        $this->author="";
    }
    public function read($pagenumber):String
    {
        
        return "Txt from the given book pageid";
    }

    public function getTitle()
    {
       
            return $this->title;
        
    }

    public function getAuthor()
    {
       
            return $this->author;
       
    }

    public function setTitle($title)
    {
        $this->title=$title;
    }

    public function setAuthor($author)
    {
        $this->author=$author;
    }
}



//Magazine Class

class Magazine extends Item
{
    private $name;
    /**
     * @param $pagenumber to retrieve text
     * @return String
     */
    public function __construct()
    {
        $this->name="";
    }
 public function read($pagenumber):String
    {
        
        return "Txt from the given Magazine page id";
    }

    /**
     * @return String
     */
    public function getName():string
    {
         
            return $this->name;
      
    }

    /**
     * @param name
     * @return void
     */
    public function setName($name)
    {
        $this->name=$name;
    }

}



//Notebook Class 
class Notebook extends Item
{
    private $owner;
    /**
     * @param $pagenumber to retrieve text
     * @return String
     */
    public function __construct()
    {
        $this->owner="";
    }
 public function read($pagenumber):String
    {
        
        return "Txt from the given Notebook page id";
    }

    /**
     * @return String
     */
    public function getOwner():string
    {
         
            return $this->owner;
      
    }

    /**
     * @param owner
     * @return void
     */
    public function setOwner($owner)
    {
        $this->owner=$owner;
    }
}


// $bookshelf=new BookShelf(50);
// //echo $bookshelf->getStatus();
// //echo $bookshelf->getStoreCount();
// $bookshelf->storeItem(new Book());
// $bookshelf->storeItem(new Book());
// echo $bookshelf->getStoreCount();
// $bookshelf->retrieveItem(new Magazine());
// echo $bookshelf->getStoreCount();