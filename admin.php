<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h3 {
            color: white;
            text-align: center;
        }

        button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background-color: #3e8e41;
        }

        .admin-button {
            background-color: black;
            position: absolute;
            bottom: 20px;
            left: 20px;
        }

        .authored-by {
            font-size: 12px;
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        /* Additional styles for the table */
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes slide-in {
            0% {
                opacity: 0;
                transform: translateX(-100%);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .icon {
            margin-bottom: 30px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <div>

        <div>
            <h3 class="display-4">Members</h3>
            <?php
            $sName = "localhost";
            $uName = "root";
            $pass = "";
            $db_name = "project";
            $conn = new mysqli($sName, $uName, $pass, $db_name);
            $alumniQuery = "SELECT name, email FROM alumni";
            $alumniResult = $conn->query($alumniQuery);

            // Query to retrieve data from students table
            $studentsQuery = "SELECT name, email FROM students";
            $studentsResult = $conn->query($studentsQuery);

            // Combine results from both tables
            $combinedResults = array_merge($alumniResult->fetch_all(MYSQLI_ASSOC), $studentsResult->fetch_all(MYSQLI_ASSOC));
            ?>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                <?php
                // Display data in table rows
                foreach ($combinedResults as $row) {
                echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
           
            <?php
            $conn->close();
            ?>
            <button class="admin-button" type="button" onclick="window.location.href='home.php'">Back</button>
        </div>
    </div>
</body>

</html>
