<?php
    $name = $_POST['fname'];
    $email = $_POST['eaddress'];
    $message = $_POST['mesg'];
    $from = 'From: My Contact Form';
    $to = 'zewebd@gmail.com';
    $subject = 'User Form Data';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if(isset($_POST['sendit'])) {
        if (mail ($to, $subject, $body, $from)) {
        echo "<script type='text/javascript'>alert('message sent successfully');</script>";
        } else {
        echo "<script type='text/javascript'>alert('message failed to send');</script>";
        }
    }
?>

<form method="POST" action="index.php">
    <div class="container contact">
        <div class="row">
            <div class="col6l col6m dhide"> <!-- this class only shows in mobile -->
                <p class="contact-text paragraph mb-2s mb-1xs">
                    Jujubes bear claw croissant wafer sweet lemon drops brownie chocolate bar. Sweet lollipop halvah tootsie roll cake fruitcake.
                    Chocolate cake chocolate bar gingerbread lollipop tart. Jujubes bear claw donut chupa chups.
                </p>
                <ul class="contact-list mb-2xs mb-2s">
                    <li>Dixie State University</li>
                    <li>225 South 700 East</li>
                    <li>St, George, UT(Utah) 84770</li>
                    <li>(435) 652-7500</li>
                </ul>
            </div>
            <div class="col5l col5m col12s col12xs">
                <div class="contact-form mb-2 mb-2s mb-1xs">
                    <label for="contactinput1">Full Name</label>
                    <input type="text" id="contactinput1" class="contact-form-input" placeholder="" name="fname" onblur="namevalidation(fname)">
                    <p id="error1">error message here</p>
                </div>
                <div class="contact-form mb-2s mb-2xs">
                    <label for="contactinput2">Email</label>
                    <input type="email" id="contactinput2" class="contact-form-input" placeholder="" name="eaddress" onblur="emailvalidation(eaddress)">
                    <p id="error2">error message here</p>
                </div>
            </div>
            <div class="col1l col1m"></div>
            <div class="col6l col6m mhide">
                <p class="contact-text paragraph mb-4 mb-2s">
                    Jujubes bear claw croissant wafer sweet lemon drops brownie chocolate bar. Sweet lollipop halvah tootsie roll cake fruitcake.
                    Chocolate cake chocolate bar gingerbread lollipop tart. Jujubes bear claw donut chupa chups.
                </p>
                <ul class="contact-list">
                    <li>Dixie State University</li>
                    <li>225 South 700 East</li>
                    <li>St, George, UT(Utah) 84770</li>
                    <li>(435) 652-7500</li>
                </ul>
            </div>
            <div class="col12l col12m col12s col12xs">
                <div class="contact-form">
                    <label for="contactinput3">Message</label>
                    <textarea id="contactinput3" rows="15" class="contact-form-input" placeholder="" name="mesg"></textarea>
                    <p class="counter"><span id="wordcount">0</span> out of 500 characters</p><p id="error3">error message here</p>
                </div>
            </div>
            <div class="col4l col4m col12s col12xs mb-6">
                <input type="submit" name="sendit" id="submitbtn" class="btn mt-2" value="Message">
            </div>
        </div>
    </div>
</form>