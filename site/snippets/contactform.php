<?php

	$ctimestamp = get('ctimestamp') + 6;
	$timestamp = time();

    if( strlen(get('username')) > 1 || strlen(get('text')) > 1 || $ctimestamp >= $timestamp ) {
        $check = false;
    } else {
        $check = true;
    }

    if( $check == true ) {

        if(get('submit')) {
            if(get('name') &&
               get('email') &&
               get('message')) {

                $emailName	    = get('name');
                $emailEmail 	= get('email');
                $emailMessage 	= nl2br(get('message'));
                $emailOptions   = get('options');
                $emailTo		= 'you@example.com';
                $emailSubject 	= 'New message from contactform';
                $emailFrom		= 'From: '.$emailName.''."<.$emailEmail.>\r\n";
                $emailFrom 	   .= "Mime-Version: 1.0\r\n";
                $emailFrom 	   .= "Content-Type: text/html; charset=utf-8\r\n";
                $emailBody	   .= '<strong>Name</strong>: '.$emailName.'<br><br>';
                $emailBody	   .= '<strong>Email</strong>: '.$emailEmail.'<br><br>';
                $emailBody	   .= '<strong>Message</strong>: <br>'.$emailMessage.'<br><br>';
                if (strlen($emailOptions) >= 1)
                    $emailBody .= '<strong>Chosen option</strong>: <br>'.$emailOptions;

                $email = mail($emailTo, $emailSubject, $emailBody, $emailFrom);
                //$email = true;

                if($email) {
                    go($page . '/message:sent');
                } else {
                    go($page . '/message:notsent');
                }

            }
        }
    }

?>

<form method="post" action="#contact" id="contact">
    <fieldset>
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name *" required="required">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email *" required="required">
        </div>
        <div class="form-group">
            <textarea class="form-control" id="message" name="message" rows="6" placeholder="Message *" required="required"></textarea>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="options" id="options1" value="Option&nbsp;1">
                Option 1
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="options" id="options2" value="Option&nbsp;2">
                Option 2
            </label>
        </div>
        <div class="form-group">
            <input class="hidden" type="text" name="username" value="">
            <input class="hidden" type="text" name="text" value="">
            <input class="hidden" type="hidden" name="ctimestamp" value="<?php echo time() ?>">
            <input name="submit" type="hidden" value="true">
            <button type="submit" class="btn btn-default btn-lg">Submit</button>
        </div>
    </fieldset>
</form>

<?php if(kirby()->request()->params()->message()): ?>
    <?php if(kirby()->request()->params()->message() == 'sent'): ?>
        <div class="alert alert-success">
            Your message was sent successfully.
        </div>
        <?php else: ?>
            <div class="alert alert-danger">
                Your message could not be sent.
            </div>
    <?php endif ?>
<?php endif ?>
