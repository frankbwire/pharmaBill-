<?php  if (count($errors) > 0) : ?>
  <div style=" color: #cc6633;
       font-weight: bold;
      font-family: monospace; font-size: 15px">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>