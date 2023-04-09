<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\DevBaseController;
use Illuminate\Http\Request;

class DevBaseImportController extends Controller
{
    public $download = ['found'=>0, 'not_found'=>0, 'download'=>0, 'realy_download'=>0];

    public function import()
    {

        $devbase = new DevBaseController();

        $genplan = $devbase->curl('GET', 'genplan',
            [
                'option' => [
                    'project_id'=>64,
                    'type_object'=>'all'
                ],
                'hous_active' => 1
            ]);

        /**
         *Завантаження зображення генплану
         */
        if (isset($genplan['data']['img']['name'])) {

            $this->counting_files($devbase::downloadFileDevbase($genplan['data']['img']['name']));
        }

        if (count($genplan['data']['dataList'])) {


            /**
             *Завантаження зображення поверхів
             */
            foreach ($genplan['data']['dataList'] as $type_build) {


                foreach ($type_build as $build) {
                    $sec_build = [];

                    for ($f=$build['min_f']; $f<=$build['max_f']; $f++) {

                        $floor = $devbase->curl('GET', 'floor',
                            [
                                'count' => 100,
                                'option' => [
                                    'project_id' => $build['project_id'],
                                    'build' => $build['build'],
                                    'floor' =>$f,
                                ]
                            ]);


                        if (isset($floor['data']) && $floor['data']['img']) {

                            $this->counting_files($devbase::downloadFileDevbase($floor['data']['img']));
                        }



                        if (isset($floor['data']['dataList']) && count($floor['data']['dataList'])) {

                            foreach ($floor['data']['dataList'] as $item){


                                /**
                                 * Імпорт зображень секцій
                                 */

                                if (!isset($sec_build[$item['sec'].'_'.$f])) {

                                    $sec_build[$item['sec'].'_'.$f] = $item['sec'].'_'.$f;

                                    $sec= $devbase->curl('GET', 'floor',
                                        [
                                            'count' => 100,
                                            'option' => [
                                                'project_id' => $build['project_id'],
                                                'build' => $build['build'],
                                                'floor' =>$f,
                                                'sec' =>  $item['sec'],
                                                'type_img' => 'type_sec'
                                            ]
                                        ]);


                                    if (isset($sec['data']) && $sec['data']['img_sec_web']) {

                                        $this->counting_files($devbase::downloadFileDevbase($sec['data']['img_sec_web']));
                                    }
                                }

                                $this->counting_files($devbase::downloadFileDevbase($item['img_big']));
                            }
                        }


                    }

                    //break;
                }

            }
        }


        echo "Найдено файлов для загрузки {$this->download->found} из них:
			<br/>- не найдено на удаленном сервере  .......... {$this->download->not_found}
			<br/>- загружено из удаленого сервера .................... {$this->download->download}
			<br/>- уже существует на сервере ............................ {$this->download->realy_download}";

    }



    public function counting_files($data)
    {

        print_r($data);

        die();
        if (is_array($this->download)) $this->download = (object)$this->download;

        $this->download->found++;


        switch ($data) {

            case 200:

                $this->download->realy_download++;

                break;

            case 404:

                $this->download->not_found++;

                break;

            case 0:

                $this->download->not_found++;

                break;

            case 100:

                $this->download->empty++;

                break;

            case 1:

                $this->download->download++;

                break;
        }

    }
}
