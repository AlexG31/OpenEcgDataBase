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

    <style>

    .line-separator{

    height:1px;

    background:#717171;

    border-bottom:1px solid #313030;

    }



    </style>
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="twelve columns" style="background-image:url('/img/header.png')">
  <div class="container">
      <div class="eight column " style="margin-top: 12%; ">
        <h1 class="u-pull-right">欣和怡点ECG数据库</h1>
      </div>
  </div>
  <div class = "twelve colomns" style="height:6px; position:relative; margin-top:20%; background-color:#ebeff0">
  </div>
  </div>

<!--Search Region 
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class = "twelve colomns" style="height:4px; position:relative; margin-top:0%; background-color:#ebeff0">
  </div>

  <div class="container">
    <form method = "post" action = "/index.php/ecg/search/">


      <input type="text" name="search_text" style="width:60%; margin-top:10%">
      <input type="submit" value="Search" name="search submit" class="button-primary u-pull-right" style="width:35%;margin-top:10%">

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
<div class = "container">
<div class = "container">
<div class = "row">
    <?php
        function GetNavButton($index, $is_center) {
            $str = "";
            $button_class = ' class = "button-primary" ';
            if ($is_center == False) {
                $button_class = "";
            }
            $str = sprintf('<a href="/index.php/ecg/index/%d"> <input type="submit" %s value="%d" ></a>', $index, $button_class, $index+1);
            return $str;
        }

        if ($page_index - 1 > 0) {
            printf(GetNavButton(0, False));
        }
        if ($page_index - 1 > 1) {
            printf('<strong> ... </strong>');
        }
        if ($page_index - 1 >= 0) {
            printf(GetNavButton($page_index - 1, False));
        }
        if ($page_index >= 0) {
            printf(GetNavButton($page_index , True));
        }
        if ($page_index + 1<= $max_page_index) {
            printf(GetNavButton($page_index+1 , False));
        }
        if ($page_index + 2 < $max_page_index) {
            printf('<strong> ... </strong>');
        }
        if ($page_index + 2 <= $max_page_index) {
            printf(GetNavButton($max_page_index , False));
        }
    ?>
  </div>
  </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
