<?php $this->pageTitle=Yii::app()->name; ?>
<div class="span12">
	<div class="hero-unit">
		<h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

		<p>Felicitaciones tu has creado tu primera Aplicación.</p>
		
		
<table class="table table-bordered table-condensed table-striped">
	<thead><tr><th colspan="2">Usos de CHtml/CHtml utilities</th></tr></thead>
	<tbody>
		<tr class="light">
			<td>Link simple</td>
			<td><?php echo CHtml::link("Mi link",array("usuarios/index","id"=>"2","title"=>"Mi pagina"));?></td>
		</tr>
		<tr class="light">
			<td>Link simple</td>
			<td><?php echo CHtml::link("Mi link",Yii::app()->controller->createUrl("usuarios/index",array("id"=>"2","title"=>"Mi pagina")));?></td>
		</tr>
		<tr class="light">
			<td>Link simple</td>
			<td><a href="<?php echo $this->createUrl("usuarios/index",array("id"=>"2","title"=>"Mi pagina"));?>">MI link con a</a></td>
		</tr>
		<tr class="light">
			<td>Link absolutos email</td>
			<td><?php echo CHtml::link("Mi link absoluto",$this->createAbsoluteUrl("usuarios/index",array("id"=>"2","title"=>"MI titulo")));?></td>
		</tr>
		<tr class="light">
			<td>Link externos</td>
			<td><?php echo CHtml::link("Mi link absoluto","http://www.google.com");?></td>
		</tr>
		<tr class="light">
			<td>Link pdf</td>
			<td><?php echo CHtml::link("Mi link a un pdf",Yii::app()->request->baseUrl."/upload/ejemplo.pdf");?></td>
		</tr>
		<tr class="light">
			<td>Link doc</td>
			<td><?php echo CHtml::link("Mi link a un doc",Yii::app()->request->baseUrl."/upload/ejemplo.jpg",array("confirm"=>"Estas seguro?"));?></td>
		</tr>
		<tr class="dark">
			<td>Link enviar parametros POST</td>
			<td><?php echo CHtml::link("Parametros POST",null,array(
				"submit"=>array("usuarios/index","id"=>"12345"),
				"params"=>array("id_post"=>"Je je je soy post"),
				"confirm"=>"Hey cuidado NOOOOOOOO!!!!!",
				)
			);?></td>
		</tr>
		
		<tr class="dark">
			<td>Link enviar parametros AJAX<div id="escribir"></div></td>
			<td><?php echo CHtml::link("Parametros AJAX","",array(
				"ajax"=>array(
						"url"=>$this->createUrl("usuarios/index",array("idget"=>"je je soy geT")),
						"type"=>"post",
						"dataType"=>"html",
						"data"=>array("idpost"=>"soy post"),
						"update"=>"#escribir",
					),
				)
			);?></td>
		</tr>
		
		<tr class="dark">
			<td>Link con imagen</td>
			<td><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/images/004.png","Eliminar",array("title"=>"Mi title")),array("usuarios/index","id"=>"2","title"=>"Mi pagina"));?></td>
		</tr>
		<tr class="light">
			<td>Imagen</td>
			<td><?php echo CHtml::image(Yii::app()->request->baseUrl."/images/004.png","Eliminar",array("title"=>"Mi title"));?></td>
		</tr>
	</tbody>
</table>
		
		<p>You may change the content of this page by modifying the following two files:</p>
		<ul>
			<li>View file: <tt><?php echo __FILE__; ?></tt></li>
			<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
		</ul>

		<p>For more details on how to further develop this application, please read
		the <a rel="tooltip" title="Ir a la documentacion" href="http://www.yiiframework.com/doc/">documentation</a>.
		Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
		should you have any questions.</p>
    </div>
</div>
