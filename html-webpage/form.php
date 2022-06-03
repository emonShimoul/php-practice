<?php
include_once "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Check</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <style>
        body{
            margin-top:30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Our First Form</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit cum soluta ex eveniet vel autem ipsam dicta officia illo est?</p>
                <p>
                    <?php
                    $fname = "";
                    $lname = "";
                    $checked = "";
                    // print_r($_POST['fruits']);
                    if( isset($_POST['cb1']) && !empty($_POST['cb1'] == 1) ){
                        $checked = 'checked';
                    }
                    ?>
                    <?php if( isset($_POST['fname']) && !empty($_POST['fname']) ) {
                        // $fname = htmlspecialchars($_POST['fname']);
                        // $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
                        $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    } ?>
                    <?php if( isset($_POST['lname']) && !empty($_POST['lname']) ) {
                        // $lname = htmlspecialchars($_POST['lname']);
                        // $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
                        $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    } ?>
                </p>
                <p>
                    First Name: <?php echo $fname ?><br>
                    Last Name: <?php echo $lname ?>
                </p>
            </div>
        </div>
        <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST" action="">
                <label for="">First Name</label>
                <input type="text" name="fname" id="fname" value=<?php echo $fname ?> >
                <label for="">Last Name</label>
                <input type="text" name="lname" id="lname" value=<?php echo $lname ?> >

                <div>
                    <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked ?> >
                    <label for="cb1" class="label-inline">Some Checkbox</label>
                </div>

                <label for="" class="label">Select Some Fruits</label>

                <input type="checkbox" name="fruits[]" value="orange" <?php isChecked('fruits', 'orange') ?> >
                <label for="" class="label-inline">Orange</label><br>
                <input type="checkbox" name="fruits[]" value="mango" <?php isChecked('fruits', 'mango') ?> >
                <label for="" class="label-inline">Mango</label><br>
                <input type="checkbox" name="fruits[]" value="banana" <?php isChecked('fruits', 'banana') ?> >
                <label for="" class="label-inline">Banana</label><br>
                <input type="checkbox" name="fruits[]" value="lemon" <?php isChecked('fruits', 'lemon') ?> >
                <label for="" class="label-inline">Lemon</label><br>

                <button type="submit">Submit</button>
            </form>
        </div>
        </div>
    </div>
</body>
</html>