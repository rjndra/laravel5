<?php namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FileController extends Controller
{
    
    public function index()
    {
    	$files = $this->getAllData();
        return view('document.index', compact('files'));
    }

    
    public function create()
    {
        return view('document.create');
    }

    public function store(Request $request)
    {
        
        $name = $request->input('title');
        echo $name;
        $file = $request->file('afile');

        $data= array('title'=>$name, 'afile'=>$file);

		$this->create_entry($data);

        return redirect('document');
    }


    public function create_entry($data){

		if (isset($data)) {
			$album_name=1;
			$album_name = $this->create_album($album_name);
			$files = sizeof($data['afile']);
            $x=0;
		}


		for ($i=0; $i<$files; $i++){

            $x++;
			$filename[$i]="file".$x.".txt";
			$temporary_location[$i]=$data['afile'][$i];

			$permanent_location = $album_name.'/'.$filename[$i];
			$filenames[] = $filename[$i];
			move_uploaded_file($temporary_location[$i],$permanent_location);

		}

		if (isset($data['title'])){

			$title = $data['title'];
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
			$album_name = $this->create_album($album_name);
			return $album_name;
		}

	}


	public function addToJson($title, $created_at, $filenames, $files, $album_name) {

	    $meta = file_get_contents('meta.json', true);
	    $data = json_decode($meta,true);
	    
	    // Get last id
	    if (!is_null($data)){
			$last_item   = end($data);
			$last_item_id = $last_item['id'];
			$id = ++$last_item_id;
		} else {
			$id = 1;
		}
		

		
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
