<?php
// include('classes/tax.php');
// include('classes/user.php');
require('includes/autoloader.php');
$currentTemp = 4;
$user = "Missisipi";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<? // echo Tax::taxCalc(100, 0.25); ?>
<? // echo Tax::taxCalc(100, 0.06); ?>
<? // echo Tax::addition(5, 5); ?>
<? // if($user == "Missisipi") {
   // echo Tax::celsiusToFahrenheit($currentTemp);
//} ?>

<? 
    $userOne = new User('abde', 'hej@net.net');
    // echo $userOne->email;

    $adminUser = new AdminUser('admin', 'admin@test.nu', 'next-level');
    // $userOne->email = 'apa';
    // print_r($adminUser);
    // echo $userOne->username . '<br>';
    // echo $adminUser->username . '<br>';
    // $userTwo = clone $userOne;
    // echo $userTwo->username;

    // $testUser = new CreateUser('asdf', 'hello@mail.nu');
    // print_r($testUser);

    if(isset($_POST['submit'])) {
        $user = new CreateUser($_POST['username'], $_POST['email']);
        // $user->setUserInfo($_POST['username'], $_POST['email']);

        // $user->saveToDb();
        print_r($user);
        if($user->role ==  'user') {
            echo "Hello $user->username!";
            echo '<a href="somesecretpage.php">Click here!</a>';
        }
        elseif($user->role == 'admin') {
            echo "Hello admin!";
        }
    }

?>
    <h2>Create a new user</h2>
    <form action="<? echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Username">

        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Email">

        <input type="submit" value="submit" name="submit">
    </form>

    <? if($user->role == 'user') {?>
        <h2 class="<? echo $user->role; ?>" style="color: red">Hello <? echo $user->username ?></h2>
    <?} elseif ($user->role == 'admin')  {?>
            <h2 class="<? echo $user->role; ?>" style="color: blue">Hello <? echo $user->username ?></h2>
        <?} 
         ?>
        


</body>
</html>