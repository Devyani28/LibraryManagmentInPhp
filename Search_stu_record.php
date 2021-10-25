<html>
    <head>
        <link href="img/D2.jpg" rel="icon">
        <link rel="stylesheet" type="text/css" href="d2.css">
        <title>
            Search Student Record In D2 Library
        </title>
    </head>
    <body style="background-image: linear-gradient(#fff 10%,#0000ff)">
<nav>
    <ul>
        <li><a href="Add_Book.php">Add Book</a></li>
        <li><a href="Add_Student.php">Add Student</a></li>
        <li><a href="Modify_stu_record.php">Modify Student</a></li>
        <li><a  class="active" href="Search_stu_record.php">Search Student Record</a></li>
        <li><a href="Search_book_record.php">Search Book Records</a></li>
        <li><a href="Book_issue.php">Book Issue</a></li>
        <li><a href="Delete_book.php">Delete Book</a></li>
        <li><a href="Delete_stu_record.php">Delete Student Record</a></li> 
        <li><a href="Book_return.php">Book Return from student</a></li>
    </ul>
</nav>
        <font size= "6pt" color= "blue">
            <center>
        <font size="6pt" color="hotpink">
            
                <h1>SEARCH STUDENT RECORDS</h1></font>
                                <img src="img/stud.jpeg" height="400" width="1100">
                <br>
<br>
               
                <form name="insert_form" method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <font size="10" color="white"> ENTER ROLL NO: </font><input type="text" name="rn" style="padding: 10px;font-size: 20px;color: white;margin-bottom: 10px;width:400px;width:400px;outline: none;background: transparent;text-align:center"><br><br>
                    <input type="submit" name="bsubmit" id="bsubmit" value="SEARCH RECORD">
                    <input type="submit" name="b2submit" id="b2submit" value="DISPLAY ALL RECORD">
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
                function insert_form()
                {
                    $c=new mysqli("localhost","root","","jo_database_hum_banyange");
                    if($c->connect_error)
                        {
                            die("connection failed".$c->connect_error);
                        }
                    $r=$c->query("select * from stu where rno='".$_GET["rn"]."'");
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
            function display_all()
            {
              $c=new mysqli("localhost","root","","student");
                    if($c->connect_error)
                        {
                            die("connection failed".$c->connect_error);
                        }
                $r=$c->query("select * from stu");

                echo "<table border ='2' cellpadding='3' bgcolor='hotpink' width='95%'align='center'>";
                    echo "<tr>";
                    echo "<th>ROLL NO</th>";
                    echo "<th>NAME</th>";
                    echo "<th>FATHER NAME</th>";
                    echo "<th>ADDRESS</th>";
                    echo "<th>CLASS</th>";
                    echo "<th>CONTACT NO</th>";
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
                        if(isset($_GET["b2submit"]))
                            {
                                display_all();
                            }

            ?>
            </font>
        </center>
    </body>
</html>