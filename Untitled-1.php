 <?php
        $showForm = true;
        $error = "";

        if ($_SERVER[REQUEST_METHOD"] == "POST"){
        $firstName = $_POST['first_name'];
        $middleName = $_POST['middle_name'];
        $lastName = $_POST['last_name'];
        $birthdate = $_POST['birthdate'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $number = $_POST['number'];

        $birthDateTime = new DateTime($birthdate);
        $today = new DateTime
        $age = $birthDateTime->diff($today)->y;

        if ($age < 18) {
            $error = "you must be at least 18 years old to register.";
            }
        else {

        echo "<h1> Welcome, $firstName!</h1>;
        echo "<p> You are now successfully registered.</p>";
            $showForm = false;
        }
    }
    ?>

    <?php if ($showForm): ?>
        <?php if(!empty($error)) echo "<p class='error'</p>"; ?>