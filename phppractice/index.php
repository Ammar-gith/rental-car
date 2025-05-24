<?php
$cars = [
    "Honda" => [
        "company" => "Honda company",
        "title" => " honda title ",
        "histrory" => " This is text for honda ",
        "brands" => [
            "civic" => [
                "model" => 2005,
                "name" => "Honda civic",
                "Engine" => "new",
                "seat" => 5,
                "color" => "white"

            ],
            "city" => [
                "model" => 2019,
                "name" => "Honda city",
                "Engine" => "new",
                "seat" => 5,
                "color" => "green"
            ],
            "freed" => [
                "model" => 2010,
                "name" => "Honda freed",
                "Engine" => "new",
                "seat" => 5,
                "color" => "blue"
            ],
            "vezzle" => [
                "model" => 2012,
                "name" => "Honda vezzle",
                "Engine" => "new",
                "seat" => 5,
                "color" => "red"
            ]
        ]
    ],
    "Toyota" => [
        "company" => "toyota company ",
        "title" => " toyota tittle ",
        "histrory" => "this is simple text for toyota. ",
        "brands" => [
            "corolla" => [
                "model" => 200,
                "name" => "corolla civic",
                "Engine" => "new",
                "seat" => 5,
                "color" => "white"

            ],
            "Gli" => [
                "model" => 2019,
                "name" => "corolla city",
                "Engine" => "new",
                "seat" => 5,
                "color" => "green"
            ],
            "Xli" => [
                "model" => 2010,
                "name" => "corolla freed",
                "Engine" => "new",
                "seat" => 5,
                "color" => "blue"
            ],

        ]
    ],
    "Suzuki" => [
        "company" => "Suzuki company",
        "title" => "suzuki title ",
        "histrory" => " this is simple text for suzuki. ",
        "brands" => [
            "suzuki civic" => [
                "model" => 2005,
                "name" => "suzuki civic",
                "Engine" => "new",
                "seat" => 5,
                "color" => "white"

            ],
            "suzuki city" => [
                "model" => 2019,
                "name" => "suzuki city",
                "Engine" => "new",
                "seat" => 5,
                "color" => "green"
            ],
            "suzuki freed" => [
                "model" => 2010,
                "name" => "suzuki freed",
                "Engine" => "new",
                "seat" => 5,
                "color" => "blue"
            ],

        ]
    ],

];

foreach ($cars as $Car_name => $description) {
    echo "<h1>" . $Car_name . "</h1> <br>";

    foreach ($description as $make => $description) {
        // echo $make . " ";

        foreach ($description as $model => $details) {
            // echo "<pre>";
            // print_r($details);
            // echo "</pre>";
            echo "<h3>" . $model . " = " . $details['Engine'] . " " . $details['model'] . " " . $details['name'] . " " . $details['color'] . "</h3>";

            // foreach ($details as $sub_details => $value) {
            //     echo $sub_details . " = " . $value . "<br> ";
            // }



        }
    }
}











// echo "<table border=2px solid  cellpadding= 8px cellspacing=0px >";
// echo "<tr>";
// for ($i = 1; $i <= 500; $i = $i + 30) {

//     for ($j = $i; $j < $i + 30; $j++) {

//         echo "<td> $j </td> ";
//     }
//     echo "</tr>";

// }
// echo "</table>";




// echo "<pre>";
// print_r($cars);
// echo "</pre>";

?>