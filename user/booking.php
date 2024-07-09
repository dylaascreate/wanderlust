<?php
$title = 'Hotel Details'; // set hotel name
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/bg_1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 120vh;
            margin-top: 70px;
            padding-bottom: 10px;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 700px;
            width: 100%;
        }
        .form-container h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .form-group {
            flex: 1;
            min-width: calc(50% - 10px);
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group.textarea {
            min-width: 100%;
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
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Hotel Booking Form</h2>
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
                        <option value="1">One(1)</option>
                        <option value="2">Two(2)</option>
                        <option value="3">Three(3)</option>
                    </select>
                </div>
                <div class="form-group textarea">
                    <label for="special_requests">Special Requests:</label>
                    <textarea id="special_requests" name="special_requests" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group">
                <button type="submit">Book Now</button>
            </div>
        </form>
    </div>
    
</body>
</html>
