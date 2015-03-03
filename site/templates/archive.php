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
  <article class="archive">
    <h2 class="archive__title"><?php echo $page->title()->html() ?></h2>
    <div class="archive__meta">
      <p><strong>Published:</strong> <?php echo $page->published() ?></p>

    </div>

    <div class="archive__content">
      <?php echo $page->text()->kirbytext() ?>
    </div>


    <nav class="nextprev cf" role="navigation">
      <?php if($next = $page->nextVisible()): ?>
        <a class="prev" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
      <?php if($prev = $page->prevVisible()): ?>
        <a class="next" href="<?php echo $prev->url() ?>">&larr; prev</a>
      <?php endif ?>

    </nav>

  </main>

  <?php snippet('footer') ?>
