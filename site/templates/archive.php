<?php snippet('header') ?>

<main class="main" role="main">
  <article class="archive">
    <h2 class="archive__title"><?php echo $page->title()->html() ?></h2>
    <div class="archive__meta">
      <p><strong>Published:</strong> <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('Y', 'year') ?></time></p>
    </div>

    <div class="archive__content">
      <?php echo $page->text()->kirbytext() ?>
    </div>


    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
        <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
        <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>

  </main>

  <?php snippet('footer') ?>
