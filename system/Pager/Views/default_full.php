<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>
<div class="berita_pagination" aria-label="<?= lang('Pager.pageNavigation') ?>">

	
	<?php if ($pager->hasPrevious()) : ?>
		<a class="btn_page page_prev page_control" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
			<i class="fa-solid fa-chevron-left text-xs"></i>
		</a>
		<a class="btn_page page_next page_control" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
			<i class="fa-solid fa-chevron-right text-xs"></i>
		</a>
	<?php endif ?>
	<?php foreach ($pager->links() as $link) : ?>
		<a class="btn_page active <?= $link['active'] ? 'active' : '' ?>" href="<?= $link['uri'] ?>">
			<?= $link['title'] ?>
		</a>
	<?php endforeach ?>
	<?php if ($pager->hasNext()) : ?>
		<li>
			<a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
				<span aria-hidden="true"><?= lang('Pager.next') ?></span>
			</a>
		</li>
		<li>
			<a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
				<span aria-hidden="true"><?= lang('Pager.last') ?></span>
			</a>
		</li>
	<?php endif ?>
</div>