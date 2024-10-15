<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Appointment</title>
</head>
<body>
    <div class="container">
        <h2>Add Appointment</h2>
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
