<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table td, table th {
            padding: 10px;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #f2f2f2;
            text-align: left;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Appointment</h2>
        <?php
        if(isset($_POST['Submit'])) {
            $Appointment_ID = $_POST['ID'];
            $Patient_ID = $_POST['patient_id'];
            $Doctor_ID = $_POST['doctor_id'];
            $Date= $_POST['date'];
            $Time = $_POST['time'];
            

          
            include_once("config.php");

            $result = mysqli_query($conn,"INSERT INTO Appointment(Appointment_ID, Patient_ID, Doctor_ID, Date, Time)
            VALUES ('$Appointment_ID', '$Patient_ID', '$Doctor_ID', '$Date', '$Time')");

            if ($result) {
                echo "Appointment added successfully. <a href='/Hospital_Management/appointmentview.php'>View Appointment</a><br>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
        ?>
        <form action="appointmentmake.php" method="post" name="form1">
            <table>
                <tr>
                    <th><label for="ID">Appointment ID:</label></th>
                    <td><input type="text" id="ID" name="ID" required placeholder="Enter Appointment ID"></td>
                </tr>
                <tr>
                    <th><label for="patient_id">Patient ID:</label></th>
                    <td><input type="text" id="patient_id" name="patient_id" required placeholder="Enter Patient ID"></td>
                </tr>
                <tr>
                    <th><label for="doctor_id">Doctor ID:</label></th>
                    <td><input type="text" id="doctor_id" name="doctor_id" required placeholder="Enter Doctor ID"></td>
                </tr>
                <tr>
                    <th><label for="date">Date:</label></th>
                    <td><input type="date" id="date" name="date" placeholder="Enter Date"></td>
                </tr>
                <tr>
                    <th><label for="medicine">Time:</label></th>
                    <td><input type="text" id="time" name="time" placeholder="Enter Time"></td>
                </tr>
            </table>
            <input type="submit" name="Submit" value="Submit">
        </form>
    </div>
</body>
</html>
