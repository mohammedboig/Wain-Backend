<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../config/Database.php';
  include_once 'Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Get ID
 $services = isset($_GET['services']) ? $_GET['services'] : die();
 $typeSearch = isset($_GET['typeSearch']) ? $_GET['typeSearch'] : die();
// $Value = isset() ? $_GET['Value'] : die();
switch ($services){
		case "1":
		echo "halls";
		
		switch ($typeSearch){
		case "1":
		//echo "type name";
		$post->typeSearch=1;
		 $post->hall=$_GET['valuedate'];		          
		          $post->hall();
                  // Create array
                   $post_arr = array(    'name_hall' => $post->name_hall,    'location' => $post->location,    'Apace' => $post->Apace,    'Cost' => $post->Cost        );
                  // Make JSON
                  print_r(json_encode($post_arr));
		break;
		case "2":
		//echo "type price";
		$post->typeSearch=2;
		 $post->hall=$_GET['valuedate'];		          
		          $post->hall();
                  // Create array
                   $post_arr = array(    'name_hall' => $post->name_hall,    'location' => $post->location,    'Apace' => $post->Apace,    'Cost' => $post->Cost        );
                  // Make JSON
                  print_r(json_encode($post_arr));
		
		break;
		case "3":
		//echo "type location";
		
		$post->typeSearch=3;
		 $post->hall=$_GET['valuedate'];		          
		          $post->hall();
                  // Create array
                   $post_arr = array(    'name_hall' => $post->name_hall,    'location' => $post->location,    'Apace' => $post->Apace,    'Cost' => $post->Cost        );
                  // Make JSON
                  print_r(json_encode($post_arr));
		
		break;
		case "4":
		//echo "type Date";
		$post->typeSearch=4;
		 $post->hall=$_GET['valuedate'];		          
		          $post->hall();
                  // Create array
                   $post_arr = array(    'name_hall' => $post->name_hall,    'location' => $post->location,    'Apace' => $post->Apace,    'Cost' => $post->Cost        );
                  // Make JSON
                  print_r(json_encode($post_arr));
		break;
		 default:
        echo "No date  typeSearch!";
		}
		
		
		break;	
		
	case "2":
	 echo "signers";
	 
	         echo  "   No date !";
		break;
		
	case "3":
	echo "doctors";
	            echo  "   No date !"; 
		         
		break;	
		
		case "4":
	    echo "ATM";
	            echo  "   No date !";
		         
		break;
		
		 default:
        echo "No date !";
}
  // Get post
  
  
  ?>