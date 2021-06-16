<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    <title>Student Hostel Registration</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script>
    function getSeater(val) {
        $.ajax({
            type: "POST",
            url: "get_seater.php",
            data: 'roomid=' + val,
            success: function(data) {
                //alert(data);
                $('#seater').val(data);
            }
        });

        $.ajax({
            type: "POST",
            url: "get_seater.php",
            data: 'rid=' + val,
            success: function(data) {
                //alert(data);
                $('#fpm').val(data);
            }
        });
    }
    </script>

</head>

<body>
    <?php include('includes/header.php');?>
    <div class="ts-main-content">
        <?php include('includes/sidebar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Campus Residency </h2>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Secure your Accommodation</div>
                                    <div class="panel-body">
                                        <div style="margin-left:0;" class="container">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <strong>
                                                        <h3>Choose a Hostel</h3>
                                                    </strong>
                                                    <div class="well" style="height:300px; width:100%;">
                                                        <div style="float:left;">
                                                            <img src="C:\Users\user\Downloads\Accomodationwebapp\hit200\chiremba\chiremba\images\gallery\8.jpg"
                                                                height="250" width="350" />
                                                        </div>
                                                        <div style="float:left; margin-left:10px;">
                                                            <h3></h3>
                                                            <h4 style="color:#00ff00;"></h4>
                                                            <br /><br /><br /><br /><br /><br />
                                                            <a style="margin-left:580px;" href="add_reserve.php"
                                                                class="btn btn-info"><i
                                                                    class="glyphicon glyphicon-list"></i> Hostel 1</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="well" style="height:300px; width:100%;">
                                                    <div style="float:left;">
                                                        <img src="C:\Users\user\Downloads\Accomodationwebapp\hit200\chiremba\chiremba\images\gallery\8.jpg"
                                                            height="250" width="350" />
                                                    </div>
                                                    <div style="float:left; margin-left:10px;">
                                                        <h3></h3>
                                                        <h4 style="color:#00ff00;"></h4>
                                                        <br /><br /><br /><br /><br /><br />
                                                        <a style="margin-left:580px;" href="add_reserve.php"
                                                            class="btn btn-info"><i
                                                                class="glyphicon glyphicon-list"></i> Hostel 2</a>
                                                    </div>
                                                </div>
                                                <div class="well" style="height:300px; width:100%;">
                                                    <div style="float:left;">
                                                        <img src="C:\Users\user\Downloads\Accomodationwebapp\hit200\chiremba\chiremba\images\gallery\8.jpg"
                                                            height="250" width="350" />
                                                    </div>
                                                    <div style="float:left; margin-left:10px;">
                                                        <h3></h3>
                                                        <h4 style="color:#00ff00;"></h4>
                                                        <br /><br /><br /><br /><br /><br />
                                                        <a style="margin-left:580px;" href="add_reserve.php"
                                                            class="btn btn-info"><i
                                                                class="glyphicon glyphicon-list"></i> Hostel 3</a>
                                                    </div>
                                                </div>
                                                <div class="well" style="height:300px; width:100%;">
                                                    <div style="float:left;">
                                                        <img src="C:\\Users\\user\Downloads\\Accomodationwebapp\\hit200\\chiremba\\chiremba\\images\\gallery\\8.jpg"
                                                            height="250" width="350" />
                                                    </div>
                                                    <div style="float:left; margin-left:10px;">
                                                        <h3></h3>
                                                        <h4 style="color:#00ff00;"></h4>
                                                        <br /><br /><br /><br /><br /><br />
                                                        <a style="margin-left:580px;" href="add_reserve.php"
                                                            class="btn btn-info"><i
                                                                class="glyphicon glyphicon-list"></i> Hostel 4</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="text-align:right; margin-right:10px;"
                                        class="navbar navbar-default navbar-fixed-bottom">
                                        <label>&copy; Copyright HIT 2021</label>
                                    </div>


                                    <?php ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
</body>
<script type="text/javascript">
$(document).ready(function() {
    $('input[type="checkbox"]').click(function() {
        if ($(this).prop("checked") == true) {
            $('#paddress').val($('#address').val());
            $('#pcity').val($('#city').val());
            $('#pstate').val($('#state').val());
            $('#ppincode').val($('#pincode').val());
        }

    });
});
</script>
<script>
function checkAvailability() {
    $("#loaderIcon").show();
    jQuery.ajax({
        url: "check_availability.php",
        data: 'roomno=' + $("#room").val(),
        type: "POST",
        success: function(data) {
            $("#room-availability-status").html(data);
            $("#loaderIcon").hide();
        },
        error: function() {}
    });
}
</script>


<script type="text/javascript">
$(document).ready(function() {
    $('#duration').keyup(function() {
        var fetch_dbid = $(this).val();
        $.ajax({
            type: 'POST',
            url: "ins-amt.php?action=userid",
            data: {
                userinfo: fetch_dbid
            },
            success: function(data) {
                $('.result').val(data);
            }
        });


    })
});
</script>

</html>