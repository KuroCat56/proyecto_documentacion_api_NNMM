<?php

namespace App\Http\Controllers;
use OpenApi\Attributes as OA;

#[
    OA\Info(version: "1.0.0",description:"Api desarrollada por Nelson Minero UFG",title:"Documentacion de API de Nelson Minero"),
    OA\Server(url:"http://localhost:8000",description:"servidor local de desarrollo"),
    OA\Server(url:"http://test.example.com",description:"servidor para pruebas"),
    OA\Server(url:"http://nnmm.example.com",description:"servidor local de producción"),
    OA\SecurityScheme(securityScheme:"bearerAuth",type:"http",name:"Authorization",in:"header",scheme:"bearer")
]

abstract class Controller
{
    //
}
