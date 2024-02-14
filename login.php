<?php include_once "templates/header.php"; ?>
    
    <main>
        <div id="container">
            <?php include_once "templates/nav.php"; ?>
            <section>
                <h1>Login</h1>
                <form action="includes/login.inc.php" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="username" placeholder="John Doe">
                    <label for="floatingInput">Username/Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-primary" name="submit" type="submit">Button</button>
                </form>
                <br />
                <?php
                if(isset($_GET["error"])) {
                    if($_GET["error"] == "emptyinput") {
                        echo "<p>Fill in all fields!</p>";
                    }
                    else if($_GET["error"] == "invaliduid") {
                        echo "<p>Choose a proper username!</p>";
                    }
                    else if($_GET["error"] == "invalidemail") {
                        echo "<p>Choose a proper email!</p>";
                    }
                    else if($_GET["error"] == "stmtfailed") {
                        echo "<p>Something went wrong, try again!</p>";
                    }
                    else if($_GET["error"] == "none") {
                        echo "<p>You have logged in!</p>";
                    }
                    else if($_GET["error"] == "wronglogin") {
                        echo "<p>Incorrect login information!</p>";
                    }
                }
                ?>
            </section>
            <aside></aside>
        </div>
    </main>