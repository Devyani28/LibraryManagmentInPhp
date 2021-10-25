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
        <li><a href="Delete_stu_record.php">Delete Student Record</a></li> 
        <li><a class="active" href="Book_return.php">Book Return from student</a></li>
    </ul>
</nav>
        <font size="6pt" color="blue">
            <center><br>
                <h1>BOOK RETURN FORM</h1>
                <center>
            <img src="img/student.jpeg" height="550px"> 
        
        
            
                
                <form name="insert_form" method="get" action="book_return.php">
                    <table border="2">
                        <tr>
                            <td align="center" style="color:white">BOOK NO:</td>
                            <td align="center"><input type="text" name="BN" class="inpt"></td>
                        </tr>
                        <tr>
                            <td align="center" style="color:white">Status:</td>
                            <td align="center"><input type="text" name="book_status" class="inpt"></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2"><input type="submit" name="bsubmit" id="bsubmit" value="RETURN BOOK"></td>
                        </tr>
                    </table>
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

function BOOK_RETURN()
    {
        $c=new mysqli("localhost","root","","jo_database_hum_banyange");
        if($c->connect_error)
            {
                die("connection failed".$c->connect_error);
            }
        if($c->query("update book_issue set BOOK_STATUS='".$_GET["book_status"]."'where BNO='".$_GET["BN"]."'")===TRUE)
        /*if($c->query("update FROM book_issue where BNO='".$_GET["BN"]."'")===TRUE)*/
            {
                echo "BOOK RETURN RECORD SAVED SUCCESSFULLY";
            }
        else
            {
                echo "Error : in query execution".$c->error;
            }
            $c->close();
            }
            if(isset($_GET["bsubmit"]))
                {
                    BOOK_RETURN();
                }
?>
            </font>
        </center>
    </body>
</html>