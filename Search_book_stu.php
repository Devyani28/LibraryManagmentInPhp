<html>
    <head>
        <link href="img/D2.jpg" rel="icon">
        <link rel="stylesheet" type="text/css" href="d2.css">
        <title>
            Search Book Record In D2 Library
        </title>
    </head>
    <body style="background-image: linear-gradient(#fff 40%,#000)">
        <center><h1><img src="img/D2W.jpg" height="23px">D2 LIBRARY</h1></center>
        <font size= "6pt" color= "blue">
            <center>
        <font size="6pt" color="hotpink">
            
               <h1>BOOK SEARCH FORM</h1></font>
                                <img src="img/book.jpeg" height="400" width="1100">
                <form name="insert_form" method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <font size="10" color="white"> ENTER BOOK NO: </font><input type="text" name="bn" style="padding: 10px;font-size: 20px;color: white;margin-bottom: 10px;width:400px;width:400px;outline: none;background: transparent;text-align:center"><br><br>
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
    function Search_book()
    {
        $c=new mysqli("localhost","root","","jo_database_hum_banyange");
        if($c->connect_error)
            {
                die("connection failed".$c->connect_error);
            }
        $r=$c->query("select * from book_list where BNO='".$_GET["bn"]."'");
            
        echo "<table border ='2' cellpadding='3' bgcolor='hotpink' width='95%'align='center'>";
        echo "<tr>";
        echo "<th>BOOK No</th>";
        echo "<th>BOOK NAME</th>";
        echo "<th>AUTHOR NAME</th>";
        echo "<th>SUBJECT</th>";
        echo "<th>BOOK PRICE</th>";
        echo "<th>BOOK PAGES</th>";
        echo "<th>BOOK EDITION</th>";
        echo "</tr>";
        while($row=$r->fetch_assoc())
        {
            echo "<tr>";
                echo "<td>".$row["BNO"]."</td>";
                echo "<td>".$row["BNAME"]."</td>";
                echo "<td>".$row["A_NAME"]."</td>";
                echo "<td>".$row["SUBJECT"]."</td>";
                echo "<td>".$row["B_PRICE"]."</td>";
                echo "<td>".$row["B_PAGES"]."</td>";
                echo "<td>".$row["B_EDTION"]."</td>";
        echo "</tr>";
        }
            $c->close();
            }
function Search_All_Books()
{
  $c=new mysqli("localhost","root","","student");
        if($c->connect_error)
            {
                die("connection failed".$c->connect_error);
            }
    $r=$c->query("select * from book_list");
    
    echo "<table border ='2' cellpadding='3' bgcolor='hotpink' width='95%'align='center'>";
        echo "<tr>";
        echo "<th>BOOK No</th>";
        echo "<th>BOOK NAME</th>";
        echo "<th>AUTHOR NAME</th>";
        echo "<th>SUBJECT</th>";
        echo "<th>BOOK PRICE</th>";
        echo "<th>BOOK PAGES</th>";
        echo "<th>BOOK EDITION</th>";
        echo "</tr>";
        while($row=$r->fetch_assoc())
        {
            echo "<tr>";
                echo "<td>".$row["BNO"]."</td>";
                echo "<td>".$row["BNAME"]."</td>";
                echo "<td>".$row["A_NAME"]."</td>";
                echo "<td>".$row["SUBJECT"]."</td>";
                echo "<td>".$row["B_PRICE"]."</td>";
                echo "<td>".$row["B_PAGES"]."</td>";
                echo "<td>".$row["B_EDTION"]."</td>";
        echo "</tr>";
        }
            $c->close();
            }

            if(isset($_GET["bsubmit"]))
                {
                    Search_book();
                }
            if(isset($_GET["b2submit"]))
                {
                    Search_All_Books();
                }
                
?>
            </font>
        </center>
    </body>
</html>