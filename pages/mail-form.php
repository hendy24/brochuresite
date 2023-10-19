<?php
    require 'protected/sendEmail.php';

    try {
        // Content
        $mail->isHTML(true);
        $mail->Subject = "Website contact inquiry";
        $mail->Body = input()['message'];
        $mail->setFrom(input()['email'], input()['name']);

        $mail->send();
        $message = 'Message has been sent';
    } catch (Exception $e) {
        $message = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    header("refresh:5;url=home");
    ?>

    <div class="row my-5">
        <div class="col-md-12">
            <p class="display-4 text-center">Your <?php echo $message; ?></p>
        </div>
    </div>
    <br><br><br>

