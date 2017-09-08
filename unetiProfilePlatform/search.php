



  <head>
    <title>Hệ thống tìm kiếm thông tin sinh viên version 0.0.1 alpha</title>


<style>
    	/* BASIC STYLES */
body {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
}

header {
  width: 100%;
}

ul {
  list-style: none;
}

/* NAV BAR */
#nav_bar {
  float: right;
}

#nav_bar li {
  display: inline-block;
  padding: 8px;
}

#nav_bar #sign_in {
  background: #4887ef; 
  margin-right: 25px;
  padding: 7px 15px;
  border-radius: 3px; 
  font-weight: bold;
}

.nav-links {
  color: #404040;
}

a {
  text-decoration: none;
  color: inherit;
}

li.nav-links a:hover {
  text-decoration: underline;
}

#sign_in:hover { 
  box-shadow: 1px 1px 5px #999;
}

#sign_in {
  color: #fff;
}

/* GOOGLE AREA */
.google #google_logo {
  text-align: center;
  display: block;
  margin: 0 auto;
  clear: both;
  padding-top: 112px;
  padding-bottom: 20px;
}

.form {
  text-align: center;
}

#form-search { 
  width: 450px;
  line-height: 32px;
  padding: 20px 10px;
}

.form #form-search {
  padding: 0 8px;
}

/*#form-search:hover {
  border-color: #e4e4e4;
  padding-top: 0;
}*/

.buttons {
  text-align: center;
  padding-top: 30px;
  margin-bottom: 300px;
}

/* FOOTER */
footer  {
  background: #f2f2f2;
  border-top: solid 2px #e4e4e4;
/*   position: fixed; */
  bottom: 0;
  padding-bottom: 0;
  width: 100%;
  
}

footer ul li {
  display: inline;
  color: #666666;
  font-size: 14px;
  padding: 13px;
}

footer ul {
  float: left;
  padding: 1px;
}

footer ul a:hover {
  text-decoration: underline;
}

.footer-right {
  float: right;
}

/* MEDIA QUERIES */

@media screen and (max-width: 400px) {
 
 li.nav-links a {
    display: none;
  }
  
 #google_logo {
   padding: 0;
 }
  
 .buttons {
   display: none;
 }
  
 #form-search {
   width: 80%;

 }
  
 footer {
   bottom: 0;
 }
  
 footer ul {
   float: none;
   padding-bottom: 2px;
    
 }
  
 .footer-left {
   text-align: center;
   margin: auto; 
   padding-top: 10px;
    
 }
  
 .footer-right {
   float: none;
   text-align: center;
   
 }
}

@media screen and (max-width: 565px) {
 
  li.nav-links a {
    display: none;
  }
  
  
 #google_logo {
   padding: 0;
 }
  
 .buttons {
   display: none;
 }
  
 #form-search {
   width: 80%;

 }
  
 footer {
/*    bottom: 0;
   postion: absolute; */
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;
 }
  
 footer ul {
   float: none;
   padding-bottom: 2px;
    
 }
  
 .footer-left {
   text-align: center;
   margin: auto; 
   padding-top: 10px;
    
 }
  
 .footer-right {
   float: none;
   text-align: center;
   
 }
}


input[type=submit]{
  border:1px solid black;
  margin: 10px;
  padding: 10px;
  margin-top: 0px;
  font-weight: bold;
   transition: 0.5s ease all;
}

input[type=submit]:hover{
  cursor: pointer;
  background: #275D7B;
  color:white;
  transition: 0.5s ease all;
}











    </style>
  </head>
  
  <body>
    <header>
<!--       <nav>
        <ul id="nav_bar">
          <li class="nav-links" id="gmail"><a href="#">Gmail</a></li>
          <li class="nav-links"><a href="#">Images</a></li>
          <li id="sign_in"><a href="#">Sign In</a></li>
        </ul>  
      </nav>  --> 
    </header>  


    
    <!-- GOOGLE IMG -->  
    <div class="google">
      <a href="#" id="google_logo">
      		<img src="img/logo.png" alt="uneti"/>
      	</a>
    </div>
    
    <!-- FORM SEARCH -->  
    <div class="form">  
      <form action="profile.php">

        <label for="form-search"></label>
        
        <input style="font-weight: bold;
text-align: center;
font-size: 27px;
padding: 5px;"
 type="number" name="msv" id="form-search" placeholder="Tìm mã sv ở đây! ">
      
	<!-- BUTTONS -->
	    <div class= "buttons">  
	      <input type="submit" value="Uneti Search" id="google_search">
	      <input type="submit" value="I'm Feeling Lucky" id="im_feeling_lucky">
	    </div>

      </form>
    </div>  
    

      
    <!-- FOOTER -->
    <footer>
<!--         <ul class="footer-left">
          <li><a href="#">Advertising</a></li>
          <li><a href="#">Business</a></li>
          <li><a href="#">About</a></li> 
        </ul>
        <ul class="footer-right">    
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Settings</a></li>
        </ul>    -->    
    </footer>      
  </body>