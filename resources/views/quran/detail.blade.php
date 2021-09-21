
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="Stylesheet" href="surah-translation.css">
    <link rel="Stylesheet" href="css/popup.css">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <title>Quran  </title>

    <style>
      @font-face {
        font-family:'Uthmani' ;
        src: url('assets/UthmanicHafs1Ver09.otf') format ('truetype');
      }
     .arabic{
         font-family: 'Uthmani', serif;
         font-size: 20px;
         font-weight: normal;
         direction: rtl;
         padding: 0 5px;
         margin: 0;
     }
     .latin{
        font-family:  serif;
        font-size: 14px;
        font-weight: normal;
        direction: ltr;
        padding: 0;
        margin: 0;
     }
      .arabic_number {
        font-size: 28px;
        font-weight: normal;
        
     }

      </style>
  </head>
  <body>


  
  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/nav2.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:#9be2cd;
}

.topnav a {
  float: left;
  display: block;
  color: rgb(253, 252, 252);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:#9be2cd;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>

<div class="topnav">
<a class="active" href="{{ route('homepage') }}">Quran.th</a>
  <a href="QuranTafseer.php">ตัฟซีร</a>
  <a href="{{ route('login') }}">โน๊ต</a>
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
<h3 class="text-center bg-dark text-white">Surah Al-Fatihah</h3>
 <div class="search-area">
    <div class="container">
    
    <a href="Tafseer.php" class="link-dark" "text-center" >ตัฟซีร ซูเราะห์ Surah Al-Fatihah </a>
    <br>
    <br>
 
    <ul class="list-group list-group-horizontal">
           <li class="list-group-item  list-group-item-secondary">	<select id="surahlist" class="surah-list"><option  value=1>1. Al-Fathiha</option><option  value=2>2. Al-Baqara</option><option  value=3>3. Al-i&#39;Imran</option><option  value=4>4. An-Nisaa</option><option  value=5>5. Al-Maida</option><option  value=6>6. Al-An&#39;am</option><option  value=7>7. Al-A&#39;raf</option><option  value=8>8. Al-Anfal</option><option  value=9>9. At-Tauba</option><option  value=10>10. Yunus</option><option  value=11>11. Hud</option><option  value=12>12. Yusuf</option><option  value=13>13. Ar-Ra&#39;d</option><option  value=14>14. Ibrahim</option><option  value=15>15. Al-Hijr</option><option  value=16>16. An-Nahl</option><option  value=17>17. Al-Israa</option><option  value=18>18. Al-Kahf</option><option  value=19>19. Maryam</option><option  value=20>20. Ta-ha</option><option  value=21>21. Al-Anbiyaa</option><option  value=22>22. Al-Hajj</option><option  value=23>23. Al-Muminun</option><option  value=24>24. An-Nur</option><option  value=25>25. Al-Furqan</option><option  value=26>26. Ash-Shu&#39;araa</option><option  value=27>27. An-Naml</option><option  value=28>28. Al-Qasas</option><option  value=29>29. Al-Ankabut</option><option  value=30>30. Ar-Rum</option><option  value=31>31. Luqman</option><option  value=32>32. As-Sajda</option><option  selected  value=33>33. Al-Ahzab</option><option  value=34>34. Saba</option><option  value=35>35. Fatir</option><option  value=36>36. Ya-Sin</option><option  value=37>37. As-Saffat</option><option  value=38>38. Sad</option><option  value=39>39. Az-Zumar</option><option  value=40>40. Al-Mu&#39;min</option><option  value=41>41. Ha-Mim</option><option  value=42>42. Ash-Shura</option><option  value=43>43. Az-Zukhruf</option><option  value=44>44. Ad-Dukhan</option><option  value=45>45. Al-Jathiya</option><option  value=46>46. Al-Ahqaf</option><option  value=47>47. Muhammad</option><option  value=48>48. Al-Fat-h</option><option  value=49>49. Al-Hujurat</option><option  value=50>50. Qaf</option><option  value=51>51. Az-Zariyat</option><option  value=52>52. At-Tur</option><option  value=53>53. An-Najm</option><option  value=54>54. Al-Qamar</option><option  value=55>55. Ar-Rahman</option><option  value=56>56. Al-Waqi&#39;a</option><option  value=57>57. Al-Hadid</option><option  value=58>58. Al-Mujadila</option><option  value=59>59. Al-Hashr</option><option  value=60>60. Al-Mumtahana</option><option  value=61>61. As-Saff</option><option  value=62>62. Al-Jamu&#39;a</option><option  value=63>63. Al-Munafiqun</option><option  value=64>64. At-Tagabun</option><option  value=65>65. At-Talaq</option><option  value=66>66. At-Tahrim</option><option  value=67>67. Al-Mulk</option><option  value=68>68. Al-Qalam</option><option  value=69>69. Al-Haqqa</option><option  value=70>70. Al-Ma&#39;arij</option><option  value=71>71. Nuh</option><option  value=72>72. Al-Jinn</option><option  value=73>73. Al-Muzzammil</option><option  value=74>74. Al-Muddaththir</option><option  value=75>75. Al-Qiyamat</option><option  value=76>76. Ad-Dahr</option><option  value=77>77. Al-Mursalat</option><option  value=78>78. An-Nabaa</option><option  value=79>79. An-Nazi&#39;at</option><option  value=80>80. Abasa</option><option  value=81>81. At-Takwir</option><option  value=82>82. Al-Infitar</option><option  value=83>83. Al-Mutaffifin</option><option  value=84>84. Al-Inshiqaq</option><option  value=85>85. Al-Buruj</option><option  value=86>86. At-Tariq</option><option  value=87>87. Al-A&#39;la</option><option  value=88>88. Al-Gashiya</option><option  value=89>89. Al-Fajr</option><option  value=90>90. Al-Balad</option><option  value=91>91. Ash-Shams</option><option  value=92>92. Al-Lail</option><option  value=93>93. Adh-Dhuha</option><option  value=94>94. Al-Sharh</option><option  value=95>95. At-Tin</option><option  value=96>96. Al-Alaq</option><option  value=97>97. Al-Qadr</option><option  value=98>98. Al-Baiyina</option><option  value=99>99. Al-Zalzalah</option><option  value=100>100. Al-Adiyat</option><option  value=101>101. Al-Qari&#39;a</option><option  value=102>102. At-Takathur</option><option  value=103>103. Al-Asr</option><option  value=104>104. Al-Humaza</option><option  value=105>105. Al-Fil</option><option  value=106>106. Quraish</option><option  value=107>107. Al-Ma&#39;un</option><option  value=108>108. Al-Kauthar</option><option  value=109>109. Al-Kafirun</option><option  value=110>110. An-Nasr</option><option  value=111>111. Al-Lahab</option><option  value=112>112. Al-Ikhlaas</option><option  value=113>113. Al-Falaq</option><option  value=114>114. An-Nas</option></select> </li>
           <li class="list-group-item  list-group-item-secondary"> <select id="ayahlist" class="ayah-list"><option  value="0" rel="0" >0-0</option><option  value="1" rel="3" >1-3</option><option  value="4" rel="5" >4-5</option><option  value="6" rel="6" >6-6</option><option  value="7" rel="8" >7-8</option><option  value="9" rel="10" >9-10</option><option  value="11" rel="13" >11-13</option><option  value="14" rel="17" >14-17</option><option  value="18" rel="19" >18-19</option><option  value="20" rel="20" >20-20</option><option  value="21" rel="22" >21-22</option><option  value="23" rel="24" >23-24</option><option  value="25" rel="25" >25-25</option><option  value="26" rel="27" >26-27</option><option  value="28" rel="29" >28-29</option><option  value="30" rel="31" >30-31</option><option  value="32" rel="34" >32-34</option><option  value="35" rel="35" >35-35</option><option  value="36" rel="36" >36-36</option><option  value="37" rel="37" >37-37</option><option  value="38" rel="38" >38-38</option><option  value="39" rel="40" >39-40</option><option  value="41" rel="44" >41-44</option><option  value="45" rel="48" >45-48</option><option  value="49" rel="49" >49-49</option><option  value="50" rel="50" >50-50</option><option  value="51" rel="51" >51-51</option><option  value="52" rel="52" >52-52</option><option  value="53" rel="54" >53-54</option><option  value="55" rel="55" >55-55</option><option  value="56" rel="56" >56-56</option><option  value="57" rel="58" >57-58</option><option  value="59" rel="62" >59-62</option><option  value="63" rel="68" >63-68</option><option  value="69" rel="69" >69-69</option><option  value="70" rel="71" >70-71</option><option  selected  value="72" rel="73" >72-73</option></select>   </li>
           
         </ul>
         <br> <div class="col-sm-3">
                <div class="form-group row">
                
                </div>
           
              
           
                </div>
                
            <p class="arabic">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<span class="arabic_number"> </span></p><p class="latin">[1]ด้วยพระนามของอัลลอฮฺ ผู้ทรงกรุณาปราณี ผู้ทรงเมตตาเสมอ</p><audio controls loop>
                <source src="audio/001001.mp3" type="audio/mpeg">
                </audio><hr><p class="arabic">الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ<span class="arabic_number"> </span></p><p class="latin">[2]การสรรเสริญทั้งหลายนั้น เป็นสิทธิของอัลลอฮฺผู้เป็นพระเจ้าแห่งสากลโลก</p><audio controls loop>
                <source src="audio/001002.mp3" type="audio/mpeg">
                </audio><hr><p class="arabic">الرَّحْمَٰنِ الرَّحِيمِ<span class="arabic_number"> </span></p><p class="latin">[3]ผู้ทรงกรุณาปราณี ผู้ทรงเมตตาเสมอ</p><audio controls loop>
                <source src="audio/001003.mp3" type="audio/mpeg">
                </audio><hr><p class="arabic">مَالِكِ يَوْمِ الدِّينِ<span class="arabic_number"> </span></p><p class="latin">[4]ผู้ทรงอภิสิทธิ์แห่งวันตอบแทน</p><audio controls loop>
                <source src="audio/001004.mp3" type="audio/mpeg">
                </audio><hr><p class="arabic">إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ<span class="arabic_number"> </span></p><p class="latin">[5]เฉพาะพระองค์เท่านั้นที่พวกข้าพระองค์เคารพอิบาดะฮฺ และเฉพาะพระองค์เท่านั้นที่พวกข้าพระองค์ขอความช่วยเหลือ</p><audio controls loop>
                <source src="audio/001005.mp3" type="audio/mpeg">
                </audio><hr><p class="arabic">اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ<span class="arabic_number"> </span></p><p class="latin">[6]ขอพระองค์ทรงแนะนำพวกข้าพระองค์ซึ่งทางอันเที่ยงตรง</p><audio controls loop>
                <source src="audio/001006.mp3" type="audio/mpeg">
                </audio><hr><p class="arabic">صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ<span class="arabic_number"> </span></p><p class="latin">[7](คือ) ทางของบรรดาผู้ที่พระองค์ได้ทรงโปรดปราณแก่พวกเขา มิใช่ในทางของพวกที่ถูกกริ้ว และมิใช่ทางของพวกที่หลงผิด</p><audio controls loop>
                <source src="audio/001007.mp3" type="audio/mpeg">
                </audio><hr></div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</div>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer.css">
    <title>Quran  </title>
    <style>footer {
    text-align: center;
    padding: 3px;
    background-color:#9be2cd;
    color: white;
  }</style>
    <body>

<footer>
  <p>Quran.th<br>
  <p>suraiya1707@gmail.com<p></p>
</footer>

</body>
    <div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </div>
    </html>
</body>
</html>
                                                                                                                                    