<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Post
{
    private ? int $id = null;
    public function __construct(
        private string $title,
        private string $excerpt,
        private string $content, 
        private User $author,
        private string $created_at,
        private array|Category $category
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
     * Get the value of excerpt
     */
    public function getExcerpt(): string
    {
            return $this->excerpt;
    }

    /**
     * Set the value of excerpt
     */
    public function setExcerpt(string $excerpt): void
    {
            $this->excerpt = $excerpt;
    }

    /**
     * Get the value of content
     */
    public function getContent(): string
    {
            return $this->content;
    }

    /**
     * Set the value of content
     */
    public function setContent(string $content): void
    {
            $this->content = $content;
    }

    /**
     * Get the value of author
     */
    public function getAuthor(): User
    {
            return $this->author;
    }

    /**
     * Set the value of author
     */
    public function setAuthor(User $author): void
    {
            $this->author = $author;
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt(): string
    {
            return $this->created_at;
    }

    /**
     * Set the value of created_at
     */
    public function setCreatedAt(string $created_at): void
    {
            $this->created_at = $created_at;
    }

        /**
         * Get the value of category
         */
        public function getCategory(): array|Category
        {
                return $this->category;
        }

        /**
         * Set the value of category
         */
        public function setCategory(Category $category): void
        {
                $this->category = $category;
        }
}