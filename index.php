<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <style>
    body {
      background-color: #2c3e50;
      background-image: linear-gradient(45deg, #2c3e50, #3498db, #e74c3c);
      background-size: 400% 400%;
      animation: gradient 10s ease infinite;
    }
    
    @keyframes gradient {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }
    
    h1, p {
      color: #fff;
      text-align: center;
    }
    
    div {
      background-color: rgba(255, 255, 255, 0.7);
      border-radius: 10px;
      padding: 10px;
      margin: 20px auto;
      max-width: 600px;
      text-align: center;
    }
    
    div > * {
      margin: 10px 0;
    }
  </style>
</head>
<body>
  <div>
    <?php 
    include('header.php')
    ?>
    <h1>Home page</h1>
    <p>Welcome to my website!</p>
  </div>
  
</body>
</html> 