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
        <h3>欣和怡点ECG数据库</h3>
      </div>
  </div>

<!--Search Region 
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class= "row">
  <div class = "twelve colomns" style="height:4px; margin-top:0%; background-color:#ebeff0">
  </div>
  </div>

  <div class="container">
    <form method = "post" action = "/index.php/ecg/search/">
      <div class="two colums" style="margin-top:5px;width:50%">
      <h5>Search result in the database:</h5>
      </div>


      <input type="text" name="search_text" style="width:60%">
      <input type="submit" value="Search" name="search submit" class="button-primary u-pull-right" style="width:35%">

  </form>
  </div>


  <!--<div class= "row">-->
  <!--<div class = "twelve colomns" style="height:4px; background-color:#ebeff0">-->
  <!--</div>-->
  <!--</div>-->


<!--ECG Data Table 
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
<!--<pre class="code-example">-->
  <!--<code class="code-example-body prettyprint">-->
  <table class="u-full-width">
  <thead>
    <tr>
      <th>Choose</th>
      <th>RecordID</th>
      <th>Age</th>
      <th>Sex</th>
      <th>Diagnosis</th>
      <th>Link</th>
    </tr>
  </thead>
  <tbody>

 <?php
    foreach($file_arr as $value) {
        echo '<tr>';
        echo '<td><input type="checkbox"></td>';
        echo "<td>$value</td>";
        echo "<td>42</td>";
        echo "<td>Male</td>";
        echo "<td>42</td>";

        $len = strlen($value);
        $recID = substr($value, 0, $len - 11);
        printf('<td>
            <a href="/index.php/ecg/detail/%s">
            <input type="submit" value = "detail" >
            </a>
            </td>', $recID);
        echo '</tr>';

    }

?>
  </tbody>
</table>
  <!--</code>-->
  <!--</pre>-->
  </div>

<!--Nav button
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
