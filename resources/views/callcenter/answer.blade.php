<html>
  <head>
    <title>Main Dashboard  (After Agent Authorized with Syarah)</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
	<!-- Include the CJS SDK -->
	<script src="https://sdk-cdn.mypurecloud.com/javascript/99.0.2/purecloud-platform-client-v2.min.js"></script>
	<script src="https://sdk-cdn.mypurecloud.com/webrtc-sdk/latest/purecloud-webrtc-sdk.js"></script>
    
    <script src="{{ URL::asset('public/assets/js/CallCenter/GenesysJS.js') }}"></script>

    <script type="text/javascript"> 
				
			$(document).ready(() => {
						localStorage.setItem('gToken', '');
						localStorage.setItem("state", "");
						localStorage.setItem("redirectUri","");
						const clientId ='02f1ea44-052b-4f24-adaa-345abe71ad45'; //WAMY
						//var redirectUri = "http://localhost:88/";
						var redirectUri = "http://srv.wamy.org/";
						console.log(redirectUri);
						TokenGeneration(clientId);
						var gToken = localStorage.getItem('gToken');
						console.log("index--gToken = ", gToken);
						const sdk = new window.PureCloudWebrtcSdk({
								accessToken: gToken,
								environment: "mypurecloud.ie"
								
						  });
						  sdk.initialize()
							  .then(()=>{
								console.log('index--sdk initialize');
									let isMute = false;
									$('#answer').click(function() {
										sdk.on("pendingSession", ({ id, address, conversationId, autoAnswer }) => {
												sdk.acceptPendingSession(id);
												
												
										});
									});
						}).catch((err)=>{
								console.log("index--error=",err);
						 });
						 
			  
				
			});
    </script>
</head>
<body>
	<button id="answer"> Answer </button>
</body>
</html>