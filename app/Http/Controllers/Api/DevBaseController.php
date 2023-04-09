<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DevBase;

class DevBaseController extends Controller
{

    protected static $url_server_api = 'https://polo-construction-api.devbase.pro';		 //Домен api DevBase
    protected static $url_server_img = 'https://polo-construction.devbase.pro';			 //Домен api DevBase
    public static $dir_assets = '/public/assets';								 //Папка ресурсів в темі куди будуть завантажуватисб зображення
    protected static $api_key = 'guoT5kE1bDm3xncC7kXzwn6euQF0vYhHf6KrVtRU8NYVDwENB1rLAFdMRqW5zeUxiM4KT0'; //Ключ доступу для api DevBase
    public static $type_img = 'img_sec'; //img - всі секції на одному плані img_web - всі секції на одному плані(план поверху в шахматці DevBase відрізняється від того, що на сайті) |  img_sec - кожна секція на окрумому плані |
    public static $project_id = 64;	//ID проекта в DevBase
    public static $manager_id = 2; //ID менеджера від імені якого генеруєтьмя pdf в DevBase

    protected static $property_key = [
        'get_field'	   => 'block_2',
        'access_token' => 'field_63998b1a3e26a',
        'expires_exp'  => 'field_63998b203e26b',
        'option'       => 'field_63998b0a3e269',
    ];

    public function curl($method, $url, $data = null)
    {
        if ($url !== 'authentication') $data['access_token'] = $this->accessToken();


        $new_url = self::$url_server_api.'/v1/'.$url;

        if ($method == "GET") $new_url .= '?' . http_build_query($data);

        $curlOptions = [
            CURLOPT_URL => $new_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ];

        if ($method == "POST") {

            $curlOptions[CURLOPT_CUSTOMREQUEST] = 'POST';
            $curlOptions[CURLOPT_POSTFIELDS] = json_encode($data);
            $curlOptions[CURLOPT_HTTPHEADER] = array('Content-Type: application/json');
        }

        $ch = curl_init();

        curl_setopt_array($ch, $curlOptions);

        $result = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $code = (int)$code;

        if ($code == 400 || $code == 403) {


        }


        return ['data' => json_decode($result, true), 'code' => $code];
    }

    /**
     * @brief (Отриманна токену доступу DevBase)
     * @return string
     */
    public function accessToken()
    {
        if (isset($this->cron)) return $this->accessTokenCron();

        $curTime = time();

        $debbasedata = DevBase::all()->toArray();
        $value = $debbasedata[0];


        if ($curTime>$value['expires_exp'] || !$value['access_token']){

            $data = $this->curl('POST', 'authentication', ['api_key'=>self::$api_key]);

            $val = [
                'access_token' => $data['data']['access_token'],
                'expires_exp' => $data['data']['expires_exp'],
            ];

            $DevBase = new DevBase;
            $DevBase->update($val);

            return $data['data']['access_token'];
        }

        return $value['access_token'];
    }


    public function accessTokenCron()
    {
        session_start();

        $_SESSION['value'] = array('expires_exp'=>'','access_token'=>'');
        $curTime = time();
        $value = $_SESSION['value'];

        if ($curTime>$value['expires_exp'] || !$value['access_token']){

            $data = $this->curl('POST', 'authentication', ['api_key'=>self::$api_key]);

            $val = [
                'access_token' => $data['data']['access_token'],
                'expires_exp' => $data['data']['expires_exp'],
            ];

            $DevBase = new DevBase;
            $DevBase->create($val);

            $_SESSION['value'] = $val;

            return $data['data']['access_token'];
        }

        return $value['access_token'];
    }

