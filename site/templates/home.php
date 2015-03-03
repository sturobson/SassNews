<?php snippet('header') ?>

  <main class="main" role="main">
    <div class="signup signup--home">
      <form action="//sassnews.us7.list-manage.com/subscribe/post?u=b4a4054cce715a3b0ae5e7d35&amp;id=f7c505323d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="signup_scroll">
          <div class="mc-field-group">
            <!-- <label for="mce-EMAIL">Email</label> -->
            <input placeholder="your email" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL">
          </div>
          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;"><input type="text" name="b_b4a4054cce715a3b0ae5e7d35_f7c505323d" tabindex="-1" value=""></div>
          <div class="clear"><input type="submit" value="Subscribe Now" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        </div>
      </form>
    </div>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>
    <div class="latest">
      <h2>Last Week's Issue</h2>
      <?php snippet('latest') ?>
    </div>
  </main>

<?php snippet('footer') ?>
