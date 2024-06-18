<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class BlogController extends AbstractController
{
    public function home() : void
    {
        $this->render("home", []);
    }

    public function category(string $categoryId) : void
    {
        // si la catégorie existe
        $cm = new CategoryManager;
        if($cm->findOne($categoryId)!==null){
            $this->render("category", []);
        }else{
            $this->redirect("index.php");
        }
    }

    public function post(string $postId) : void
    {
        // si le post existe
        $pm = new PostManager;
        if($pm->findOne($postId)!==null){
            $this->render("post", []);
        }else{
            $this->redirect("index.php");
        }
        
    }

    public function checkComment() : void
    {
        $this->redirect("index.php?route=post&post_id={$_POST["post_id"]}");
    }

    public function displayPostsHome():void{
        $pm = new PostManager;
        $latestPosts = $pm->findLatest();
        foreach($latestPosts as $post){
            $postTitle = $post->getTitle();
            $categoryName = $post->getCategory()->getTitle();
            $postExcerpt = $post->getExcerpt();
            $postId = $post->getId();
            echo '
            <li class="col-4 my-2">
            <article class="card">
                <header class="card-body">
                    <h3 class="h5 card-title">' . $postTitle .'</h3>
                    <h4 class="h6 card-subtitle mb-2 text-body-secondary">'. $categoryName .'</h4>
                </header>
                <section class="card-body">
                    <p class="card-text">' . $postExcerpt . '</p>
                    <a href="index.php?route=post&post_id='.$postId.'" class="btn btn-primary">Post Link</a>
                </section>
            </article>
        </li>

            ';
        }
    }

    public function navCategory():void{
        $cm = new CategoryManager;
        $categories = $cm->findAll();
        foreach($categories as $category){
            $name = $category->getTitle();
            $id=$category->getId();
            echo'
            <li><a class="dropdown-item" href="index.php?route=category&category_id='.$id.'">'.$name.'</a></li>
            ';
        }
    }

    public function displayCategoryPosts():void{

        $pm = new PostManager;
        $posts = $pm->findByCategory($_GET["category_id"]);

        foreach($posts as $post){
            $title = $post->getTitle();
            $excerpt = $post->getExcerpt();
            $id = $post->getId();
            echo'
            <li class="col-4 my-2">
                <article class="card">
                    <header class="card-body">
                        <h3 class="h5 card-title">'.$title.'</h3>
                    </header>
                    <section class="card-body">
                        <p class="card-text">'.$excerpt.'</p>
                        <a href="index.php?route=post&post_id='.$id.'" class="btn btn-primary">Post Link</a>
                    </section>
                </article>
            </li>
            ';
        }
    }
}