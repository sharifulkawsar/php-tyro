<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Student</title>
</head>

<body>
    <?php
    $students = [
        [
            'name' => 'John Doe',
            'age' => 20,
            'email' => 'john.doe@email.com',
            'address' => [
                'country' => 'BD',
                'district' => 'Dhaka'
            ]
        ],
        [
            'name' => 'Lilly',
            'age' => 19,
            'email' => 'lilly@email.com',
            'address' => [
                'country' => 'BD',
                'district' => 'Chittagong'
            ]
        ],
        [
            'name' => 'Hasan Ahmed',
            'age' => 19,
            'email' => 'hasan@email.com',
            'address' => [
                'country' => 'BD',
                'district' => 'Barishal'
            ]
        ],
        [
            'name' => 'Palak Mahmud',
            'age' => 18,
            'email' => 'palak@email.com',
            'address' => [
                'country' => 'BD',
                'district' => 'Dhaka'
            ]
        ]
    ];
    ?>
    <div class="app">
        <table class="center">
            <tr>
                <th class="heading">Serial No.</th>
                <th class="heading">Name</th>
                <th class="heading">Address</th>
            </tr>
            <?php
            foreach ($students as $student) {
                if ($student['address']['district'] == 'Dhaka') {
                    $student_name = $student['name'];
                    $student_address = $student['address']['district'] . ", " . $student['address']['country'];
            ?>
                    <tr>
                        <td></td>
                        <td> <?= $student_name ?> </td>
                        <td> <?= $student_address ?> </td>
                    </tr>

            <?php
                }
            }
            ?>
        </table>
    </div>
</body>

</html>