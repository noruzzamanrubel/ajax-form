<?php
    class WP_From_Shortcode {
        public function shortcode_generator() {
            add_shortcode( 'wp_form', [$this, 'render_shortcode'] );
        }

        public function render_shortcode() {
            ob_start();

        ?>
            <div class="wp-form-container" id="wp_custom_form">
                <form class="wp-form" action="#" method="POST">
                    <div class="form-row">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname">
                    </div>
                    <div class="form-row">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname">
                    </div>
                    <div class="form-row">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="form-row">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject">
                    </div>
                    <div class="form-row">
                        <label for="message">Message</label>
                        <textarea name="message" id="message"></textarea>
                    </div>
                    <div class="form-row">
                        <input class="form_submit" type="submit" value="Send">
                    </div>
                </form>
            </div>

    <?php

                return ob_get_clean();
            }
    }