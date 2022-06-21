<?php
$gces_Staffs = [
        "academics" =>

        [
            [
                "name" => "Ram",
                "address" => "Pokhara",
                "phoneno" => ["98400000"],
                "subject" => ["html,", "Css,", "js"]
            ],
            [
                "name" => "max",
                "address" => "Pokhara",
                "phoneno" => ["980000000"],
                "subject" => ["C,", "C++,", "Java"]
            ]
        ],
        "non_acdemics " =>
        [
            [
                "name" => "bihan",
                "address" => "Pokhara",
                "phoneno" => ["984090909"]
            ],
            [
                "name" => "Santa",
                "address" => "Pokhara",
                "phoneno" => ["98462835875"]
            ],
            [
                "name" => "alex",
                "address" => "Pokhara",
                "phoneno" => ["984690000"]
            ]
        ]




    ];
foreach ($gces_Staffs as $staffType => $v1) {
  
    echo "<table border ='1px' cellpadding='5px' style='border-collapse: collapse;'>";
    echo ucfirst($staffType);
    echo "<tr >";
    echo"<ul>";
    if ($staffType == "academics") {


        echo "<th>Name</th>";
        echo "<th>Address</th>";
        echo "<th>Phone No</th>";
        echo "<th>Subjects</th>";
    } else {
        echo "<th>Name</th>";
        echo "<th>Address</th>";
        echo "<th>Phone No</th>";
    }
    echo "</tr>";

    foreach ($v1 as $v2 => $v3) {

        // echo $v2;



        echo "<tr>";
        foreach ($v3 as $v4 => $v5) {
            
            if (is_array($v5)) {
                
                echo "<td>";
                
                foreach ($v5 as $v6 => $v7) {


                    echo " " .  $v7 . " ";
                }

                echo "</td>";
            } else {
                echo "  <td>$v5  </td>";
            }
        }
        echo "</tr>";
    }

    echo "</table><br>";
    echo"</ul>";
}

















