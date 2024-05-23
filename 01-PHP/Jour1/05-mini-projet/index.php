<?php
    $students = [
        [
            "firstName" => "James",
            "lastName" => "Fields",
            "grades" => [12, 11, 15],
            "average" => -1
        ],
        [
            "firstName" => "Richard",
            "lastName" => "Stein",
            "grades" => [18, 12, 13],
            "average" => -1
        ],
        [
            "firstName" => "Mark",
            "lastName" => "Hartoff",
            "grades" => [9, 11, 10],
            "average" => -1
        ],
        [
            "firstName" => "Thomas",
            "lastName" => "Nestle",
            "grades" => [9, 8, 5],
            "average" => -1
        ],
        [
            "firstName" => "Jeremy",
            "lastName" => "Brent",
            "grades" => [18, 15, 16],
            "average" => -1
        ]
    ];

    function average(array $tag){
        $count = 0;
        foreach($tag["grades"] as $note){
            $count += $note;
        }
        $student["average"] = $count / count($tag["grades"]);
        return $count / count($tag["grades"]);
    }

    function showNotes(array $tag){
        return "<header>
                <h1>" . $tag["firstName"] . " ". $tag["lastName"] . "</h1>
            </header>
            <section>
                <h2>Notes : </h2>
                <ul> 
                    <li>" . $tag["grades"][0] . "</li>
                    <li>" . $tag["grades"][1] . "</li>
                    <li>" . $tag["grades"][2] . "</li>
                </ul>
            </section>
            <footer>
                <h3>" . average($tag) ."</h3>
            </footer>";
    }

    function isGood(array $array){
        foreach($array as $tag){
            if(average($tag)<10){
                echo "<article class='red'>" . 
                showNotes($tag)
                . "</article>";
            }else if(average($tag)>=10 && average($tag)<=13){
                echo "<article class='orange'>" . 
                showNotes($tag) . 
                "</article>";
            }else if(average($tag)>13){
                echo "<article class='green'>" .
                showNotes($tag) .
                "</article>";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .orange{
        background: orange;
    }
    .red{
        background-color: red;
    }
    .green{
        background-color: green;
    }
    article{
        margin: 20px;
        border-radius: 20px;
    }
</style>
<body>
        <?php isGood($students)?>
</body>
</html>
