<html>
  <head>
    <title>Hệ thống tìm kiếm thông tin sinh viên version 0.0.1 alpha</title>
    <meta charset="utf-8">
  
<style>
    	
body {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  background-image: url("img/nen.jpg");
}

#left{
  
  height:600px;
  width: 600px;
  float: left;
}
 img{
 margin-left: 150px;
 margin-top: 150px;
}

#right{
 
  height:600px;
  width: 700px;
  float: left;
}
#uneti_search
{
  margin-left: 200px;
  background-color: lightblue;
  padding: 10px;
  border-radius: 4px;
  font-weight: bold;
  color:white;
  margin-top: 30px;
}
#uneti_search:hover{
  background-color: gray;
  cursor: pointer;
}


    </style>
  </head>
  
  <body>
<div>
  <div id="left">
  <img src="img/left.png" >
  </div>

  <div id="right">
    <form action="ten_anh_demo.php">
    
    <fieldset style="height:300px; border-radius: 6px; width: 500px;margin: auto;margin-top: 130px;background-color: white;opacity: 0.8;">
    <p style="text-align: center; font-weight: bold; font-size: 30;color:lightblue;">Tra Cứu Thông Tin Sinh Viên</p><br>
        <input type="number" name="msv" id="form-search" placeholder="Tìm mã sv ở đây ! "  style="text-align: center;margin-left: 100px;height: 40px ;width: 300px;background-color: lightgray;font-weight: bold; border-radius: 4px;  font-size: 20px;">
        <input type="submit" value="Uneti Search" id="uneti_search"> 
        
       </fieldset>
    </form>
    <p style="color:white;text-align: center;font-weight: bold;">Hệ thống tìm kiếm thông tin sinh viên version 0.0.1 alpha</p>
    
   
    </div>
    



  </div>
 
  <div style="text-align: left; margin-left: 10px;color:white; font-weight: bold; font-size: 18px; width: 220px; height: 60px;">
      coder: Nguyễn thanh tú 
  </div>

      
    
  </body>
  </html>