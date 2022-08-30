<!-- popup success -->
<div id="popup-success" class="popup">
	<div class="box">
		
		<h2 class="title-big">
			Success
		</h2>

		<p class="text-medium-small desc">
			Your message has been successfully sent! <br />
			We'll get back to you shortly.
		</p>
		
		<button class="button button-big button-beige-dark text-medium-small" onclick="$.fancybox.close()">
			Close
		</button>

	</div>
</div>

<!-- popup error -->
<div id="popup-error" class="popup">
	<div class="box">
		
		<h2 class="title-big">
			Error
		</h2>

		<p class="text-medium-small desc">
			There was an error trying to send your message. <br />
			Please try again later.
		</p>

		<button class="button button-big button-beige-dark text-medium-small" onclick="$.fancybox.close()">
			Close
		</button>

	</div>
</div>

<!-- popup forgot password -->
<div id="popup-forgot-password" class="popup">
	<div class="box">
		
		<h2 class="title-big">
			Forgot password
		</h2>

		<p class="text-medium-small desc">
			Please fill the field below and we will send you an email to reset your password.
		</p>

		<form action="" id="forgot-password-form" method="get">

			<div class="form-line">
				<label for="forgot-email" class="text-small label">Email <span class="required">*</span></label>
				<input type="email" name="Email" id="forgot-email" class="text-small input" autocomplete="off" required>
			</div>

			<button type="submit" name="submit" class="button button-big button-beige-dark text-medium-small">
				Submit
			</button>

		</form>

	</div>
</div>

<!-- continue shopping -->
<div id="popup-continue-shopping" class="popup">
    <div class="box">

        <button class="button button-big button-beige-dark text-medium-small" onclick="$.fancybox.close()">
			Continue shopping
		</button>

        <p class="text-medium-small or">
            or
        </p>

        <a href="cart.php" class="button button-big button-beige-dark text-medium-small">
			Checkout
        </a>

    </div>
</div>