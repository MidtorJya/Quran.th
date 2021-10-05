@extends('quran.nav')
@section('content')
<!--<h3 class="text-center text-dark">{{$arabics->th_name}}</h3> -->


 <div style = background-color:#00000; class="search-area">
    <div class="container">
      <br>

    <a href="{{ route('tafseer_detail',$datasurah) }}" class="link-dark" >ตัฟซีร ซูเราะห์ {{$arabics->th_name}} </a>
    
    <br>
  <ul class="list-group list-group-horizontal">
           <li class="list-group-item  list-group-item-secondary">	<select id="surahlist" class="surah-list"><option  value=1>1. Al-Fathiha</option><option  value=2>2. Al-Baqara</option><option  value=3>3. Al-i&#39;Imran</option><option  value=4>4. An-Nisaa</option><option  value=5>5. Al-Maida</option><option  value=6>6. Al-An&#39;am</option><option  value=7>7. Al-A&#39;raf</option><option  value=8>8. Al-Anfal</option><option  value=9>9. At-Tauba</option><option  value=10>10. Yunus</option><option  value=11>11. Hud</option><option  value=12>12. Yusuf</option><option  value=13>13. Ar-Ra&#39;d</option><option  value=14>14. Ibrahim</option><option  value=15>15. Al-Hijr</option><option  value=16>16. An-Nahl</option><option  value=17>17. Al-Israa</option><option  value=18>18. Al-Kahf</option><option  value=19>19. Maryam</option><option  value=20>20. Ta-ha</option><option  value=21>21. Al-Anbiyaa</option><option  value=22>22. Al-Hajj</option><option  value=23>23. Al-Muminun</option><option  value=24>24. An-Nur</option><option  value=25>25. Al-Furqan</option><option  value=26>26. Ash-Shu&#39;araa</option><option  value=27>27. An-Naml</option><option  value=28>28. Al-Qasas</option><option  value=29>29. Al-Ankabut</option><option  value=30>30. Ar-Rum</option><option  value=31>31. Luqman</option><option  value=32>32. As-Sajda</option><option  selected  value=33>33. Al-Ahzab</option><option  value=34>34. Saba</option><option  value=35>35. Fatir</option><option  value=36>36. Ya-Sin</option><option  value=37>37. As-Saffat</option><option  value=38>38. Sad</option><option  value=39>39. Az-Zumar</option><option  value=40>40. Al-Mu&#39;min</option><option  value=41>41. Ha-Mim</option><option  value=42>42. Ash-Shura</option><option  value=43>43. Az-Zukhruf</option><option  value=44>44. Ad-Dukhan</option><option  value=45>45. Al-Jathiya</option><option  value=46>46. Al-Ahqaf</option><option  value=47>47. Muhammad</option><option  value=48>48. Al-Fat-h</option><option  value=49>49. Al-Hujurat</option><option  value=50>50. Qaf</option><option  value=51>51. Az-Zariyat</option><option  value=52>52. At-Tur</option><option  value=53>53. An-Najm</option><option  value=54>54. Al-Qamar</option><option  value=55>55. Ar-Rahman</option><option  value=56>56. Al-Waqi&#39;a</option><option  value=57>57. Al-Hadid</option><option  value=58>58. Al-Mujadila</option><option  value=59>59. Al-Hashr</option><option  value=60>60. Al-Mumtahana</option><option  value=61>61. As-Saff</option><option  value=62>62. Al-Jamu&#39;a</option><option  value=63>63. Al-Munafiqun</option><option  value=64>64. At-Tagabun</option><option  value=65>65. At-Talaq</option><option  value=66>66. At-Tahrim</option><option  value=67>67. Al-Mulk</option><option  value=68>68. Al-Qalam</option><option  value=69>69. Al-Haqqa</option><option  value=70>70. Al-Ma&#39;arij</option><option  value=71>71. Nuh</option><option  value=72>72. Al-Jinn</option><option  value=73>73. Al-Muzzammil</option><option  value=74>74. Al-Muddaththir</option><option  value=75>75. Al-Qiyamat</option><option  value=76>76. Ad-Dahr</option><option  value=77>77. Al-Mursalat</option><option  value=78>78. An-Nabaa</option><option  value=79>79. An-Nazi&#39;at</option><option  value=80>80. Abasa</option><option  value=81>81. At-Takwir</option><option  value=82>82. Al-Infitar</option><option  value=83>83. Al-Mutaffifin</option><option  value=84>84. Al-Inshiqaq</option><option  value=85>85. Al-Buruj</option><option  value=86>86. At-Tariq</option><option  value=87>87. Al-A&#39;la</option><option  value=88>88. Al-Gashiya</option><option  value=89>89. Al-Fajr</option><option  value=90>90. Al-Balad</option><option  value=91>91. Ash-Shams</option><option  value=92>92. Al-Lail</option><option  value=93>93. Adh-Dhuha</option><option  value=94>94. Al-Sharh</option><option  value=95>95. At-Tin</option><option  value=96>96. Al-Alaq</option><option  value=97>97. Al-Qadr</option><option  value=98>98. Al-Baiyina</option><option  value=99>99. Al-Zalzalah</option><option  value=100>100. Al-Adiyat</option><option  value=101>101. Al-Qari&#39;a</option><option  value=102>102. At-Takathur</option><option  value=103>103. Al-Asr</option><option  value=104>104. Al-Humaza</option><option  value=105>105. Al-Fil</option><option  value=106>106. Quraish</option><option  value=107>107. Al-Ma&#39;un</option><option  value=108>108. Al-Kauthar</option><option  value=109>109. Al-Kafirun</option><option  value=110>110. An-Nasr</option><option  value=111>111. Al-Lahab</option><option  value=112>112. Al-Ikhlaas</option><option  value=113>113. Al-Falaq</option><option  value=114>114. An-Nas</option></select> </li>
           <li class="list-group-item  list-group-item-secondary"> <select id="ayahlist" class="ayah-list"><option  value="0" rel="0" >0-0</option><option  value="1" rel="3" >1-3</option><option  value="4" rel="5" >4-5</option><option  value="6" rel="6" >6-6</option><option  value="7" rel="8" >7-8</option><option  value="9" rel="10" >9-10</option><option  value="11" rel="13" >11-13</option><option  value="14" rel="17" >14-17</option><option  value="18" rel="19" >18-19</option><option  value="20" rel="20" >20-20</option><option  value="21" rel="22" >21-22</option><option  value="23" rel="24" >23-24</option><option  value="25" rel="25" >25-25</option><option  value="26" rel="27" >26-27</option><option  value="28" rel="29" >28-29</option><option  value="30" rel="31" >30-31</option><option  value="32" rel="34" >32-34</option><option  value="35" rel="35" >35-35</option><option  value="36" rel="36" >36-36</option><option  value="37" rel="37" >37-37</option><option  value="38" rel="38" >38-38</option><option  value="39" rel="40" >39-40</option><option  value="41" rel="44" >41-44</option><option  value="45" rel="48" >45-48</option><option  value="49" rel="49" >49-49</option><option  value="50" rel="50" >50-50</option><option  value="51" rel="51" >51-51</option><option  value="52" rel="52" >52-52</option><option  value="53" rel="54" >53-54</option><option  value="55" rel="55" >55-55</option><option  value="56" rel="56" >56-56</option><option  value="57" rel="58" >57-58</option><option  value="59" rel="62" >59-62</option><option  value="63" rel="68" >63-68</option><option  value="69" rel="69" >69-69</option><option  value="70" rel="71" >70-71</option><option  selected  value="72" rel="73" >72-73</option></select>   </li>
  </ul>
         <p class="arabic text-center ">{{$arabics->th_name}}</p>
         <br> 
         <div class="col-sm-3">
                <div class="form-group row">
                </div>
                </div>
                @foreach($arabics->arabic as $arabic )
            <p class="arabic">{{$arabic->text}}<span class="arabic_number"></span></p>
            <p class="latin">[{{$arabic->thais->ayat}}]{{$arabic->thais->text}}</p>
            <audio controls >
                <source src="/mp3/{{$arabic->thais->audio}}" type="audio/mpeg">
            </audio><hr>
              @endforeach </div>

@endsection