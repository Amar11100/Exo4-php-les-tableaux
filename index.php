<!DOCTYPE>
<html>
<head>
<title>Exercice4</title>
<meta  charset="UTF-8">
</head>
<body>
  <?php
    $mois = array
    ("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
    echo $mois[2]."<br/>".$mois[4];
    ?>
    <hr>
    <?php
    $mois [7] = "août";
    echo $mois [7];
?>
<hr>
<?php
    $dept = array ( "9"=>"Ariège",
                    "11"=>"Aude",
                    "12"=>"Aveyron",
                    "30"=>"Gard",
                    "31"=>"Haute-Garonne",
                    "32"=>"Gers",
                    "46"=>"Lot",
                    "32"=>"Gers" ,
                    "34"=>"Hérault",
                    "46"=>"Lot",
                    "48"=>"Lozère",
                    "65"=>"Haute-Pyrénées",
                    "66"=>"Pyrénées-orientales",
                    "81"=>"Tarn",
                    "82"=>"Tarn-et-garonne" ,);
      echo $dept [30]."<br/>".$dept [11];
    ?>
    <hr>
    <?php
     foreach ($mois as $cle => $valeur)
     {echo $valeur."<br/>";}
    ?>
    <hr>
    <?php
      foreach ($dept as $cle => $valeur)
      {echo $valeur." ".$cle."<br/>";}
     ?>
 </body>
 </html>
