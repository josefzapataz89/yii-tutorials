<?php
class MiClase extends CWebUser
{


	/**
	 * Returns the unique identifier for the user (e.g. username).
	 * This is the unique identifier that is mainly used for display purpose.
	 * @return string the user name. If the user is not logged in, this will be {@link guestName}.
	 */
	public function getName()
	{
		if(($name=$this->getState('__name'))!==null)
			return $name." Tavo";
		else
			return $this->guestName." Tavo";
	}
}