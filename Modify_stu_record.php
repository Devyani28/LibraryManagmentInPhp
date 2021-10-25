<html>
    <head>
        <link href="img/D2.jpg" rel="icon">
        <link rel="stylesheet" type="text/css" href="d2.css">
        <title>
            Modify Student Data In D2 Library
        </title>
    </head>
    <body style="background-image: linear-gradient(#fff 40%,#000)">
<nav>
    <ul>
        <li><a href="Add_Book.php">Add Book</a></li>
        <li><a href="Add_Student.php">Add Student</a></li>
        <li><a class="active" href="Modify_stu_record.php">Modify Student</a></li>
        <li><a href="Search_stu_record.php">Search Student Record</a></li>
        <li><a href="Search_book_record.php">Search Book Records</a></li>
        <li><a href="Book_issue.php">Book Issue</a></li>
        <li><a href="Delete_book.php">Delete Book</a></li>
        <li><a href="Delete_stu_record.php">Delete Student Record</a></li> 
        <li><a href="Book_return.php">Book Return from student</a></li>
    </ul>
</nav>
        <font size= "6pt" color= "blue">
            <center>
                <h1><font color="hotpink">STUDENT DATA MODIFICATION FORM</font></h1> 
                <form name="insert_form" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <table border="2" height="560" width="500">
                        <tr>
                            <td align="center">ROLL NO:</td>
                            <td align="center"><input type="text" class="inpt" name="rn"> </td>
                        </tr>
                        <tr>
                            <td align="center">ADDRESS:</td>
                            <td align="center"> <input type="text" name="add" class="inpt"></td> 
                        </tr>
                        <tr>
                            <td align="center">CLASS:</td> 
                            <td align="center"> <input type="text" name="class1" class="inpt"></td> 
                        </tr> 
                        <tr>
                            <td align="center"> CONTACT NO:</td>
                            <td align="center"> <input type="text" name="cno" class="inpt"></td> 
                        </tr> 
                        <tr>
                            <td colspan="2" align="center"><input type="submit" name="bsubmit" id="bsubmit" value="UPDATE RECORD"></td>
                        </tr>
                    </table>
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
    $c= new mysqli("localhost","root","","jo_database_hum_banyange");
    if($c->connect_error)
    {
        die("connection failed".$c->connect_error);
    }
    if($c->query("update stu set ADDRESS='".$_GET["add"]."'".",CLASS1='".$_GET["class1"]."'".",CONTACTNO='".$_GET["cno"]."'"."where rno='".$_GET["rn"]."'")===TRUE)
        
    {
        echo "RECORD MODIFIED SUCCESSFULLY";
    }
    else
    {
        echo "error".$c->error;
    }
    $c->close();
}
function search_record()
{
    $c=new mysqli("localhost","root","","student");
        if($c->connect_error)
            {
                die("connection failed".$c->connect_error);
            }
    $r=$c->query("select * from stu");
    
    echo "<table border ='2' cellpadding='3' bgcolor='red' width='95%'align='center'>";
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
                    search_record();
                }
    
?>
            </font>
        </center>
    </body>
</html>
