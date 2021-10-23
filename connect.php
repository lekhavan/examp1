<?php
        //$conn = mysqli_connect('localhost', 'root', '', '1111') or die("Can not connect database".mysqli_connect_error());
    $Connect = pg_connect("postgres://yjskneehcmlnxm:81b5d94761ed03ef438ccd27d59c08ae49fa6fc22edd056f6b480e924f3250a4@ec2-18-234-15-247.compute-1.amazonaws.com:5432/d59lc7bqu8ei07");
    if (!$Connect) {
        die("Connection failed");
    }
?>