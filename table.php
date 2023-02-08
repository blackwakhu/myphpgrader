<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baldwin University : Table Anaylsis</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php include "header.html" ?>
    <div class="content">    
        <?php 
            class MyStudent{
                public $student;
                public $age;
                public $math;
                public $socialstudies;
                public $science;
                public $languages;
                public $creativearts;
                public $religous;
                function __construct($student, $age, $math, $socialstudies, $science, $languages, $creativearts, $religous){
                    $this->student = $student;
                    $this->age = $age;
                    $this->math = $math;
                    $this->socialstudies = $socialstudies;
                    $this->science = $science;
                    $this->languages = $languages;
                    $this->creativearts = $creativearts;
                    $this->religous = $religous;
                }
                function gettotal(){
                    $total = $this->math + $this->socialstudies + $this->science + $this->languages + $this->creativearts + $this->religous;
                    return $total;
                }
                function getAverage(){
                    $total = $this->gettotal();
                    return $total / 6;
                }
                function getGrade(){
                    $average = $this->getAverage();
                    if ($average > 80){
                        return "A";
                    }elseif ($average > 70){
                        return "B";
                    }elseif ($average > 60){
                        return "C";
                    }elseif ($average > 50){
                        return "D";
                    }elseif ($average > 40){
                        return "E";
                    }elseif ($average > 30){
                        return "F";
                    }else{
                        return "Fail";
                    }
                }
                function getSubjects(){
                    return array($this->math, $this->socialstudies, $this->science, $this->languages, $this->creativearts, $this->religous);
                }
                function getMinMark(){
                    $lowest = 100;
                    $subjects = $this->getSubjects();
                    $i = 0;
                    while($i < 6){
                        if ($lowest > $subjects[$i]){
                            $lowest = $subjects[$i];
                        }
                        $i = $i + 1;
                    }
                    return $lowest;
                }
                function getMaxMark(){
                    $highest = 0;
                    $subjects = $this->getSubjects();
                    $i = 0;
                    while($i < 6){
                        if ($highest < $subjects[$i]){
                            $highest = $subjects[$i];
                        }
                        $i = $i + 1;
                    }
                    return $highest;
                }
                function subjectScore(){
                    return array($this->math=>"Math", $this->socialstudies=>"Social Studies", $this->science=>"Science", $this->languages=>"Languages", $this->creativearts=>"Creative Arts", $this->religous=>"Religious Education");
                }
                function getAll(){
                    if($this->math == $this->socialstudies && $this->socialstudies == $this->science && $this->science == $this->languages && $this->languages == $this->creativearts && $this->creativearts == $this->religous){
                        return true;
                    }
                    return false;
                }
                function getMaxSubject(){
                    $subject = $this->subjectScore();
                    $max = $this->getMaxMark();
                    if ($this->getAll()){
                        return "all same performance";
                    }
                    return $subject[$min];
                }
                function getMinSubject(){
                    $subject = $this->subjectScore();
                    $min = $this->getMinMark();
                    if ($this->getAll()){
                        return "all same performance";
                    }
                    return $subject[$min];
                }
            }
            $pupil = new MyStudent($_GET["student"], $_GET["age"], $_GET["math"], $_GET["socialstudies"], $_GET["science"], $_GET["languages"], $_GET["creativearts"], $_GET["religous"]);
        ?>
        <table class="perfomance">
            <tr>
                <th>Name: </th>
                <td><?= $pupil->student ?></td>
            </tr>
            <tr>
                <th>Age: </th>
                <td><?= $pupil->age ?></td>
            </tr>
            <tr>
                <th>Total: </th>
                <td><?= $pupil->gettotal() ?></td>
            </tr>
            <tr>
                <th>Average: </th>
                <td><?= $pupil->getAverage() ?></td>
            </tr>
            <tr>
                <th>Grade: </th>
                <td><?= $pupil->getGrade() ?></td>
            </tr>
            <tr>
                <th>Min Marks: </th>
                <td><?= $pupil->getMinMark() ?></td>
            </tr>
            <tr>
                <th>Least Perfomed Subject: </th>
                <td><?= $pupil->getMinSubject() ?></td>
            </tr>
            <tr>
                <th>Max Marks: </th>
                <td><?= $pupil->getMaxMark() ?></td>
            </tr>
            <tr>
                <th>Most Perfomed Subject: </th>
                <td><?= $pupil->getMaxSubject() ?></td>
            </tr>
        </table>
        <table class="subject">
            <h2>Subject Analysis</h2>
            <tr id="row-subject">
                <th class="column-subjects column-header">Math </th>
                <th class="column-subjects column-header">Social Studies </th>
                <th class="column-subjects column-header">Science </th>
                <th class="column-subjects column-header">Languages </th>
                <th class="column-subjects column-header">Creative Arts </th>
                <th class="column-subjects column-header">Religious Education </th>
            </tr>
            <tr id="row-subject">
                    <td class="column-subjects column-data"><?= $pupil->math ?></td>
                    <td class="column-subjects column-data"><?= $pupil->socialstudies ?></td>
                    <td class="column-subjects column-data"><?= $pupil->science ?></td>
                    <td class="column-subjects column-data"><?= $pupil->languages ?></td>
                    <td class="column-subjects column-data"><?= $pupil->creativearts ?></td>
                    <td class="column-subjects column-data"><?= $pupil->religous ?></td>
            </tr>
        </table>
    </div>
    <p><a href="index.php">Back</a></p>
    <?php include "footer.html" ?>
</body>
</html>