<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gpa Calculator</title>
</head>

<body>
    <div class="app">
        <!-- html -->
        <div class="center">
            <label class="title" for="">GPA CALCULATOR</label>
            <form method="POST">
                <label for="">Study level:</label>
                <select name="study_level" id="">
                    <option>Choice One</option>
                    <option value="jsc">JSC</option>
                    <option value="ssc">SSC</option>
                    <option value="hsc">HSC</option>
                    <option value="bsc">Graduation</option>
                    <option value="msc">Masters</option>
                </select> <br>
                <label for="">Grade Point:</label>
                <input class="gpa_input" step="0.01" type="number" name="gpa"> <br>
                <button class="execute" type="submit" name="submit" value="submit">CALCULATE RESULT</button>
            </form>
            <!-- php -->
            <?php
            if (isset($_POST['submit'])) {
                $operator = $_POST['study_level'];
                $gpa = $_POST['gpa'];

                function gpaGrade($type, $gpa)
                {
                    if (isset($type) && $type == 'jsc' || $type == 'ssc' || $type == 'hsc') {
                        function jscSscHsc($gpa)
                        {
                            if (empty($gpa) || $gpa >= 0.00 &&  $gpa < 1.00) {
                                echo "<b class='error'>Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success.</b> ";
                            } elseif (isset($gpa) && $gpa <= 1.99 && $gpa >= 1.00) {
                                echo "<b class='success'>You have been passed with grade 'D'. Forget the mistakes, Remember the lessons.</b> ";
                            } elseif (isset($gpa) && $gpa <= 2.99 && $gpa >= 2.00) {
                                echo "<b class='success'>You have been passed with grade 'C'. Forget the mistakes, Remember the lessons.</b> ";
                            } elseif (isset($gpa) && $gpa <= 3.49 && $gpa >= 3.00) {
                                echo "<b class='success'>You have been passed with grade 'B'. Forget the mistakes, Remember the lessons.</b> ";
                            } elseif (isset($gpa) && $gpa <= 3.99 && $gpa >= 3.50) {
                                echo "<b class='success'>You have been passed with grade 'A-'. Forget the mistakes, Remember the lessons.</b> ";
                            } elseif (isset($gpa) && $gpa <= 4.99 && $gpa >= 4.00) {
                                echo "<b class='success'>You have been passed with grade 'A'. Forget the mistakes, Remember the lessons.</b> ";
                            } elseif (isset($gpa) && $gpa == 5.00) {
                                echo "<b class='success'>Congratulations! You have got 'A+'. Remember, success is a consequences, must not be a goal.</b> ";
                            } else {
                                echo "<b class='error'>You have provided wrong grade point. </b> ";
                            }
                        }
                        jscSscHsc($gpa);
                    } elseif (isset($type) && $type == 'bsc' || $type == 'msc') {

                        function bscMsc($gpa)
                        {
                            if (empty($gpa) || $gpa >= 0.00 && $gpa < 2.00) {
                                echo "<b class='error'>Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success.</b> ";
                            } elseif (isset($gpa) && $gpa <= 2.24 && $gpa >= 2.00) {
                                echo "<b class='success'>You have been passed with grade 'D'. Forget the mistakes, Remember the lessons.</b> ";
                            } elseif (isset($gpa) && $gpa <= 2.49 && $gpa >= 2.25) {
                                echo "<b class='success'>You have been passed with grade 'C'. Forget the mistakes, Remember the lessons.</b> ";
                            } elseif (isset($gpa) && $gpa <= 2.74 && $gpa >= 2.50) {
                                echo "<b class='success'>You have been passed with grade 'C+'. Forget the mistakes, Remember the lessons.</b> ";
                            } elseif (isset($gpa) && $gpa <= 2.99 && $gpa >= 2.75) {
                                echo "<b class='success'>You have been passed with grade 'B-'. Forget the mistakes, Remember the lessons.</b> ";
                            } elseif (isset($gpa) && $gpa <= 3.24 && $gpa >= 3.00) {
                                echo "<b class='success'>You have been passed with grade 'B'. Forget the mistakes, Remember the lessons.</b> ";
                            } elseif (isset($gpa) && $gpa <= 3.49 && $gpa >= 3.25) {
                                echo "<b class='success'>You have been passed with grade 'B+'. Forget the mistakes, Remember the lessons.</b> ";
                            } elseif (isset($gpa) && $gpa <= 3.74 && $gpa >= 3.50) {
                                echo "<b class='success'>You have been passed with grade 'A-'. Forget the mistakes, Remember the lessons.</b> ";
                            } elseif (isset($gpa) && $gpa <= 3.99 && $gpa >= 3.75) {
                                echo "<b class='success'>You have been passed with grade 'A'. Forget the mistakes, Remember the lessons.</b> ";
                            } elseif (isset($gpa) && $gpa == 4.00) {
                                echo "<b class='success'>Congratulations! You have got 'A+'. Remember, success is a consequences, must not be a goal.</b> ";
                            } else {
                                echo "<b class='error'>You have provided wrong grade point. </b> ";
                            }
                        }
                        bscMsc($gpa);
                    } else {
                        echo "<b class='error'>error:</b> Please selcect choice one!";
                    }
                }
                gpaGrade($operator, $gpa);
            }
            ?>
            <!-- end php -->
        </div>
    </div>
</body>

</html>