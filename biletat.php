<?php include 'dbconn.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stored Information</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    
        h2 {
            text-align: center;
            color: #333;
        }
    
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
    
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
    
        th {
            background-color: #36a832;
            color: white;
        }
    
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Stored Information</h2>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Ticket Amount</th>
                <th>Booked Date</th>
                <th>Movie Name</th>
                <th>Action</th>
            </tr>
            <?php
         $query = "select t.id , u.name, u.surname , u.email , t.ticket_number , t.date_time , t.MovieNAme from ticket as t INNER JOIN user as u on t.user_id= u.id where t.status = 1";
         
         $query_result = mysqli_query($connection,$query);
         while($row = mysqli_fetch_assoc($query_result)){
             $fullName = $row['name']." ".$row['surname'];
             $email  = $row['email'];
             $number = $row['ticket_number'];
             $date_time = $row['date_time'];
             $MovieNAme = $row['MovieNAme'];
             $bookedid = $row['id'];
             echo "<tr>";
             echo "<td>$fullName</td>";
             echo "<td>$email</td>";
             echo "<td>$number</td>";
             echo "<td>$date_time</td>";
             echo "<td>$MovieNAme</td>";
             echo "<td><a href='deletebook.php?id=$bookedid'>Delete</a></td>";
         }
         ?>

        </thead>
        <tbody id="infoTableBody"></tbody>
    </table>
</body>
</html>