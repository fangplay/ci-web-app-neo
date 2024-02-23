<?php

namespace App\Controllers;

use App\Models\GenModel;


class BetaTest extends BaseController
{
    public function GenIndex(){
        $gen = new GenModel();
        $data['generation'] = $gen->getGenData();

        // return view('gen_view',$data);
        return $this->response->setJSON($data['generation']);
    }
    
}