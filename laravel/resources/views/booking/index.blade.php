<!DOCTYPE html>
<html>
<head>
  <style>
  body {
    font-family: Arial, sans-serif;
  }

  form {
    width: 300px;
    margin: 0 auto;
  }

  label {
    display: block;
    margin-top: 20px;
  }

  select {
    width: 100%;
    height: 30px;
    margin-top: 5px;
  }

  input[type="submit"] {
    margin-top: 20px;
    width: 100%;
    height: 40px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }

  .my-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

</style>
</head>
<body>

<h1>Hie {{auth()->user()->username}}</h1>
<h4>Your email is {{auth()->user()->email}}</h4>

<h2>Bus Booking Form</h2>

<form action="submit.php" method="post">
  <label for="bus">Select Bus:</label><br>
  <select id="bus" name="bus">
    <option value="Zupco 1">Zupco 1</option>
    <option value="Zupco 2">Zupco 2</option>
    <option value="Zupco 3">Zupco 3</option>
    <!-- Add more options as needed -->
  </select><br>

  <input type="submit" value="Book">
</form>

<form method="get" action="/logout">
    @csrf
    <button type="submit" class="my-button">Logout</button>
</form>

</body>
</html>
