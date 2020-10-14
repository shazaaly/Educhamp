<?php

namespace App\Http\Controllers;

use HttpException;
use HttpRequest;
use Illuminate\Http\Request;

class testApiController extends Controller
{
    //
    public function list(){


        $request = new HttpRequest();
        $request->setUrl('https://rapidapi.p.rapidapi.com/courses');
        $request->setMethod('HTTP_METH_GET');

        $request->setQueryData([
            'fields' => 'course,author,lessonIds,lessons,statistics,comments'
        ]);

        $request->setHeaders([
            'x-rapidapi-host' => 'coursmos-v2.p.rapidapi.com',
            'x-rapidapi-key' => 'SIGN-UP-FOR-KEY'
        ]);

        try {
            $response = $request->send();

            echo $response->getBody();
        } catch (HttpException $ex) {
            echo $ex;
        }
    }
}
