<?php
$servername ="DESKTOP-30MIP9E";
$connection = [ "Database" =>"php_crud",
                "Uid" =>"",
                "PWD" =>""
];
$conn = sqlsrv_connect($servername,$connection);
if($conn==false)
    die(print_r(sqlsrv_errors(),true));
 else echo"connected successfully!";

    


?>