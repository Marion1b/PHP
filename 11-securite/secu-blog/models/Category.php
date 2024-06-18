<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Category
{
    private ? int $id = null;
    public function __construct(
        private string $title,
        private string $description
    )
    {
        
    }

    public function getId():int{
        return $this->id;
    }

    public function setId(int $id):void{
        $this->id = $id;
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
            return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): void
    {
            $this->title = $title;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
            return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(string $description): void
    {
            $this->description = $description;
    }
}