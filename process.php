<!DOCTYPE html>
<html> 
<head>
    <title>Processing Page</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
    ob_start(); // ob_start() and ob_end_clean() used to clear page
    include("table.php");
    ob_end_clean();

    print_r($testArr);

    // $numItems = 0;
    // $check_ids = array_fill(0, $numItems, "e");
    // if (isset($_POST['save_checkbox'])) { // --------------- adds checkbox ids to an array (ex: array with values c0,c1,c2...)
    //     $saved = $_POST['saved'];
    //     foreach ($saved as $item) {
    //         $numItems += 1;
    //     }
    //     $i = 0;
    //     foreach ($saved as $item) {
    //         $check_ids[$i] = $item;
    //         $i += 1;
    //     }
    // }

    // $values_checked = array_fill(0, count($check_ids), array_fill(0, 2, "e"));
    // for ($i = 0; $i < count($values_checked); $i += 1) {
    //     $values_checked[$i][0] = $_POST[$check_ids[$i]]; //localstring
    //     for ($j = 0; $j < count($lang2); $j += 1) {
    //         if ($lang2[$j][0] == $_POST[$check_ids[$i]]) {
    //             $values_checked[$i][1] = $lang2[$j][3]; //localid
    //         }
    //     }
    // }

    // echo $testVar . "<br>";

    // echo "lang2 array <br>";
    // for ($k = 0; $k < count($lang2); $k += 1) {
    //     echo "localstring: " . $lang2[$k][0] . " --- local_id: " . $lang2[$k][3] . "<br>";
    // }
    // echo "values_check array <br>";
    // for ($i = 0; $i < count($values_checked); $i += 1) {
    //     echo $check_ids[$i] . ": " . $values_checked[$i][0] . ' - ' . $values_checked[$i][1] . "<br>";
    // }

    // iterate through all values checked
    // - check on database, if localid (code) exists in database
    //     - if localid (code) is in the database
    //         - check if localstrings of that localid matches
    //             - if they match, move on to the next row
    //             - if they DONT match, update localstring on database with localstring (code)
    //     - if localid (code) isn't in database, add to the database
    //         - $result = mysql_query('SELECT t.messageid, t.message FROM TABLE t ORDER 
    //                     BY t.messageid DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
    //         - find localid of last item in database
    //         - when inserting new item into database, add at localid of the last item + 1

    // for ($i = 0; $i < count($values_checked); $i += 1) {
    //     // $link = new mysqli("localhost", "user", "password", "base");
    //     $result = $conn->query("SELECT * FROM locals WHERE local_id = '$values_checked[$i]'");
    //     // $result = mysqli_query("SELECT * FROM locals WHERE localstring = $values_checked[$i]");
    //     $matchFound = mysqli_num_rows($result) > 0 ? 'yes' : 'no';
    //     echo $matchFound . '<br>';
    // }

    // $cellArr = [trim($c1), trim($c2), trim($c3), trim($c4), trim($c5)];

    //------------ updating ESP column in translation_test database ----------------------

    // $counter4 = 1;
    // for ($j = 0; $j < count($phrases); $j++) {
    //     $query2 = "UPDATE translation_test SET ESP='$cellArr[$j]' WHERE id='$counter4'";
    //     $query2_run = mysqli_query($conn, $query2);
    //     $counter4++;
    // }

    //------------------------------------------------------------------------------------

?>

<form action="table.php" method="post">
    <p align='center'>Record saved</p>
        <button style = "font-size:20px;" align = 'center'>
            Refresh
        </button>
</form>
</body>
</html>