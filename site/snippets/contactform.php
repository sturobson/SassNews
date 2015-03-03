<?php

$form = new contactform(array(
  'to'       => 'John <yo@sassnews.com>',
  'from'     => 'Contact Form <yo@sassnews.com>',
  'subject'  => 'New contact form request',
  'goto'     => $page->url() . '/status:thank-you'
));

?>
<section id="contactform">

  <?php if(param('status') == 'thank-you'): ?>

  <h1>Thanks</h1>
  <p class="contactform-text">Thank you very much for your submitting a link.</p>

  <?php else: ?>

  <form action="#contactform" method="post">
    <fieldset>

      <?php if($form->isError('send')): ?>
      <div class="contactform-alert">The email could not be sent. Please try again later.</div>
      <?php elseif($form->isError()): ?>
      <div class="contactform-alert">The form could not be submitted. Please fill in all fields correctly.</div>
      <?php endif ?>

      <div class="contactform-field<?php if($form->isError('url')) echo ' error' ?>">
        <label class="contactform-label" for="contactform-email">Link <?php if($form->isRequired('url')) echo '*' ?> <?php if($form->isError('url')): ?><small>Please enter a valid url</small><?php endif ?></label>
        <input class="contactform-input" type="text" id="contactform-url" name="url" value="<?php echo $form->htmlValue('url') ?>" />
      </div>

      <input class="contactform-button" type="submit" name="submit" value="Send" />

    </fieldset>
  </form>

  <?php endif ?>

</section>
