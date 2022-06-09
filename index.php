<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <link href="styl_1.css" rel="stylesheet"/>
   
    <title>Wędkowanie</title>
</head>

<body>
    <header id="baner">
        <h1>
            Portal dla wędkarzy
        </h1>

    </header>
    <div id="lewy_1">
        <h3>
            Ryby zamieszkujące rzeki
        </h3>
        <ol>

            <?php
                $baza = mysqli_connect('localhost','root','','wedkowanie');
                $zapytanie1 = mysqli_query($baza,"SELECT ryby.nazwa , lowisko.akwen , lowisko.wojewodztwo from ryby join lowisko on ryby.id=lowisko.Ryby_id WHERE lowisko.rodzaj = 3");
                while($wynik=mysqli_fetch_array($zapytanie1)){
                    echo "<li> $wynik[0] pływa w rzece $wynik[1], $wynik[2] </li>";
                }
                mysqli_close($baza)
                ?>

        </ol>
    </div>
    <div id="prawy">

<img src="ryba1.jpg" alt="Sum" /> </br>

<a href="kwerendy.txt" >
    Pobierz kwerendy
</a>
</div>
    <div id="lewy_2">
        <h3>
            Ryby drapieżne naszych wód
        </h3>
        <table>
           
        <th>L.p.</th>
        <th>Gatunek</th>
        <th>Występowanie</th>
            
        <?php

               $baza = mysqli_connect('localhost','root','','wedkowanie');
               $zapytanie2 = mysqli_query($baza,"SELECT id,nazwa,wystepowanie FROM ryby WHERE styl_zycia=1;");
               while($wynik=mysqli_fetch_array($zapytanie2)){
                   echo "<tr><td> $wynik[0]</td> <td>$wynik[1]</td><td>$wynik[2]</td> </tr>";
               }
               mysqli_close($baza)
                ?>


        </table>

    </div>
   
    
    <footer id="stopka">
        <p>
            Stronę wykonał: 03311704898
        </p>

    </footer>


</body>

</html>
