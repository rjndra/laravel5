<?php

namespace App;

class FileAction
{
  
	public function create_entry($data){

		if (isset($_FILES)) {
			$album_name=1;
			$album_name = $this->create_album($album_name);
			$files = sizeof($_FILES['afile']['name']);
		}


		for ($i=0; $i<$files; $i++){

			$filename[$i]=$_FILES['afile']['name'][$i];
			$filesize[$i]=$_FILES['afile']['size'][$i];
			$temporary_location[$i]=$_FILES['afile']['tmp_name'][$i];

			$permanent_location = $album_name.'/'.$filename[$i];
			$filenames[] = $filename[$i];
			move_uploaded_file($temporary_location[$i],$permanent_location);

		}

		if (isset($_POST['title'])){

			$title = $_POST['title'];
			date_default_timezone_set("Asia/Kathmandu"); 
			$created_at = date("Y-M-d H:i:s");

			$this->addToJson($title, $created_at, $filenames, $files, $album_name);

		}
	}

	public function create_album($album_name){

		if(!is_dir($album_name)){

			mkdir($album_name);
			return $album_name;

		} else {

			$album_name++;	
			$album_name = create_album($album_name);
			return $album_name;
		}

	}


	public function addToJson($title, $created_at, $filenames, $files, $album_name) {

	    $meta = file_get_contents('meta.json', true);
	    $data = json_decode($meta,true);
	    
	    // Get last id
		$last_item    = end($data);
		$last_item_id = $last_item['id'];

		$id = ++$last_item_id;
		$location = $album_name;

	    $data[] = array('id'=>$id, 'title' => $title, 'nof' => $files, 'files'=> $filenames, 'location'=>$location , 'created_at' => $created_at);
	    $result=json_encode($data);
	    file_put_contents('meta.json', $result);
	}

	public function openJson(){
		$fp = file_get_contents('meta.json' , true);
		$data = json_decode($fp, true);
		return $data;
	}
	
	public function getAllData(){
		$data = $this->openJson();
		return $data;
	}

	public function getDataById($id){
		$data = $this->openJson();
		foreach($data as $file){
			if ($file['id'] == $id) {
				$view = $file;
			}
		}
		return $view;

	}

	
}