<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body> 

<div class="container">
  <h2>Multiplication Table</h2>
  <p>The Table Done by Menna El Rouby</p>            
  <table class="table table-hover">
    <thead>
        <?php
        $v =6; ?>
      <tr>
        <th><?php echo "Table of &nbsp;" .$v ?></th>
      </tr>
    </thead>
    <tbody>
        <?php
        for($x=1;$x<=10;$x++)
        { $r=$v*$x;?>
      <tr>
        <td><?php echo $x ,"&nbsp;", "X &nbsp;" , $v , "&nbsp;" , "= &nbsp;", $r ?></td>
      </tr>
     <?php
        } ?>
    </tbody>
  </table>
</div>

</body>
</html>
