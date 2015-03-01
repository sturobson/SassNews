

<ul class="archive__list">
  <?php foreach(page('sassnews')->children()->visible()->flip() as $project): ?>
  <li class="archive__item">
    <h3 class="archive__title"><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <?php echo $project->text()->kirbytext() ?>
  </li>
  <?php endforeach ?>
</ul>
