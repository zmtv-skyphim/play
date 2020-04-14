<?php
if($_GET['id']){
$id = $_GET['id'];
$homepage = file_get_contents('https://aget.skyphim.net/0.php?id='.$id);
}
?>

<html>

<style type="text/css">
			html, body {
				height: 100% !important;
				width: 100% !important;
				padding: 0 !important;
				margin: 0 !important;
			}
		#SkyPhim{
				height: 100% !important;
				width: 100% !important; 
				padding: 0 !important;
				stretching: 'none';
			}
			

</style>
<body onselectstart="return false" oncontextmenu="return false">
<div id="SkyPhim">Loading ...</div -->
<script type="text/javascript" src="https://cdnjs.skyphim.net/jwplayer.js"></script>
<script type="text/javascript">jwplayer.key="cLGMn8T20tGvW+0eXPhq4NNmLB57TrscPjd1IyJF84o=";</script>
	<script type="text/javascript">
		jwplayer("SkyPhim").setup({
			playlist: [{
				"sources":<?php echo base64_decode($homepage)?>,
			}],
			
				allowfullscreen: true,
				width: '100%',
				aspectratio: '16:9',
				autostart: true,
				mute: false,
				cast: {},
				logo: {
        file: 'https://cdnjs.skyphim.net/skyphim.png'
    			},
				primary:'html5'

		});

</script>
<script>
jwplayer("SkyPhim").addButton("https://cdnjs.skyphim.net/FILE/forward.png", "Next 30s", function () {
            jwplayer("SkyPhim").seek(jwplayer("SkyPhim").getPosition() + 30);
        }, "Next 30s");
jwplayer("SkyPhim").addButton("https://cdnjs.skyphim.net/FILE/backward.png", "Back 30s", function () {
            jwplayer("SkyPhim").seek(jwplayer("SkyPhim").getPosition() - 30);
        }, "Back 30s");
jwplayer("SkyPhim").addButton("https://cdnjs.skyphim.net/FILE/download.png", "Download",
function myFunction() {
  window.open("https://skyphim.net", "_blank");
        }, "Download");
</script>

</body>
</html>
