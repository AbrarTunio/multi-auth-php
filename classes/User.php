<?php 

class User
{

    public static function auth( $conn , $email , $password  ){

        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
        $stmt = mysqli_prepare( $conn , $sql );
        mysqli_stmt_bind_param( $stmt , 'ss' , $email , $password );

        if ( mysqli_stmt_execute( $stmt  )  ){
            $result =  mysqli_stmt_get_result( $stmt );
            if ( !empty( mysqli_fetch_assoc( $result )) ){
                return true;
            }
            return false;
        }

    }


    public static function create($conn , $name , $email , $password ){
        $query = "INSERT INTO users ( name , email , password )
        VALUES( ?, ? , ? )";
        $stmt = mysqli_prepare(  $conn , $query );
        mysqli_stmt_bind_param( $stmt,  'sss' , $name , $email , $password );
        if ( mysqli_stmt_execute( $stmt ) ){
            return true;
        }


    }

}