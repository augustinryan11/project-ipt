
<style>
  #nav {
    background: linear-gradient(90deg, blue 0%, #FF9800 100%);
    color: black;
    display: flex;
    justify-content: space-between;
    padding: 10px;
    border-radius: 10px;
  }

  #nav div:first-child a {
    font-weight: bold;
    font-size: 20px;
    color: black;
    text-decoration: none;
  }

  #nav div:last-child a {
    margin-left: 30px;
    color: black;
    text-decoration: none;
    border: 2px solid #fff;
    padding: 5px 10px;
    border-radius: 20px;
  }

  #nav div:last-child a:hover {
    background-color: #fff;
    color: green;
  }
</style>

<div id="nav">
  <div>
    <a href="index.php">Home</a>
  </div>
  <div>
    <a href="login.php">Login</a>
    <a href="signup.php">Signup</a>
    <a href="profile.php">Profile</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
