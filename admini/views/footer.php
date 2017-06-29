</div>
<div class="footer">
	<div></div>
	<p><a href="<?php echo ROOTPATH ?>/" target="_blank"><?php if(cnStrLen(htmlspecialchars(stripslashes(SITENAME)))>45)echo cnSubStr(htmlspecialchars(stripslashes(SITENAME)),0,45).'..'; else echo htmlspecialchars(stripslashes(SITENAME)); ?></a> - © CopyRight 2016 - <?php echo date("Y")?>, Power by Lanying</p>
</div>
<?php echo update_tip(); ?>
</body>
</html>