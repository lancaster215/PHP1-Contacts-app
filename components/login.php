<?php
    if(!isset($_SESSION['u_id'])){
        echo'<div class="login-card">
                <div class="login-txt center">
                    <h1>Login
                        <span class="text-type"></span>
                    </h1>
                    <form action="./actions/login.php" method="POST">
                        <label class="label" for="username">Username:</label>
                        <input class="input black" type="text" name="username" placeholder="Username" required><br/><br/>';
        if(isset($_GET['erruser'])){
            echo "<h5 class='error margintop'>Error Username</h5>";
        }
        echo           '<label class="label" for="pass">Password:</label>
                        <input class="input black" type="password" name="pass" placeholder="Password" required><br/><br/>';
        if(isset($_GET['errpass'])){
            echo "<h5 class='error margintop'>Error Password</h5>";
        }
        echo           '<div class="login-box center">
                            <input type="submit" name="submit" value="Login" class="submit-btn"></input><br/><br/>
                        </div>
                    </form>
                </div>';
    }
?>
    <?php include 'register.php'?>
</div>