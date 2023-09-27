<form action="form.php" method="post">
   <h1>Add new student</h1>
   Name: <input type="text" name="name" id="" required>
   <br><br>
   Birthday: <input type="date" name="birthday" id="" required>
   <br><br>
   Email: <input type="email" name="email" id="" required>
   <br><br>
   Student year: <input type="number" name="year" id="" min=1 max=4 required>
   <br><br>
   Gender:
   <input type="radio" name="gender" value="Male"> Male
   <input type="radio" name="gender" value="Female"> Female
   <br><br>
   Major: <br>
   <select name="major" id="">
      <option value="Computing">Computing</option>
      <option value="Graphic Design">Graphic Design</option>
      <option value="Business Management">Business Management</option>
   </select>
   <br><br>
   <input type="submit" value="Add">
</form>