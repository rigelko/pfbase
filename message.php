

<?php



header('Content-type: text/html; charset=utf-8');
error_reporting(E_ALL);

ini_set("display_errors", 1);

$data = json_decode(file_get_contents('php://input'), true);
$content = $data["content"];


ini_set('memory_limit','-1');

/*************여기까진 몰라도 되는부분******************/



if( $content == #cond1 )
{
echo <<< EOD
    {
        "message": {
            "text": "#text1"
        }
    }    
EOD;
}
