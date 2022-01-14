<?php
// servername => localhost:1111
		// username => root
		// password => empty
		// database name => cseb
		$conn = mysqli_connect("localhost:1111", "root", "", "hearteat_order");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
        if($address!=NULL)
		$sql = "INSERT INTO order VALUES ('$first_name',
			'$last_name','$address','$email')";
        else{
            $sql="INSERT INTO order VALUES ('$first_name',
			'$last_name','$email')";
        }
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.</h3>";

			
		} else{
			echo "ERROR:  Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
>