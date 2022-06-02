<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="wrapper">
        <div class="title">
            Registration Form
        </div>

        <form method="POST" action="out.php">

            <div class="form">
                <div class="inputfield">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="Fast Name" class="input">
                </div>
                <div class="inputfield">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Last Name" class="input">
                </div>
                <div class="inputfield">
                    <label>User Name</label>
                    <input type="text" name="username" placeholder="User Name" class="input">
                </div>

                <div class="inputfield">
                    <label>Profile</label>
                    <input type="file" name="file" placeholder="User Name" class="input">
                </div>


                <div class="inputfield">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Email" class="input">
                </div>
                <div class="inputfield">
                    <label>Phone Number</label>
                    <input type="text" name="phone_number" placeholder="Phone Number" class="input">
                </div>

                <div class="inputfield">
                    <label>Postal / Zip Code</label>
                    <input type="te" name="post_code" placeholder="Post Code" class="input">
                </div>
                <div class="inputfield">
                    <label>Date Of Birth</label>
                    <input type="date" name="date_of_birth" class="input">
                </div>

                <div class="inputfield">
                    <label>Hight</label>
                    <samp class="hight_bim">
                        <input type="number" name="kg" placeholder="Wigth" class="input">
                    </samp>
                    <samp class="hight_bim">
                        <input type="number" name="fit_number" placeholder="fit" class="input">
                    </samp>
                    <samp class="hight_bim">
                        <input type="number" name="inch_number" placeholder="Inch" class="input">
                    </samp>
                </div>


                <div class="inputfield">
                    <label>Gender</label>
                    <div class="radio_select">
                        <div class="form-radio">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>

                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>

                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault3" value="Othears">
                            <label class="form-check-label" for="flexRadioDefault3">
                                Others
                            </label>

                        </div>
                    </div>
                </div>

                <div class="inputfield">
                    <label>Address</label>
                    <textarea class="textarea" name="address" placeholder="Address"></textarea>
                </div>

                <div class="inputfield">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password" class="input">
                </div>

                <div class="inputfield terms">
                    <label class="check">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p>Agreed to <a href="hi.php" target="_blank">terms & conditions</a> and <a href="hi.php" target="_blank">Privacy Policy</a> </p>
                </div>
                <div class="inputfield">
                    <input type="submit" name="submit_btn" value="Register" class="btn">
                </div>
            </div>
    </div>

    </form>

</body>

</html>