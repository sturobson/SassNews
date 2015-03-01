
<?php $archives = page('sassnews')->children()->visible()->flip()->paginate(10) ?>
<ul class="archive__list">
  <?php foreach($archives as $archive): ?>
  <li class="archive__item">
    <h3 class="archive__title"><a href="<?php echo $archive->url() ?>"><?php echo $archive->title()->html() ?></a></h3>
    <?php echo $archive->text()->kirbytext() ?>
  </li>
  <?php endforeach ?>
</ul>


<?php if($archives->pagination()->hasPages()): ?>
<nav class="pagination">

  <?php if($archives->pagination()->hasNextPage()): ?>
  <a class="next" href="<?php echo $archives->pagination()->nextPageURL() ?>">&lsaquo; newer posts</a>
  <?php endif ?>

  <?php if($archives->pagination()->hasPrevPage()): ?>
  <a class="prev" href="<?php echo $archives->pagination()->prevPageURL() ?>">older posts &rsaquo;</a>
  <?php endif ?>

</nav>
<?php endif ?>
