<?php 
abstract class classA {
	abstract public function msg();

}

class classB extends classA{
	public function msg()
	{
		# code...
		return "Hello";
	}
}
class classC extends classA{
	public function msg()
	{
		# code...
		return "Hallo";
	}
	}


// obj($objects);
$objects = [new classB(), new classC()];
foreach ($objects as $obj) {
	# code...
	echo $obj->msg();
}
?>