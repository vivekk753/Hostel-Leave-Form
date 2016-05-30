<?php
   session_start();
   $var1='tom';
	
  if()
       
       $con = mysqli_connect("localhost","root","","company");
       if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		else
		{
			$sql = "SELECT * FROM data";

			$result = mysqli_query($con,$sql)or die(mysqli_error());
            $var1= "i am inside admin";
			echo "<table>";
			//echo "<tr> <th>Name</th> <th>Roll</th> <th>Webmail</th> <th>contact</th> <th>From</th> <th>To</th> </tr>";

			while($row = mysqli_fetch_array($result)) {
			    $name = $row['name'];
			    $roll = $row['roll'];
			    $webmail = $row['webmail'];
			    $contact = $row['contact'];
			    $from = $row['from_'];
			    $to = $row['to_'];

			    echo "<tr> <td style='width:100px;'>".$name."</td> 
			               <td style='width: 100px;'>".$roll."</td> 
			               <td style='width: 100px;'>".$webmail."</td> 
			               <td style='width: 100px;'>".$contact."</td> 
			               <td style='width: 100px;'>".$from."</td> 
			               <td style='width: 100px;'>".$to."</td>  

			        </tr>";
			} 

			echo "</table>";



			mysqli_close($con);
		}
		

	

?>