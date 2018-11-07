<?php
$hash = crypt("ramakrishna","ramakrishna");
echo"$hash";
if (password_verify('ramakrishna', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>