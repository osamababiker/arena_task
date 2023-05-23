<?php


function display_contact_form() {
?>
    <div id="validation-messages-container"></div>

    <form id="contact-form" action="#" method="post">
      <input type="hidden" name="contact_form">
      <div class="row">
          <div class="col-md-6">
              <label for="name"><?php echo esc_html( 'Name', 'twentytwentyone' ); ?></label>
              <input type="text" name="name" id="name" class="form-control">
          </div>
          <div class="col-md-6">
              <label for="email"><?php echo esc_html( 'Email', 'twentytwentyone' ); ?></label>
              <input type="email" name="email" id="email" class="form-control">
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <label for="phone">Phone Number </label>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <div class="" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <a class="dropdown-item" href="#">
                              <img src="<?php echo get_theme_file_uri('assets/img/uae-flag.png') ?>" width="20" height="20" alt="">
                              <span>+971</span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                              </svg>
                          </a>
                      </div>
                  </div>
                  <input type="text" name="phone" id="phone" class="form-control" aria-label="Text input with dropdown button">
              </div>
          </div>
          <div class="col-md-6">
              <label for="amount">Investment Amount</label>
              <select name="amount" id="amount" class="form-control">
                  <option value="100,000">100,000 EUR</option>
              </select>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <label for="message"><?php echo esc_html( 'Message', 'twentytwentyone' ); ?></label>
              <textarea name="message" id="message" cols="30" rows="6" class="form-control"></textarea>
          </div>
      </div>
      <div class="row">
          <div class="col-6">
              <button type="button" id="contact-form-submit"  class="btn contact-btn arena-btn"> <?php echo esc_attr( 'Submit', 'twentytwentyone' ); ?> </button>
          </div>
      </div>
  </form>
<?php
}

add_shortcode('contact-form', 'display_contact_form');

add_action('wp_ajax_nopriv_submit_contact_form', 'submit_contact_form');
add_action('wp_ajax_submit_contact_form', 'submit_contact_form');


function submit_contact_form(){
 
    ob_start();

    $validation_messages = [];
	$success_message = '';

	if ( isset( $_POST['contact_form'] ) ) {
		//Sanitize the data
		$name = isset( $_POST['name'] ) ? sanitize_text_field( $_POST['name'] ) : '';
		$email     = isset( $_POST['email'] ) ? sanitize_text_field( $_POST['email'] ) : '';
        $phone = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
        $amount = isset( $_POST['amount'] ) ? sanitize_text_field( $_POST['amount'] ) : '';
		$message   = isset( $_POST['message'] ) ? sanitize_textarea_field( $_POST['message'] ) : '';

		//Validate the data
		if ( strlen( $name ) === 0 ) {
			$validation_messages[] = esc_html__( 'Please enter a valid name.', 'twentytwentyone' );
		}

		if ( strlen( $email ) === 0 or
		     ! is_email( $email ) ) {
			$validation_messages[] = esc_html__( 'Please enter a valid email address.', 'twentytwentyone' );
		}

        if ( strlen( $phone ) === 0 ) {
                $validation_messages[] = esc_html__( 'Please enter a valid phone number.', 'twentytwentyone' );
            }

        if ( strlen( $amount ) === 0 ) {
                $validation_messages[] = esc_html__( 'Please enter a valid investment amount.', 'twentytwentyone' );
		}

		if ( strlen( $message ) === 0 ) {
			$validation_messages[] = esc_html__( 'Please enter a valid message.', 'twentytwentyone' );
		}

		//Send an email to the WordPress administrator if there are no validation errors
		if ( empty( $validation_messages ) ) {
			$mail    =  get_option( 'admin_email' );
			$subject = 'New message from ' . $name;
			$message = $message . ' - The email address of the customer is: ' . $mail;
			wp_mail( $mail, $subject, $message );
			$success_message = esc_html__( 'Your message has been successfully sent.', 'twentytwentyone' );
		}

	}

	//Display the validation errors
	if ( ! empty( $validation_messages ) ) {
		foreach ( $validation_messages as $validation_message ) {
			wp_send_json_error('<div class="alert alert-danger">' . esc_html( $validation_message ) . '</div>');
		}
	}
	//Display the success message
	if ( strlen( $success_message ) > 0 ) {
		wp_send_json_success('<div class="alert alert-success">' . esc_html( $success_message ) . '</div>');
	}

    wp_send_json_success(ob_get_clean());
}