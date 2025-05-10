<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Sign Up</title>
        <link href="assets/css/styles.css" media="all" rel="stylesheet">
    </head>
    <body>
        <div class="container">
    <h2>Get started with your account</h2>
    <form method="post">
        <label for="first-name">First Name</label>
        <input type="text" class="text" id= "first-name" name="first_name" required>

        <label for="middle-name">Middle Name</label>
        <input type="text" class="text" id= "middle-name" name="middle_name" required>

        <label for="last-name">Last Name</label>
        <input type="text" class="text" id= "last-name" name="last_name" required>

        <label for="birthdate">Birthdate</label>
        <input type="date" id= "birthdate" name="birthdate" required>

        <label for="address">Address</label>
        <input type="text" class="text" id= "address" name="address" required>

        <label for="email">Email</label>
        <input type="email" id= "gmail" name="gmail" required>

        <label for="number">Number</label>
        <input type="tel" class="text" id= "number" name="number" pattern="0-9"{11} placeholder="09260652013" required>

        <label for="mypassword">Password</label>
        <input type="password" id="mypassword" name="password" required>

        <div class="show-password">
            <input type="checkbox" id="showPassword">
            <label for="showPassword">Show Password</label>
        </div>

        <div class="button-container">
            <button type="submit">Register</button>
        </div>
        
    </form>
        </div>
        <script src="assets/js/script.js" defer></script>
    </body>
</html>