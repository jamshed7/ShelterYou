<html>
<head><title>Add Animal</title></head>
<body>

<h2>Add New Animal</h2>


<form action="process.php" method="post">

    Select Animal Type<select input type ="text" name = "Animal_type" maxlength = "3" value="<?php echo $_SESSION['type'] ?>" ><option></option><option>Horse</option><option>Snake</option>
    </select></td><br><br>
    Enter animal name: <input name="Name" type="text"><br><br>
    Enter animal age: <input name="Age" type="number"><br><br>
    Select Animal Size<select input type ="text" name = "Size" maxlength = "4" value="<?php echo $_SESSION['type'] ?>" ><option></option><option>Small</option><option>Medium</option><option>Large</option>
    </select></td><br><br>
    Enter animal Breed: <input name="Breed" type="text"><br><br>
    Enter animal Color: <input name="Color" type="text"><br><br>
    Posted Date: <input name="Posted_date" type="date(Y-m-d h:i:s)"><br><br>
    Enter animal description: <input name="Description" type="text"><br><br>
    Is it Available<select input type ="text" name = "Is_available" maxlength = "3" value="<?php echo $_SESSION['type'] ?>" ><option></option><option>0</option><option>1</option>
    </select></td><br><br>

    <input type = "submit"> <input type = "reset">
  
</form>

</body>
</html>