<!DOCTYPE html>
<html>
<head>
	<title>test</title>
        <script src="<?php print_r(base_url("resource/jquery.min.js"))?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                User = {
                    nIdUser: 1,
                    nIdUserType: 2, 
                    sUsername: "mangelt",
                    sPassword: "Passw0rd01",
                    bIsActive: true,
                    bIsConfirmed: true
                }
                
                $.ajax({
                        type: 'post',
                        url: '<?php print_r(site_url("Service/test"))?>',
                        data: User,
                        beforeSend: function(xmlHttpRequest) {
                            xmlHttpRequest.setRequestHeader('X-SampleHeader', 'Hello world');
                            xmlHttpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xmlHttpRequest.setRequestHeader('Accept', 'application/json, text/javascript, */*; q=0.01');
                            xmlHttpRequest.setRequestHeader('Token', '454554trgfggfurufu8f7f7fhkrfdmvoiwerhdsnvuejr978r8530r8');
                        },
                        success: function(data) {
                            // Data processing code
                            console.warn(data);
                        }
                    });
               $.post("<?php print_r(site_url("Service/test"))?>",User,function(rs){
                   console.warn(rs);
               });
            });
        </script>
</head>
<body>

<p>test servicio rest.</p>

</body>
</html>
