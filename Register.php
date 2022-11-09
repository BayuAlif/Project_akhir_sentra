<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Desain_Register.css">
</head>

<body>
    <nav>

    <a href="Project_Akhir_Sentra.php"><h2 class="logo">BAYSHOP</h2></a>

        <ul class="Menu">
            <li><a href="Project_Akhir_Sentra.php">Home</a></li>
            <li><a href="Keranjang.php">Transaction</a></li>
            <li><a href="cs.php">Guest Book</a></li>
            <li><a href="Cu.php">Contact Us</a></li>
            <li><a href="Form_login.php" class="Action">Sign Up</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="title">Registration</div>

        <form action="#">
            <div class="input-box">
                <div class="user-details">
                    <span>Full Name</span>
                    <input type="text" placeholder="Enter full name" required>
                </div>
                <div class="user-details">
                    <span>Email</span>
                    <input type="text" placeholder="Enter email" required>
                </div>
                <div class="user-details">
                    <span>Password</span>
                    <input type="text" placeholder="Enter password" required>
                </div>
                <div class="user-details">
                    <span>Date Of Birth</span>
                    <input type="date">
                </div>
                <div class="user-details">
                    <span>Gender</span>
                    <select name="gender" id="gender" style="border: black solid 2px">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="pnts">Prefer not to say</option>
                    </select>
                </div>
                <div class="user-details">
                    <span>Username</span>
                    <input type="text" placeholder="Enter username" required>
                </div>
                <div class="user-details button">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </div>
    </div>
    </form>
    </div>
</body>

</html>