<?php
session_start();
if(!isset($_SESSION['a']))
{
$_SESSION['a']=1;
}
else
{
$_SESSION['a']++;
}
echo("page views :".$_SESSION['a']);
?>
<html>
    <head>
        
        <meta charset="utf-8">
        <title>Library management System</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link href="img/D2.jpg" rel="icon">
        <style>
@import url(https://fonts.googleapis.com/css?family=Bree+Serif);
/* the important bits */

li {
  -webkit-perspective: 400px;
          perspective: 400px;
}



.info {
  -webkit-transform: rotate3d(1, 0, 0, 90deg);
          transform: rotate3d(1, 0, 0, 90deg);
  width: 100%;
  height: 100%;
  padding: 20px;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 4px;
  pointer-events: none;
  background-color: rgba(255, 99, 156, 1);
}


.in-top .info {
  -webkit-transform-origin: 50% 0%;
          transform-origin: 50% 0%;
  -webkit-animation: in-top 300ms ease 0ms 1 forwards;
          animation: in-top 300ms ease 0ms 1 forwards;
}

.in-right .info {
  -webkit-transform-origin: 100% 0%;
          transform-origin: 100% 0%;
  -webkit-animation: in-right 300ms ease 0ms 1 forwards;
          animation: in-right 300ms ease 0ms 1 forwards;
}

.in-bottom .info {
  -webkit-transform-origin: 50% 100%;
          transform-origin: 50% 100%;
  -webkit-animation: in-bottom 300ms ease 0ms 1 forwards;
          animation: in-bottom 300ms ease 0ms 1 forwards;
}

.in-left .info {
  -webkit-transform-origin: 0% 0%;
          transform-origin: 0% 0%;
  -webkit-animation: in-left 300ms ease 0ms 1 forwards;
          animation: in-left 300ms ease 0ms 1 forwards;
}

.out-top .info {
  -webkit-transform-origin: 50% 0%;
          transform-origin: 50% 0%;
  -webkit-animation: out-top 300ms ease 0ms 1 forwards;
          animation: out-top 300ms ease 0ms 1 forwards;
}

.out-right .info {
  -webkit-transform-origin: 100% 50%;
          transform-origin: 100% 50%;
  -webkit-animation: out-right 300ms ease 0ms 1 forwards;
          animation: out-right 300ms ease 0ms 1 forwards;
}

.out-bottom .info {
  -webkit-transform-origin: 50% 100%;
          transform-origin: 50% 100%;
  -webkit-animation: out-bottom 300ms ease 0ms 1 forwards;
          animation: out-bottom 300ms ease 0ms 1 forwards;
}

.out-left .info {
  -webkit-transform-origin: 0% 0%;
          transform-origin: 0% 0%;
  -webkit-animation: out-left 300ms ease 0ms 1 forwards;
          animation: out-left 300ms ease 0ms 1 forwards;
}

@-webkit-keyframes in-top {
  from {
    -webkit-transform: rotate3d(-1, 0, 0, 90deg);
            transform: rotate3d(-1, 0, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}

@keyframes in-top {
  from {
    -webkit-transform: rotate3d(-1, 0, 0, 90deg);
            transform: rotate3d(-1, 0, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}
@-webkit-keyframes in-right {
  from {
    -webkit-transform: rotate3d(0, -1, 0, 90deg);
            transform: rotate3d(0, -1, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}
@keyframes in-right {
  from {
    -webkit-transform: rotate3d(0, -1, 0, 90deg);
            transform: rotate3d(0, -1, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}
@-webkit-keyframes in-bottom {
  from {
    -webkit-transform: rotate3d(1, 0, 0, 90deg);
            transform: rotate3d(1, 0, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}
@keyframes in-bottom {
  from {
    -webkit-transform: rotate3d(1, 0, 0, 90deg);
            transform: rotate3d(1, 0, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}
@-webkit-keyframes in-left {
  from {
    -webkit-transform: rotate3d(0, 1, 0, 90deg);
            transform: rotate3d(0, 1, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}
@keyframes in-left {
  from {
    -webkit-transform: rotate3d(0, 1, 0, 90deg);
            transform: rotate3d(0, 1, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}
@-webkit-keyframes out-top {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(-1, 0, 0, 104deg);
            transform: rotate3d(-1, 0, 0, 104deg);
  }
}
@keyframes out-top {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(-1, 0, 0, 104deg);
            transform: rotate3d(-1, 0, 0, 104deg);
  }
}
@-webkit-keyframes out-right {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(0, -1, 0, 104deg);
            transform: rotate3d(0, -1, 0, 104deg);
  }
}
@keyframes out-right {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(0, -1, 0, 104deg);
            transform: rotate3d(0, -1, 0, 104deg);
  }
}
@-webkit-keyframes out-bottom {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(1, 0, 0, 104deg);
            transform: rotate3d(1, 0, 0, 104deg);
  }
}
@keyframes out-bottom {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(1, 0, 0, 104deg);
            transform: rotate3d(1, 0, 0, 104deg);
  }
}
@-webkit-keyframes out-left {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(0, 1, 0, 104deg);
            transform: rotate3d(0, 1, 0, 104deg);
  }
}
@keyframes out-left {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(0, 1, 0, 104deg);
            transform: rotate3d(0, 1, 0, 104deg);
  }
}
/* you can ignore this ones */
ul {
  padding: 0;
  margin: 0 0 50px;
}
ul:after {
  content: "";
  display: table;
  clear: both;
}

li {
  position: relative;
  float: left;
  width: 200px;
  height: 200px;
  margin: 5px;
  padding: 0;
  list-style: none;
}
li a {
  display: inline-block;
  vertical-align: top;
  text-decoration: none;
  border-radius: 4px;
}
li h3 {
  margin: 0;
  font-size: 16px;
  color: rgba(255, 255, 255, 0.9);
}
li p {
  font-size: 12px;
  line-height: 1.5;
  color: rgba(255, 255, 255, 0.8);
}
li .normal {
  width: 100%;
  height: 100%;
  background-color: #ECF0F1;
  color: rgba(52, 73, 94, 0.6);
  box-shadow: inset 0 2px 20px #e6ebed;
  text-align: center;
  font-size: 50px;
  line-height: 200px;
}
/*
li .normal img {
  pointer-events: none;
  width: 50px;
}
*/
/*
li .normal svg path {
  fill: rgba(52, 73, 94, 0.2);
}
*/

* {
  box-sizing: border-box;
}

body {
  background-color:#fff !important;
}

h1 {
  margin: 0 auto 5px;
  text-align: center;
}

h3 {
  font-family: 'Bree Serif', serif;
}

.container {
  width: 840px;
  margin: 0 auto;
}

header {
  font-family: 'Bree Serif', serif;
  text-align: center;
  margin: 50px 0 25px;
  color: #34495E;
}
header p {
  margin: 0;
  color: rgba(52, 73, 94, 0.4);
}
            .mode{
                writing-mode: vertical-rl;
                float:right;
                margin-right:20px;
                color: purple;
                font-size: 30px;
            }
            .mode a{
                font-size-adjust:20px;
            }
            .phonelink{
    position: fixed; /* Lock location always on the scree */
    bottom: 0; /* Set to the bottom */
    right: 0; /* Set to the right */
    margin: 30px; /* Add space around background */
}
.phoneicon{
    width: 50px; /* Set width of icon */
    height: 50px; /* Set height of icon */
}
@media screen and (max-width: 780px){
    .lgscreenphone{
          /* On small screens make phone icon disappear */
    }
    .mbscreenphone{
        display: block; /* On small screens make phone icon appear */
    }
}
@media screen and (min-width: 481px){
    .mbscreenphone{
        display: none; /* On large screens make phone icon disappear */
    }
    .lgscreenphone{
        display: block; /* On large screens make phone icon appear */
    }
}
        </style>
    </head>
    <body style="background:rgba(255,77,90,0.3)">
                   <center>
                       <br>
                       <h1><font face="algerian" color="green">D2 Library  Management  System</font></h1>
        <br>
                       <i><b><div class="mode">For any other enquiry contact us:
                           <a href="tel:9690600424" class="lgscreenphone phonelink" href="yourdomian.com/contact"><img class="phoneicon" src="https://freeiconshop.com/wp-content/uploads/edd/phone-flat.png"></a>
                           </div></b></i>
        <br>
                       <div class='container'>
  <ul>
    <li>
      <a class='normal' href='Add_Book.php'>
          <img src="img/lib1.jpeg" height="200" width="200">
      </a>
      <div class='info'>
        <h3>D2 library management front</h3>
        <p>here you can add a new book into our e-library.</p>
      </div>
    </li>
    <li>
      <a class='normal' href='Add_Student.php'>
                    <img src="img/lib2.jpeg" height="200" width="200">
      </a>
      <div class='info'>
        <h3>D2 library management</h3>
        <p>here you can add a new student into our e-library.</p>
      </div>
    </li>
    <li>
      <a class='normal' href='Modify_stu_record.php'>
                    <img src="img/lib3.jpeg" height="200" width="200">
      </a>
      <div class='info'>
        <h3>D2 library management</h3>
        <p>here you can modify student details that are stored previously as a student issue or return different book we can modify his or her details into our e-library.</p>
      </div>
    </li>
    <li>
      <a class='normal' href='Search_stu_record.php'>
                    <img src="img/lib4.jpeg" height="200" width="200">
      </a>
      <div class='info'>
        <h3>D2 library management</h3>
        <p>here you can search student record into our e-library.</p>
      </div>
    </li>
    <li>
      <a class='normal' href='Search_book_record.php'>
                    <img src="img/lib5.jpeg" height="200" width="200">
      </a>
      <div class='info'>
        <h3>D2 library management</h3>
        <p>here you can search book records into our e-library, how many and which books are available you can from here .</p>
      </div>
    </li>
    <li>
      <a class='normal' href='Book_issue.php'>
                    <img src="img/lib6.jpeg" height="200" width="200">
      </a>
      <div class='info'>
        <h3>D2 library management</h3>
        <p>here you can issue books from library with a speciallity that those books are automatically remove from there afrter issue by a student.</p>
      </div>
    </li>
    <li>
      <a class='normal' href="Delete_book.php">
                    <img src="img/lib7.jpeg" height="200" width="200">
      </a>
      <div class='info'>
        <h3>D2 library management</h3>
        <p>here you can delete books from library that are not in demand by students.</p>
      </div>
    </li>
    <li>
      <a class='normal' href='Book_return.php'>
                    <img src="img/lib8.jpeg" height="200" width="200">

      </a>
      <div class='info'>
        <h3>D2 library management</h3>
        <p>here you can  books return to library that student are issued.</p>
      </div>
    </li>
  </ul>
</div>
            </center>
        Hello,you are logged in as:<?php echo $_SESSION['username'];?>
        <script type="text/javascript">
        const nodes = [].slice.call(document.querySelectorAll('li'), 0);
const directions = { 0: 'top', 1: 'right', 2: 'bottom', 3: 'left' };
const classNames = ['in', 'out'].map(p => Object.values(directions).map(d => `${p}-${d}`)).reduce((a, b) => a.concat(b));

const getDirectionKey = (ev, node) => {
  const { width, height, top, left } = node.getBoundingClientRect();
  const l = ev.pageX - (left + window.pageXOffset);
  const t = ev.pageY - (top + window.pageYOffset);
  const x = l - width / 2 * (width > height ? height / width : 1);
  const y = t - height / 2 * (height > width ? width / height : 1);
  return Math.round(Math.atan2(y, x) / 1.57079633 + 5) % 4;
};
class Item {
  constructor(element) {
    this.element = element;
    this.element.addEventListener('mouseover', ev => this.update(ev, 'in'));
    this.element.addEventListener('mouseout', ev => this.update(ev, 'out'));
  }

  update(ev, prefix) {
    this.element.classList.remove(...classNames);
    this.element.classList.add(`${prefix}-${directions[getDirectionKey(ev, this.element)]}`);
  }}


nodes.forEach(node => new Item(node));
        </script>

        </body> </html>
    
