<!DOCTYPE html>
<html>
<head>
    <title>Account Dashboard</title>
    <link href="assets/css/styles1.css" media="all" rel="stylesheet">
</head>
<body>
    <div class="profile-card">

        <?php
        session_start();
        if (!isset($_SESSION['form_data'])) {
            header("Location: index.php");
            exit;
        }
        $formData = $_SESSION['form_data'];
        ?>

        <?php
        $birthdate = new DateTime($formData['birthdate']);
        $today = new DateTime();
        $age = $today->diff($birthdate)->y;
        ?>
        
        <h1>Welcome, <?php echo htmlspecialchars($formData['first_name']); ?>!</h1>
        <p>Your account has been successfully created.</p>
        
        <div class="profile-info">
<p><span class="info-label">Name:</span> 
            <?php 
    echo htmlspecialchars($formData['first_name'] . ' ' . 
                         ($formData['middle_name'] ?? '') . ' ' . 
                          $formData['last_name']); 
            ?>
            </p>
            <p><span class="info-label">Birthdate:</span> <?php echo htmlspecialchars($formData['birthdate']); ?></p>
            <p><span class="info-label">Age:</span> <?php echo $age; ?> years</p>
            <p><span class="info-label">Address:</span> <?php echo htmlspecialchars($formData['address']); ?></p>
            <p><span class="info-label">Email:</span> <?php echo htmlspecialchars($formData['email']); ?></p>
            <p><span class="info-label">Phone Number:</span> <?php echo htmlspecialchars($formData['number']); ?></p>
            <p><span class="info-label">Member Since:</span> <?php echo date('F j, Y'); ?></p>
        </div>
    </div>
</body>
</html>