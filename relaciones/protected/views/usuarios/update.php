<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Create Usuarios', 'url'=>array('create')),
	array('label'=>'View Usuarios', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<h1>Update Usuarios <?php echo $model->id; ?></h1>
<?php 
/*
foreach($tareas as $data)
{
  echo '*****************<br>'.$data->id.'<br>';
  echo $data->nombre.'<br>';
}
*/
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>