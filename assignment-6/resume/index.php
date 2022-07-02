<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Md Shariful Islam</title>
</head>

<body>

    <?php

    $informations = [
        'personal_info' => [
            'first_name' => 'Md Sharifl',
            'last_name' => 'Islam',
            'full_name' => 'Md. Shariful Islam',
            'profile_image' => 'https://raw.githubusercontent.com/sharifulkawsar/shariful/main/img/profile.JPG',
            'father_name' => 'Md Nazrul Islam',
            'mother_name' => 'Milonara Begum',
            'data_of_birth' => '1997-01-02',
            'gender' => 'Male',
            'marital_status' => 'Unmarried',
            'nationality' => 'Bangladeshi',
            'religion' => 'Islam',
            'blood_group' => 'A(+ve)',
            'address' => [
                'present_address' => 'Jatrabari, Dhaka.',
                'permanent_address' => 'Paharpur, Panti Bazar, Muradnagar, Cumilla.'
            ],
            'contact' => [
                'email' => 'shariful.cse.bubt@gmail.com',
                'mobile' => '01854-103003'
            ]

        ],
        'academic_info' => [
            'ssc' => [
                'board' => 'Cumilla',
                'year' => '2013',
                'institution' => 'Banskait P.J. High School',
                'result' => '4.19 out of 5.00'
            ],
            'hsc' => [
                'board' => 'Cumilla',
                'year' => '2015',
                'institution' => 'Dr. Mossharraf Foundation College',
                'result' => '4.25 out of 5.00'
            ],
            'bsc' => [
                'board' => 'Dhaka',
                'year' => '2020',
                'institution' => 'Bangladesh University of Business & Technology',
                'result' => '3.23 out of 4.00'
            ]
        ],
        'skills' => [
            'programming' => 'C, C++, PHP',
            'web' => 'Laravel, CakePHP',
            'database' => 'mySQL',
            'scripting_lang' => 'javascript',
            'dev_tools' => 'VS code, PHPStrom',
            'others' => 'Good Knowledge in Troubleshooting'
        ],
        'professional' => [
            'first_job' => [
                'company_name' => 'ASSIST',
                'possition' => 'Jr. Software Engineer',
                'office_address' => 'Mirpur-6, Dhaka-1216',
                'start_date' => 'March,21',
                'end_date' => 'April, 21'
            ],
            'second_job' => [
                'company_name' => 'Tappware Solutions Ltd',
                'possition' => 'Jr. Software Engineer',
                'office_address' => 'SEL Trident Tower, Porana Palton, Dhaka',
                'start_date' => 'April, 21',
                'end_date' => ''
            ]
        ],
        'self_project' => [
            'project_one' => [
                'name' => 'Online Smart Hospital (Web Based)',
                'technology' => 'HTML, PHP, CSS.'
            ],
            'project_two' => [
                'name' => 'Hospital Receptionist Model System (Distributed Database)',
                'technology' => 'Java.'
            ],
            'project_three' => [
                'name' => 'Voice Control Home Automation System-Android View System (IOT Based)',
                'technology' => 'Java'
            ],
            'project_four' => [
                'name' => 'E-Comm (self-project)',
                'technology' => 'Laravel Framework.'
            ],
            'project_five' => [
                'name' => 'Practice cakePHP project (self-project)',
                'technology' => 'cakePHP Framework.'
            ]
        ],
        'achivement' => [
            'type' => 'Technical in IT',
            'subject' => 'Google IT Support. (coursera.org), Technical Support Fundamentals.'
        ],
        'language' => [
            'bangla' => 'Native Proficiency.',
            'english' => 'Professional Working Proficiency.'
        ],
        'games' => [
            'first_game' => 'Table Tennis',
            'second_game' => 'Badminton'
        ],
        'hobbies' => [
            'first_hobby' => 'Tree Plantation'
        ],
        'references' => [
            'first_reference' => ''
        ]
    ];
    ?>

    <div class="app">
        <div>
            <br>
            <br>
            <!-- <img src="img\profile.jpg" alt="Not Found!"> -->
            <?php foreach ($informations as $key => $information) {
                if (!empty($key == 'personal_info')) {
            ?>
                    <img src=<?= $information['profile_image']?> alt="Not Found!">
                    <h1> <?= !empty($information['full_name']) ? strtoupper($information['full_name']) : ''; ?> </h1><br>
                    <p>Address: <?= !empty($information['address']['present_address']) ? $information['address']['present_address'] : ''; ?><br>
                        <a href="mailto:shariful.cse.bubt@gmail.com">Email: <?= $information['contact']['email'] ?? '' ?> </a> <br>
                        <a href="tel:+8801854103003">Mobile: +88<?= $information['contact']['mobile'] ?? ''; ?> </a>
                    </p>
            <?php
                }
            }
            ?>

        </div>
        <div>
            <br>
            <h3>CAREER OBJECTIVE</h3>
            <hr>
            <br>
            <p>Seeking a challenging position to work environment where I can grow and also contribute to the company growth using my excellent development and management skills.</p>
        </div>
        <div>
            <br>
            <h3>PRESENT STATUS</h3>
            <hr>
            <br>
            <p><b>Jr. Software Engineer</b></p>
        </div>
        <div>
            <br>
            <h3>EDUCATION</h3>
            <hr>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Exam</th>
                        <th>Board</th>
                        <th>Year</th>
                        <th>Name of Institution</th>
                        <th>Marks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($informations as $key => $information) {
                        if (!empty($key == 'academic_info')) {
                            foreach ($information as $index => $value) {
                    ?>
                                <tr>
                                    <td> <?= strtoupper($index) ?> </td>
                                    <td> <?= !empty($value['board']) ? $value['board'] : 'emtpy'; ?> </td>
                                    <td> <?= !empty($value['year']) ? $value['year'] : 'emtpy'; ?> </td>
                                    <td> <?= !empty($value['institution']) ? $value['institution'] : 'emtpy'; ?> </td>
                                    <td> <?= !empty($value['result']) ? $value['result'] : 'emtpy'; ?> </td>
                                </tr>
                    <?php
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div>
            <br>
            <h3>COMPUTER SKILLS</h3>
            <hr>
            <br>
            <?php
            foreach ($informations as $key => $information) {
                if (!empty($key == 'skills')) {
            ?>
                    <span class="skill">Programming Languages</span>: <span class="skills"> <?= !empty($information['programming']) ? ($information['programming']) : '' ?> </span> <br />
                    <span class="skill">Web based skills</span>: <span class="skills"> <?= !empty($information['web']) ? ($information['web']) : '' ?> </span> <br />
                    <span class="skill">Database skills</span>: <span class="skills"> <?= !empty($information['database']) ? ($information['database']) : '' ?> </span> <br />
                    <span class="skill">Scripting skills</span>: <span class="skills"> <?= !empty($information['scripting_lang']) ? ($information['scripting_lang']) : '' ?> </span> <br />
                    <span class="skill">Development Tools</span>: <span class="skills"> <?= !empty($information['dev_tools']) ? ($information['dev_tools']) : '' ?> </span> <br />
                    <span class="skill">Others</span>: <span class="skills"> <?= !empty($information['others']) ? ($information['others']) : '' ?> </span> <br />
            <?php
                }
            }
            ?>
        </div>
        <div>
            <br>
            <h3>PROFESSIONAL EXPERIENCE</h3>
            <hr>
            <br>
            <?php
            foreach ($informations as $key => $information) {
                if (!empty($key == 'professional')) {
                    foreach ($information as $index => $value) {

            ?>
                        <li><b> <?= !empty($value['possition']) ? $value['possition'] : ''; ?> (<?= !empty($value['start_date']) ? $value['start_date'] : ''; ?> - <?= !empty($value['end_date']) ? $value['end_date'] : 'present'; ?>) </b></li>
                        <P><b> <?= !empty($value['company_name']) ? $value['company_name'] : ''; ?>, </b> <?= !empty($value['office_address']) ? $value['office_address'] : ''; ?> </P>
            <?php
                    }
                }
            }
            ?>
        </div>
        <div>
            <br>
            <h3>PROJECT</h3>
            <hr>
            <br>
            <?php
            foreach ($informations as $key => $information) {
                if (!empty($key == 'self_project')) {
                    foreach ($information as $index => $value) {
            ?>
                        <li><b> <?= !empty($value['name']) ? $value['name'] : ''; ?> </b></li>
                        <p>-Technology : <?= !empty($value['technology']) ? $value['technology'] : ''; ?> </p>
            <?php
                    }
                }
            }
            ?>
        </div>
        <div>
            <br>
            <h3>ACHIEVEMENTS</h3>
            <hr>
            <br>
            <?php
            foreach ($informations as $key => $information) {
                if (!empty($key == 'achivement')) {
            ?>
                    <span class="achieve"> <?= !empty($information['type']) ? $information['type'] : ''; ?> </span>: <span class="achievements"> <?= !empty($information['subject']) ? $information['subject'] : ''; ?> </span> <br />
            <?php
                }
            }
            ?>
        </div>
        <div>
            <br>
            <h3>LANGUAGE</h3>
            <hr>
            <br>
            <?php
            foreach ($informations as $key => $information) {
                if (!empty($key == 'language')) {
                    foreach ($information as $index => $value) {
            ?>
                        <span class="lang"><?= !empty($index) ? ucfirst($index) : ''; ?> </span>: <span class="Language"><?= !empty($value) ? $value : ''; ?> </span> <br />
            <?php
                    }
                }
            }
            ?>
        </div>
        <div>
            <br>
            <h3>Personal Information</h3>
            <hr>
            <br>
            <?php
            foreach ($informations as $key => $information) {
                if (!empty($key == 'personal_info')) {
            ?>
                    <span class="pinfo">Full Name</span>: <span class="pinformation"> <?= !empty($information['full_name']) ? $information['full_name'] : '' ?> </span> <br />
                    <span class="pinfo">Father’s Name</span>: <span class="pinformation"> <?= !empty($information['father_name']) ? $information['father_name'] : '' ?> </span> <br />
                    <span class="pinfo">Mother’s Name</span>: <span class="pinformation"> <?= !empty($information['mother_name']) ? $information['mother_name'] : '' ?> </span> <br />
                    <span class="pinfo">Date of Birth</span>: <span class="pinformation"> <?= !empty($information['data_of_birth']) ? $information['data_of_birth'] : '' ?> </span> <br />
                    <span class="pinfo">Gender</span>: <span class="pinformation"> <?= !empty($information['gender']) ? $information['gender'] : '' ?> </span> <br />
                    <span class="pinfo">Marital Status</span>: <span class="pinformation"> <?= !empty($information['marital_status']) ? $information['marital_status'] : '' ?> </span> <br />
                    <span class="pinfo">Nationality</span>: <span class="pinformation"> <?= !empty($information['nationality']) ? $information['nationality'] : '' ?> </span> <br />
                    <span class="pinfo">Religion</span>: <span class="pinformation"> <?= !empty($information['religion']) ? $information['religion'] : '' ?> </span> <br />
                    <span class="pinfo">Blood Group</span>: <span class="pinformation"> <?= !empty($information['blood_group']) ? $information['blood_group'] : '' ?> </span> <br />
                    <span class="pinfo">Present Address</span>: <span class="pinformation"> <?= !empty($information['address']['present_address']) ? $information['address']['present_address'] : '' ?> </span> <br />
                    <span class="pinfo">Permanent Address</span>: <span class="pinformation"> <?= !empty($information['address']['permanent_address']) ? $information['address']['permanent_address'] : '' ?> </span> <br />
            <?php
                }
            }
            ?>
        </div>
        <div>
            <br>
            <h3>HOBBIES</h3>
            <hr>
            <br>
            <?php
            foreach ($informations as $key => $information) {
                if (!empty($key == 'hobbies')) {
                    foreach ($information as $index => $value) {
            ?>
                        <li><?= !empty($value) ? $value : ''; ?></li>
            <?php
                    }
                }
            }
            ?>
        </div>
        <div>
            <br>
            <h3>Games</h3>
            <hr>
            <br>
            <?php
            foreach ($informations as $key => $information) {
                if (!empty($key == 'games')) {
                    foreach ($information as $index => $value) {
            ?>
                        <li><?= !empty($value) ? $value : ''; ?></li>
            <?php
                    }
                }
            }
            ?>
        </div>
        <div>
            <br>
            <h3>References</h3>
            <hr>
            <br>
            <?php
            foreach ($informations as $key => $information) {
                if (!empty($key == 'references')) {
                    foreach ($information as $index => $value) {
            ?>
                        <li><?= !empty($value) ? $value : 'No References.'; ?></li>
            <?php
                    }
                }
            }
            ?>
        </div>
        <br>
        <footer>copyright © shariful, <?= date('Y') ?> </footer>
        <br>
    </div>

</body>

</html>