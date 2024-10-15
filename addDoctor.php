<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Doctor</title>
</head>
<body>
    <div class="container">
        <h2>Add Doctor</h2>
        <form action="doctoradd.php" method="post" name="form1">
            <table>
                <tr>
                    <th><label for="ID">Doctor ID:</label></th>
                    <td><input type="text" id="ID" name="ID" required placeholder="Enter Doctor ID"></td>
                </tr>
                <tr>
                    <th><label for="fname">First Name:</label></th>
                    <td><input type="text" id="fname" name="fname" required placeholder="Enter First Name"></td>
                </tr>
                <tr>
                    <th><label for="lname">Last Name:</label></th>
                    <td><input type="text" id="lname" name="lname" required placeholder="Enter Last Name"></td>
                </tr>
                <tr>
                    <th><label for="specialization">Specialization:</label></th>
                    <td><input type="text" id="specialization" name="specialization" placeholder="Enter Specialization"></td>
                </tr>
                <tr>
                    <th><label for="email">Email:</label></th>
                    <td><input type="text" id="email" name="email" placeholder="Enter Email"></td>
                </tr>
                <tr>
                    <th><label for="phone">Phone:</label></th>
                    <td><input type="text" id="phone" name="phone" required placeholder="Enter Phone"></td>
                </tr>
            </table>
            <input type="submit" name="Submit" value="Submit">
        </form>
    </div>
</body>
</html>
