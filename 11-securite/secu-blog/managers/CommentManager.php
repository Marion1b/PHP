<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CommentManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findByPost(int $postId):? array{
        $query = $this->db->prepare(
            "SELECT 
                comments.id,
                comments.content,
                comments.user_id,
                comments.post_id,
                users.email,
                posts.id AS postId
            FROM comments
            JOIN users ON comments.user_id = users.id
            JOIN posts ON comments.post_id = posts.id
            WHERE posts.id = :id"
        );
        $parameters = [
            "id"=>$postId
        ];
        $query->execute($parameters);
        if($query->rowCount()>=1){
            $comments = $query->fetchAll(PDO::FETCH_ASSOC);
            $commentsClass = [];
            $um = new UserManager;
            $pm = new PostManager;
            $tag=0;
            foreach($comments as $comment){
                $user = $um->findByEmail($comment["email"]);
                $post = $pm->findOne($comment["postId"]);
                $commentsClass[]= new Comment($comment["content"], $user, $post);
                $commentsClass[$tag]->setId($comment["id"]);
                $tag++;
            }
            return $commentsClass;
        }else{
            return null;
        }
    }

    public function create(Comment $comment):void{
        $query=$this->db->prepare(
            "INSERT INTO
                comments(
                    content,
                    user_id,
                    post_id
                )VALUES(
                    :content,
                    :user_id,
                    :post_id
                )"
        );
        $parameters = [
            'content' => $comment->getContent(),
            'user_id' => $comment->getUser()->getId(),
            'post_id' => $comment->getPost()->getId()
        ];
        $query->execute($parameters);
    }
}