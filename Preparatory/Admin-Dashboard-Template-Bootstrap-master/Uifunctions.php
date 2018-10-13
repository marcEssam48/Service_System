<?php 
    
    class Uifunctions {
	/*
	** that echo the page title in case the page	has no 
	** title the variable $pageTitle and echo Default title for other pages	
	*/

	function getTitle() {
   global $pageTitle;
		if (isset($pageTitle)) {
			echo $pageTitle;
		} else {
			echo 'Default';
		}
	}
	/*
	** [ this function Accept parameters ]
	** $theMsg = echo the  mesage [erorr, suces, warning, etc]
    ** $url = redirect url
	** $seconds = secondsbefore redirecting
	*/
	function redirectHome($theMsg, $url=null, $seconds = 3) {

        if ($url===null){
            $url = '../view/index.php';
        }
        else {
             $url =(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']!=='') ? $_SERVER['HTTP_REFERER']: '../index.php';
            
        }

		echo $theMsg;
		echo "<div class='alert alert-info'>You Will Be Redirected to $url After $seconds seconds</div>";
        
		header("refresh:$seconds;url=$url");

		exit();

	}
 
	/*
	** Function to check items in database [ this function Accept parameters ]
	** $select = the item to select [ example: user, item, category ]
	** $from = the table to select from [examples: users, items ]
	** $value = the value of select 
	*/

	function checkItem($select, $from, $value) {
		
		global $con;

		$statement = $con->prepare("SELECT $select FROM $from WHERE $select = ?");

		$statement->execute(array($value));

		$count = $statement->rowCount();

		return $count;

	}

/* count number of items v1.0 
** to count numbers of items  row
*/

  function countItems($item, $table){
      
    global $con;
    $stmt2 =$con->prepare("SELECT COUNT($item) FROM $table");
    $stmt2->execute();
    return $stmt2->fetchColumn();
  }


/*
** get latest  recordes function 
** to get latest items from database[ Users, Items, comments]

*/

function getLatest($select, $table, $order, $LIMIT =5){
    global $con;
    if ($LIMIT==5){
    $getStmt = $con->prepare("SELECT $select FROM $table ORDER BY $order DESC ");}
    else {
        $getStmt = $con->prepare("SELECT $select FROM $table ORDER BY $order DESC LIMIT $LIMIT");
    }
    $getStmt->execute();
    $rows = $getStmt->fetchAll();
    return $rows;
}

}


?>