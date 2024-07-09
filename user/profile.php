<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <?php
        $title = 'Destination';
        include 'header.php';
    ?>

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index-user.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Profile <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Profile</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-page1" class="ftco-section">
        <div class="container">
            <h2 class="text-center">User Profile</h2>
            <form>
                <div class="form-group profile-image">
                    <img src="https://via.placeholder.com/150" alt="Profile Image" id="profileImage">
                    <input type="file" class="form-control-file" id="profileImageInput" accept="image/*" onchange="loadFile(event)">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password">
                </div>
                <div class="btn-row">
                    <button type="submit" class="btn btn-primary btn-delete">Update Profile</button>
                    <button type="button" class="btn btn-danger btn-delete">Delete</button>
                </div>
            </form>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        var currentPage = 1; // Track current page

        function showPage(page) {
            if (page === 'page1') {
                document.getElementById('section-page1').style.display = 'block';
                document.getElementById('section-page2').style.display = 'none';
                currentPage = 1;
            } else if (page === 'page2') {
                document.getElementById('section-page1').style.display = 'none';
                document.getElementById('section-page2').style.display = 'block';
                currentPage = 2;
            }
        }

        function navigatePage(direction) {
            if (direction === -1 && currentPage > 1) {
                showPage('page' + (currentPage - 1));
            } else if (direction === 1 && currentPage < 2) {
                showPage('page' + (currentPage + 1));
            }
        }

        function loadFile(event) {
            var image = document.getElementById('profileImage');
            image.src = URL.createObjectURL(event.target.files[0]);
            image.onload = function() {
                URL.revokeObjectURL(image.src) // free memory
            }
        }
    </script>
</body>
</html>

