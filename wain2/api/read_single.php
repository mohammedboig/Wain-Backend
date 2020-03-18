<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../config/Database.php';
  include_once 'Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // POST ID
  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

  $services = $data->services;
  $typeSearch = $data->typeSearch;
  $valuedate = $data->valuedate;

  


switch ($services){
		case "1":
		//echo "halls";
		
		switch ($typeSearch){
		case "1":
		//echo "type name";
		$post->typeSearch=1;
		 $post->hall=$valuedate;		          
		          $post->hall();
                  // Create array
                   $post_arr = array(    'name_hall' => $post->name_hall,    'location' => $post->location,    'Apace' => $post->Apace,    'Cost' => $post->Cost        );
                  // Make JSON
                  print_r(json_encode($post_arr));
		break;
		case "2":
		//echo "type price";
		$post->typeSearch=2;
		 $post->hall=$valuedate;		          
		          $post->hall();
                  // Create array
                   $post_arr = array(    'name_hall' => $post->name_hall,    'location' => $post->location,    'Apace' => $post->Apace,    'Cost' => $post->Cost        );
                  // Make JSON
                  print_r(json_encode($post_arr));
		
		break;
		case "3":
		//echo "type location";
		
		$post->typeSearch=3;
		 $post->hall=$valuedate;		          
		          $post->hall();
                  // Create array
                   $post_arr = array(    'name_hall' => $post->name_hall,    'location' => $post->location,    'Apace' => $post->Apace,    'Cost' => $post->Cost        );
                  // Make JSON
                  print_r(json_encode($post_arr));
		
		break;
		case "4":
		//echo "type Date";
		$post->typeSearch=4;
		 $post->hall=$valuedate;		          
		          $post->hall();
                  // Create array
                   $post_arr = array(    'name_hall' => $post->name_hall,    'location' => $post->location,    'Apace' => $post->Apace,    'Cost' => $post->Cost        );
                  // Make JSON
                  print_r(json_encode($post_arr));
		break;
		 default:
        //echo "No date  typeSearch of hall!";
		}
		
		
		break;	
		
	case "2":
	 //echo "artist";
	 
	        switch ($typeSearch){
		case "1":
		//echo "type name";
		$post->typeSearch=1;
		 $post->artist=$valuedate;		          
		          $post->artist();
                  // Create array
                   $post_arr = array(    'name_artist' => $post->name_artist, 'Cost' => $post->Cost );
                  // Make JSON
                  print_r(json_encode($post_arr));
		break;
		case "2":
		//echo "type price";
		$post->typeSearch=2;
		 $post->artist=$valuedate;		          
		          $post->artist();
                  // Create array
                   $post_arr = array(    'name_artist' => $post->name_artist, 'Cost' => $post->Cost  );
                  // Make JSON
                  print_r(json_encode($post_arr));
		
		break;
		default:
        //echo "No date  artist !";
		}
		break;
		
	case "3":
	//echo "doctors";
	 switch ($typeSearch){
		case "1":
		//echo "type name";
		$post->typeSearch=1;
		 $post->doctors=$valuedate;		          
		          $post->doctors();
                  // Create array
                   $post_arr = array(    'name_doctor' => $post->name_doctor, 'Cost' => $post->Cost , 'specialization' => $post->specialization);
                  // Make JSON
                  print_r(json_encode($post_arr));
		break;
		case "2":
		//echo "type price";
		$post->typeSearch=2;
		 $post->doctors=$valuedate;		          
		          $post->doctors();
                  // Create array
                   $post_arr = array(    'name_doctor' => $post->name_doctor, 'Cost' => $post->Cost , 'specialization' => $post->specialization );
                  // Make JSON
                  print_r(json_encode($post_arr));
		
		break;
		case "3":
		//echo "type specialization";
		$post->typeSearch=3;
		 $post->doctors=$valuedate;		          
		          $post->doctors();
                  // Create array
                   $post_arr = array(    'name_doctor' => $post->name_doctor, 'Cost' => $post->Cost , 'specialization' => $post->specialization );
                  // Make JSON
                  print_r(json_encode($post_arr));
		
		break;
		default:
        //echo "No date  doctors";
		}
	           
		         
		break;	
		
		case "4":
	    //echo "ATM";
	          switch ($typeSearch){
		case "1":
		//echo "type name";
		$post->typeSearch=1;
		 $post->Atm=$valuedate;		          
		          $post->Atm();
                  // Create array
                   $post_arr = array(    'Atm' => $post->Atm, 'location' => $post->location);
                  // Make JSON
                  print_r(json_encode($post_arr));
		break;
		case "2":
		$post->typeSearch=2;
		 $post->Atm=$valuedate;		          
		          $post->Atm();
                  // Create array
                   $post_arr = array(    'Atm' => $post->Atm, 'location' => $post->location );
                  // Make JSON
                  print_r(json_encode($post_arr));
		
		break;
		        default:
       // echo "No date  Atm";
		} 
		break;
		
		 default:
        echo "No date !";
}
  // POST post
  
  
  ?>