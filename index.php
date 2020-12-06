<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Image Gallery</title>
        
        <script src="bmi.js"></script>
        
    </head>
    <header style="text-align: center">
        <h1>My Image Gallery</h1>
        <hr>
    </header>    
    <body style="float: bottom; height: 100%;width: 100%;position: absolute;z-index: 1;font-family: sans-serif; background-color: #e6ffcc">
        <br>
        <div style="position: relative;z-index: 2;height: 200px">
        <!--Movies-->
        <div style="width: 33%; height: 200px;float: left;" > 
            
            
            <form method="post"> 
        <input type="submit" name="buttonm"
               value="Show" style="margin-left: 40%"/> 
          <input type="submit" name="buttonmx"
                value="Close"/>
          <br>
          <h4 style="text-align: center">MOVIES</h4>
          <br>
          <image src="images/mov.png" width="25%" height="25%" style="margin-left: auto; margin-right: auto; display: block">
          <br>
            
         <?php
            $dir = 'images/mov/';

            function displayImgsMOV($dir, $n=10){
            $filesm = glob($dir.'*.jpg');
            
            shuffle($filesm);
            $filesm = array_slice($filesm, 0, $n);
           
            echo "Press Show Button again to Change Images .Scroll down to see all";
            foreach ($filesm as $file) {
            echo "<img src='$file', width=50%px height=400px style='float: left'>";
        }

        } ?>
       
        <?php
      
        if(isset($_POST['buttonm'])) { 
            
            displayImgsMOV($dir);
             
            
        } 
        if(isset($_POST['buttonmx'])) { 
            echo "";
        } 
        ?>
         
            
        </div> 
        <!--//CARS-->
        <div style="width: 33%;height: 200px;float: left" > 
        
            
              <form method="post"> 
        <input type="submit" name="buttonc"
               value="Show" style="margin-left: 40%"/> 
        <input type="submit" name="buttoncx"
                value="Close"/> 
        
            <h4 style="text-align: center">CARS</h4>
            <br>
            <br>
                
        <image src="images/car.png" width=30%" style="margin-left: auto; margin-right: auto; display: block">
        
             <?php
            $dir = 'images/car/';

            function displayImgsCAR($dir, $n=10){
            $filesc = glob($dir.'*.jpg');
            
            shuffle($filesc);
            $filesc = array_slice($filesc, 0, $n);
            
            
            echo "Press Show Button again to Change Images,Scroll down to change all";
            
            foreach ($filesc as $file) {
                
            echo "<div><img src='$file', width=50% height=200px  style='float: left'></div> ";
        }

        } ?>
       
        <?php
      
        if(isset($_POST['buttonc'])) { 
            
            displayImgsCAR($dir);
             
            
        } 
        if(isset($_POST['buttoncx'])) { 
            echo ""; 
        } 
        ?>
             
          
          
        </div> 
        <!--Personalities-->
        <div style="width: 33%; height: 200px; float: left" > 
            
        <form method="post"> 
        <input type="submit" name="buttonp"
               value="Show" style="margin-left: 40%"/> 
        <input type="submit" name="buttonpx"
                value="Close"/> 
        <br>    
        <h4 style="text-align: center">CARS</h4>
        
        
        <image src="images/person.png" width="25%"  style="margin-left: auto; margin-right: auto; display: block">
        
        
             <?php
            $dir = 'images/per/';

            function displayImgsPer($dir, $n=10){
            $filesp = glob($dir.'*.jpg');
            
            shuffle($filesp);
            $filesp = array_slice($filesp, 0, $n);
            echo "<br>";
            echo "Press Show Button again to Change Images,Scroll down to see all  ";
            
            foreach ($filesp as $file) {
            echo "<img src='$file', width=50%px height=250px style='float: left' > ";
        }

        } ?>
       
        <?php
      
        if(isset($_POST['buttonp'])) { 
            
            displayImgsPer($dir);
             
            
        } 
        if(isset($_POST['buttonpx'])) { 
            echo ""; 
        } 
        ?>
             

          
        </div> 
      
    </div> 
        <!--logo-->
        <div style="float: left;width: 45%;position: relative;z-index: 1">
            <img src="images/logo.png" width="20%" height="20%" style="margin-left: 100%;padding-top: 10%">
        </div>
        <!--BMI-->
        <div style="z-index: 1;width: 100%;position: relative">
        
            <div style="margin-left: 75%;z-index: 1;padding: 50px">
                BMI Calculator<br><br>
                <form name="bmiForm">
                    Your Weight(kg): <input type="text" name="weight" id="weight" size="10"><br />
                    Your Height(cm): <input type="text" name="height" id="height" size="10"><br />
                    <br>
                    <input type="button" value="Calculate BMI" onClick="calculateBmi()"><br />
                    <br>
                    Your BMI: <input type="text" name="bmi" id="bmi" size="10"><br />
                    <br>
                    <input type="reset" value="Reset" />
                </form>
            </div>    
        </div>
    </body>
            
   
    <footer style=" text-align: center; width: 100%;height:50px; bottom: 0" >
        <hr>
        Name: Rachit Rajalim Rai <br>
        Reg:201800104<br>
        AWT Assignment 2020
    </footer>
    
</html>
