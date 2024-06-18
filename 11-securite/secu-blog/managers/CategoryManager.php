<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CategoryManager extends AbstractManager
{
    public function __construct()
    {   
        parent::__construct();
    }

    public function findAll():array{
        $query = $this->db->prepare(
            "SELECT *
            FROM categories"
        );
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        $categoriesClass = [];
        $tag = 0;
        foreach($categories as $category){
            $categoriesClass[]= new Category($category["title"], $category["description"]);
            $categoriesClass[$tag]->setId($category["id"]);
            $tag++;
        }
        return $categoriesClass;
    }

    public function findOne(int $id):? Category{
        $query=$this->db->prepare(
            "SELECT *
            FROM categories
            WHERE id = :id"
        );

        $parameters = [
            "id"=>$id
        ];

        $query->execute($parameters);

        if($query->rowCount()===1){
            $category= $query->fetch(PDO::FETCH_ASSOC);
            $categoryClass = new Category($category["title"], $category["description"]);
            $categoryClass->setId($category["id"]);
            return $categoryClass;
        }else{
            return null;
        }
    }
}