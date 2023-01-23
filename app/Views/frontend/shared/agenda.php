	<div class="agenda_group grid grid-cols-1 gap-5">
		<?php $agenda = model("Admin\Agenda")->findALl(); ?>
		<?php if (!empty($agenda)): ?>
			<?php foreach ($agenda as  $value): ?>
				<div class="card_agenda">
					<img src="<?php echo base_url('frontend/assets/assets/img/agenda.png') ?>" alt="">
					<div class="title">
						<p><?= tanggal_indo(date('Y-m-d',strtotime($value->tanggal))) ?> <?php echo date('h:i:s',strtotime($value->tanggal)) ?> </p>
						<h2><?php echo $value->judul; ?></h2>
						<small> <i style="color:red;" class="fa fa-map-marker"></i> <?php echo $value->tempat; ?></small>
					</div>
				</div>
			<?php endforeach ?>
		<?php endif ?>
	</div>