<pre>
<?php
include '/home/Vignesh/htdocs/NFT/includer.php';
$pass=$_POST['password'];
print(PassMang::Passwd_verf($pass));
if((PassMang::Passwd_verf($pass))=='sucess'){
    print_r($_SERVER);
    print_r($_ENV);
    print_r($_COOKIE);
} elseif((PassMang::Passwd_verf($pass))=='Login fail due to : ###add reson here'){
    ?>
    <form action="auth.php" method="POST">
    <input type="password" name="password" placeholder="passwd">
    <input style="align-items: center" type="submit" value="Submit">
    <?php
}
?>
</pre>
