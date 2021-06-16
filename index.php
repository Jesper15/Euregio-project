<html>
<head>

<!--Bootstrap file link-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<style>

#button {
margin: 4px;
}

#container{
 
    position: absolute;
  top: 25%;
  right: 25%;
  left: 25%;
  width: 40%;
  height: 40%;
  border: 5px solid #3340b5;

}
</style>

</head>



<?php
require "include/db.php";
include "include/header.php";
?>

<!--Linking to the send.php file-->

<body>
<div id="container">
<form action="include/send_st.php" method="POST" class="formpage">

    <!--Parking title-->

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"><legend>Parking</legend></div>
    <div class="col-md-4"></div>
   </div>

    <!--Licenceplate field-->

    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <label for="lplate" class="form-label">licenceplate</label>
      <input type="text" id="lplate" class="form-control" placeholder="licenceplate" name="lplate">
    </div>

   <!--Seasonticket ID field-->

    <div class="col-md-4"></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <label for="lplate" class="form-label">seasonticket id</label>
      <input type="text" id="sticket" class="form-control" placeholder="id" name="sticket">
    </div>

        <!--Entry date field-->

    <div class="col-md-4"></div>
        </div>
        <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <label for="lplate" class="form-label">entrydate</label>
      <input type="date" id="edate" class="form-control" placeholder="yyyy-mm-dd" name="Entry-date">
    </div>
    <div class="col-md-4"></div>
    </div>

    <!--Submit button-->

    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"><button type="submit" id="button" class="btn btn-primary" value="Submit">Submit</button></div>
    <div class="col-md-4"></div>
   </div>
  
  </fieldset>
</form>
</div>
  </body>