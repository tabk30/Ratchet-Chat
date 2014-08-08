<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ratchet;
include '../Ratchet/App.php';

$ratchet = new App( "localhost", 8080, "192.168.80.129", true);
$ratchet->run();
