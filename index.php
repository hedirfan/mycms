<?php 
require_once('cms_next/cmsApplication.php');
$app=new CmsApplication();
if(isset($_REQUEST['task']))
{
		$task=$_REQUEST['task'];
		switch($task){
			case 'addcontent':
				$app->addcontent();
				break;
			case 'anyothertask':
				$app->anyothertask();
				break;
			default:
				$app->viewcontent();
				break;
		}
	}else{
		$app->viewcontent();
	}
?>