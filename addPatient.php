<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Patient</title>
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
