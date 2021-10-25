<html>
    <head>
        <link href="img/D2.jpg" rel="icon">
        <link rel="stylesheet" type="text/css" href="d2.css">
        <title>
            Book Issue From D2 Library
        </title>
    </head>
    <body style="background-image: linear-gradient(#fff 40%,#000)">
<nav>
    <ul>
        <li><a href="Add_Book.php">Add Book</a></li>
        <li><a href="Add_Student.php">Add Student</a></li>
        <li><a href="Modify_stu_record.php">Modify Student</a></li>
        <li><a href="Search_stu_record.php">Search Student Record</a></li>
        <li><a href="Search_book_record.php">Search Book Records</a></li>
        <li><a href="Book_issue.php">Book Issue</a></li>
        <li><a class="active" href="Delete_book.php">Delete Book</a></li>
        <li><a href="Delete_stu_record.php">Delete Student Record</a></li> 
        <li><a href="Book_return.php">Book Return from student</a></li>
    </ul>
</nav>
        <font size="6pt" color="blue">
            <center>
                <h1>BOOK Record Deletion</h1>
                <center> <img src="img/delet.jpeg" height="450" width="1200"></center>
                <form name="insert_form" method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <font size="10" color="white"> ENTER BOOK NO: </font>  <input type="text" name="bn" style="padding: 10px;font-size: 20px;color: white;margin-bottom: 10px;width:400px;width:400px;outline: none;background: transparent;text-align:center">
                    <br><input type="submit" name="bsubmit" id="bsubmit" value="DELETE BOOK RECORD">
                </form>
            </center>
        </font>
        <div class="logout" style="margin-left: 1096px">
            <a href="loginforproject.html">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <font color="#000">.</font>LogOut<font color="#000">.</font>
            </a>
            <br>
            <br>
        </div>
        <center>
            
            <font color="red" size="10px">
            <?php
    function Delete_BOOK()
    {
        $c=new mysqli("localhost","root","","jo_database_hum_banyange");
        if($c->connect_error)
            {
                die("connection failed".$c->connect_error);
            }
        if($c->query("delete from book_list where BNO='".$_GET["bn"]."'")===TRUE)
            {
                echo "BOOK RECORD SUCCESS FULLY DELETED";
            }
        else
            {
                echo "Error deleting record".$c->error;
            }
            $c->close();
            }
            if(isset($_GET["bsubmit"]))
                {
                    Delete_BOOK();
                }
                
?>
            </font>
        </center>
    </body>
</html>