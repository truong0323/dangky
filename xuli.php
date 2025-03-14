<?php

 $connect = mysqli_connect('localhost', 'root', '', 'baithuchanhweb') or die('Không thể kết nối tới database');
 mysqli_set_charset($connect, 'UTF8');
 
 
 if ($connect === false) {
     die("ERROR: Could not connect. " . mysqli_connect_error());
 } else {
     echo 'Kết nối DB thành công!';
 }

if (isset($_POST['form-login'])) {
   

    
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = $_POST['password'];

    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ thông tin";
    } else {
        
        $query = "SELECT username, password FROM user WHERE username='$username'";
        $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

        if (mysqli_num_rows($result) == 0) {
            echo "Tên đăng nhập không đúng!";
        } else {
            // Fetch the user data
            $row = mysqli_fetch_array($result);
            
            // Check if the password matches (assuming password is hashed)
            if (!password_verify($password, $row['password'])) {
                echo "Mật khẩu không đúng. Vui lòng nhập lại.";
            } else {
                // Start a session and save the username
                session_start();
                $_SESSION['username'] = $username;
                
                // Redirect to a new page after login
                echo "Xin chào <b>" . $username . "</b>. Bạn đã đăng nhập thành công. <a href='logout.php'>Thoát</a>";
                die();
            }
        }
    }

    // Close the database connection
    mysqli_close($connect);
}




        

    // Dùng isset để kiểm tra Form
    if (isset($_POST['dangky'])) {
        // Kết nối cơ sở dữ liệu
        $conn = mysqli_connect('localhost', 'root', '', 'baithuchanhweb');
        if (!$conn) {
            die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
        }
    
        // Nhận và làm sạch dữ liệu từ form
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $password_again = trim($_POST['password-again']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        
        // Mảng lưu lỗi
        $errors = [];
    
        // Kiểm tra các trường bắt buộc
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($phone)) {
            array_push($errors, "Phone is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
        if (empty($password_again)) {
            array_push($errors, "Repeat password is required");
        }
        if ($password != $password_again) {
            array_push($errors, "Passwords do not match");
        }
    
        // Kiểm tra xem username hoặc email đã tồn tại chưa
        if (count($errors) === 0) {
            $sql_check = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
            $result_check = mysqli_query($conn, $sql_check);
    
            if (mysqli_num_rows($result_check) > 0) {
                array_push($errors, "Username or email already exists");
            }
        }
    
        // Nếu có lỗi, hiển thị lỗi và dừng lại
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo '<script language="javascript">alert("'.$error.'");</script>';
            }
            die();
        }
    
        // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
        // Thực thi câu lệnh để thêm người dùng mới vào cơ sở dữ liệu
        $sql_insert = "INSERT INTO user (username, password, email, phone) VALUES ('$username', '$hashed_password', '$email', '$phone')";
    
        if (mysqli_query($conn, $sql_insert)) {
            echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="index.php";</script>';
            
        } else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
        }
    
        // Đóng kết nối cơ sở dữ liệu
        mysqli_close($conn);
    }
?>





