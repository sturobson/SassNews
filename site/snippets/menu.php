<nav class="menu" role="navigation">

  <ul class="menu__list">
    <?php foreach($pages->visible() as $p): ?>
    <li class="menu__item">
      <a class="menu__link" <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>

</nav>
