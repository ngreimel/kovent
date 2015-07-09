<style>
a { display: block; width: 300px; height: 300px; margin-right: 15px; margin-bottom: 15px; float: left; overflow: hidden; }
</style>
<?php foreach (glob('*.png') as $img): ?>
  <a href="<?php echo $img; ?>"><img alt="<?php echo $img; ?>" src="<?php echo $img; ?>" /></a>
<?php endforeach; ?>
<?php foreach (glob('*.gif') as $img): ?>
  <a href="<?php echo $img; ?>"><img alt="<?php echo $img; ?>" src="<?php echo $img; ?>" /></a>
<?php endforeach; ?>
<?php foreach (glob('*.jpg') as $img): ?>
  <a href="<?php echo $img; ?>"><img alt="<?php echo $img; ?>" src="<?php echo $img; ?>" /></a>
<?php endforeach; ?>
