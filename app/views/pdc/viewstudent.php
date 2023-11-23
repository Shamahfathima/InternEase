<?php 
    session_start();
    if(!isset($_SESSION['user_id']))
    {
        header('Location: login.php');
    }
?>

<?php 
    include_once('../../controllers/connection.php');
    $id=$_GET['id'];
    $query="SELECT * FROM student where id='{$id}'";
    $result=mysqli_query($connection,$query);
    if($result)
    {
        $user=mysqli_fetch_assoc($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/main2.css">
    <link rel="stylesheet" href="../../../public/css/app.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Edit Student</title>
</head>
<body>
    <div class="main-div">
        <div class="leftpart">
            <img src="../../../public/images/InternEaseLogo.png" alt="" class="img1">
            <h1>Internship</h1>
            <h1>Management</h1>
            <h1>System</h1>
            <img src="../../../public/images/image.png" alt="" class="img2">                
        </div> 
        <div class="rightpart">
            <form class="box" action="../../controllers/updatestudent_controller.php" method="post">
                <h2>Welcome to InternEase</h2>
                    <input type="number" name="id" hidden value="<?php echo $user['id']; ?>"/>
        
                <p class="label1">First Name:<br></p>
                    <input type="text" required name="first_name" value="<?php echo $user['first_name']; ?>" placeholder="Enter your first name" class="box1">
                <p class="label1">Last Name:<br></p>
                    <input type="text" required name="last_name" value="<?php echo $user['last_name']; ?>" placeholder="Enter your last name" class="box2">
                <p class="label1">Reg.No:<br></p>
                    <input type="text" required name="reg_no" value="<?php echo $user['reg_no']; ?>"  placeholder="Enter your Reg.No" class="box1">
                <p class="label1">Index No:<br></p>
                    <input type="text" required name="index_no" value="<?php echo $user['index_no']; ?>"  placeholder="Enter your index no" class="box2">
                <p class="label1">Email:<br></p>
                    <input type="email" required name="email" value="<?php echo $user['email']; ?>"  placeholder="Enter your email" class="box1">
                
                <div class="submit" align="center">
                    <button id="signup_btn" name="submit" type="submit">Save</button>
                </div>
                
            
            </form>
        </div>
    </div>
</body>
</html>