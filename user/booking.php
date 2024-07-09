<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking Form</title>
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
                    <p class="breadcrumbs"><span class="mr-2"><a href="index-user.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Booking <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Hotel Booking</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="booking" class="ftco-section">
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
                    <button type="submit" class="btn btn-primary btn-delete">Book Now</button>
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
