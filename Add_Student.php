<html>
    <head>
        <link href="img/D2.jpg" rel="icon">
        <link rel="stylesheet" type="text/css" href="d2.css">
        <title>
            Add Student In D2 Library
        </title>
    </head>
    <body style="background-image: linear-gradient(#fff 40%,#000)">
<nav>
    <ul>
        <li><a href="Add_Book.php">Add Book</a></li>
        <li><a class="active" href="Add_Student.php">Add Student</a></li>
        <li><a href="Modify_stu_record.php">Modify Student</a></li>
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
                <h1><font color="hotpink">NEW STUDENT ENTERY FORM</font></h1> 
                <form name="insert_form" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <table border="2" height="500" width="500">
                        <tr>
                            <td align="center">ROLL NO</td>
                            <td align="center"><input type="text" name="rn" class="inpt"> </td>
                        </tr>
                        <tr>
                            <td align="center">STUDENT NAME:</td>
                            <td align="center"> <input type="text" name="sname" class="inpt"></td> 
                        </tr>
                        <tr>
                            <td align="center">FATHER'S NAME: </td> 
                            <td align="center"> <input type="text" name="fname" class="inpt"></td> 
                        </tr> 
                        <tr>
                            <td align="center"> ADDRESS::</td>
                            <td align="center"> <input type="text" name="add" class="inpt"></td> 
                        </tr> 
                        <tr>
                            <td align="center">CLASS:</td>
                            <td align="center"> <input type="text" name="class1" class="inpt"></td> 
                        </tr> 
                        
                        <tr> 
                            <td align="center">CONTACT NO:</td>
                            <td align="center"> <input type="text" name="cno" class="inpt"></td>
                        </tr>
                        <tr>
                            <td align="center">DOB:</td>
                            <td align="center"><input type="text" name="dob" class="inpt"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" name="bsubmit" id="bsubmit" value="SAVE NEW STUDENT RECORD"></td>
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
                 function insert_student()
    {
        $c=new mysqli("localhost","root","","jo_database_hum_banyange");
        if($c->connect_error)
            {
                die("connection failed".$c->connect_error);
            }
        if($c->query("INSERT INTO stu(RNO,NAME,FNAME,ADDRESS,CLASS1,CONTACTNO,DOB)values('".$_GET["rn"]."','".$_GET["sname"]."','".$_GET["fname"]."','".$_GET["add"]."','".$_GET["class1"]."','".$_GET["cno"]."','".$_GET["dob"]."')")===TRUE)
            {
                echo "RECORD SAVED SUCCESSFULLY";
            }
        else
            {
                echo "Error : in query execution".$c->error;
            }
            $c->close();
            }
            if(isset($_GET["bsubmit"]))
                {
                    insert_student();
                }
                
?>
            </font>
        </center>
    </body>
</html>