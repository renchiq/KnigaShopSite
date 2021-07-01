<?php

class Purchase
{
    public static function saveTodb($purchaseData)
    {
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO purchase (customer_id, 
                                    customer_name, 
                                    address, 
                                    phone, 
                                    book_list, 
                                    comment, 
                                    payment_type) 
                VALUES (:customer_id, :customer_name, :address, :phone, :book_list, :comment, :payment_type)';

        $jsoned_book_list = json_encode($purchaseData['book_list']);

        $result = $db->prepare($sql);
        $result->bindParam(':customer_id', $purchaseData['customer_id'], PDO::PARAM_INT);
        $result->bindParam(':customer_name', $purchaseData['customer_name'], PDO::PARAM_STR);
        $result->bindParam(':book_list', $jsoned_book_list, PDO::PARAM_STR);
        $result->bindParam(':comment', $purchaseData['comment'], PDO::PARAM_STR);
        $result->bindParam(':payment_type', $purchaseData['payment_type'], PDO::PARAM_STR);
        $result->bindParam(':address', $purchaseData['address'], PDO::PARAM_STR);
        $result->bindParam(':phone', $purchaseData['phone'], PDO::PARAM_STR);


        return $result->execute();
    }
}