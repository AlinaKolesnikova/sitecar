<?php
function get_dt_avto(){
	global $mysqli;
    $sql= 'SELECT * FROM tb_kompany';
    $result = mysqli_query($mysqli,$sql);
    $tb_kompany = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo mysqli_error($mysqli);
    return $tb_kompany;
}
?>
