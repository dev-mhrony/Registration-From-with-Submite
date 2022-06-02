<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output || Registration Fom </title>
    <link rel="stylesheet" href="output.css">
</head>

<body>



    <?php
    if (isset($_POST["submit_btn"])) {

        $fastname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $phone = $_POST["phone_number"];
        $post = $_POST["post_code"];
        $dob = $_POST["date_of_birth"];
        $weight = $_POST["kg"];
        $fitnumber = $_POST["fit_number"];
        $inchnumber = $_POST["inch_number"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
    }



    //BMI Fungtion Start


    function bmi($weight, $fitnumber, $inchnumber)
    {
        $hight =  ($fitnumber * 12 + $inchnumber) * 0.0254;
        $final_result = $weight / $hight;
        return $final_result;
    }





    //BMI Fungtion End



    ?>

    <div class="main">

        <div class="profile_photo">
            <img src="01.png" alt="notfound">
        </div>


        <!-- Fast Name & Last Name User Name Start -->
        <div class="name">

            <h2 class="welcome"> Wellcome <?php

                                            echo $fastname . " " . $lastname;

                                            ?>

                <!-- User Name Start-->

                <samp class="username">
                    <?php

                    echo "(" . $username . ")";

                    ?>
                </samp>

                <!-- User Name End-->

            </h2>
        </div>

        <!-- Fast Name & Last Name & User Name Emd -->

        <!-- User Email Start-->
        <div class="email">

            <div class="email_text">
                Email:
            </div>

            <div class="email_imp">

                <?php

                echo $email;

                ?>

            </div>

        </div>

        <!-- User Email End-->

        <!-- User Phone Number Start-->

        <div class="phone_number">

            <div class="phone">
                Phone:
            </div>

            <div class="phone_imp">

                <?php

                echo $phone;

                ?>

            </div>

        </div>

        <!-- User Phone Number End-->


        <!-- User Post Code Start-->

        <div class="post_code">

            <div class="post">
                Postal Code:
            </div>

            <div class="post_imp">

                <?php

                echo $post;

                ?>

            </div>

        </div>

        <!-- User Post Code End-->


        <!-- User Date Of Birth Start-->

        <div class="birth_of_birth">

            <div class="Date">
                Date Of Birth:
            </div>

            <div class="date_msg">

                <?php

                echo $dob;

                ?>

            </div>

        </div>

        <!-- User Date Of Birth End-->


        <!-- User Date Of Birth Start-->

        <div class="bmi_cal">

            <div class="bmi">
                BMI:
            </div>

            <div class="bmi_msg">

                <?php

                echo bmi($_POST["kg"], $_POST["fit_number"], $_POST["inch_number"]);


                ?>



            </div>

        </div>

        <!-- User Date Of Birth End-->

        <!-- User Address Start-->

        <div class="gender">

            <div class="gen_text">
                Gender:
            </div>

            <div class="gender_msg">

                <?php

                echo $gender;

                ?>


            </div>

        </div>

        <!-- User Address End-->




        <!-- User Address Start-->

        <div class="address">

            <div class="addres">
                Address:
            </div>

            <div class="address_imp">

                <?php

                echo $address;

                ?>

            </div>

        </div>

        <!-- User Address End-->


    </div>




</body>

</html>