<!DOCTYPE html>
<html> 
<head>
    <title>Translation</title>
    <meta charset="UTF-8">
</head>
<body>
<style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
        font-size: 16px;
        table-layout: fixed;
        max-width: 1200px;
        width: 100%;
    }
    /* td {
        border: 1px solid black;
        font-size: 16px;
        width: 50%;
        padding-left: 10px;
    } */
    textarea {
        outline: none; 
        resize: none; 
        border: 0; 
        font-size: 16px;
        font-family: 'serif';
        width: 100%;
        box-sizing: border-box;
    }
</style>
<?php
    if (isset($_POST['startlist'])) {
        if ($_POST['startlist'] == 'None') {
            $startlangFULL = 'None';
            $startlang = $_POST['startlist'];
        }
        else if ($_POST['startlist'] == 'ar') {
            $startlangFULL = 'Arabic';
            $startlang = $_POST['startlist'];
        }
        else if ($_POST['startlist'] == 'zh') {
            $startlangFULL = 'Chinese';
            $startlang = $_POST['startlist'];
        }
        else if ($_POST['startlist'] == 'en') {
            $startlangFULL = 'English';
            $startlang = $_POST['startlist'];
        }
        else if ($_POST['startlist'] == 'fr') {
            $startlangFULL = 'French';
            $startlang = $_POST['startlist'];
        }
        else if ($_POST['startlist'] == 'ru') {
            $startlangFULL = 'Russian';
            $startlang = $_POST['startlist'];
        }
        else if ($_POST['startlist'] == 'vn') {
            $startlangFULL = 'Vietnamese';
            $startlang = $_POST['startlist'];
        }
    }
    if (isset($_POST['targetlist'])) {
        if ($_POST['targetlist'] == 'None') {
            $targetlangFULL = 'None';
            $targetlang = $_POST['targetlist'];
        }
        else if ($_POST['targetlist'] == 'ar') {
            $targetlangFULL = 'Arabic';
            $targetlang = $_POST['targetlist'];
        }
        else if ($_POST['targetlist'] == 'zh') {
            $targetlangFULL = 'Chinese';
            $targetlang = $_POST['targetlist'];
        }
        else if ($_POST['targetlist'] == 'en') {
            $targetlangFULL = 'English';
            $targetlang = $_POST['targetlist'];
        }
        else if ($_POST['targetlist'] == 'fr') {
            $targetlangFULL = 'French';
            $targetlang = $_POST['targetlist'];
        }
        else if ($_POST['targetlist'] == 'ru') {
            $targetlangFULL = 'Russian';
            $targetlang = $_POST['targetlist'];
        }
        else if ($_POST['targetlist'] == 'vn') {
            $targetlangFULL = 'Vietnamese';
            $targetlang = $_POST['targetlist'];
        }
    }
?>
<p style="font-size:20px; text-align:center">
    <?php
        echo $startlangFULL . " to " . $targetlangFULL;
    ?>
