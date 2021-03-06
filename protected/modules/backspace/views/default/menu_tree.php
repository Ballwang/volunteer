
<?php $this->widget('zii.widgets.CMenu',array(
	'activateParents'=>true,
	'htmlOptions'=>array('class'=>'tree treeFolder expand'),
	'items'=>array(
		array('label'=>'文章管理', 'url'=>array('#'),'items'=>array(
			array('label'=>'创建文章', 'url'=>array('/backspace/default/create'), 'linkOptions'=>array('target'=>'dialog','rel'=>'art_create')),
			array('label'=>'管理文章', 'url'=>array('/backspace/articles/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'art_manager')),
		)),
		array('label'=>'商标分类管理', 'url'=>array('/backspace/tmtype/admin'),'items'=>array(
			array('label'=>'创建商标分类', 'url'=>array('/backspace/tmtype/create'), 'linkOptions'=>array('target'=>'navTab','rel'=>'tm_create')),
			array('label'=>'管理商标分类', 'url'=>array('/backspace/tmtype/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'tm_manager')),
		)),
		array('label'=>'栏目管理', 'url'=>array('/backspace/ArtCategory/'), 'linkOptions'=>array('target'=>'navTab','rel'=>'list_manager')),
	),
)); ?>
	