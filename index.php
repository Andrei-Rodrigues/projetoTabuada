<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela - Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    .firstRow{
        font-weight: bold;
    }
</style>
<body style="background-color: #0c0d3d; display: flex; flex-direction:column; align-items: center; width: 100%;">
    <h1 style="color: #fff;" class="text-center mt-1">Tabuada</h1>

            <table style="width:60%;" class="table table-light table-hover table-striped table-bordered">
                <?php
                
                $num1 = 1;
                $num2 = 1;
                
                echo '<tr>';
                echo '<td class=firstRow>x</td>';
                echo '<td class=firstRow>1</td>';
                echo '<td class=firstRow>2</td>';
                echo '<td class=firstRow>3</td>';
                echo '<td class=firstRow>4</td>';
                echo '<td class=firstRow>5</td>';
                echo '<td class=firstRow>6</td>';
                echo '<td class=firstRow>7</td>';
                echo '<td class=firstRow>8</td>';
                echo '<td class=firstRow>9</td>';
                echo '<td class=firstRow>10</td>';
                echo '</tr>';

            while ($num1 <= 10) {
                echo ('<tr>');
                echo ('<td>'.$num1.'</td>');
                while ($num2 <= 10) {
                  echo ('<td>'.$num1*$num2.'</td>');
                  $num2 +=1;
                }
                echo ('</tr>');
                $num1 +=1;
                $num2 =1;
              }
            ?>
            </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>