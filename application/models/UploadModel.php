<?php
	class UploadModel extends CI_Model
	{
		public function index()
		{

		}
		public function uploader($data)
		{	


			foreach ($data as $item => $value)
				if($item == 'full_path')
				{
					echo "qwerty";
					echo $value;
				}
		}
	}