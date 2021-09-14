<?php

    require_once 'classes/CovidData.class.php';
    require_once 'classes/DisplayTable.class.php';

    $data = new CovidData();
    $display = new DisplayTable();

    echo $display->display($data->getDataList());
