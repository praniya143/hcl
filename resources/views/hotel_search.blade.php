<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <title>Hotel Management</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/zebra_datepicker@latest/dist/css/default/zebra_datepicker.min.css">
    <link rel="stylesheet" href="{{asset('css/parsley.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/zebra_datepicker@latest/dist/zebra_datepicker.min.js"></script>
    <script src="{{asset('js/parsley.js') }}"></script>
</head>

<body>
    <div class="container">
        <!-- <h2 class="text-center text-primary">Search Hotel</h2> -->
        <h3 class="text-primary">Search Hotel</h3>
        <form class="form-inline" action="" method="post" name="search_hotel" id="search_hotel">
          <div class="form-group">
            <select class="form-control" id="city_name" name="city_name" required="" data-parsley-required-message="Please select city." onchange="getLocations()">
            <option value="">Select City</option>
            <?php if(count($cities)>0){
                foreach($cities as $city){?>
            <option value="<?=$city->city_name?>"><?=$city->city_name?></option>
        <?php }}?>
          </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="location_id" name="location_id" required="" data-parsley-required-message="Please select location.">
            <option value="">Select Location</option>
          </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="from_date" name="from_date" placeholder="From Date" required="" data-parsley-required-message="Please select from date.">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="to_date" name="to_date" placeholder="To Date"  required="" data-parsley-required-message="Please select to date.">
          </div>
          <div class="form-group">
            <select class="form-control" id="room_type" name="room_type" required="" data-parsley-required-message="Please select room type." >
            <option value="">Select Room Type</option>
            <option value="AC">AC</option>
            <option value="NON AC">NON AC</option>
            <option value="Deluxe">Deluxe</option>
          </select>
          <div class="form-group">
            <select class="form-control" id="number_of_rooms" name="number_of_rooms"  required="" data-parsley-required-message="Please select rooms.">
            <option value="">Select Room</option>
            <?php
            foreach(range(1,5) as $key=>$num){
                echo '<option value="'.$num.'">'.$num.'</option>';
            }
            ?>
          </select>
          </div>
          </div>
          <button type="button" onclick="searchHotelDetails()" class="btn btn-primary">Search</button>
        </form>
        <div id="emp_details"></div>
        <script type="text/javascript">
            var $form = $('#search_hotel');
            $(document).ready(function() {
                $('#from_date').Zebra_DatePicker({
                    direction: true,
                    pair: $('#to_date')
                });
                 
                $('#to_date').Zebra_DatePicker({
                    direction: 1
                });
            });
            /********************************************
            * Serialized data converted into json object
            *********************************************/
            function jQFormSerializeArrToJson(formSerializeArr) {
                var jsonObj = {};
                jQuery.map(formSerializeArr, function(n, i) {
                    jsonObj[n.name] = n.value;
                });
                return jsonObj;
            }    
            /*************************
            * Search Hotel Details
            *************************/
            function searchHotelDetails() {
                if($form.parsley().validate()){
                    var serializedArr = $("#search_hotel").serializeArray();
                    var jsonObj = jQFormSerializeArrToJson(serializedArr);
                    console.log(JSON.stringify(jsonObj));
                    $.ajax({
                        url: '/get-hotel-details',
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        },
                        data: JSON.stringify(jsonObj),
                        success: function(result) {
                            console.log(result);

                        }
                    });
                }
            }
            /*************************
            * Get Location Details
            *************************/
            function getLocations() {
                var city = $("#city_name").val();
                if(city !=''){
                    $.ajax({
                        url: '/get-location-details',
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        },
                        data: {'city':city},
                        success: function(result) {
                            console.log(result);
                            $("#location_id").html(result);
                        }
                    });
                }else{
                    alert("Please select city.");
                }
            }
        </script>
    </div>
</body>

</html>
        