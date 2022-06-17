<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>

<body>
    <div class="app">
        <!-- html -->
        <label class="title" for="">CALCULATOR</label>
        <form method="POST">
            <label for="">Number:</label>
            <input type="number" name="numb1"> <br>
            <label for="">Number:</label>
            <input type="number" name="numb2"> <br>
            <label for="">Choice Operator:</label>
            <select name="operator" id="">
                <option>Choice One</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
                <option>Modulus</option>
            </select> <br>
            <button class="execute" type="submit" name="submit" value="submit">EXECUTE</button>
        </form>

        <!-- php -->
        <?php 
            if (isset($_POST['submit'])) {
                $result1 = $_POST['numb1'];
                $result2 = $_POST['numb2'];
                $operator = $_POST['operator'];
                // =====ADD=====
                if ($operator == 'Add') {
                    if (!empty($result1) && !empty($result2)) {
                        echo '<b class="success">Result is:</b> '. $result1 + $result2;
                    } elseif(empty($result1) && empty($result2)) {
                        $result1 = 0;
                        $result2 = 0;
                        echo '<b class="success">Result is:</b> '. $result1 + $result2;
                    } elseif (empty($result1)) {
                        $result1 = 0;
                        echo '<b class="success">Result is:</b> '. $result1 + $result2;
                    } elseif (empty($result2)) {
                        $result2 = 0;
                        echo '<b class="success">Result is:</b> '. $result1 + $result2;
                    } else {
                        echo '<b class="error">error:</b> exe error!';
                    }
                // =====SUBTRACT=====
                } elseif ($operator == 'Subtract') {
                    if (!empty($result1) && !empty($result2)) {
                        echo '<b class="success">Result is:</b> '. $result1 - $result2;
                    } elseif(empty($result1) && empty($result2)) {
                        $result1 = 0;
                        $result2 = 0;
                        echo '<b class="success">Result is:</b> '. $result1 - $result2;
                    } elseif (empty($result1)) {
                        $result1 = 0;
                        echo '<b class="success">Result is:</b> '. $result1 - $result2;
                    } elseif (empty($result2)) {
                        $result2 = 0;
                        echo '<b class="success">Result is:</b> '. $result1 - $result2;
                    } else {
                        echo '<b class="error">error:</b> exe error!';
                    }
                // =====MULTIPLY=====
                } elseif ($operator == 'Multiply') {
                    if (!empty($result1) && !empty($result2)) {
                        echo '<b class="success">Result is:</b> '. $result1 * $result2;
                    } elseif(empty($result1) && empty($result2)) {
                        $result1 = 0;
                        $result2 = 0;
                        echo '<b class="success">Result is:</b> '. $result1 * $result2;
                    } elseif (empty($result1)) {
                        $result1 = 0;
                        echo '<b class="success">Result is:</b> '. $result1 * $result2;
                    } elseif (empty($result2)) {
                        $result2 = 0;
                        echo '<b class="success">Result is:</b> '. $result1 * $result2;
                    } else {
                        echo '<b class="error">error:</b> exe error!';
                    }
                // =====DIVISION=====
                } elseif ($operator == 'Divide') {
                    if (!empty($result1) && !empty($result2)) {
                        echo '<b class="success">Result is:</b> '. $result1 / $result2;
                    } elseif(empty($result1) && empty($result2)) {
                        echo '<b class="error">error:</b> DivisionByZeroError!';
                    } elseif (empty($result1)) {
                        $result1 = 0;
                        echo '<b class="success">Result is:</b> '. $result1 / $result2;
                    } elseif (empty($result2)) {
                        echo '<b class="error">error:</b> DivisionByZeroError!';
                    } else {
                        echo '<b class="error">error:</b> exe error!';
                    }
                // =====MODULUS=====
                } elseif ($operator == 'Modulus') {
                    if (!empty($result1) && !empty($result2)) {
                        echo '<b class="success">Result is:</b> '. $result1 % $result2;
                    } elseif(empty($result1) && empty($result2)) {
                        echo '<b class="error">error:</b> DivisionByZeroError!';
                    } elseif (empty($result1)) {
                        $result1 = 0;
                        echo '<b class="success">Result is:</b> '. $result1 % $result2;
                    } elseif (empty($result2)) {
                        echo '<b class="error">error:</b> DivisionByZeroError!';
                    } else {
                        echo '<b class="error">error:</b> exe error!';
                    }
                    
                }
                 else {
                    echo '<b class="error">error:</b> Please selcect choice one!';
                }
            }
         ?>
    </div>

</body>

</html>