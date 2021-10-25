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
        <li><a href="Delete_book.php">Delete Book</a></li>
        <li><a class="active" href="Delete_stu_record.php">Delete Student Record</a></li> 
        <li><a href="Book_return.php">Book Return from student</a></li>
    </ul>
</nav>
        <font size="6pt" color="blue">
            <center>
                <h1>Student Record Deletion</h1>
                <center>
            <img src="img/lib.jpg" height="450">
            <br>
    
        
                <form name="insert_form" method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
                    <br>
                    <font size="10" color="white"> ENTER ROLL NO: </font>  <input type="text" name="rn" style="padding: 10px;font-size: 20px;color: white;margin-bottom: 10px;width:400px;width:400px;outline: none;background: transparent;text-align:center">                 
                    <br>
                    <input type="submit" name="bsubmit" id="bsubmit" value="DELETE RECORD">
                </form>
            </center>
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
    function insert_form()
    {
        $c=new mysqli("localhost","root","","jo_database_hum_banyange");
        if($c->connect_error)
            {
                die("connection failed".$c->connect_error);
            }
        if($c->query("delete from stu where rno='".$_GET["rn"]."'")===TRUE)
            {
                echo "RECORD SUCCESS FULLY DELETED"."<br>";
            echo "<br>";
            }
        else
            {
                echo "Error deleting record".$c->error;
            }
        echo "Available record in table";
        $r=$c->query("select * from stu");
        echo "<table border ='2' cellpadding='3' bgcolor='hotpink' width='95%'align='center'>";
        echo "<tr>";
        echo "<th>ROLL NO</th>";
        echo "<th>NAME</th>";
        echo "<th>FATHER NAME</th>";
        echo "<th>ADDRESS</th>";
        echo "<th>CLASS</th>";
        echo "<th>CONTACT</th>";
        echo "<th>DOB</th>";
        echo "</tr>";
        while($row=$r->fetch_assoc())
        {
            echo "<tr>";
                echo "<td>".$row["RNO"]."</td>";
                echo "<td>".$row["NAME"]."</td>";
                echo "<td>".$row["FNAME"]."</td>";
                echo "<td>".$row["ADDRESS"]."</td>";
                echo "<td>".$row["CLASS1"]."</td>";
                echo "<td>".$row["CONTACTNO"]."</td>";
                echo "<td>".$row["DOB"]."</td>";
        echo "</tr>";
        }
            $c->close();
            }
            if(isset($_GET["bsubmit"]))
                {
                    insert_form();
                }
                
?>
            </font>
        </center>
    </body>
</html>