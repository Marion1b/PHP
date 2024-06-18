<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Comment
{
    private ? int $id;
    public function __construct(
        private string $content, 
        private User $user,
        private Post $post
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
     * Get the value of user
     */
    public function getUser(): User
    {
            return $this->user;
    }

    /**
     * Set the value of user
     */
    public function setUser(User $user): void
    {
            $this->user = $user;
    }

    /**
     * Get the value of post
     */
    public function getPost(): Post
    {
            return $this->post;
    }

    /**
     * Set the value of post
     */
    public function setPost(Post $post): void
    {
            $this->post = $post;
    }
}