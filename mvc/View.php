<?php
class View extends O {
	public function show() {
		include_once "html/header.html";
		if (file_exists("html/".$this->arg->value.".html"))
			include_once ("html/".$this->arg->value.".html");
		//parent::show();
		include_once "html/footer.html";
	}
}
?>