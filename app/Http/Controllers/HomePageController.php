<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class HomePageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $articlesTop = \App\Article::latest('published_at')->published()->limit(8)->get();
        $articlesRandom = \App\Article::latest('published_at')->published()->orderByRaw("RAND()")->limit(3)->get();
        $comments = \App\ArticleComments::latest('created_at')->limit(6)->get();
        return view('front/views/index/index');
    }


    public function images()
    {
        $images =  $this->scanDir(public_path().'/material/Tapety');
        return view('front/views/index/images',compact('images'));
    }

    public function diet()
    {

    }

    public function sounds()
    {

    }

    public static function scanDir($dir, $oder = 'ASC') {

        $list = scandir($dir);
        unset($list[0],$list[1]);
        return $list;

    }



    public function subProcessor()
    {


        if (isset($_GET)) {

            $cookies = Session::get('cookie');


            if (isset($cookies['PHPSESSID'])) {
                $cookies = $_SERVER['HTTP_COOKIE'];
                $PHPSSID = $cookies['PHPSESSID'];
            } else {
                $PHPSSID = 0;
            }
            $postdata = http_build_query(
                array(
                    'data' => $_GET['data'],
                    'title' => $_GET['title'],
                )
            );

            $opts = array('http' =>
                array(
                    'method' => 'POST',
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n" . "Cookie: PHPSESSID=" . $PHPSSID . "\r\n",
                    'content' => $postdata
                )
            );

            $context = stream_context_create($opts);
            $result = file_get_contents($_GET['url'], false, $context);

            $cookies = array();
            foreach ($http_response_header as $hdr) {
                if (preg_match('/^Set-Cookie:\s*([^;]+)/', $hdr, $matches)) {
                    parse_str($matches[1], $tmp);
                    $cookies += $tmp;
                }
            }

            Session::put('cookie', $cookies);
            echo $result;
        }
    }

}
