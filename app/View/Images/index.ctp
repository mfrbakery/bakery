<div class="images index">
	<h2><?php echo __('Images');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('image_url');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	
	
	<?php echo $this->Html->image("/img/imagecache/100x150_1072132153215_image.JPG", array(
	    "alt" => "Brownies",
	    'url' => array('controller' => 'images', 'action' => 'view', 5)
    )); ?>
	
	
	
	<?php
	foreach ($images as $image): ?>
	<tr>
	
		<td><?php echo h($image['Image']['id']); ?>&nbsp;</td>
		
		<td><?php 
		
		echo $this->Html->image($url.$image['Image']['image_url'], array(
	    "alt" => "Brownies",
	    'url' => array('controller' => 'images', 'action' => 'view', $image['Image']['id']))); ?>&nbsp;</td>
		
		<td><?php echo h($image['Image']['created']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['modified']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['title']); ?>&nbsp;</td>
		<td class="actions">
		
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $image['Image']['id'])); ?>
			 
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $image['Image']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $image['Image']['id']), null, __('Are you sure you want to delete # %s?', $image['Image']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Image'), array('action' => 'add')); ?></li>
	</ul>
</div>
