<?php
	function get_header(){
		require_once("includes/header.php");
	}
	function get_bread(){
		require_once("includes/breadcumb.php");
	}
	function get_bread_two(){
		require_once("includes/breadcumb_two.php");
	}
	function get_bread_three(){
		require_once("includes/breadcumb_three.php");
	}
	function get_bread_four(){
		require_once("includes/breadcumb_four.php");
	}

	function get_dbread_two(){
		require_once("includes/breadcumbd_two.php");
	}

	function get_nbread_two(){
		require_once("includes/breadcumbn_two.php");
	}

	function get_obread_two(){
		require_once("includes/breadcumbo_two.php");
	}

	function get_dbread_four(){
		require_once("includes/breadcumbd_four.php");
	}

	function get_nbread_four(){
		require_once("includes/breadcumbn_four.php");
	}

	function get_obread_four(){
		require_once("includes/breadcumbo_four.php");
	}

	function get_sidebar(){
		require_once("includes/sidebar.php");
	}
	function get_part($addpart){
		require_once("includes/".$addpart);
	}
 	function get_footer(){
		require_once("includes/footer.php");
	}
?>