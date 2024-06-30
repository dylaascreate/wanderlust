<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>WonderLust About</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" /> 
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
                       <a href=""class="active">
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
                <h1>About List</h1>
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

                    <a onclick="openPopup('addPopup')"class="button">Add About Content</a>
                    <div id="addPopup" class="popup">
                    <div class="popup-content">
                        <!-- Close button -->
                        <span class="close" onclick="closePopup('addPopup')">&times;</span>

                        <!-- Your form HTML content -->
                        <h2 style="color:black">About Form</h2>
                        <form>
                            <label for="tittle">Title</label>
                            <input type="text" id="title" name="title" placeholder="Your title.." required>

                            <label for="head_line">Headline</label>
                            <input type="text" id="head_line" name="head_line" placeholder="Your headline.." required>

                            <label for="desc">Description</label>
                            <textarea id="desc" name="desc" placeholder="Write something.." required></textarea>

                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
                <div class="records table-responsive">

                    <div>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th><span class="las la-sort"></span> TITTLE</th>
                                    <th><span class="las la-sort"></span> HEADLINES</th>
                                    <th><span class="las la-sort"></span> DESCRIPTION</th>
                                    <th><span class="las la-sort"></span> ACTIONS</th>
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

                                                    <!-- Your form HTML content -->
                                                    <h2>View About</h2>
                                                    <form action="" method="post">
                                                        <label for="tittle">Title</label>
                                                        <input type="text" name="title" placeholder="Your title.." value="<?php echo$row[''] ?>"required>

                                                        <label for="head_line">Headline</label>
                                                        <input type="text" name="head_line" placeholder="Your headline.." value="<?php echo$row[''] ?>"required>

                                                        <label for="desc">Description</label>
                                                        <textarea type="text" name="desc" placeholder="Write something.." value="<?php echo$row[''] ?>"required></textarea>

                                                        <input type="submit" value="Submit">
                                                    </form>
                                                </div>
                                            </div>
                                            <span onclick="openPopup('updatePopup')" style="color:green" class="las la-edit"></span>
                                            <div id="updatePopup" class="popup">
                                                <div class="popup-content">
                                                    <!-- Close button -->
                                                    <span class="close" onclick="closePopup('updatePopup')">&times;</span>

                                                    <!-- Your form HTML content -->
                                                    <h2>Update About</h2>
                                                    <form action="" method="post">
                                                        <label for="tittle">Title</label>
                                                        <input type="text" name="title" placeholder="Your title.." value="<?php echo$row[''] ?>"required>

                                                        <label for="head_line">Headline</label>
                                                        <input type="text" name="head_line" placeholder="Your headline.." value="<?php echo$row[''] ?>"required>

                                                        <label for="desc">Description</label>
                                                        <textarea type="text" name="desc" placeholder="Write something.." value="<?php echo$row[''] ?>"required></textarea>

                                                        <input type="submit" value="Submit">
                                                    </form>
                                                </div>
                                            </div>
                                            <a href="delete-about.php"></a>
                                            <span style="color: red" class="las la-trash"></span>
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
