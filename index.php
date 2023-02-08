<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baldwin University : MarkSheet</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php include "header.html" ?>
    <div class="myform">
        <form action="table.php" method="get">
            Name: <input name="student" type="text" id="student" class="items"><br>
            Age: <input name="age" type="number" min="0" max="70" id="age" class="items"><br>
            Math: <input name="math" type="number" min="0" max="100" id="math" class="items"><br>
            Social Studies: <input name="socialstudies" type="number" min="0" max="100" id="socialstudies" class="items"><br>
            Science: <input name="science" type="number" min="0" max="100" id="science" class="items"><br>
            Languages: <input name="languages" type="number" min="0" max="100" id="languages" class="items"><br>
            Creative Arts: <input name="creativearts" type="number" min="0" max="100" id="creativearts" class="items"><br>
            Religous Education: <input name="religous" type="number" min="0" max="100" id="religous" class="items"><br>
            <a href="table.php"><input type="submit" value="Submit" id="submit"></a>
        </form>
    </div>
    
    <?php include "footer.html" ?>
</body>

</html>