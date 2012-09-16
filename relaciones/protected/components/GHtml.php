<?php
class GHtml extends CHtml
{
	public static function image($url,$alt="",$htmlOptions=array())
	{ 
		return parent::image(self::imageUrl($url),$alt,$htmlOptions);
	}
	
	public static function imageAbs($url,$alt="",$htmlOptions=array())
	{ 
		return parent::image(Yii::app()->request->getBaseUrl(true)."/images/$url",$alt,$htmlOptions);
	}
	
	public static function imageAbsUrl($imageName="")
	{ 
		return Yii::app()->request->getBaseUrl(true)."/images/$imageName";
	}
	
	public static function imageUrl($imageName="")
	{ 
		return Yii::app()->request->baseUrl."/images/$imageName";
	}
} 