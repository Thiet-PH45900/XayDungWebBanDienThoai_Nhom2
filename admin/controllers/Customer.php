<?php

if (!function_exists('getCustomerByEmailAndPassword')) {
    function getCustomerByEmailAndPassword($email, $password)
    {
        $sql = "SELECT * FROM tb_nguoi_dung WHERE email = :email AND mat_khau = :password";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);

        $stmt->execute();

        return $stmt->fetch();
    }
}
