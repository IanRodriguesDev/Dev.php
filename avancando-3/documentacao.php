<?php

$trans = ["hello" => "hi", "hi" => "Hello"];
echo strtr("hi all, i said hello", $trans);