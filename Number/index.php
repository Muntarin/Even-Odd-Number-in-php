<?php
require_once './Series.php';
use App\classes\Series;

$result=' ';
if(isset($_POST['btn'])){
    $series=new Series();
    $result=$series->createSeries();
}
?>

<form action="" method="POST">
    <table>
        <tr>
            <th>Starting Number</th>
            <td><input type ="number" name="starting_number"/></td>
        </tr>
        <tr>
            <th>Ending Number</th>
            <td><input type ="number" name="ending_number"/></td>
        </tr>
        <tr>
            <th>Your Choice</th>
            <td>
                <input type ="radio" name="choice" value="odd"/>Odd
                <input type ="radio" name="choice" value="even"/>Even
            </td>
        </tr>
        <tr>
            <th>Result</th>
            <td><textarea rows="5" cols="25"><?php foreach ($result as $value) {echo $value.' ';}
            ?></textarea></td>
        </tr>
        <tr>
            <th></th>
            <td><input type ="submit" name="btn" value="Submit"/></td>
        </tr>

    </table>
</form>
