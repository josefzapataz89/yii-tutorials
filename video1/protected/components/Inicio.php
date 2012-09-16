<?php
class Inicio
{
	public static function terminar()
	{
		echo "Ya termine el llamado JE JE JE";
	}
	public static function preparar()
	{
		$datos=Yii::app()->db->createCommand("SELECT * FROM categorias")->queryAll();
		foreach($datos as $data)
			echo $data['nombre']."<br>";
		
		Yii::app()->name="Mi Aplicacion runtime";
		echo Yii::app()->id."Id anterior<br>";
		Yii::app()->id="12345678";
		echo Yii::app()->id."Id nuevo<br>";
	}
}