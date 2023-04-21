<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order Form</title>
	<style>
		* {
			box-sizing: border-box;
			font-family: sans-serif;
			margin: 0;
			padding: 0;
		}

		body {
			background-color: #F5F5F5;
		}

		h1 {
			color: #0072C6;
			margin-bottom: 20px;
			text-align: center;
		}
		p{
			color: #333333;
			margin-bottom: 0px;
			margin-top: -20px;
			margin-right: 30px;
			text-align: right;
		}

		form {
			background-color: #FFFFFF;
			border-radius: 8px;
			box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
			margin: 20px auto;
			max-width: 600px;
			padding: 40px;
		}

		label {
			color: #0072C6;
			display: block;
			margin-bottom: 8px;
		}

		input[type="text"], select {
			border: 1px solid #D9D9D9;
			border-radius: 4px;
			display: block;
			font-size: 16px;
			margin-bottom: 20px;
			padding: 12px;
			width: 100%;
		}

		select {
			appearance: none;
			background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%230072C6"><path d="M6 9l6 6 6-6z" /></svg>');
			background-position: right 10px center;
			background-repeat: no-repeat;
			background-size: 12px;
			padding-right: 30px;
		}

		input[type="submit"] {
			background-color: #0072C6;
			border: none;
			border-radius: 4px;
			color: #FFFFFF;
			cursor: pointer;
			font-size: 18px;
			padding: 12px;
			width: 100%;
		}

		input[type="submit"]:hover {
			background-color: #005EA2;
		}

		.success-message {
			background-color: #DFF2BF;
			border: 1px solid #B2D28E;
			border-radius: 4px;
			color: #4F8A10;
			margin-top: 20px;
			padding: 12px;
			text-align: center;
			display: none;
		}

		.error-message {
			background-color: #FFBABA;
			border: 1px solid #D8000C;
			border-radius: 4px;
			color: #D8000C;
			margin-bottom: 10px;
			padding: 12px;
			text-align: center;
		}

		.product-details {
			margin-bottom: 20px;
			padding: 10px;
			background-color: #F2F2F2;
			border-radius: 4px;
			border: 1px solid #D9D9D9;
		}

		.product-details label {
			margin-bottom: 5px;
			font-weight: bold;
			color: #333333;
		}

		.product-details input[type="text"] {
			margin-bottom: 5px;
		}

		.product-details .product
        {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
    
        .product-details .product label {
            margin-right: 10px;
            flex-basis: 120px;
            color: #333333;
            font-weight: bold;
        }
    
        .product-details .product input[type="text"] {
            flex: 1;
            margin-right: 10px;
            border: 1px solid #D9D9D9;
            border-radius: 4px;
            padding: 12px;
            font-size: 16px;
            color: #333333;
        }
    
        .product-details .product select {
            flex: 1;
            margin-right: 10px;
            border: 1px solid #D9D9D9;
            border-radius: 4px;
            padding: 12px;
            font-size: 16px;
            color: #333333;
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23333333"><path d="M6 9l6 6 6-6z" /></svg>');
            background-position: right 10px center;
            background-repeat: no-repeat;
            background-size: 12px;
            padding-right: 30px;
        }
    
        .product-details .product button {
            background-color: #0072C6;
            border: none;
            border-radius: 4px;
            color: #FFFFFF;
            cursor: pointer;
            font-size: 18px;
            padding: 12px;
        }
    
        .product-details .product button:hover {
            background-color: #005EA2;
        }
    </style>
</head>
<body>
	<<header>
    <center>
    <a class="navbar-logo" href="#"> <img src="../assets/img/logo/logo-new.jpg" alt="logo" /> </a>
</center>
		
	  </header>
	  <p>SKD welcomes you,<br><strong>Mr.SHIVAM</strong></p>
    <form id="order-form">
        <div class="product-details">
            <h2>Product Details</h2>
    
            <div class="product">
                <label for="product-name">Product Name</label>
                <input type="text" id="product-name" name="product-name" required>
            </div>
    
            <div class="product">
                <label for="product-description">Product Description</label>
                <textarea id="product-description" name="product-description" required></textarea>
            </div>
    
            <div class="product">
                <label for="product-category">Product Category</label>
                <select id="product-category" name="product-category" required>
                    <option value="">-- Select a Category --</option>
                    <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing</option>
                    <option value="books">Books</option>
                    <option value="FOOD">Food Items</option>
                    <option value="Chemicals">Chemicals</option>
                    <option value="Ornaments">Ornaments</option>
                    <option value="others">others</option>
                </select>
            </div>
    
            <div class="product">
                <label for="product-quantity">Quantity</label>
                <input type="number" id="product-quantity" name="product-quantity" min="1" required>
            </div>
    
            <div class="product">
                <label for="product-weight">Weight (kg)</label>
                <input type="number" id="product-weight" name="product-weight" step="0.01" min="0.01" required>
            </div>
    
            <div class="product">
                <label for="product-value">Value (INR)</label>
                <input type="number" id="product-value" name="product-value" min="0.01" required>
            </div>

            <div class="product">
                <label for="product-size">Size (cm)</label>
                <input type="text" id="product-size" name="product-size" required>
            </div>
    
            <div class="product">
                <label for="product-color">Color</label>
                <input type="text" id="product-color" name="product-color" required>
            </div>
    
            <div class="product">
                <label for="product-image">Image</label>
                <input type="file" id="product-image" name="product-image" accept="image/*" required>
            </div>
    
            <div class="product">
                <label for="product-notes">Notes</label>
                <textarea id="product-notes" name="product-notes"></textarea>
            </div>
        </div>
    
        <div class="shipping-details">
            <h2>Shipping Details</h2>
    
            <div class="shipping">
                <label for="recipient-name">Recipient Name</label>
                <input type="text" id="recipient-name" name="recipient-name" required>
            </div>
    
            <div class="shipping">
                <label for="recipient-address">Recipient Address</label>
                <input type="text" id="recipient-address" name="recipient-address" required>
            </div>
    
            <div class="shipping">
                <label for="recipient-city">Recipient City</label>
                <input type="text" id="recipient-city" name="recipient-city" required>
            </div>
    
            <div class="shipping">
                <label for="recipient-country">Recipient Country</label>
                <select id="recipient-country" name="recipient-country" required>
                    <option value="">-- Select a Country --</option>
                    <option value="INDIA">INDIA</option>
                    <option value="CHINA">CHINA</option>
                    <option value="USA">USA</option>
                    <option value="RUSSIA">RUSSIA</option>
                    <option value="BANGLADESH">BANGLADESH</option>
                    <option value="GERMANY">GERMANY</option>
                </select>
                
            </div>
    
            <div class="shipping">
                <label for="recipient-phone">Recipient Phone</label>
                <input type="tel" id="recipient-phone" name="recipient-phone" pattern="[0-9]{10}" required>
            </div>
    
            <div class="shipping">
                <label for="shipping-method">Shipping Method</label>
                <select id="shipping-method" name="shipping-method" required>
                    <option value="">-- Select a Shipping Method --</option>
                    <option value="standard">Standard Shipping	₹60/kg</option>
                    <option value="express">Express Shipping	₹50/kg</option>
                    <option value="DTDC">DTDC	₹50/kg</option>
                    <option value="DHL">DHL	₹60/kg</option>
                    <option value="Trinity Freight Services">Trinity Freight Services	₹58/kg</option>
                    <option value="GATI Ltd.">GATI Ltd.	₹55/kg</option>
                    <option value="CMA CGM">CMA CGM	₹52/kg</option>
                </select>
            </div>
    
            
    
            <div class="shipping">
                <label for="shipping-notes">Notes</label>
                <textarea id="shipping-notes" name="shipping-notes"></textarea>
            </div>
			
        </div>
    
        	<button type="submit">Place Order</button>
        	
    </form>
	<div style="text-align:center;">
		
		<button class="button success" onclick="gotoanotherpage()">HOME</button>  

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
	  <script>
		function changeButton() {
		  var button = document.getElementById("submit");
		  button.innerHTML = "PLACED";
		  button.style.backgroundColor = "green";
		}
		function gotoanotherpage(){
			window.location.href="userlogin.html";
		}
		
	  </script>

</body>
</html>            






<style>
	* {
		box-sizing: border-box;
		font-family: Arial, Helvetica, sans-serif;
	}

	body {
		background-color: #f1f1f1;
	}

	h1 {
		text-align: center;
		font-size: 36px;
		margin-top: 50px;
	}

	form {
		background-color: white;
		max-width: 800px;
		margin: 50px auto;
		padding: 20px;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
		border-radius: 10px;
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
	}

	.product-details,
	.shipping-details {
		flex-basis: 48%;
		display: flex;
		flex-direction: column;
	}

	.product-details h2,
	.shipping-details h2 {
		font-size: 24px;
		margin-bottom: 20px;
	}

	.product {
		margin-bottom: 20px;
	}

	.product label,
	.shipping label {
		display: block;
		margin-bottom: 5px;
		font-weight: bold;
	}

	.product input[type="text"],
	.product input[type="file"],
	.product textarea,
	.shipping input[type="text"],
	.shipping input[type="tel"],
	.shipping select,
	.shipping textarea {
		padding: 10px;
		border: none;
		border-radius: 5px;
		background-color: #f1f1f1;
		margin-top: 5px;
		font-size: 16px;
	}

	.product input[type="text"]:focus,
	.product input[type="file"]:focus,
	.product textarea:focus,
	.shipping input[type="text"]:focus,
	.shipping input[type="tel"]:focus,
	.shipping select:focus,
	.shipping textarea:focus {
		background-color: #ddd;
	}

	.product input[type="file"] {
		padding: 0;
	}

	.product textarea,
	.shipping textarea {
		height: 100px;
		resize: none;
	}

	.shipping button[type="submit"] {
		background-color: #4CAF50;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		margin-top: 20px;
		font-size: 16px;
	}

	.shipping button[type="submit"]:hover {
		background-color: #45a049;
	}

	@media screen and (max-width: 600px) {
		.product-details,
		.shipping-details {
			flex-basis: 100%;
		}
	}
</style>
