<?php

class Token
{
	public static function checkToken($token, $cookiecsrf)
	{
		if($cookiecsrf == $token)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}