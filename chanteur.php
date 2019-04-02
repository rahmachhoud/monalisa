<?php
	
	class chanteur
	{
		private $id;
		private $nom;
		private $type;
		private $urlImage;


		function __construct($id,$nom,$type){
		$this->id=$id;
		$this->nom=$nom;
		$this->type=$type;
		$this->urlImage=$urlImage;
	
	}
		
public function get_id()
		{
			return $this->id;
		}

		public function set_id($id)
		{
			$this->id = $id;
		}


		public function get_nom()
		{
			return $this->nom;
		}

		public function set_nom($nom)
		{
			$this->nom = $nom;
		}
		public function get_type()
		{
			return $this->type;
		}

		public function set_type($type)
		{
			$this->type = $type;
		}
		public function get_UrlImage(){return $this->urlImage;}

		public function set_urlImage($urlImage)
		{
			$this->urlImage = $urlImage;
		}
	

	}
?>