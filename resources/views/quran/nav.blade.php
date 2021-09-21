<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran-th</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/nav2.css">
  
</head>
<style>.text {
    
    color: white;
    font-size: 10vw; 
    font-weight: bold;
    text-align: center;
  }
</style>
<body>
    


<div class="topnav">

  <a class="active" href="index.php">Quran.th</a>
  <a href="QuranTafseer.php">ตัฟซีร</a>
  <a href="note.php">โน๊ต</a>
  <a href="{{ route('login') }}">เข้าสู่ระบบ</a>
  <a href="{{ route('register') }}">สมัคร</a>


  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>
</body>
</html>
            
           