</p>
<?php
    //-------------------------- connect to database ------------------------------------
    $host = "localhost";
    $dbname = "am_db";
    $username = "root";
    $password = "";

    $conn = mysqli_connect(hostname: $host, 
                username: $username, 
                password: $password, 
                database: $dbname);

    if (mysqli_connect_errno()) {
        die("Connection error: " . mysqli_connect_error());
    }
    //-------------------------- making array with $startlang array ---------------------------------

    $sql = "SELECT * FROM `locals` WHERE LANGUAGE = '$startlang'";

    $result = mysqli_query($conn, $sql);
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // $lang1 = array_fill(0, count($items), array_fill(0, 3, "e"));

    // $counter = 0;
    // foreach ($items as $item) {
    //     $lang1[$counter][0] = $item['localstring'];
    //     $lang1[$counter][1] = $item['itemtype'];
    //     $lang1[$counter][2] = $item['object_id'];
    //     $counter++;
    // }
    $lang1 = array_fill(0, count($items), array_fill(0, 4, "e"));

    $counter = 0;
    foreach ($items as $item) {
        $lang1[$counter][0] = $item['localstring'];
        $lang1[$counter][1] = $item['itemtype'];
        $lang1[$counter][2] = $item['object_id'];
        $lang1[$counter][3] = $item['local_id'];
        $counter++;
    }
    // ----TESTING-----
    // echo "startlang is " . $startlang . " (" . $startlangFULL . ") <br>";
    // for ($i = 0; $i < count($localstrings); $i += 1) {
    //     echo "string: ". $localstrings[$i] . " itemtype: " . $itemtypes[$i] . " objectid: " . $objectids[$i] . "<br>";
    // }
    // print_r($lang1);

    //-------------------------- making array with $targetlang array ---------------------------------

    $sql2 = "SELECT * FROM `locals` WHERE LANGUAGE = '$targetlang'";

    $result2 = mysqli_query($conn, $sql2);
    $items2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

    // $lang2 = array_fill(0, count($items2), array_fill(0, 3, "e"));

    // $counter = 0;
    // foreach ($items2 as $item2) {
    //     $lang2[$counter][0] = $item2['localstring'];
    //     $lang2[$counter][1] = $item2['itemtype'];
    //     $lang2[$counter][2] = $item2['object_id'];
    //     $counter++;
    // }
    $lang2 = array_fill(0, count($items2), array_fill(0, 4, "e"));
    $counter = 0;
    foreach ($items2 as $item2) {
        $lang2[$counter][0] = $item2['localstring'];
        $lang2[$counter][1] = $item2['itemtype'];
        $lang2[$counter][2] = $item2['object_id'];
        $lang2[$counter][3] = $item2['local_id'];
        $counter++;
    }
    //$testVar = "If you can read this, then that means you can use variables from table.php";
    // ----TESTING-----
    // echo "targetlang is " . $targetlang . " (" . $targetlangFULL . ") <br>";
    // for ($i = 0; $i < count($localstrings2); $i += 1) {
    //     echo "string: ". $localstrings2[$i] . " itemtype: " . $itemtypes2[$i] . " objectid: " . $objectids2[$i] . "<br>";
    // }
    // echo "------ END TESTING ------- <br>";
    // echo "<br><br>";
    // print_r($lang2);
    // $testAssoc = array (array("string1", 1), array("string2", 2), array("string3", 3));
    // print_r($testAssoc);
    // $l2copy = array_fill(0, count($lang2), array_fill(0, 4, "e"));
    // for ($i = 0; $i < count($l2copy); $i += 1) {
    //     for ($j = 0; $j < 4; $j += 1) {
    //         $l2copy[$i][$j] = $lang2[$i][$j];
    //     }
    // }
    // echo "l2copy array: <br>";
    // print_r($l2copy);

    $testArr = array(array("string1", 1), array("string2", 2), array("string3", 3));
?>
<form action="process.php" method="post">
    <table align = 'center'>
        <tr bgcolor = "lightgray">
            <td style = 'border: 1px solid black;
        font-size: 16px;
        width: 50%;
        padding-left: 10px' align = 'center'><?php echo $startlangFULL?></td>
            <td style = 'border: 1px solid black;
        font-size: 16px;
        width: 50%;
        padding-left: 10px' align = 'center'><?php echo $targetlangFULL?></td>
            <td style = 'border: 1px solid black;
        font-size: 16px;
        width: 5%;
        padding-left: 10px' align = 'center'>Check to save</td>
        </tr>
        <?php
            for ($i = 0; $i < count($lang1); $i += 1) {
                $ls = $lang1[$i]["0"];
                $found = false;
                for ($j = 0; $j < count($lang2); $j += 1) {
                    if ( ($lang2[$j]["1"] == $lang1[$i]["1"]) && 
                         ($lang2[$j]["2"] == $lang1[$i]["2"]) ) {
                        $ls2 = $lang2[$j]["0"];
                        $found = true;
                        break;
                    }
                }
                if ($found == true) {
                    echo "<tr>
                            <td style = 'border: 1px solid black;
                            font-size: 16px;
                            width: 50%;
                            padding-left: 10px' >
                                <label for='cell_$i'>$ls</label>
                            </td>
                            <td style = 'border: 1px solid black;
                            font-size: 16px;
                            width: 50%;
                            padding-left: 10px' >
                                <textarea name='c$i' id='cell_$i'>$ls2</textarea>
                            </td>
                            <td style = 'border: 1px solid black;
                            font-size: 16px;
                            width: 5%;
                            padding-left: 10px' >
                                <input type='checkbox' name='saved[]' value='c$i'>
                            </td>
                        </tr>";
                }
                else {
                    echo "<tr>
                            <td style = 'border: 1px solid black;
                            font-size: 16px;
                            width: 50%;
                            padding-left: 10px' >
                                <label for='cell_$i'>$ls</label>
                            </td>
                            <td style = 'border: 1px solid black;
                            font-size: 16px;
                            width: 50%;
                            padding-left: 10px' >
                                <textarea name='c$i' id='cell_$i'></textarea>
                            </td>
                            <td style = 'border: 1px solid black;
                            font-size: 16px;
                            width: 5%;
                            padding-left: 10px' >
                                <input type='checkbox' name='saved[]' value='c$i'>
                            </td>
                        </tr>";
                }
            }
        ?>
    </table>
    <br>
    <div style = "font-size:20px;" align = 'center'>
        <button name = 'save_checkbox'>
            Save
        </button>
    </div>
</form>
</body>
</html>