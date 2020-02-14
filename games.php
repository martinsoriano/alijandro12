<!DOCTYPE html>
<html>
<head>
	<title>Interface Abstraction</title>
</head>
<body>

<div>

<?php
include 'Shootinterface.php';
include 'PushButtoninterface.php';


    interface combine extends ShootInterface,PushButtonInterface
    {
    	public function shootpush();
    }
    class Game implements combine
    {
    	public function setPushButton()
    	{
    		echo 'Button is pushed'."<br>";
    	}
    	
    	public function setShoot()
    	{
    		echo "Shoot! "."<br>";
    	}
    	
    	public function shootpush()	
    	{
    		echo "";
    	}
    	
    	
    }
  $obj = new Game;
  $obj->setPushButton();
  $obj-> setShoot();
  $obj-> shootpush();
  ?>

     <form></form>

</div>
</body>
</html>