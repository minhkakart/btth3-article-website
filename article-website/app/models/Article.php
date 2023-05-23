<?php
class Article{
    private $id;
    private $title;
    private $summary;
    private $content;
    private $created;
    private $category;
    private $member;
    private $image;
    
    public function __construct($id, $title, $summary, $content, $created, $category, $member, $image)
    {
        $this->id = $id;
        $this->title = $title;
        $this->summary = $summary;
        $this->content = $content;
        $this->created = $created;
        $this->category = $category;
        $this->member = $member;
        $this->image = $image;
    }
    
    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getSummary()
    {
        return $this->summary;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function getCreated()
    {
        return $this->created;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function getMember()
    {
        return $this->member;
    }
    public function getImage()
    {
        return $this->image;
    }

}