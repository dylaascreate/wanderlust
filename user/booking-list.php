<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Booking Record</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
                    <h1 class="mb-0 bread">Booking Record</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="booking-list" class="ftco-section">
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

    <script>
        function openPopup(popupId) {
            document.getElementById(popupId).style.display = 'block';
        }

        function closePopup(popupId) {
            document.getElementById(popupId).style.display = 'none';
        }
    </script>

</body>
</html>
