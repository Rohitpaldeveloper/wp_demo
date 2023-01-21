<?php
// function form_data_deactivation() {
  global $wpdb;
  global $table_prefix;
  $table = $table_prefix.'customtable';
  $sql = "select  * from $table";
  $result=$wpdb->get_results($sql);
  // print_r($result);

//   $wpdb->query($sql);  
?>
<table border="1">
<tr>
  <td>ID</td>
  <td>NAME</td>
  <td>POSITION</td>
  <td>PHONE</td>
  <!-- <td>IMAGE</td> -->
</tr>
<?php foreach($result as $list)
{ ?>
  <tr>
  <td><?php echo $list->id?></td>
  <td><?php echo $list->name?></td>
  <td><?php echo $list->position?></td>
  <td><?php echo $list->phone?></td>
</tr>
<?php
}?>
</table>