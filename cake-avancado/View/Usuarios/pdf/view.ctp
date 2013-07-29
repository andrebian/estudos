<div class="usuarios view">
<h2><?php  echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['senha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>