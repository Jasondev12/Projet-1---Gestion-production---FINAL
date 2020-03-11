<?php

while(true){

    $lots = ["30D219A4","5F45E41D","ZM456C","985D62","CDGH45","AS35KL45","6D59FR4"];

    $dateHeure=date_format(new DateTime(), "Y-m-d H:i:s.u");
    $lotID= $lots[array_rand($lots)];
    $line= $dateHeure.";".$lotID."\n";

    echo $line;
    file_put_contents ( "test.txt" , $line, FILE_APPEND );
    usleep(random_int(300000,2000000));
}