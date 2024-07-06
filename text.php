<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Three Section Layout</title>
<!-- <link rel="stylesheet" href="styles.css"> -->
 <style>body {
margin: 0;
font-family: Arial, sans-serif;
}

.container {
display: flex;
}

section {
flex: 1;
position: relative;
}

section img {
width: 100%;
height: 100vh;
object-fit: cover;
}

.left-section {
background-color: #282828;
}

.middle-section {
background-color: #f4f4f4;
}

.right-section {
background-color: #28a745;
}</style>
</head>
<body>
<div class="container">
<section class="left-section">
<img src="concert.jpg" alt="Crowd at Concert">
</section>
<section class="middle-section">
<img src="office.jpg" alt="Office Meeting">
</section>
<section class="right-section">
<img src="collaboration.jpg" alt="Hands Fist Bumping">
</section>
</div>

<!-- <script src="script.js"></script> -->
 <script>document.addEventListener("DOMContentLoaded", function() {
const sections = document.querySelectorAll("section");
sections.forEach(section => {
section.style.opacity = 0;
section.style.transition = "opacity 1s";
setTimeout(() => {
section.style.opacity = 1;
}, 500);
});
});</script>
</body>
</html>