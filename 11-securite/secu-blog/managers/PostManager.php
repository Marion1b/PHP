<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class PostManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findLatest():array{
        $query = $this->db->prepare(
            "SELECT 
                posts.id,
                posts.title,
                posts.excerpt,
                posts.content,
                posts.author,
                posts.created_at,
                users.username,
                users.email,
                categories.id AS category_id
            FROM posts
            JOIN users ON posts.author = users.id
            JOIN posts_categories ON posts.id = posts_categories.post_id
            JOIN categories ON posts_categories.category_id = categories.id
            LIMIT 4"
        );
        $query->execute();
        $posts = $query->fetchAll((PDO::FETCH_ASSOC));

        $um = new UserManager;
        $cm = new CategoryManager;

        $postsClass = [];
        $tag = 0;
        foreach($posts as $post){
            $user = $um->findByEmail($post["email"]);
            $category = $cm->findOne($post["category_id"]);
            $postsClass[]= new Post($post["title"], $post["excerpt"], $post["content"],$user, $post["created_at"], $category);
            $postsClass[$tag]->setId($post["id"]);
            $tag++;
        }
        return $postsClass;

    }

    public function findOne(int $id):? Post{
        $query=$this->db->prepare(
            "SELECT 
                posts.id,
                posts.title,
                posts.excerpt,
                posts.content,
                posts.author,
                posts.created_at,
                users.username,
                users.email,
                categories.id AS category_id
            FROM posts
            JOIN posts_categories ON posts.id = posts_categories.post_id
            JOIN categories ON posts_categories.category_id = categories.id
            JOIN users ON posts.author = users.id
            WHERE posts.id = :id"
        );
        $parameters=[
            "id"=>$id
        ];
        $query->execute($parameters);

        if($query->rowCount()>=1){
            $post = $query->fetchAll(PDO::FETCH_ASSOC);
            $um = new UserManager;
            $cm = new CategoryManager;
            $user = $um->findByEmail($post[0]["email"]);
            $categories = [];
            foreach($post as $key){
                $categories[] = $cm->findOne($key["category_id"]);
            }
            $postClass = new Post($post[0]["title"], $post[0]["excerpt"], $post[0]["content"], $user, $post[0]["created_at"], $categories);
            $postClass->setId($post[0]["id"]);
            return $postClass;
        }else{
            return null;
        }
        
    }

    public function findByCategory(int $categoryId):? array{
        $query = $this->db->prepare(
            "SELECT 
                posts.id,
                posts.title,
                posts.excerpt,
                posts.content,
                posts.author,
                posts.created_at,
                categories.id AS category_id,
                users.email
            FROM posts
            JOIN posts_categories ON posts.id = posts_categories.post_id
            JOIN categories ON posts_categories.category_id = categories.id
            JOIN users ON posts.author = users.id
            WHERE categories.id = :id"
        );
        $parameters=[
            "id" => $categoryId
        ];
        $query->execute($parameters);

        if($query->rowCount() >=1){
            $posts = $query->fetchAll(PDO::FETCH_ASSOC);
            $postsClass = [];
            $um = new UserManager;
            $cm = new CategoryManager;
            $tag = 0;
            foreach($posts as $post){
                $user = $um->findByEmail($post["email"]);
                $category = $cm->findOne($post["category_id"]);
                $postsClass[]= new Post($post["title"], $post["excerpt"], $post["content"], $user, $post["created_at"], $category);
                $postsClass[$tag]->setId($post["id"]);
                $tag++;
            }
            return $postsClass;
        }
        return null;
    }
}