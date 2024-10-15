<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Patient</title>
</head>
<body>
    <div class="container">
        <h2>Add Patient</h2>
        <form action="" method="post" name="form1">
            <table>
                <tr>
                    <th><label for="ID">Patient ID:</label></th>
                    <td><input type="text" id="ID" name="ID" required placeholder="Enter Patient ID"></td>
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
                    <th><label for="email">Email:</label></th>
                    <td><input type="text" id="email" name="email" placeholder="Enter Email"></td>
                </tr>
                <tr>
                    <th><label for="phone">Phone:</label></th>
                    <td><input type="text" id="phone" name="phone" required placeholder="Enter Phone"></td>
                </tr>
                <tr>
                    <th><label for="address">Address:</label></th>
                    <td><input type="text" id="address" name="address" required placeholder="Enter Address"></td>
                </tr>
                <tr>
                    <th><label for="Date_of_Birth">Date of Birth:</label></th>
                    <td><input type="date" id="Date_of_Birth" name="Date_of_Birth" required></td>
                </tr>
            </table>
            <input type="submit" name="Submit" value="Submit">
        </form>
    </div>
</body>
</html>
