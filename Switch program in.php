<h1>Switch Case</h1>
    <form method="Get">
        
    <label>Number of Day</label> <input type="text" name="day" placeholder="Enter number of Day " required><br> 
    <input type="submit" name="check" value="Check Day">
    </form>

<?php
if (isset($_GET['check'])) {
   
$dayOfWeek=$_GET['day'];// Change this value to test different cases

switch ($dayOfWeek) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day";
}
}
?>
