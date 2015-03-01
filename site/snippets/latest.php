

  <?php foreach(page('sassnews')->children()->visible()->flip()->limit(1) as $project): ?>
  <div class="latest__item">
    <h3 class="latest__title"><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <?php echo $project->text()->kirbytext() ?>
  </div>
  <?php endforeach ?>
