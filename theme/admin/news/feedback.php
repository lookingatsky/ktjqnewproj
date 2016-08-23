<table class="table table-bordered table-hover definewidth m10" >
    <thead>
    <tr>
        <th>ID</th>
        <th>意见类型</th>
        <th>发布时间</th>
        <th>内容</th>
        <th>联系方式</th>
        <th>操作</th>
    </tr>
    </thead>
    	<?php foreach($result as $key){?>
	     <tr style="text-align:center;">
            <td><?php echo $key['id'];?></td>
            <?php if($key['status'] == 1){?>
            <td>建议</td>
             <?php }?>
             <?php if($key['status'] == 2){?>
            <td>投诉</td>
             <?php }?>
             <?php if($key['status'] == 3){?>
            <td>其他</td>
             <?php }?>
            <td><?php echo date('Y-m-d H:i:s',$key['time']);?></td>
             <td width="700px;"><?php echo $key['content'];?></td>
            <td><?php echo $key['phone'];?></td>
            <td >
                  <a href="<?php echo admin_url('news/del_feedback/'.$key['id']);?>" class="delete" >删除</a>
            </td>
        </tr>
        <?php }?>
        </table>