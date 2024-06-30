<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>WonderLust About</title>
    <link rel="stylesheet" href="css/style.css">
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
                       <a href=""class="active">
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
                       <a href="logout-admin">
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
                <h1>Hotel List</h1>
                <small>WanderLust</small>
            </div>
            
            <div class="page-content">
            
                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            <h2>107,200</h2>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>User</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>340,230</h2>
                            <span class="las la-map-marker"></span> 
                        </div>
                        <div class="card-progress">
                            <small>Destination List</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>$653,200</h2>
                            <span class="las la-hotel"></span>
                        </div>
                        <div class="card-progress">
                            <small>Hotel List</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>47,500</h2>
                            <span class="las la-blog"></span>
                        </div>
                        <div class="card-progress">
                            <small>Blog List</small>
                            <div class="card-indicator">
                                <div class="indicator four" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                </div>

                 <a onclick="openPopup('addPopup')"class="button">Add Hotel Content</a>
                    <div id="addPopup" class="popup">
                    <div class="popup-content">
                        <!-- Close button -->
                        <span class="close" onclick="closePopup('addPopup')">&times;</span>
                        <!-- Your form HTML content -->
                        <h2 style="color:black">Hotel Form</h2>
                        <form>
                            <div class="img">
                                <label for="image-url">Image URL:</label>
                                <input type="text" id="image-url" name="image-url" placeholder="Enter image URL">
                            </div>
                            <div class="text p-4">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="hotel-name">Hotel Name:</label>
                                        <input type="text" id="hotel-name" name="hotel-name" placeholder="Enter hotel name">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price per person:</label>
                                        <input type="text" id="price" name="price" placeholder="Enter price">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="star-rating">Star Rating:</label>
                                        <select id="star-rating" name="star-rating">
                                            <option value="1">1 Star</option>
                                            <option value="2">2 Stars</option>
                                            <option value="3">3 Stars</option>
                                            <option value="4">4 Stars</option>
                                            <option value="5">5 Stars</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tour-duration">Tour Duration:</label>
                                        <input type="text" id="tour-duration" name="tour-duration" placeholder="Enter tour duration">
                                   </div>
                               </div>
                                <label for="location">Location:</label>
                                <input type="text" id="location" name="location" placeholder="Enter location">

                                <label for="amenities">Amenities:</label>
                                <textarea id="amenities" name="amenities" placeholder="Enter amenities"></textarea>
                            </div>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                 </div>

                <div class="records table-responsive">

                    <div>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th><span class="las la-sort"></span> IMAGE</th>
                                    <th><span class="las la-sort"></span> HOTEL NAME</th>
                                    <th><span class="las la-sort"></span> PRICE PER PERSON</th>
                                    <th><span class="las la-sort"></span> STAR RATING</th>
                                    <th><span class="las la-sort"></span> TOUR DURATION</th>
                                    <th><span class="las la-sort"></span> LOCATION</th>
                                    <th><span class="las la-sort"></span> AMENITIES</th>
                                    <th><span class="las la-sort"></span> ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                                            <div class="client-info">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $3171
                                    </td>
                                    <td>
                                        $3171
                                    </td>
                                    <td>
                                        $3171
                                    </td>
                                    <td>
                                        $3171
                                    </td>
                                    <td>
                                        $3171
                                    </td>
                                    <td>
                                        19 April, 2022
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span onclick="openPopup('viewPopup')" style="color:blue" class="las la-binoculars"></span>
                                            <div id="viewPopup" class="popup">
                                                <div class="popup-content">
                                                    <!-- Close button -->
                                                    <span class="close" onclick="closePopup('viewPopup')">&times;</span>
                                                    <h2>View Hotel</h2>
                                                    <form action="" method="post">
                                                        <div class="container">
                                                            <div class="image-column">
                                                                <div class="img">
                                                                    <label for="image-url">Image:</label>
                                                                    <img src="img/<?php echo $row['']; ?>" style="width: 200px; height: 150px;">
                                                                </div>
                                                            </div>
                                                            <div class="data-column">
                                                                <div class="text p-4">
                                                                    <div class="form-row">
                                                                        <div class="form-group">
                                                                            <label for="hotel-name">Hotel Name:</label>
                                                                            <input type="text" name="hotel-name" placeholder="Enter hotel name" value="<?php echo$row[''] ?>"required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="price">Price per person:</label>
                                                                            <input type="text" id="price" name="price" placeholder="Enter price" value="<?php echo$row[''] ?>"required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="form-group">
                                                                            <label for="star-rating">Star Rating:</label>
                                                                            <select name="star-rating" value="<?php echo$row[''] ?>"required>
                                                                                <option value="1">1 Star</option>
                                                                                <option value="2">2 Stars</option>
                                                                                <option value="3">3 Stars</option>
                                                                                <option value="4">4 Stars</option>
                                                                                <option value="5">5 Stars</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="tour-duration">Tour Duration:</label>
                                                                            <input type="text" id="tour-duration" name="tour-duration" placeholder="Enter tour duration" value="<?php echo$row[''] ?>"required>
                                                                       </div>
                                                                   </div>
                                                                    <label for="location">Location:</label>
                                                                    <input type="text" id="location" name="location" placeholder="Enter location" value="<?php echo$row[''] ?>"required>

                                                                    <label for="amenities">Amenities:</label>
                                                                    <textarea id="amenities" name="amenities" placeholder="Enter amenities" value="<?php echo$row[''] ?>"required></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <span onclick="openPopup('updatePopup')" style="color:green" class="las la-edit"></span>
                                            <div id="updatePopup" class="popup">
                                                <div class="popup-content">
                                                    <!-- Close button -->
                                                    <span class="close" onclick="closePopup('updatePopup')">&times;</span>
                                                    <!-- Your form HTML content -->
                                                    <h2>Update Hotel</h2>
                                                    <form action="" method="post">
                                                        <div class="img">
                                                            <label for="image-url">Image URL:</label>
                                                            <input type="file" name="image-url" placeholder="Enter image URL" value="<?php echo$row[''] ?>"required>
                                                        </div>
                                                        <div class="text p-4">
                                                            <div class="form-row">
                                                                <div class="form-group">
                                                                    <label for="hotel-name">Hotel Name:</label>
                                                                    <input type="text" name="hotel-name" placeholder="Enter hotel name" value="<?php echo$row[''] ?>"required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="price">Price per person:</label>
                                                                    <input type="text" id="price" name="price" placeholder="Enter price" value="<?php echo$row[''] ?>"required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group">
                                                                    <label for="star-rating">Star Rating:</label>
                                                                    <select name="star-rating" value="<?php echo$row[''] ?>"required>
                                                                        <option value="1">1 Star</option>
                                                                        <option value="2">2 Stars</option>
                                                                        <option value="3">3 Stars</option>
                                                                        <option value="4">4 Stars</option>
                                                                        <option value="5">5 Stars</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tour-duration">Tour Duration:</label>
                                                                    <input type="text" id="tour-duration" name="tour-duration" placeholder="Enter tour duration" value="<?php echo$row[''] ?>"required>
                                                               </div>
                                                           </div>
                                                            <label for="location">Location:</label>
                                                            <input type="text" id="location" name="location" placeholder="Enter location" value="<?php echo$row[''] ?>"required>

                                                            <label for="amenities">Amenities:</label>
                                                            <textarea id="amenities" name="amenities" placeholder="Enter amenities" value="<?php echo$row[''] ?>"required></textarea>
                                                        </div>
                                                        <input type="submit" value="Submit">
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
