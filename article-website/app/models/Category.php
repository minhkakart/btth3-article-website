<?php
class Category{
    private $id;
    private $name;
    private $description;
    private $navigation;
    public function __construct($attributes)
    {
        $this->id = isset($attributes['id']) ? $attributes['id'] : '';
        $this->name = $attributes['name'];
        $this->description = $attributes['description'];
        $this->navigation = isset($attributes['navigation']) ? 1 : 0;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getNavigation()
    {
        return $this->navigation;
    }
}