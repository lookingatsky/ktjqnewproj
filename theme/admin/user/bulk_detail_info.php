<style type="text/css">
table td{ text-align:center}
</style>


<form class="form-inline definewidth m20" action="" method="get">    
	<?php if($if_type_1 == 0){ ?>
		<a role="btn" class="btn btn-warning createBatchRedPackets" pid="<?php echo $pid;?>">点击生成5000红包</a>
	<?php }else{?>
		<a role="btn" class="btn btn-default" disabled="disabled" >5000红包已生成</a>
	<?php } ?>
	<a role="btn" class="btn btn-warning">点击生成邀请红包</a>
	<!--	
    用户ID/email/moblie/姓名：<input type="text" name="text" id="username"class="abc input-default" placeholder="" value="<?php echo $this->input->get('text')?$this->input->get('text'):"";?>" style="width:200px">&nbsp;&nbsp;
    	   <select name="monkey">
           		<option value="1" <?php if($this->input->get('monkey') == 1){?> selected="selected" <?php }?>>默认</option>
                <option value="2" <?php if($this->input->get('monkey') == 2){?> selected="selected" <?php }?>>金额倒序</option>
           </select>
           <button type="submit" class="btn btn-primary">查询</button>
	-->
</form>
<script>
$(function(){
	$(".createBatchRedPackets").click(function(){
	var pid = $(this).attr("pid");
	var money = $(this).attr("money");
		$.post("/832BB7C4398238F3/user/createBatchRedPackets/", {
			pid:pid
		},function(data) {
			if (data == 1) {
				alert("红包申请提交成功");
			}else{
				alert("红包申请提交错误，请联系管理员");
			}
		})	
	})	
})
</script>
<table class="table table-bordered table-hover definewidth m10" >
    <thead>
    <tr>
		<th>用户id</th>
        <th>姓名</th>
		<th>手机号</th>
        <th>投资金额</th>
		<th>投标时间</th>
        <th>投资月数</th>
		<th>投标状态</th>
		<th>邀请人</th>
        <th>是否生成5000红包</th>
		<th>是否生成邀请红包</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($result as $key){?>
	
    <tr>
        <td><?php echo $key['uid'];?></td>
        <td><?php echo $key['name'];?></td>
        <td><?php echo $key['mobile'];?></td>
        <td><?php echo $key['monkey'];?></td>
        <td><?php echo $key['dateline'];?></td>
        <td><?php echo $key['day'];?></td>
        <td><?php echo $key['static'];?></td>
		<td><?php if($key['recommender']){ echo $key['recommender']; }else{ echo '无推荐人'; }; ?></td>
        <td>
			 <?php if($key['monkey'] > 1000 || $key['monkey'] == 1000){ echo "是"; }else{ echo "否"; };?>
        </td>
        <td>
			 <?php if($key['monkey'] > 1000 || $key['monkey'] == 1000){ echo "是"; }else{ echo "否"; };?>
        </td>		
    </tr>
    <?php }?>
    </tbody>    	
</table>
<hr />
<table class="table table-bordered table-hover definewidth m10" >
	<thead>
	<tr>
		<th>id</th>
		<th>投资金额</th>
		<th>获取用户id</th>
		<th>红包类型</th>
		<th>红包金额</th>
		<th>项目id</th>
		<th>创建时间</th>
		<th>状态</th>
		<th>备注</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($record as $val){?>
	<tr>
		<td><?php echo $val['id'];?></td>
		<td><?php echo $val['money'];?></td>
		<td><?php echo $val['uid'];?></td>
		<td><?php echo $val['type'];?></td>
		<td><?php echo $val['pack_money'];?></td>
		<td><?php echo $val['pid'];?></td>
		<td><?php echo $val['create_time'];?></td>
		<td>			
			<?php if($val['status'] == 0){
				echo "<span class='text-warning'>未申请</span>";
			}elseif($val['status'] == 1){
				echo "<span class='text-success'>红包申请成功</span>";
			}elseif($val['status'] == -1){
				echo "<span class='text-error'>红包申请失败</span>";
			}elseif($val['status'] == 2){
				echo "<span class='text-success'>红包生成成功</span>";
			}elseif($val['status'] == -2){
				echo "<span class='text-error'>红包生成失败</span>";
			}else{
				echo "<span class='text-error'>出错</span>";
			} ?>
		</td>
		<td>
			<?php echo $val['remark'];?>
		</td>
	</tr>
	<?php }?>
	</tbody> 
</table>