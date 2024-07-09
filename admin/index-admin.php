<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>WonderLust Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
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
                       <a href="" class="active">
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
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
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

                <a onclick="openPopup('addPopup')"class="button">Add User</a>
                    <div id="addPopup" class="popup">
                    <div class="popup-content">
                        <!-- Close button -->
                        <span class="close" onclick="closePopup('addPopup')">&times;</span>

                        <!-- Your form HTML content -->
                        <h2 style="color:black" >User Form</h2>
                        <form action="" method="post">
                            <label for="image-url">Image</label>
                            <input type="text" id="title" name="title" placeholder="Your image.." required>

                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your name.." required>

                            <label for="id">Id</label>
                            <input type="number" id="id" name="id" placeholder="Your id.." required>

                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Your email.." required>

                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" placeholder="Your username.." required>

                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
                <div class="records table-responsive">

                    <div>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th><span class="las la-sort"></span> CLIENT</th>
                                    <th><span class="las la-sort"></span> ID</th>
                                    <th><span class="las la-sort"></span> EMAIL</th>
                                    <th><span class="las la-sort"></span> USERNAME</th>
                                    <th><span class="las la-sort"></span> ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                                            <div class="client-info">
                                                <h4>Andrew Bruno</h4>
                                                <small>bruno@crossover.org</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $3171
                                    </td>
                                    <td>
                                        19 April, 2022
                                    </td>
                                    <td>
                                        -$205
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span onclick="openPopup('viewPopup')" style="color:blue" class="las la-binoculars"></span>
                                            <div id="viewPopup" class="popup">
                                                <div class="popup-content">
                                                    <!-- Close button -->
                                                    <span class="close" onclick="closePopup('viewPopup')">&times;</span>
                                                    <h2>View User</h2>
                                                    <form>
                                                        <div class="container">
                                                            <div class="image-column">
                                                                <div class="block-20">
                                                                    <label for="image-url">Image URL:</label>
                                                                    <input type="text" name="image-url" placeholder="Enter Client image URL" value="<?php echo$row[''] ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="data-column">
                                                                <label for="name">Client Name:</label>
                                                                <input type="text" name="name" placeholder="Enter client name" value="<?php echo$row[''] ?>" required>
                                                                <label for="id">Id Client:</label>
                                                                <input type="number" name="id" placeholder="Enter client id" value="<?php echo$row[''] ?>" required>
                                                                <label for="email">Email:</label>
                                                                <input type="email" name="email" placeholder="Enter client email" value="<?php echo$row[''] ?>" required>
                                                                <label for="username">Username:</label>
                                                                <input type="text" name="username" placeholder="Enter username" value="<?php echo$row[''] ?>" required>
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

                                                    <h2>Update User</h2>
                                                    <form action="" method="post">
                                                        <div class="blog-entry justify-content-end">
                                                            <div class="block-20">
                                                                <label for="image-url">Image: </label>
                                                                <input type="file" name="image-url" value="<?php echo$row[''] ?>"required>
                                                            </div>
                                                            <div class="text">
                                                                <div class="d-flex align-items-center mb-4 topp">
                                                                    <label for="name">Client Name:</label>
                                                                    <input type="text" name="name" placeholder="Enter client name" value="<?php echo$row[''] ?>"required>
                                                                    <label for="id">Id Client:</label>
                                                                    <input type="number" name="id" placeholder="Enter client id" value="<?php echo$row[''] ?>"required>
                                                                    <div class="form-row">
                                                                        <div class="form-group">
                                                                            <label for="email">Email:</label>
                                                                            <input type="email" name="emil" placeholder="Enter client email" value="<?php echo$row[''] ?>"required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="username">Username:</label>
                                                                            <input type="text"  name="username" placeholder="Enter username" value="<?php echo$row[''] ?>"required>
                                                                        </div>
                                                                    </div>
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
                <div></div>
                <br>
                <h2 style="color:black;">Contact Section</h2>
                <div class="analytics table-responsive"style="width: 400%;">
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th><span class="las la-sort"></span> NAME</th>
                                <th><span class="las la-sort"></span> EMAIL</th>
                                <th><span class="las la-sort"></span> SUBJECT</th>
                                <th><span class="las la-sort"></span> MESSAGE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="client">
                                        <div class="contact-img">
                                            <i class="las la-user-circle"></i>
                                        </div>
                                        <div class="client-info">
                                            <h4>Andrew Bruno</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>bruno@crossover.org</td>
                                <td>Room</td>
                                <td>Nice</td>
                            </tr>
                        </tbody>
                    </table>
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
