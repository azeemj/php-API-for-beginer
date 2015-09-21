Next I’ll create the client page that will be using the API.
<html>
 <body>

<?php
if (isset($list) && $list == 0)
{
  $app_info = file_get_contents('http://{Your Website}/api?action=get_app&id=' . $_GET["id"]);
  $app_info = json_decode($app_info, true);
  
  
  ?>
    <table>
      <tr>
        <td>App Name: </td><td> <?php echo $app_info["app_name"] ?></td>
      </tr>
      <tr>
        <td>Price: </td><td> <?php echo $app_info["app_price"] ?></td>
      </tr>
      <tr>
        <td>Version: </td><td> <?php echo $app_info["app_version"] ?></td>
      </tr>
    </table>
    <br />
    <a href="http://{Your Website}/REST_Client.php?action=get_app_list" alt="app list">Return to the app list</a>
  <?php
}
else // else take the app list
{
 
  ?>
    <ul>
    <?php foreach ($app_list as $app): ?>
      <li>
        <a href=<?php echo "http://{Your Website}/REST_Client.php?action=get_app&id=" . $app["id"]  ?> alt=<?php echo "app_" . $app_["id"] ?>><?php echo $app["name"] ?></a>
    </li>
    <?php endforeach; ?>
    </ul>
  <?php
} ?>
 </body>
</html>
