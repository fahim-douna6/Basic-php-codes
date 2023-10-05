<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<!-- Display user input in a table -->
<form method="GET" action="" class="registration-table">
    <table border="1">
        <tr>
            <td>Student Name</td>
            <td><input type="text" name="sname" required><br></td>
        </tr>
        <tr>
            <td>Father Name</td>
            <td><input type="text" name="fname" required><br></td>
        </tr>
        <tr>
            <td>CNIC</td>
            <td><input type="number" name="cnic" required><br></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="number" name="age" required><br></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" required><br></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Register" name="reg" background-color:yellow><br>
            </td>
        </tr>
    </table>
</form>
<h2>Registred  list</h2>
<table border="1" class="registered" >

    <style>
       body{
        text-align:center;
        background:#4F1D5A;
       }
       form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        table.registration-table{
        width: 500px;
        margin:auto;
        table-layout:fixed;
        text-align:center;
        font-family:arial;
           }
           table.registered{
        width: 1200px;
        column-width: 500px;
        table-layout:fixed;
        text-align:center;
        font-family:arial;
        margin: 100px;
           }
           td{
            border: 1px dotted white;
            border-collapse:collapse;
            padding: 20px;
            font-size: 25px;
        }

        input[type="submit"] {
            background-color: #007bff; 
            font-size: 20px;
           
            padding: 10px 20px;
            border-radius: 5px;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
        }
        td {
            text-align: center;
          
            background-color:#BBBBBB;
        }
    </style>
<?php
// Check if the form has been submitted
if (isset($_GET['reg'])) {
    // Retrieve user input from query parameters
    $s_name = isset($_GET["sname"]) ? $_GET["sname"] : "";
    $f_name = isset($_GET["fname"]) ? $_GET["fname"] : "";
    $nic = isset($_GET["cnic"]) ? $_GET["cnic"] : "";
    $age = isset($_GET["age"]) ? $_GET["age"] : "";
    $mail = isset($_GET["email"]) ? $_GET["email"] : "";

    // Display user input in a table row
    echo "<tr><td>Name</td><td>Father Name</td><td>CNIC</td><td>Age</td><td>Email</td></tr>";
    echo "<tr><td>".$s_name."</td><td>".$f_name."</td><td>".$nic."</td><td>".$age."</td><td>".$mail."</td></tr>";
   
}
?>
</table>

</body>
</html>
