<?php


session_start();
 
 $link= mysqli_connect("localhost", "root","","login");
 
		$_SESSION['empid'] = mysqli_real_escape_string($link,$_POST['empid']);
        $_SESSION['password'] = mysqli_real_escape_string($link,$_POST['password']);  
			if (mysqli_connect_error()) {
        
					die ("there was an error connecting to database");
        
			}
			

 		
            
            $query = "SELECT `empid` FROM `regemp` WHERE empid = '".mysqli_real_escape_string($link, $_POST['empid'])."' and password = '".mysqli_real_escape_string($link, $_POST['password'])."'";
            
            $result = mysqli_query($link, $query);
			
            
            if (mysqli_num_rows($result) > 0) {
                
                echo "<p>login is successful .</p>";
				
				header ("Location:opregemp.html");
                
            } else {
                
               
                    
                    echo "<p>login failed try again !";
					
                    
                }
                
            
        
    
    

          
?>
