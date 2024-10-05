<?php

require('../common/master.php');

ob_start();
session_start();

function test_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {
    $ad_userid = test_data($_POST['ad_userid']);
    $ad_username = test_data($_POST['ad_username']);
    $ad_email = test_data($_POST['ad_email']);
    $ad_phone = test_data($_POST['ad_phone']);
    $ad_usertype = test_data($_POST['ad_usertype']);
    $ad_country = test_data($_POST['ad_country']);

    // Prepare the SQL query using placeholders
    $sql = "INSERT INTO tbl_purplefree_user 
            (user_id, user_name, user_email, user_phone, user_type, user_country) 
            VALUES (:user_id, :user_name, :user_email, :user_phone, :user_type, :user_country)";

    try {
        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind parameters to the prepared statement
        $stmt->bindParam(':user_id', $ad_userid);
        $stmt->bindParam(':user_name', $ad_username);
        $stmt->bindParam(':user_email', $ad_email);
        $stmt->bindParam(':user_phone', $ad_phone);
        $stmt->bindParam(':user_type', $ad_usertype);
        $stmt->bindParam(':user_country', $ad_country);

        // Execute the statement
        if ($stmt->execute()) {
            $_SESSION['color'] = 'success';
            $_SESSION['message'] = "<center><h4>New user added successfully!!</h4></center>";
            $_SESSION['alert_timer'] = 2000;
            header('location: ../register.php');
            exit;
        }
    } catch (PDOException $e) {
        $_SESSION['color'] = 'danger';
        $_SESSION['message'] = "<center><h4>Error in Submission</h4></center><center>" . $e->getMessage() . "</center>";
        $_SESSION['alert_timer'] = 4000;
        header('location: ../register.php');
        exit;
    }
}
