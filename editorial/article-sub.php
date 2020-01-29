<?



?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
	
textarea {
  width: 50%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
</style>
<body>
	
<? $today = date("F j, Y"); ?>	


<div>
  <form method="post" action="artupdate.php">
	  
    <label for="date">Date</label><br>
	<input type="text" id="date" name="date" value="<? echo $today; ?>"><br>	  
	  
    <label for="title">Title</label><br>
    <input type="text" id="title" name="title" placeholder="Title"><br>

    <label for="subtitle">Subtitle</label><br>
    <input type="text" id="subtitle" name="subtitle" placeholder="Subtitle"><br>
	  
    <label for="author">Author</label><br>
    <input type="text" id="author" name="author" placeholder="Author"><br>
	  
    <label for="keywords">Keywords</label><br>
    <input type="text" id="keywords" name="keywords" placeholder="Keywords"><br>	 	  
	  
    <label for="subject">Subject</label><br>
    <select id="subject" name="subject">
      <option value="1">Feature</option>
      <option value="3">Departments</option>
      <option value="2">News</option>
      <option value="4">Economic News</option>
      <option value="5">Association News</option>
      <option value="7">Legislation News</option>
      <option value="8">Education News</option>
    </select>	
	  
	<textarea id="ed_text" name="ed_text" placeholder="Enter Story"></textarea>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
