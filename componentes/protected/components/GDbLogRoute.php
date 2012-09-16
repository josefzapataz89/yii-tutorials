<?php
class GDbLogRoute extends CDbLogRoute
{
	protected function createLogTable($db,$tableName)
	{
		$driver=$db->getDriverName();
		if($driver==='mysql')
			$logID='id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY';
		else if($driver==='pgsql')
			$logID='id SERIAL PRIMARY KEY';
		else
			$logID='id INTEGER NOT NULL PRIMARY KEY';

		$sql="
CREATE TABLE $tableName
(
	$logID,
	level VARCHAR(128),
	category VARCHAR(128),
	logtime INTEGER,
	ref VARCHAR(128),
	message TEXT
)";
		$db->createCommand($sql)->execute();
	}

	/**
	 * Stores log messages into database.
	 * @param array $logs list of log messages
	 */
	protected function processLogs($logs)
	{
		$sql="
INSERT INTO {$this->logTableName}
(level, category, logtime, message, ref) VALUES
(:level, :category, :logtime, :message, :ref)
";
		$command=$this->getDbConnection()->createCommand($sql);
		foreach($logs as $log)
		{
			if(strpos($log[0],"#")!==false)
				$datos=explode("#",$log[0]);
			
			$ref=!empty($datos[0])?$datos[0]:"";	
			$mensaje=!empty($datos[1])?$datos[1]:$log[0];	
			$command->bindValue(':level',$log[1]);
			$command->bindValue(':category',$log[2]);
			$command->bindValue(':logtime',(int)$log[3]);
			$command->bindValue(':message',$mensaje);
			$command->bindValue(':ref',$ref);
			$command->execute();
		}
	}
}
