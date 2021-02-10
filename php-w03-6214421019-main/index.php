<?php
  require_once './myfunction.php';
  $staffArray = array(
    array("Fisch",120000),
    array("Deluc",200000),
    array("Bennet",400000),
    array("Jean",600000),
    array("Klee",800000),
    array("Razor",1100000),
    array("Zhong Li",2500000),
    array("Mona",7000000)
  );
?>  
<!doctype html>
<html lang="en">
  <head>
    <title>php-w03</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <b>Income 120,000</b><i><?php echo CalTax(120000)?></i><br>
      <b>Income 200,000</b><i><?php echo CalTax(200000)?></i><br>
      <b>Income 400,000</b><i><?php echo CalTax(400000)?></i><br>
      <b>Income 600,000</b><i><?php echo CalTax(600000)?></i><br>
      <b>Income 800,000</b><i><?php echo CalTax(800000)?></i><br>
      <b>Income 1,100,000</b><i><?php echo CalTax(1100000)?></i><br>
      <b>Income 2,500,000</b><i><?php echo CalTax(2500000)?></i><br>
      <b>Income 7,000,000</b><i><?php echo CalTax(7000000)?></i><br>
      <table class="table">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Income</th>
                  <th>Tax</th>                 
              </tr>
          </thead>
          <tbody>
          <?php
            for($i=0;$i<sizeof($staffArray);$i++){
                echo "<tr>\n";
                echo "\t<td>" .$staffArray[$i][0]."</td>";
                echo "<td>" .$staffArray[$i][1]."</td>";
                echo "<td>" .CalTax($staffArray[$i][1])."</td>\n";
                echo "</tr\n>" ;
            }    
          ?>               
          </tbody>
      </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>