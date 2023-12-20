<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <link rel="stylesheet" href="./css/Contactus.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="img/logo.png" class="logo">
            <ul>
            <li><a href="postlogin.php">Home Page</a></li>
            <li><a href="Aboutus.php">About Us</a></li>
            <li><a href="#">All Bus Information</a></li>
            <li><a href="Contactus.php">Contact Us</a></li>
            <li><a href="index.php">Log Out</a></li>
            </ul>
        </div>
        <div class="container">
        <form action="index.php" method="post">
            <label for="Fname">First Name</label>
            <input type="text" id="Fname" name="Firstname" placeholder="Your Name..">
            <br>
            <label for="Lname">Last Name</label>
            <input type="text" id="Lname" name="Lastname" placeholder="Your Last name..">
            <br>
            <label for="country">Country</label>
            <Select id="country" name="country">
                <option value="australia">AUSTRALIA</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                </select>
                <br>
                <label for="subject">subject</label>
                <textarea name="suject" id="subject" placeholder="Write something.." style="hieght: 200px;"></textarea><br>
                <input type="submit" value="Submit">
            </form>
            </div>
            <div class="content">
                <p>JSW Centre
Bandra Kurla Complex, <br>
Near MMRDA Grounds, Bandra East,<br>
Mumbai 400 051<br>
 
+91 22 4286 1000<br>
 
+91 22 4286 3000<br>
JSW Steel - 1800 225 225<br>

JSW Cement  1800 266 266 1</p>
            </div>
</div>

    
</body>
</html>