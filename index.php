<?php
require "include/db.php";


?>

<form action="include/send.php" method="POST" class="formpage">
    <label for="lplate">License plate:</label><br>
        <input type="text" id="lplate" name="lplate"><br>

            <label for="sticket">Season ticket ID:</label><br>
        <input type="text" id="sticket" name="sticket"><br>

            <label for="edate">Entry date:</label><br>
            <input type="text" id="edate" name="Entry-date">




        <!--<input type="date" id="Entry" name="Entry-date"
    value="yyyy-mm-dd"
    min="2021-06-02"><br><br>-->

    <input type="submit" value="Submit" href="include/send.php">
  </form>