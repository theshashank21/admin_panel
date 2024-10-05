<?php

require('../common/master.php');
global $admin_username;
global $user_role;
global $profile_img;

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
    $ad_email = test_data($_POST['ad_email']);
    $ad_pass = test_data($_POST['ad_pass']);

    // Prepare the SQL query using placeholders to prevent SQL injection
    $sql = "SELECT * FROM tbl_admin WHERE admin_email = :admin_email AND admin_password = :admin_password LIMIT 1";

    try {
        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind parameters to the prepared statement
        $stmt->bindParam(':admin_email', $ad_email);
        $stmt->bindParam(':admin_password', $ad_pass);

        // Execute the statement
        $stmt->execute();

        // Check if any rows were returned
        if ($stmt->rowCount() > 0) {
            // Successful login, redirect to index page
            header('location: ../index.php');
            exit;

            /////////////////////////////////////////////
            // $role_img_sql = "SELECT admin_username, user_role, profile_img FROM tbl_admin WHERE admin_email = :admin_email AND admin_password = :admin_password LIMIT 1";
            // $stmt = $conn->prepare($role_img_sql);

            // // Bind the parameters again
            // $stmt->bindParam(':admin_email', $ad_email);
            // $stmt->bindParam(':admin_password', $ad_pass);

            // // Execute the statement
            // $stmt->execute();

            // // Fetch the user role and profile image
            // $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // if ($user) {
            //     $admin_username = $user['admin_username'];
            //     $user_role = $user['user_role'];
            //     $profile_img = $user['profile_img'];
            //     // You can now use $user_role and $profile_img as needed
            //     // header('location: ../index.php');
            //     // exit;
            //     // echo "<br>";
            //     // echo $admin_username;
            //     // echo "<br>";
            //     // echo $user_role;
            //     // echo "<br>";
            //     // echo $profile_img;
            // }
            ///////////////////////////

        } else {
            // Invalid email or password
            $_SESSION['message'] = "<center>Invalid Email or Password</center>";
            header('location: ../login.php');
            exit;
        }
    } catch (PDOException $e) {
        // Handle any errors
        $_SESSION['message'] = "<center>Error: " . $e->getMessage() . "</center>";
        header('location: ../login.php');
        exit;
    }
}
