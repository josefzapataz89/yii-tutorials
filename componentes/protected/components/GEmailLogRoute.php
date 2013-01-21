<?php

class GEmailLogRoute extends CEmailLogRoute
{

	/**
	 * Sends log messages to specified email addresses.
	 * @param array $logs list of log messages
	 */
	protected function processLogs($logs)
	{
		$message="";
		$message.="<table width=\"100%\" cellpadding=\"2\" style=\"border-spacing:1px;font:11px Verdana,Arial,Helvetica,sans-serif;background:#eeeeee;color:#666666\">
				<tbody>
				<tr>
					<th style=\"background:black;color:white\" colspan=\"2\">
						Detalles
					</th>
				</tr>";
		$message.="
				<tr style=\"background-color:#ccc\">
					<th style=\"width:120px\">AJAX</th>
					<th style=\"text-align:left\">".Yii::app()->format->boolean(Yii::app()->request->isAjaxRequest)."</th>
				</tr>
				
				<tr style=\"background-color:#ccc\">
					<th style=\"width:120px\">URL REQUEST</th>
					<th style=\"text-align:left\">".Yii::app()->request->getBaseUrl(true).Yii::app()->request->getRequestUri()."</th>
				</tr>
				
				<tr style=\"background-color:#ccc\">
					<th style=\"width:120px\">URL ANTERIOR</th>
					<th style=\"text-align:left\">".Yii::app()->request->getUrlReferrer()."</th>
				</tr>
				
				<tr style=\"background-color:#ccc\">
					<th style=\"width:120px\">IP</th>
					<th style=\"text-align:left\">".Yii::app()->request->getUserHostAddress()."</th>
				</tr>
				<tr style=\"background-color:#ccc\">
					<th style=\"width:120px\">User Agent</th>
					<th style=\"text-align:left\">".Yii::app()->request->getUserAgent()."</th>
				</tr>
				</tbody>
			</table>";
		$message.=$this->render('log',$logs);
        	$subject=$this->getSubject();
		if($subject===null)
			$subject=Yii::t('yii','Application Log');
		$this->setHeaders(array("Content-type: text/html"));
		foreach($this->getEmails() as $email)
			$this->sendEmail($email,$subject,$message);
	}
        
	protected function render($view,$data)
	{
		$viewFile=YII_PATH.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$view.'.php';
        ob_start();
		ob_implicit_flush(false);
		include(Yii::app()->findLocalizedFile($viewFile,'en'));
		return ob_get_clean();
	}
}
