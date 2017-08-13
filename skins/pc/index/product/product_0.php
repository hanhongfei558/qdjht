<li <?php if($i%4 == 3) echo 'style="padding-right:0;"';?>>
    <a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>"><img src="<?php echo $data['smallPic'];?>" alt="<?php echo $data['title'];?>" /></a>
    <a href="/"><?php echo $data['title'];?></a>
</li>