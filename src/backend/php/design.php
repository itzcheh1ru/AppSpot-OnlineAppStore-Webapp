<!DOCTYPE html>
<html lang="en">
<head>
    
<style>
        /* Inline CSS for table styling */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #FFB6C1; /* Light Pink background for header */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Light gray background for even rows */
        }

        tr:hover {
            background-color: #ddd; /* Darker gray background on hover */
        }

        .submit {
            background-color: #FFB6C1; /* Light Pink background for buttons */
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }
    </style>
        
</head>
<body>
<div>
    <?php
	include "config.php";
	
	$sql="SELECT * FROM usernew";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{ echo'<table border="2" cellspacing="20" cellpadding="20" align="center" bordercolor="#FFB6C1" >
	<tr>
		<td><b>Uerid</b></td>
		<td><b>User Name</b></td>
		<td><b>Password</b></td>
		
	</tr>';
		while($row=mysqli_fetch_assoc($result))
		{echo '<tr>' .
            '<td>' . $row['userid'] . '</td>' .
            '<td>' . $row['Username'] . '</td>' .
            '<td>' . $row['password'] . '</td>' .
            
            
            '<td>' .
            '<button class="submit" onclick="location.href=\'read.php?Id=' . $row['userid'] . '\'">Edit</button>' .
            '</td>' .
            '<td>' .
            '<form action="delete.php" method="post">' .
            '<input type="hidden" name="delete_id" value="' . $row['userid'] . '">' .
            '<button type="submit" name="delete_btn">Delete</button>' . 
            '</form>' .
            '</td>' .
            '</tr>';
        
			
			 
		}
		
		echo'</table>';
	}
?>  

</div>
</body>
</html>
