<?php
if (!headers_sent()) {
			header("Content-Type: text/html; charset=utf-8");
		}
		echo str_repeat('hello', 256);
		
?>		