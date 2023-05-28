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
    
    public function __construct($attribites)
    {
        $this->id = isset($attribites['id']) ? $attribites['id'] : '';
        $this->title = $attribites['title'];
        $this->summary = $attribites['summary'];
        $this->content = $attribites['content'];
        $this->created = isset($attribites['created']) ? $attribites['created'] : '';
        $this->category = $attribites['category'];
        $this->member = $attribites['member'];
        $this->image = $attribites['image'];
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