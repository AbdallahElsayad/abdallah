<?php
$Student = [
    [
        'id' => '1',
        'Name' => 'Abdo_elsayad',
        'phone' => '011079824256',
        'Section' => 'CS'

    ],
    [
        'id' => '2',
        'Name' => 'mohmed-ali',
        'phone' => '010635486975',
        'Section' => 'Is'

    ],
    [
        'id' => '3',
        'Name' => 'esmail_Hamdy',
        'phone' => '0125981136876',
        'Section' => 'CS'

    ],
    [
        'id' => '4',
        'Name' => 'ibrahim_Ali',
        'phone' => '01087125951',
        'Section' => 'OR'


    ],
    [
        'id' => '5',
        'Name' => 'andro_Amr',
        'phone' => '010235006975',
        'Section' => 'IT'


    ],
    [
        'id' => '6',
        'Name' => 'Abdalaa_Hassan',
        'phone' => '010235088975',
        'Section' => 'CS'

    ],
    [
        'id' => '7',
        'Name' => 'amr_Hamed',
        'phone' => '011279824256',
        'Section' => 'CS'

    ],
    [
        'id' => '8',
        'Name' => 'Ali_mohmed',
        'phone' => '010235486908',
        'Section' => 'IT'

    ],
    [
        'id' => '9',
        'Name' => 'Abdelrahman_Hamed',
        'phone' => '011279824256',
        'Section' => 'CS'

    ],
    [
        'id' => '10',
        'Name' => 'Ali_mohmed',
        'phone' => '010235486975',
        'Section' => 'IT'

    ], [
        'id' => '11',
        'Name' => 'Abdelrahman_Hamed',
        'phone' => '011279824256',
        'Section' => 'IS'

    ],
    [
        'id' => '12',
        'Name' => 'Ali_mohmed',
        'phone' => '010235486975',
        'Section' => 'OR'

    ],
    
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        table,
        th,
        tr,
        td {
            border: solid 2px white;
            color: white;
            padding: 5px;
            margin-bottom: 35px;

        }

        h1 {
            color: aliceblue;
            text-align: center;

        }

        .all_student_list {
            background-color:black;
            width: 100%;
            height: 100vh;
            margin: auto;
            display: flex;
            justify-content: center;
        }

        .all_student_list a {
            font-size: 20px;
            color: white;
            background-color: yellow;
            padding: 8px 35px;
            border-radius: 15px;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div class="all_student_list">
        <div class="list">

            <h>List of Student </h1>
            <table>
                <tr>
                    <th>index</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Section</th>
                </tr>
                <?php
                foreach ($Student as $data) {
                ?>
                    <tr>
                        <td><?php echo "{$data["id"]}" ?></td>
                        <td><?php echo "{$data["Name"]}" ?></td>
                        <td><?php echo "{$data["phone"]}" ?></td>
                        <td><?php echo "{$data["Section"]}" ?></td>
                    </tr>
                <?php } ?>
            </table>
            <a href="./index.html">Home Page</a>
        </div>
    </div>
</body>