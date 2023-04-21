<!DOCTYPE html>
<html>
<head>
	<title>SKD Logistics User Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f7f7f7;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
		}

		.container {
			width: 500px;
			margin: 50px auto;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			padding: 30px;
			box-sizing: border-box;
		}

		.label {
			font-weight: bold;
			margin-bottom: 5px;
			color: #555;
		}

		.value {
			margin-bottom: 15px;
		}

		.tracking {
			font-weight: bold;
			margin-bottom: 5px;
			color: #555;
		}

		.tracking-info {
			margin-bottom: 15px;
		}

		.button-container {
			display: flex;
			justify-content: center;
			align-items: center;
			margin-bottom: 20px;
		}

		.button {
			background-color: #007bff;
			color: #fff;
			border: none;
			padding: 10px 20px;
			margin: 0 10px;
			cursor: pointer;
			transition: background-color 0.2s;
			text-transform: uppercase;
			font-weight: bold;
		}

		.button:hover {
			background-color: #0069d9;
		}

		.notification {
			position: fixed;
			top: 20px;
			left: 50%;
			transform: translateX(-50%);
			padding: 10px 20px;
			color: #fff;
			font-weight: bold;
			border-radius: 5px;
			opacity: 0;
			transition: opacity 0.2s;
			z-index: 9999;
		}

		.notification.show {
			opacity: 1;
		}

		.notification.success {
			background-color: #5cb85c;
		}

		.notification.error {
			background-color: #d9534f;
		}

		.select-container {
			display: flex;
			align-items: center;
			margin-bottom: 15px;
		}

		.select-container label {
			font-weight: bold;
			margin-right: 10px;
			color: #555;
		}

		.select-container select {
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
		}
	</style>
</head>
<body>

    <center>
    <a class="navbar-logo" href="#"> <img src="../assets/img/logo/logo-new.jpg" alt="logo" /> </a>
</center>

	<div class="container">
		<div class="select-container">
			<label for="company">Choose a Logistics Company:</label>
			<select id="company">
				<option value="DTDC">DTDC</option>
				<option value="UPS">UPS</option>
				<option value="FedEx">FedEx</option>
				<option value="DHL">DHL</option>
				<option value="USPS">USPS</option>
			</select>
		</div>

		<div class="label">
            New Process:</div>
            <div class="value"> 
                <!-- new process value will be updated dynamically through JavaScript -->
                <span id="new-process"></span>
            </div>
        
            <div class="label">
                Old Process:</div>
            <div class="value">
                <!-- old process value will be updated dynamically through JavaScript -->
                <span id="old-process"></span>
            </div>
        
            <div class="tracking">
                Live Tracking:</div>
            <div class="tracking-info">
                <!-- tracking info value will be updated dynamically through JavaScript -->
                <span id="tracking-info"></span>
            </div>
        
            <div class="button-container">
                <button class="button" onclick="updateTracking()">Update Tracking</button>
                <button class="button" onclick="showNotification('Your tracking information has been updated!', 'success')">Notify Me</button>
            </div>
        </div>
        
        <div class="notification" id="notification"></div>
        
        <script>
            // select elements
            const companySelect = document.getElementById('company');
            const newProcess = document.getElementById('new-process');
            const oldProcess = document.getElementById('old-process');
            const trackingInfo = document.getElementById('tracking-info');
            const notification = document.getElementById('notification');
        
            // data for updating process and tracking information
            const processes = [
                {
                    new: 'Order has been received',
                    old: 'N/A'
                },
                {
                    new: 'Order is being processed',
                    old: 'Order has been received'
                },
                {
                    new: 'Order has been shipped',
                    old: 'Order is being processed'
                },
                {
                    new: 'Order is out for delivery',
                    old: 'Order has been shipped'
                },
                {
                    new: 'Order has been delivered',
                    old: 'Order is out for delivery'
                }
            ];
        
            const tracking = [
                {
                    location: 'New York, NY',
                    status: 'In Transit'
                },
                {
                    location: 'Boston, MA',
                    status: 'In Transit'
                },
                {
                    location: 'San Francisco, CA',
                    status: 'In Transit'
                },
                {
                    location: 'Los Angeles, CA',
                    status: 'Out for Delivery'
                },
                {
                    location: 'Los Angeles, CA',
                    status: 'Delivered'
                }
            ];
        
            // function to update process and tracking information
            function updateTracking() {
                // get the index of the current process and tracking status
                let currentProcessIndex = processes.findIndex(p => p.new === newProcess.innerText);
                let currentTrackingIndex = tracking.findIndex(t => t.status === trackingInfo.innerText);
        
                // update the process and tracking status
                if (currentProcessIndex < processes.length - 1) {
                    newProcess.innerText = processes[currentProcessIndex + 1].new;
                    oldProcess.innerText = processes[currentProcessIndex + 1].old;
                } else {
                    newProcess.innerText = 'Order has been delivered';
                    oldProcess.innerText = 'Order is out for delivery';
                }
        
                if (currentTrackingIndex < tracking.length - 1) {
                    trackingInfo.innerText = tracking[currentTrackingIndex + 1].status;
                } else {
                    trackingInfo.innerText = 'Delivered';
                }
            }
        
            // function to show a notification
            function showNotification(message, type) {
                notification.innerText = message;
                notification.classList.add('show');
                notification.classList.add(type);

                // hide the notification after 3 seconds
                setTimeout(() => {
                    notification.classList.remove('show', type);
                }, 3000);
            }
            function gotoanotherpage(){
                window.location.href="orders.php";
            }
        </script>
        <div style="text-align:center;">
        <button class="button success" onclick="gotoanotherpage()">MAKE NEW ORDER</button>
        <button>LOGOUT</button>
    </div>
        <style>
            button {
              background-color: blue;
              color: white;
              border: none;
              padding: 10px 20px;
              font-size: 16px;
              cursor: pointer;
            }
          </style>

    </body>
</html> 