<?php
include_once "functions.php";

$fruits = ["mango", "apple", "Banana", "orange", "grape"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    

    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Select/Dropdowns</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quaerat enim eligendi eaque alias? Doloremque odio molestias magnam sequi numquam. Sit atque necessitatibus dolorum autem? Adipisci soluta nostrum quidem nobis.</p>

                <p>
                    
                </p>
            </div>
        </div>

        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="" method="POST">
                    <label for="fruits">Select Some Fruits</label>
                    <select style="height:200px;" name="fruits[]" id="fruits" multiple>
                        <option value="" disabled selected>Select Some Fruits</option>
                        
                    </select>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>