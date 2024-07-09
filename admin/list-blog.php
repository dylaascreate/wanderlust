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
                       <a href="list-hotel.php">
                            <span class="las la-hotel"></span>
                            <small>Hotel</small>
                        </a>
                    </li>
                    <li>
                       <a href=""class="active">
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
                <div class="header-content">
                    <div class="title-section">
                        <h1>Blog List</h1>
                        <small>WanderLust</small>
                    </div>
                    <div class="nav-section">
                        <nav>
                            <ul>
                                <li><a class="hover-effect" href="feedback.php"><i class="las la-comments"></i>&nbsp;Feedback</a></li>
                        </nav>
                    </div>
                </div>
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

                <a onclick="openPopup('addPopup')"class="button">Add Blog Content</a>
                    <div id="addPopup" class="popup">
                    <div class="popup-content">
                        <!-- Close button -->
                        <span class="close" onclick="closePopup('addPopup')">&times;</span>
                        <!-- Your form HTML content -->
                        <h2 style="color:black">Blog Form</h2>
                        <form action="" method="post">
                            <div class="blog-entry justify-content-end">
                                <div class="block-20">
                                    <label for="image-url">Image URL:</label>
                                    <input type="text" id="image-url" name="image-url" placeholder="Enter background image URL">
                                </div>
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4 topp">
                                        <label for="blog-title">Blog Title:</label>
                                        <input type="text" id="blog-title" name="blog-title" placeholder="Enter blog title">
                                        <label for="day">Day:</label>
                                        <input type="number" id="day" name="day" placeholder="Enter day">
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="year">Year:</label>
                                                <input type="text" id="year" name="year" placeholder="Enter year">
                                            </div>
                                            <div class="form-group">
                                                <label for="month">Month:</label>
                                                <input type="text" id="month" name="month" placeholder="Enter month">
                                            </div>
                                        </div>
                                        <label for="blog-description">Blog Description:</label>
                                        <textarea id="blog-description" name="blog-description" placeholder="Enter blog description"></textarea>
                                    </div>
                                </div>
                                <input type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="records table-responsive">

                    <div>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th><span class="las la-sort"></span> IMAGE</th>
                                    <th><span class="las la-sort"></span> DAY</th>
                                    <th><span class="las la-sort"></span> YEAR</th>
                                    <th><span class="las la-sort"></span> MONTH</th>
                                    <th><span class="las la-sort"></span> BLOG TITTLE</th>
                                    <th><span class="las la-sort"></span> BLOG DESCRIPTION</th>
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
                                        19 April, 2022
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span onclick="openPopup('viewPopup')" style="color:blue" class="las la-binoculars"></span>
                                            <div id="viewPopup" class="popup">
                                                <div class="popup-content">
                                                    <!-- Close button -->
                                                    <span class="close" onclick="closePopup('viewPopup')">&times;</span>
                                                    <h2>view Blog</h2>
                                                    <form>
                                                        <div class="container">
                                                            <div class="image-column">
                                                                <div class="block-20">
                                                                    <label for="image-url">Image:</label>
                                                                    <img src="img/<?php echo $row['']; ?>" style="width: 200px; height: 150px;">
                                                                </div>
                                                            </div>
                                                            <div class="data-column">
                                                                <div class="text">
                                                                    <div class="d-flex align-items-center mb-4 topp">
                                                                        <label for="blog-title">Blog Title:</label>
                                                                        <input type="text" name="blog-title" placeholder="Enter blog title" value="<?php echo$row[''] ?>"required>
                                                                        <label for="day">Day:</label>
                                                                        <input type="number" name="day" placeholder="Enter day" value="<?php echo$row[''] ?>"required>
                                                                        <div class="form-row">
                                                                            <div class="form-group">
                                                                                <label for="year">Year:</label>
                                                                                <input type="text" name="year" placeholder="Enter year" value="<?php echo$row[''] ?>"required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="month">Month:</label>
                                                                                <input type="text"  name="month" placeholder="Enter month" value="<?php echo$row[''] ?>"required>
                                                                            </div>
                                                                        </div>
                                                                        <label for="blog-description">Blog Description:</label>
                                                                        <textarea name="blog-description" placeholder="Enter blog description" value="<?php echo$row[''] ?>"required></textarea>
                                                                    </div>
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

                                                    <h2>Update Blog</h2>
                                                    <form action="" method="post">
                                                        <div class="blog-entry justify-content-end">
                                                            <div class="block-20">
                                                                <label for="image-url">Image URL:</label>
                                                                <input type="file" name="image-url" placeholder="Enter background image URL" value="<?php echo$row[''] ?>"required>
                                                            </div>
                                                            <div class="text">
                                                                <div class="d-flex align-items-center mb-4 topp">
                                                                    <label for="blog-title">Blog Title:</label>
                                                                    <input type="text" name="blog-title" placeholder="Enter blog title" value="<?php echo$row[''] ?>"required>
                                                                    <label for="day">Day:</label>
                                                                    <input type="number" name="day" placeholder="Enter day" value="<?php echo$row[''] ?>"required>
                                                                    <div class="form-row">
                                                                        <div class="form-group">
                                                                            <label for="year">Year:</label>
                                                                            <input type="text" name="year" placeholder="Enter year" value="<?php echo$row[''] ?>"required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="month">Month:</label>
                                                                            <input type="text"  name="month" placeholder="Enter month" value="<?php echo$row[''] ?>"required>
                                                                        </div>
                                                                    </div>
                                                                    <label for="blog-description">Blog Description:</label>
                                                                    <textarea name="blog-description" placeholder="Enter blog description" value="<?php echo$row[''] ?>"required></textarea>
                                                                </div>
                                                            </div>
                                                            <input type="submit" value="Submit">
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
