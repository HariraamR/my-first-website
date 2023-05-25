<?php

function load_template($file_name)
{
    include "/var/www/html/bharathprecastiik/_templates/$file_name.php";
}
//__DIR__.
function load_html($html_file_name){
    include "htdocs/bharathprecastiik/_templates/$file_name.html";
}
