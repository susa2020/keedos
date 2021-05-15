<?php
	require_once("easyCRUD.class.php");

	class ResumeOwner  Extends Crud {

			# Your Table name
			protected $table = 'resume_owner';

			# Primary Key of the Table
			protected $pk	 = 'resume_id';
	}

?>
