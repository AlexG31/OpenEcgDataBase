<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>ECG Database</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
      <div class="eight column" style="margin-top: 10%">
        <?php
        echo "<h3>Datail of [$recID]</h3>";
        ?>
      </div>
  </div>

<!--Search Region 
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class= "row">
  <div class = "twelve colomns" style="height:4px; margin-top:0%; background-color:#ebeff0">
  </div>
  </div>

  <div class= "container">
      <?php
      printf('<img src="/data/%s_1.jpg" alt= " " /> ', $recID);
      ?>
  </div>

  <div class= "container">
      <?php
      printf('<img src="/data/%s_2.jpg" alt=" " /> ', $recID);
      ?>
  </div>


  <div class="container">
    <!--<pre class="code-example">-->
      <!--<code class="code-example-body prettyprint">-->
      <table class="u-full-width">
      <thead>
        <tr>
          <th>Downloads</th>
        </tr>
      </thead>
      <tbody>


        <tr>
          <td>
          <p> 
            <?php
            printf('<a href="/data/%s_REPORT.xml">%s_REPORT.xml</a>',$recID,$recID);
            ?>
            </p>

          </td>
        </tr>

        <tr>
          <td>
          <p> 
            <?php
            printf('<a href="/data/%s_1.jpg">%s_1.jpg</a>',$recID,$recID);
            ?>
            </p>

          </td>
        </tr>

        <tr>
          <td>
          <p> 
            <?php
            printf('<a href="/data/%s_2.jpg">%s_2.jpg</a>',$recID,$recID);
            ?>
            </p>

          </td>
        </tr>

    </tbody>
    </table>
    </div>

  <!--<div class = "eight columns" style="margin-left:20%; margin-top:2%">-->
      <!--<div class = "six columns" style = "background-color:red">-->
          <!--1-->
          <!--<br>-->
          <!--2sdfsadfasdf-->
          <!--<br>-->
          <!--2sdfsadfasdf-->
          <!--<br>-->
          <!--2sdfsadfasdf-->
          <!--<br>-->
          <!--2sdfsadfasdf-->
          <!--<br>-->
          <!--2sdfsadfasdf-->
          <!--<br>-->
          <!--2sdfsadfasdf-->
      <!--</div>-->
      <!--<div class = "six columns" style = "background-color:green">-->
          <!--2-->
      <!--</div>-->

  <!--</div>-->



<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
