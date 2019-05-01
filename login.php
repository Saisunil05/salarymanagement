<?php


session_start();
 
 $link= mysqli_connect("localhost", "root","","login");
 
		$_SESSION['username'] = mysqli_real_escape_string($link,$_POST['username']);
        $_SESSION['password'] = mysqli_real_escape_string($link,$_POST['password']);  
			if (mysqli_connect_error()) {
        
					die ("there was an error connecting to database");
        
			}
			

 		
            
            $query = "SELECT `id` FROM `users` WHERE username = '".mysqli_real_escape_string($link, $_POST['username'])."' and password = '".mysqli_real_escape_string($link, $_POST['password'])."'";
            
            $result = mysqli_query($link, $query);
			
            
            if (mysqli_num_rows($result) > 0) {
                
                echo "<p>login is successful .</p>";
				
				header ("Location:dash_board.html");
                
            } else {
                
               
                    
                    echo "<p>login failed try again !";
					
                    
                }
                
            
        
    
    

          
?>
