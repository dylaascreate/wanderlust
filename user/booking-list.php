<?php
$title = 'Hotel Details'; // set hotel name
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Booking</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/bg_1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .records {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 90%;
            width: 100%;
        }
        .records h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        td {
            color: #666;
        }
        .actions {
            display: flex;
            gap: 10px;
            justify-content: center;
        }
        .actions span {
            cursor: pointer;
            font-size: 18px;
        }
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            z-index: 1000;
            max-width: 50%;
            width: 800px;
            height: 700px;
        }
        .popup-content {
            position: relative;
        }
        .popup-content h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }
        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 6px;
        }
        .form-group {
            flex: 1;
            min-width: calc(50% - 5px);
        }
        .form-group textarea {
            min-width: 100%;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 20px;
            height: 50px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        #viewPopup .form-group textarea {
            width: 100%;
            padding: 10px;
            height: 90px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-group button:hover {
            background-color: #4cae4c;
        }
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
            }
            .form-group {
                min-width: 100%;
            }
        }
    </style>
</head>
<body>
   <!-- Table for records -->
    <div class="records">
        <h2>Booking Records</h2>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                    <th>Total Room</th>
                    <th>Special Request</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john.doe@example.com</td>
                    <td>123-456-7890</td>
                    <td>2024-07-10</td>
                    <td>2024-07-15</td>
                    <td>One(1)</td>
                    <td>None</td>
                    <td>
                        <div class="actions">
                            <span style="color: blue" class="las la-binoculars" onclick="openPopup('viewPopup')"></span>
                            <div id="viewPopup" class="popup">
                                <div class="popup-content">
                                    <span class="close" onclick="closePopup('viewPopup')">&times;</span>
                                    <h2>View Booking</h2>
                                    <form action="booking-list.php" method="POST">
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="first_name">First Name:</label>
                                                    <input type="text" id="first_name" name="first_name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="last_name">Last Name:</label>
                                                    <input type="text" id="last_name" name="last_name" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="email">Email:</label>
                                                    <input type="email" id="email" name="email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone">Phone Number:</label>
                                                    <input type="tel" id="phone" name="phone" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="check_in">Check-in Date:</label>
                                                    <input type="date" id="check_in" name="check_in" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="check_out">Check-out Date:</label>
                                                    <input type="date" id="check_out" name="check_out" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="total_room">Total Room:</label>
                                                        <select id="total_room" name="total_room" required>
                                                            <option value="" selected disabled></option>
                                                            <option value="1">One(1)</option>
                                                            <option value="2">Two(2)</option>
                                                            <option value="3">Three(3)</option>
                                                        </select>                                                 
                                                </div>
                                            </div>
                                            <div class="form-group textarea">
                                                    <label for="special_requests">Special Requests:</label>
                                                    <textarea id="special_requests" name="special_requests" rows="4" required></textarea>
                                                </div>
                                        </form>
                                </div>
                            </div>
                            <span style="color: green" class="las la-edit" onclick="openPopup('updatePopup')"></span>
                            <div id="updatePopup" class="popup">
                                <div class="popup-content">
                                    <span class="close" onclick="closePopup('updatePopup')">&times;</span>
                                    <h2>Update Booking</h2>
                                    <form action="booking-list.php" method="POST">
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="first_name">First Name:</label>
                                                    <input type="text" id="first_name" name="first_name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="last_name">Last Name:</label>
                                                    <input type="text" id="last_name" name="last_name" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="email">Email:</label>
                                                    <input type="email" id="email" name="email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone">Phone Number:</label>
                                                    <input type="tel" id="phone" name="phone" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="check_in">Check-in Date:</label>
                                                    <input type="date" id="check_in" name="check_in" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="check_out">Check-out Date:</label>
                                                    <input type="date" id="check_out" name="check_out" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                   <label for="total_room">Total Room:</label>
                                                        <select id="total_room" name="total_room" required>
                                                            <option value="" selected disabled></option>
                                                            <option value="1">One(1)</option>
                                                            <option value="2">Two(2)</option>
                                                            <option value="3">Three(3)</option>
                                                        </select>        
                                                </div>
                                            </div>
                                            <div class="form-group textarea">
                                                    <label for="special_requests">Special Requests:</label>
                                                    <textarea id="special_requests" name="special_requests" rows="4" required></textarea>
                                                </div>
                                            <div class="form-group">
                                                <button type="submit">Update Booking</button>
                                            </div>
                                        </form>
                                </div>
                            </div>
                                <span href="delete-about.php" style="color: red" class="las la-trash"></span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function openPopup(popupId) {
            document.getElementById(popupId).style.display = "block";
        }

        function closePopup(popupId) {
            document.getElementById(popupId).style.display = "none";
        }
    </script>

</body>
</html>
