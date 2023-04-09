<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\DevBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ThreeDController extends Controller
{
    public function flats()
    {
        $devbase = new DevBaseController();
        $data = $devbase->curl('GET', 'apartments',
            [
                'option' => [
                    'project_id' => $devbase::$project_id,
                ]
            ]);
        $property_sort = $devbase::getCheckTypeProperty();

        foreach ($data['data']['data'] as $item){
            //переписати момент збереження шляхів зображень або формувати їх від папки паблік і все
            $imgB = strpos($item['img_big'], 'default.png');
            if(!empty($item['img_big']) && $imgB == false) {
                $imgBig = $devbase::$dir_assets. $item['img_big'];
            } else {
                $img = null;
                $imgBig = null;
            }


            if (is_array($item['img_custom'])) {

                foreach($item['img_custom'] as $k => $hout) {

                    if (is_array($hout)) {

                        foreach($hout as $key => $t) {

                            $item['img_custom'][$k][$key] = $devbase::$dir_assets.$t;
                        }

                    }
                }
            }
            $shortType = explode('-',$item['type']);
            $status = unserialize($item['custom_field_10']);

            $priceNumberFormat = preg_replace('/\s+/', '', $item['price']);
            $priceNumberFormat = intval($priceNumberFormat);
            $result[] =
                [
                    'id' => $item['id'],
                    'build' => $item['build'],
                    'build_name' => $item['build_name'],
                    'section' => $item['sec'],
                    'sec_name' => $item['sec_name'],
                    'sec_id' => $item['sec'],
                    'floor' => $item['floor'],
                    'rooms' => $item['rooms'],
                    '_rooms' => $item['rooms'][0],
                    'type' => $shortType[0],
                    'number' => $item['number'],
                    'sale' => intval($item['sale']),
                    'img' => $item['img'],
                    'compas' => $item['compas'],
                    'visible' => $item['visible'],
                    'area' => $item['all_room'],
                    'life_room' => $item['life_room'],
                    'price' => $item['price'],
                    'price_private' =>  $priceNumberFormat,
                    'type_object' => $item['type_object'],
                'img_big' => $imgBig,
//                'img_small' => $img,
                'images' => $item['img_custom'],
                'option' => [],
                '3d_tour' => $item['custom_field_5'],
                'sorts' => $item[$property_sort->sorts],
                'action_price' => $item['custom_field_13'],
                'status' => $status[str_replace('/','',App::currentLocale())],
                'room_title' => $status[str_replace('/','',App::currentLocale())],
                'timer' => $item['custom_field_11'],
                'view_from_window' => $item['custom_field_12'],
                'parking' => $item['custom_field_14'],
                'land' => $item['custom_field_18'],
                'lng' => App::currentLocale(),
            ];

        }
//    echo json_encode(null);
        usort($result, function ($a, $b) {
            $int1 = intval($a['sale']);
            $int2 = intval($b['sale']);
            $ff = $int2 > $int1;
            return $ff;
        }
        );
        // print_r($result);
//        echo json_encode($result);
//        exit();
        return json_encode($result);
    }

    public function structureSvg()
    {

    }

    public function config()
    {

    }

    public function floor()
    {

    }
}
