<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <title>Hotel Management</title>
    <meta charset="utf-8">
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
            <select class="form-control" id="city_name" name="city_name" required="" data-parsley-required-message="Please select city.">
            <option value="">Select City</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Chennai">Chennai</option>
            <option value="Bengalure">Bengalure</option>
            <option value="Mumbai">Mumbai</option>
          </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="location_id" name="location_id" required="" data-parsley-required-message="Please select location.">
            <option value="1">Select Location</option>
            <option value="1">Location1</option>
            <option value="2">Location2</option>
            <option value="3">Location3</option>
            <option value="4">Location4</option>
          </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="from_date" name="from_date" placeholder="From Date" required="" data-parsley-required-message="Please select from date.">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="to_date" name="to_date" placeholder="To Date"  required="" data-parsley-required-message="Please select to date.">
          </div>
          <div class="form-group">
            <select class="form-control" id="room_type" name="room_type" required="" data-parsley-required-message="Please select room type.">
            <option value="1">Select Room Type</option>
            <option value="1">Hyderabad</option>
            <option value="2">Chennai</option>
            <option value="3">Bengalure</option>
            <option value="4">Mumbai</option>
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
          <button type="button" onclick="searchHotelDetails()" class="btn btn-primary">Submit</button>
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
            * Add/Update Slot Details 
            *************************/
            function searchHotelDetails() {
                if($form.parsley().validate()){
                    var serializedArr = $("#search_hotel").serializeArray();
                    var jsonObj = jQFormSerializeArrToJson(serializedArr);
                    console.log(JSON.stringify(jsonObj));
                    $.ajax({
                        url: '',
                        type: 'POST',
                        data: JSON.stringify(jsonObj),
                        success: function(result) {
                            console.log(result);

                        }
                    });
                }
            }
        </script>
    </div>
</body>

</html>
        