<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criminals Record</title>
    <style>
        body {
            margin: 0 10px;
            background-color: #333333;
            color: #f6f6f6;
        }
        .criminal {
            text-align: left;
        }
        .arrested {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="criminal">
<?php
$criminals = [
    [
       'uid'            => 20124,
        'name'          => 'Marcos',
        'age'           => 43,
        'description'   => ['African American', 'M', '5.6'],
        'captured'      => true
    ],
    [
       'uid'            => 35175,
        'name'          => 'Paul',
        'age'           => 37,
        'description'   => ['Caucasian', 'M', '5.11'],
        'captured'      => true
    ],
    [
       'uid'            => 21574,
        'name'          => 'Edith',
        'age'           => 65,
        'description'   => ['Asian', 'F', '5.4'],
        'captured'      => false
    ],
    [
       'uid'            => 17301,
        'name'          => 'Daisy',
        'age'           => 19,
        'description'   => ['Hispanic', 'F', '5.7'],
        'captured'      => true
    ],
    [
       'uid'            => 27549,
        'name'          => 'Noemi',
        'age'           => 27,
        'description'   => ['African American', 'F', '5.6'],
        'captured'      => false
    ],
    [
       'uid'            => 92790,
        'name'          => 'Mai',
        'age'           => 87,
        'description'   => ['Asian', 'F', '5.9'],
        'captured'      => false
    ],
    [
       'uid'            => 26036,
        'name'          => 'Annabelle',
        'age'           => 29,
        'description'   => ['Hispanic', 'F', '5.4'],
        'captured'      => true
    ],
    [
       'uid'            => 18854,
        'name'          => 'Cameron',
        'age'           => 78,
        'description'   => ['Hispanic', 'M', '5.7'],
        'captured'      => false

    ],
    [
       'uid'            => 73245, 215,
        'name'          => 'Michael',
        'age'           => 52,
        'description'   => ['African American', 'M', '5.3'],
        'captured'      => false,

    ],
    [
       'uid'            => 57465,
        'name'          => 'Jennifer',
        'age'           => 54,
        'description'   => ['Caucasian', 'F', '5.6'],
        'captured'      => false,
    ]
];
// Array containing unique IDs of arrested criminals.
$arrested = [20124 , 26036, 35175, 17301];
$arrestedCriminals = [];
// A function that adds criminal name to array if they are arrested.
function AddToArrested($tempName, $tempUID)
{
    global $arrested;
    global $arrestedCriminals;
    //global $record;
    if (in_array($tempUID, $arrested)){
        $arrestedCriminals[] = $tempName;
    }
    echo "<br>";
}
echo "<h3>Below are top 10 most dangerous criminals:</h3>";
foreach ($criminals as $index => $record) {
    $isArrested = $record['captured'];
    echo "<strong>- Criminal ID: </strong>" ."<span style='color: lightcoral'>" .$record['uid'] ."</span>";
    echo $record['captured'] ? " Status: <span style='color: olivedrab'><strong>arrested</strong></span>" : " Status: <span style='color: firebrick'><strong>at-large</strong></span>";
    echo "<br>";
    echo " Name: <span style='color: coral'>" . $record['name'] ."</span>";
    echo "<br>";
    echo " Age: <span style='color: cornflowerblue'>" . $record['age'] ."</span>";
    echo "<br>";
    echo "Description: (";
    echo  $record['description'][0];
    echo ",  <span style='color: darkgoldenrod'>" . $record['description'][1] ."</span>";
    echo ",  <span style='color: cornflowerblue'>" . $record['description'][2] ."</span>";
    echo ")";
    echo "<br>";
    $arrNPush = $record['name'];
    $arrUPush = $record['uid'];
    AddToArrested($arrNPush, $arrUPush);
    echo "<br>";
}
echo "</div>";
echo "<div class='arrested'>";
// Just some extra for context.
$onTheLoose = count($criminals) - count($arrested);
echo "<br>";
echo "<h3> While " .$onTheLoose ." criminals are still at-large, ";
$arrestedArrSize = count($arrested);
for ($i = 0; $i<$arrestedArrSize; $i++){
    if ($i == 3) {
        echo "<span style='color: khaki'> and " .$arrestedCriminals[$i] ."</span>";
    }
    else {
    echo "<span style='color: khaki'>" .$arrestedCriminals[$i] .", </span>";
    }
}
echo " have been captured and are currently locked up in a maximum security prison." ."</h3>";
?>
</div>
</body>
</html>
