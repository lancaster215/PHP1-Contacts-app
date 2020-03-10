<?php
    if(!isset($_SESSION['u_id'])){
        echo '<form action="./actions/signup.php" method="POST">
                <label class="label" for="first">First Name:</label>
                <input class="input black" type="text" name="first" placeholder="First Name" required><br/><br/>
                <label class="label" for="middle">Middle Name:</label>
                <input class="input black" type="text" name="middle" placeholder="Middle Name" required><br/><br/>
                <label class="label" for="last">Last Name:</label>
                <input class="input black" type="text" name="last" type="text" placeholder="Surename" required><br/><br/>
                <label class="label" for="address">Address:</label>
                <input class="input black" type="text" name="address" type="text" placeholder="Address" required><br/><br/>
                <label class="label" for="contact">Contact Number:</label>
                <input class="input black" type="text" name="contact" type="text" placeholder="Number" required><br/><br/>
                <label class="label" for="pass">Password:</label>
                <input class="input black" type="password" name="pass" type="text" placeholder="Password" required><br/><br/>
                <div class="center">
                    <input type="submit" name="submit" class="submit-btn" value="Register">
                </div>
            </form>';
    }
?>