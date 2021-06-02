<style>
div {
    
  
    text-align:center;
    background-color: lightblue;
    width: 60%;
    border: 15px solid Black;
    padding: 50px;
    margin: 150px 300px;
  }
  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    text-transform: capitalize;
  }
  

    
  
  

.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 5;
  -moz-border-radius: 5;
  border-radius: 5px;
  -webkit-box-shadow: 0px 1px 3px #666666;
  -moz-box-shadow: 0px 1px 3px #666666;
  box-shadow: 0px 1px 3px #666666;
  font-family: Courier New;
  color: #ffffff;
  font-size: 16px;
  padding: 7px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}


</style>
<div>
<h1>Add new Job</h1>
<form action="newjob" method="POST">
    @csrf
    <input type="text" name ="job" placeholder="Enter Job"> <br> <br>
    <input type="text" name ="description" placeholder="Enter Job Description"> <br> <br>
    <input type="text" name ="requirements" placeholder="Enter Job Requirements"> <br> <br>
    <button class='btn' type="submit">Apply </button>
    
    
</form>
</div>