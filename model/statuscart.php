<?php
function load_all_status(){
    $sql = "select * from status_cart where 1";
    return pdo_query($sql);
}