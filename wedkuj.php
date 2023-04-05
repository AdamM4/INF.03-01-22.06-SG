<html lang="pl-PL">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Wędkowanie</title>

	<link rel="stylesheet" href="styl_1.css">
</head>
<body>
	<div class="b1">
    <h1> Portal dla wędkarzy </h1>
    </div> 
    <div class="l1">
   <h3>Ryby zamieszkujące rzeki</h3>
   <?php

$con = new mysqli("127.0.0.1","root","","wedkowanie");
$res1 = $con->query("SELECT ryby.nazwa,lowisko.akwen,lowisko.wojewodztwo FROM ryby JOIN lowisko ON lowisko.Ryby_id=ryby.id WHERE ryby.wystepowanie LIKE '%rzeki%';");
$cos1 = $res1->fetch_all();
echo "<ol>";
for($i=0;$i<count($cos1);$i++)
{
    echo "<li>".$cos1[$i][0]." pływa w rzece ".$cos1[$i][1].",".$cos1[$i][2]."</li>";
}
echo "</ol>";

?>
</div>
<div class="l2"> 
    <h3>Ryby drapieżne naszych wód </h3>
    <TABLE BORDER=1px solid BORDERCOLOR=#4FB3BF>
   



    <thead>
      <tr>
         <th>lp.</th> <th>Gatunek</th> <th>Występowanie</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <th></th> <td></td> <td></td>
      </tr>
      <tr>
         <th></th> <td></td> <td></td>
      </tr>
      <tr>
         <th></th> <td></td> <td></td>
      </tr>
      <tr>
         <th></th> <td></td> <td></td>
      </tr>
      
         <th></th> <td></td> <td></td>
      </tr>
      
         <th></th> <td></td> <td></td>
      </tr>
   </tbody>

</TABLE>

</div>
<div class="p1"> 
    <div class="o1"> 
  <img src="ryba1.jpg" alt="sum"> 
  <a href="kwerendy.txt">Pobierz kwerendy</a>
</div> 
</div>
<div class="s1">
Stronę wykonał: Adamek
</div>
</body>

</html>
