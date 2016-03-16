<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Model\Subservices\LeadCounterModel;
use Illuminate\Support\Facades\View;
use Session;
use Auth;

class HomePageController extends BaseController
{

    public function __construct()
    {

        if (!Auth::check()) {
            return;
        }
        View::share('templateVarPoints', LeadCounterModel::factory()->sumUserPoint(Auth::user()));
        View::share('templateVarUserActive', $this->checkUserIsActivate());
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $this->data['active'] = $this->checkUserIsActivate();
        $articlesTop = \App\Article::latest('published_at')->published()->limit(8)->get();
        $articlesRandom = \App\Article::latest('published_at')->published()->orderByRaw("RAND()")->limit(3)->get();
        $comments = \App\ArticleComments::latest('created_at')->limit(6)->get();
        return view('front/views/index/index', $this->data);
    }


    public function images()
    {
        if ($this->checkUserIsActivate()) {
            return redirect()->action('HomePageController@index');
        }
        $images = $this->scanDir(public_path() . '/material/Tapety');
        return view('front/views/index/images', compact('images'));
    }

    public function diet()
    {
        if ($this->checkUserIsActivate()) {
            return redirect()->action('HomePageController@index');
        }
        $diets = $this->scanDir(public_path() . '/material/Diety');
        return view('front/views/index/diets', compact('diets'));
    }

    public function sounds()
    {
        if ($this->checkUserIsActivate()) {
            return redirect()->action('HomePageController@index');
        }
        $sounds = $this->scanDir(public_path() . '/material/Dzwonki');
        return view('front/views/index/sounds', compact('sounds'));
    }

    public static function scanDir($dir, $oder = 'ASC')
    {

        $list = scandir($dir);
        unset($list[0], $list[1]);
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
