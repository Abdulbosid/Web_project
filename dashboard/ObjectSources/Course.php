<?php

 require_once("Group.php");
 require_once("Instructor.php");

class Course
{
  private $title;
  private $length;
  private $ageLimit;
  private $price;
  private $description;
  private $image;


  private $courseId;
  private $assignments = array();



  public function __construct($courseId, $title, $length, $price, $ageLimit = null, $assignments = null, $description = "", $image = null)
  {
     $this->setAgeLimit($ageLimit);
     $this->setCourseId($courseId);
     $this->setLength($length);
     $this->setTitle($title);
     $this->setAgeLimit($ageLimit);
     $this->setDescription($description);
     $this->setImage($image);

     if ($assignments != null)
         $this->setAssignments($assignments);

  }

  public function getTitle()
  {
        return $this->title;
  }

  public function setTitle($title)
  {
      $this->title = $title;
  }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getAgeLimit()
    {
        return $this->ageLimit;
    }

    /**
     * @param mixed $ageLimit
     */
    public function setAgeLimit($ageLimit)
    {
        $this->ageLimit = $ageLimit;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $courseId
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;
    }

    /**
     * @return mixed
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * @param array $assignments
     */
    public function setAssignments($assignments)
    {
        $this->assignments = $assignments;
    }

    /**
     * @return array
     */
    public function getAssignments()
    {
        return $this->assignments;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

}
 ?>