    /**
     *  Завантажити зображення по url
     * $url (string) (/img/no-image.png) або (https://website.com/img/no-image.png)
     */
    public static function downloadFileDevbase($url = '', $type_file = 'img')
    {

        if (!$url) return 404;

        //$url_return = $url;


        if (function_exists('get_template_directory_uri')) $url = str_replace(get_template_directory_uri().self::$dir_assets, '', $url);


        if (file_exists(self::$dir_assets.$url)) {


            if ($type_file == 'img' && exif_imagetype(self::$dir_assets.$url) === false) {

                if (is_dir(self::$dir_assets.$url)) {

                    @rmdir(self::$dir_assets.$url);
                } else {

                    unlink(self::$dir_assets.$url);
                }

            } else {

                return 200;
            }
        }

        $explodedPath = $new_arr = array_diff(explode('/', $url), array(''));

        if (count($explodedPath)) {

            $name_img = array_pop($explodedPath);

            $explodedPath = '/'.implode('/', $explodedPath);
        }

        $dir_uploud = self::$dir_assets.$explodedPath;

        $download = 1;

        if (!file_exists($dir_uploud)) mkdir($dir_uploud, 0775, true);


        if (self::strpos_array("{$dir_uploud}/{$name_img}", ['png', '.jpeg', '.jpg', '.svg', '.bmp', '.gif', '.ico', '.pdf']) === null) {

            if (!file_exists("{$dir_uploud}/{$name_img}")) mkdir("{$dir_uploud}/{$name_img}", 0775, true);

            return 100;
        }


        $ch = curl_init(self::$url_server_img.$url);
        $fp = fopen("{$dir_uploud}/{$name_img}", 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_exec($ch);

        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        fclose($fp);


        if ($code == 404)	{

            unlink("{$dir_uploud}/{$name_img}");

            $download = 0;
        }


        return $download;
    }



    /**
     * Повертає позицію першого входження рядка
     * $haystack (string)
     * $needles (array/string)
     * @return string
     */
    protected static function strpos_array($haystack, $needles)
    {

        $haystack = strtolower($haystack);

        if ( is_array($needles) ) {

            foreach ($needles as $str) {
                if ( is_array($str) ) {
                    $pos = strpos_array($haystack, $str);
                } else {
                    $pos = strpos($haystack, $str);
                }
                if ($pos !== FALSE) {
                    return $pos;
                }
            }
        } else {

            return strpos($haystack, $needles);
        }
    }


    /**
     * Завантажує розмітку для 3d, завантажує svg файли
     * $project_id (int)
     * @return array
     */
    public function getStructure3d($project_id)
    {

        $data = $this->curl('GET', 'markup3d',
            [
                'project_id' => $project_id,
                'assets' => self::$dir_assets.'/svg3d/', //Вказати шлях де повинні зберігатись файли на сайті
                'upload_files' => true,  //Згенерувати svg файли для завантеження
            ]);




        if (count($data['data']['uploadFiles'])) {

            if (!file_exists(self::$dir_assets.'/svg3d/')) mkdir(self::$dir_assets.'/svg3d/', 0775, true);
        }

        $update = false;

        foreach ($data['data']['uploadFiles'] as $t) {

            if (!file_exists(self::$dir_assets.'/svg3d/'.$t['title'])) {

                if (file_exists(self::$dir_assets.'/svg3d/')) {

                    foreach (glob(self::$dir_assets.'/svg3d/*') as $file) {

                        unlink($file);
                    }
                }

                $update = true;

                break;
            }
        }

        if ($update){

            foreach ($data['data']['uploadFiles'] as $t) {

                file_put_contents(self::$dir_assets.'/svg3d/'.$t['title'], $t['file'], LOCK_EX);
            }
        }

        return ['structure' => $data['data']['structure'], 'linksSvg' => $data['data']['linksSvg']];
    }

    public static function getCheckTypeProperty($type_img = null)
    {
        $type_img = ($type_img == null)? static::$type_img : $type_img;


        switch ($type_img) {

            case 'img_sec':
                $type_img = 'img_sec';
                $type_name = 'img_sec_web';
                $sorts = 'sorts_sec';
                $section = true;

                break;

            case 'img_web':
                $type_img = 'img_web';
                $type_name = 'img_web';
                $sorts = 'sorts_web';
                $section = false;

                break;

            default:

                $type_img = 'img';
                $type_name = 'img';
                $sorts = 'sorts';
                $section = false;
        }

        return (object) ['type_img' => $type_img , 'type_name' => $type_name, 'sorts' => $sorts, 'section' => $section];
    }


}
