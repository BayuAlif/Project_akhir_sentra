<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Desain_Cs.css">
</head>

<body>
    <nav>

        <h2 class="logo">BAYSHOP</h2>

        <ul class="Menu">
            <li><a href="Project_Akhir_Sentra.php">Home</a></li>
            <li><a href="Keranjang.php">Transaction</a></li>
            <li><a href="#" class="Action">Guest Book</a></li>
            <li><a href="cu.php">Contact Us</a></li>
            <li><a href="Form_login.php">Sign Up</a></li>
        </ul>
    </nav>


    <section class="bgron">
        <div class="contactus">
            <div class="title">
                <h2>Get In Touch</h2>
            </div>
            <div class="box">
                <div class="contact form">
                    <h3>Send a Message</h3>
                    <form method="POST" action="panggilcs.php">
                        <div class="formBox">
                            <div class="row50">
                                <div class="inputBox">
                                    <label>First Name</label>
                                    <input name="first-name" type="text" placeholder="Bayu">
                                </div>
                                <div class="inputBox">
                                    <label>Last Name</label>
                                    <input name="last-name" type="text" placeholder="Hina">
                                </div>
                            </div>
                            <div class="row50">
                                <div class="inputBox">
                                    <label>Email</label>
                                    <input name="email" type="text" placeholder="example@gmail.com">
                                </div>
                                <div class="inputBox">
                                    <label>Mobile</label>
                                    <input name="mobile" type="text" placeholder="+62 800 000 0000">
                                </div>
                            </div>
                            <div class="row100">
                                <div class="inputBox">
                                    <label>Message</label>
                                    <textarea name="message" placeholder="Give us some message...."></textarea>
                                </div>
                            </div>
                            <div class="row100">
                                <div class="inputBox">
                                    <input  type="submit" value="Send">

                                </div>
                            </div>

                           


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>