<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>WonderLust About</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(img/WanderLust-Logo.png)"></div>
                <h4>Admin NWDL</h4>
                <small>N.WanderLust</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="index-admin.php" >
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                       <a href="list-about.php">
                            <span class="las la-info-circle"></span>
                            <small>About</small>
                        </a>
                    </li>
                    <li>
                       <a href="list-destination.php">
                            <span class="las la-map-marked"></span> 
                            <small>Destination</small>
                        </a>
                    </li>
                    <li>
                       <a href="List-hotel.php"class="active">
                            <span class="las la-hotel"></span>
                            <small>Hotel</small>
                        </a>
                    </li>
                    <li>
                       <a href="list-blog.php">
                            <span class="las la-blog"></span>
                            <small>Blog</small>
                        </a>
                    </li>
                    <li>
                       <a href="logout-admin.php">
                            <span class="las la-sign-out-alt"></span>
                            <small>Log Out</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-content">
        <main>
            
            <div class="page-header">
                <h1>Booking List</h1>
                <small>WanderLust</small>
            </div>
             <div class="page-content">

                <div class="records table-responsive">

                    <div>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th><span class="las la-sort"></span> FIRST NAME</th>
                                    <th><span class="las la-sort"></span> PHONE NUMBER</th>
                                    <th><span class="las la-sort"></span> CHECK-IN DATE</th>
                                    <th><span class="las la-sort"></span> CHECK-OUT DATE</th>
                                    <th><span class="las la-sort"></span> SPECIAL REQUEST</th>
                                    <th><span class="las la-sort"></span> ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="client">
                                            <div class="client-info">
                                                <h4>Andrew Bruno</h4>
                                                <small>bruno@crossover.org</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        123-456-789
                                    </td>
                                    <td>
                                        2024-07-10
                                    </td>
                                    <td>
                                        2024-07-11
                                    </td>
                                    <td>
                                        None
                                    </td>
                                    <td>
                                       <div class="actions">
                                            <span onclick="openPopup('viewPopup')" style="color:blue" class="las la-binoculars"></span>
                                            <div id="viewPopup" class="popup">
                                                <div class="popup-content">
                                                    <span class="close" onclick="closePopup('viewPopup')">&times;</span>
                                                    <h2>View Booking</h2>
                                                    <form>

                                                    <div class="form-row">
                                                        <div class="form-group">
                                                            <label for="first_name">First Name:</label>
                                                            <input type="text" id="first_name" name="first_name" value="<?php echo$row[''] ?>"required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email:</label>
                                                            <input type="text" id="email" name="email" value="<?php echo$row[''] ?>"required>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group">
                                                            <label for="phone_number">Phone Number:</label>
                                                            <input type="text" id="phone_number" name="phone_number" value="<?php echo$row[''] ?>"required>
                                                        </div>
                                                    </div>


                                                    <div class="form-row">
                                                        <div class="form-group">
                                                            <label for="checkin_date">Check-in Date:</label>
                                                            <input type="text" id="checkin_date" name="checkin_date" value="<?php echo$row[''] ?>"required>
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="checkin_date">Check-out Date:</label>
                                                            <input type="text" id="checkin_date" name="checkin_date" value="<?php echo$row[''] ?>"required>
                                                        </div>
                                                    </div>


                                                    <div class="form-row">
                                                        <div class="form-group">
                                                            <label for="special_request">Special Request:</label>
                                                            <textarea id="special_request" name="special_request" value="<?php echo$row[''] ?>"required></textarea>
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                            <span onclick="openPopup('updatePopup')" style="color:green" class="las la-edit"></span>
                                            <div id="updatePopup" class="popup">
                                                <div class="popup-content">

                                                    <span class="close" onclick="closePopup('updatePopup')">&times;</span>
                                                    <h2>Update Booking</h2>
                                                    <form>

                                                    <div class="form-row">
                                                        <div class="form-group">
                                                            <label for="first_name">First Name:</label>
                                                            <input type="text" id="first_name" name="first_name" value="<?php echo$row[''] ?>"required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email:</label>
                                                            <input type="text" id="email" name="email" value="<?php echo$row[''] ?>"required>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group">
                                                            <label for="phone_number">Phone Number:</label>
                                                            <input type="text" id="phone_number" name="phone_number" value="<?php echo$row[''] ?>"required>
                                                        </div>
                                                    </div>


                                                    <div class="form-row">
                                                        <div class="form-group">
                                                            <label for="checkin_date">Check-in Date:</label>
                                                            <input type="text" id="checkin_date" name="checkin_date" value="<?php echo$row[''] ?>"required>
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="checkin_date">Check-out Date:</label>
                                                            <input type="text" id="checkin_date" name="checkin_date" value="<?php echo$row[''] ?>"required>
                                                        </div>
                                                    </div>


                                                    <div class="form-row">
                                                        <div class="form-group">
                                                            <label for="special_request">Special Request:</label>
                                                            <textarea id="special_request" name="special_request" value="<?php echo$row[''] ?>"required></textarea>
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                            <a href="delete-about.php">
                                                <span style="color: red" class="las la-trash"></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>  
        </main>

        <script>
            // JavaScript functions to control the popup
            function openPopup(popupId) {
                document.getElementById(popupId).style.display = "block";
            }

            function closePopup(popupId) {
                document.getElementById(popupId).style.display = "none";
            }
        </script>
    </div>
</body>
</html>

