<html>
    <head>
        <link href="img/D2.jpg" rel="icon">
        <link rel="stylesheet" type="text/css" href="d2.css">
        <title>
            Add Book In D2 Library
        </title>
    </head>
    <body style="background-image: linear-gradient(#fff 40%,#000)">
<nav>
    <ul>
        <li><a class="active" href="Add_Book.php">Add Book</a></li>
        <li><a href="Add_Student.php">Add Student</a></li>
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
                <h1><font color="hotpink"> NEW BOOK ENTRY FORM </font></h1> 
                <form name="insert_form" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <table border="2" height="500" width="500">
                        <tr>
                            <td align="center">BOOK NO</td>
                            <td align="center"><input type="text" class="inpt" name="bn"> </td>
                        </tr>
                        <tr>
                            <td align="center">BOOK NAME:</td>
                            <td align="center"> <input type="text" class="inpt" name="bname"></td> 
                        </tr>
                        <tr>
                            <td align="center"> AUTHOR NAME: </td> 
                            <td align="center"> <input type="text" class="inpt" name="aname"></td> 
                        </tr> 
                        <tr>
                            <td align="center"> SUBJECT:</td>
                            <td align="center"> <input type="text" class="inpt" name="subject"></td> 
                        </tr> 
                        <tr>
                            <td align="center"> BOOK PRICE:</td>
                            <td align="center"> <input type="text" class="inpt" name="bprice"></td> 
                        </tr> 
                        
                        <tr> 
                            <td align="center"> BOOK PAGES:</td>
                            <td align="center"> <input type="text" class="inpt" name="bpages"></td>
                        </tr>
                        <tr>
                            <td align="center">BOOK EDITION:</td>
                            <td align="center"><input type="text" class="inpt" name="bedition"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" name="bsubmit" id="bsubmit" value="SAVE NEW BOOK RECORD"></td>
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
            function insert_book()
                {
                $c=new mysqli("localhost","root","","jo_database_hum_banyange");
                if($c->connect_error)
                    {
                        die("connection failed".$c->connect_error);
                    }
                if($c->query("INSERT INTO book_list(BNO,BNAME,A_NAME,SUBJECT,B_PRICE,B_PAGES,B_EDTION)values(".$_GET["bn"].",'".$_GET["bname"]."','".$_GET["aname"]."','".$_GET["subject"]."','".$_GET["bprice"]."','".$_GET["bpages"]."','".$_GET["bedition"]."')")===TRUE)
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
                        insert_book();
                    }
                ?>
            </font>
        </center>
    </body>
</html>