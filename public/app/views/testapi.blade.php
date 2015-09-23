
<html>
 <body>

<?php
if (isset($list) && $list == 0)
{
  //$app_info = file_get_contents('http://{Your Website}/api?action=get_app&id=' . $_GET["id"]);
  $app_info =$app_list;// json_decode($app_info, true);
  
  
  ?>
    <table>
      <tr>
        <td>App Name: </td><td> <?php echo $app_info ->app_name ?></td>
      </tr>
      <tr>
        <td>Price: </td><td> <?php echo $app_info->app_price ?></td>
      </tr>
      <tr>
        <td>Version: </td><td> <?php echo $app_info->app_version ?></td>
      </tr>
    </table>
    <br />
    <a href="{{url()}}/applist" alt="app list">Return to the app list</a>
  <?php
}
else // else take the app list
{
 
  ?>
     App list 
    <ul>
    <?php foreach ($app_list as $app): ?>
      <li>
        <a href=<?php echo "http://localhost/public/appdetails/get_app/".$app["id"]  ?> alt=<?php echo "app_" . $app["id"] ?>><?php echo $app["name"] ?></a>
    </li>
    <?php endforeach; ?>
    </ul>
  <?php
} ?>
 </body>
</html>
