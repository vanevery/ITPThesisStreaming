<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="jwplayer/jwplayer.js"></script>
		<script type="text/javascript">
			jwplayer.key="QCPC6szLK89R2CjqvDPOIY8gD85vXrTEFq844Q==";
			
			var streamingServerAndApp = "rtmp://128.122.151.16/live/";
			//var mainCameraStream = "camera3.stream";
			var mainCameraStream = "ptzcamera.stream";

			//rtsp://root:streamme@10.0.0.3/axis-media/media.amp?videocodec=h264&resolution=480x270&audio=1&duration=0&fps=15&videobitrate=500&videomaxbitrate=500&videokeyframeinterval=30&compression=30&color=1&clock=0&date=0&text=0
						
		</script>
	</head>
	<body>
			
		<div id="outterMainPlayer">
			<!-- Can I make this outter div capture the clicks rather than Flash? -->
			<div id="mainPlayer">Loading the player...</div>

			<script type="text/javascript">
				jwplayer("mainPlayer").setup({
					file: streamingServerAndApp + mainCameraStream,
					autostart: true,
					width: 480,
					height: 270
				});
			</script>	
		</div>	
	
	</body>
</html>


