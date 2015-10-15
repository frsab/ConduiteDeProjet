<h2>Workshop list</h2>

<?php /*
  $value = '';
 
  echo '<select name="atelier">',"\n";
  for($i=0; $i<=10; $i++)
  {
    echo "\t",'<option value=" ', $i ,'"', $value ,'>', $i ,'</option>',"\n";
    $value='';
  }
  echo '</select>',"\n"; */
?>


<ol class="liste">
	<?php 
	for($i = 0; $i <= 5; $i++)
	{ ?>
        	<li><span><strong><a href="index.php?details">Atelier <?php echo $i ?></a></strong><br/></span></li>
	<?php } ?>
</ol>

