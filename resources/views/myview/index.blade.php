@extends('template.default')

@section('title','my view')
@section('content')
<h1>My view</h1>
<?php
    echo "My view Content";
    echo "<br>";
    echo "Line 2";
    ?>
    <br>
    <?php
     $myval = "Hello PHP";
    ?>
    <br>
    <?php
     $myval = "A";
     $myVal = "B";

     for ($i=0; $i <10; $i++){
        echo $myval++;
        echo"<br>";
     }

    function myFunction(){
        return "My Function Called";
     }

     echo myFunction();
     echo $myval;
    ?>
@endsection
