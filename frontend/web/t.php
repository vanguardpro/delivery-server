<?php

function getAll()
{
    $ch = curl_init('http://api.delivery.lo/deliveries');
    curl_setopt($ch, CURLOPT_USERPWD, "api:key-2iionxhsy9aq5rpk06i08qvdcwdg5119");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    echo curl_exec($ch);
    curl_close($ch);
}

function get()
{
    $ch = curl_init('http://api.delivery.lo/deliveries/5522ed001346172415000029');
    curl_setopt($ch, CURLOPT_USERPWD, "api:key-2iionxhsy9aq5rpk06i08qvdcwdg5119");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    echo curl_exec($ch);
    curl_close($ch);
}

function add()
{
    $data = array(
        "uid" => "11",
        "reg_id" => "Reg2",
        "lat" => "45.406883799999996",
        "lng" => "-75.8536811000000",
        "created" => "1428328543",
        "gmt" => "1",
        "position" => "offline"
    );
    $ch = curl_init('http://api.delivery.lo/deliveries');
    curl_setopt($ch, CURLOPT_USERPWD, "api:key-2iionxhsy9aq5rpk06i08qvdcwdg5119");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_exec($ch);
    curl_close($ch);
}

function edit()
{
    $data = array(
        "uid" => "11",
        "reg_id" => "Reg22",
        "lat" => "45.406883799999996",
        "lng" => "-75.8536811000000",
        "created" => "1428328543",
        "gmt" => "1",
        "position" => "offline"
    );
    $ch = curl_init('http://api.delivery.lo/deliveries/55244cac134617f80a00002b');
    curl_setopt($ch, CURLOPT_USERPWD, "api:key-2iionxhsy9aq5rpk06i08qvdcwdg5119");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_exec($ch);
    curl_close($ch);
}

function delete()
{
    $ch = curl_init('http://api.delivery.lo/deliveries/55244cac134617f80a00002b');
    curl_setopt($ch, CURLOPT_USERPWD, "api:key-2iionxhsy9aq5rpk06i08qvdcwdg5119");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_exec($ch);
    curl_close($ch);
}

getAll();
//delete();
