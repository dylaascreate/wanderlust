<?php
// Database connection setup
$conn = new mysqli('host', 'username', 'password', 'database');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$hotel_id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$sqlHotel = "SELECT
                h.name, h.location, h.price, h.image_url, h.star_rating, h.days, h.amenities as hotel_amenities
            FROM hotels h
            WHERE h.id = ?";

$stmtHotel = $conn->prepare($sqlHotel);
$stmtHotel->bind_param('i', $hotel_id);
$stmtHotel->execute();
$resultHotel = $stmtHotel->get_result();

if ($resultHotel->num_rows > 0) {
    $hotel = $resultHotel->fetch_assoc();
    $title = $hotel['name']; // Set hotel name for the title
} else {
    echo "No details found for this hotel.";
    exit;
}
$stmtHotel->close();

// Fetch rooms for the specific hotel
$sqlRooms = "SELECT room_type, price, bath, bed, wifi, image_url FROM rooms WHERE hotel_id = ?";
$stmtRooms = $conn->prepare($sqlRooms);
$stmtRooms->bind_param('i', $hotel_id);
$stmtRooms->execute();
$resultRooms = $stmtRooms->get_result();

$rooms = [];
if ($resultRooms->num_rows > 0) {
    while ($row = $resultRooms->fetch_assoc()) {
        $rooms[] = $row;
    }
}
$stmtRooms->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($title); ?></title>
    <!-- Include other head elements as needed -->
</head>
<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Our Rooms</span>
                    <h2 class="mb-4">Explore Our Rooms</h2> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                <?php foreach ($rooms as $room): ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo htmlspecialchars($room['image_url']); ?>" alt="">
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$<?php echo htmlspecialchars($room['price']); ?>/Night</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="justify-content-between mb-3">
                                <h5 class="mb-0"><?php echo htmlspecialchars($room['room_type']); ?></h5>
                                <div class="ps-2">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <small class="fa fa-star text-primary"></small>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <small class="border-end me-2 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo htmlspecialchars($room['bed']); ?> Bed</small>
                                <small class="border-end me-2 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo htmlspecialchars($room['bath']); ?> Bath</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i><?php echo htmlspecialchars($room['wifi'] == 'yes' ? 'Wifi' : 'No Wifi'); ?></small>
                            </div>
                            <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <div class="justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="javascript:void(0);" onclick="alertUserLogin()">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>
</html>
