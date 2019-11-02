<hr>
<div class="panel panel-primary">
  <div class="panel-heading">Hotel Details</div>
  <div class="panel-body">
	<?php if(count($hotelInfo)>0){
		foreach ($hotelInfo as $key => $hotel_info) {
			 $roomInfo = DB::select( DB::raw("SELECT `id`, `hotel_id`, `room_type`, `no_of_rooms`, `no_of_accomodates`, `cost`, `available_count`, `photo_src`, `created_at`, `updated_at` FROM `hotel_room` WHERE  `hotel_id`= '".$hotel_info->location_id."' AND `room_type`='".$room_type."'") );?>
			<div class="row">
			  <div class="col-sm-4"><img src="<?=$hotel_info->photo;?>"></div>
			  <div class="col-sm-4"><b><?=$hotel_info->name;?></b><br><p><?=$hotel_info->address;?></p></div>
			  <div class="col-sm-4"><a href="">View Details</a></div>
			</div>
			<hr>
			  <?php foreach ($roomInfo as $key => $room_info) {?>
			  	<div class="row">
			  		<div class="col-sm-4"><img width="100"  src="<?=$room_info->photo_src;?>"></div>
			  		<div class="col-sm-4"><p><b>Room Type:</b><?=$room_info->room_type;?></p>
			  		<p><b>No of rooms:</b><?=$room_info->no_of_rooms;?></p>
			  		<p><b>Price:</b><?=$room_info->cost;?></p></div>
			  		<div class="col-sm-4"><a href="" class="btn btn-success">Book</a></div></div>
			<hr>
			  <?php }?>
			<hr>
	<?php }		
  	}else{	
	echo "Search Hotel are not available";
	}
	?>
  </div>
</div>
