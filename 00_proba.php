<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <!-- CONEXIONES PARA BOOTSTRAP -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JQERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->



    <style>
      h1 {font:oblique bold 120% cursive; color:green }
      h3 {font:sans-serif 70% cursive; color:blue }
      .tipo_1 {color: black; background-color:yellow; font:sans-serif}
      .tipo_2 {color: white; background-color:#990044; font:sans-serif}
    </style>

  </head>
  <body>




  <h1>Exemple de prova de funcionament PHP / HTML</h1>
  </br>


  <div class="col-xs-3">
      <h3> Fruites </h3>
        <?php
          $fruites=['Tomaquets','Pebrots','Cebes','Patates'];
          echo '<select>';
          foreach ($fruites as $key => $value) {
            echo '<option class="tipo_1">'.$value.'</option>';
          }
          echo '</select>';
        ?>
   </div>
   <div class="col-xs-3">
      <h3> Fruites Noves </h3>
        <?php
          $fruites_noves=['Cireres','Peres','Platans'];
          echo '<select>';
          foreach ($fruites_noves as $key => $value) {
            echo '<option class="tipo_2">'.$value.'</option>';
          }
          echo '</select>';
         ?>
   </div>
  <div class="col-xs-3">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      Launch demo modal
    </button>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            <?php
            echo "<h4>Lista de Fruites</h4>";
            echo "<li>";
            print_r($fruites);
            echo "</li>";
            ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
     </div>
    </div>
 <div class="col-xs-3">
   <div class="dropdown">
     <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Dropdown trigger
       <span class="caret"></span>
     </button>
     <ul class="dropdown-menu" aria-labelledby="dLabel">
       <?php
       echo "<h4>Lista de Fruites Noeves</h4>";
       echo "<li>";
       print_r($fruites_noves);
       echo "</li>";
       ?>
     </ul>
   </div>
 </div>


 </body>
 </html>
