<?php
if (!function_exists('getSeachProduct')) {

    function getSeachProduct($catalogue_id = null){
        // var_dump($price_min, $price_max);die();
        try {
            $sql = "SELECT * FROM products WHERE 1=1";
            // bẮT ĐẦU truy vấn với điều kiện luôn đúng
            
            // Thêm điều kiện search catalogue 
            if (!empty($catalogue_id)) {
                $sql .= " AND catalogue_id = :catalogue_id";
            }
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            // var_dump($sql);die;

            // bind tham số vào nếu được chỉ định
            if (!is_null($catalogue_id) && $catalogue_id != '') {
                $stmt->bindParam(':catalogue_id', $catalogue_id);
            }
            
            

            // var_dump($sql);die;
                $stmt->execute();
                
                return $stmt->fetchAll();

        } catch (\Exception $e) {
            // debug($e);
        }
    }
}
?>