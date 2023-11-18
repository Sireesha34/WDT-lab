<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student List</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    #footer {
      position: fixed; /* Fixed, not Position */
      padding: 10px;
      bottom: 0;
      width: 100%;
      height: 40px;
    }
  </style>
<style>
body {
    font: 16px Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: #e1e1e1;
}

#wrapper {
    width: 1000px;
    margin: 50px auto 0;
    background-color: #fff;
}

#header {
    text-align: center;
    background-color: #F67437;
    padding: 10px;
}

#header h1 {
    color: #ffffff;
    font-size: 40px;
    font-style: italic;
    font-family: serif;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0;
}

#menu {
    background-color: #fff;
}

#menu ul {
    font-size: 0;
    padding: 0 10px;
    margin: 0;
    list-style: none;
}

#menu ul li {
    display: inline-block;
}

#menu ul li a {
    color: #f67437;
    font-size: 16px;
    font-weight: 600;
    padding: 8px 10px;
    display: block;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

#menu ul li a:hover {
    background-color: rgb(255, 255, 255, 0.2);
}
</style>
</head>
<body>
  <div id="wrapper">
    <div id="header">
      <h1>Students List using CRUD Operations</h1>
    </div>
    <div id="menu">
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="add.php">Add</a>
        </li>
        <li>
          <a href="update.php">Update</a>
        </li>
        <li>
          <a href="delete.php">Delete</a>
        </li>
      </ul>
    </div>
  </div>
</body>
</html>
