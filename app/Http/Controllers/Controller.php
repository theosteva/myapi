<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use OpenApi\Annotations as OA;

    /**
     * @OA\Info(
     *      version="1.0",
     *      title="My Rest API", 
     *      description="Laravel project to practice developing Rest API with L5 Swagger OpenApi",
     *      x={
     *          "logo": {
     *              "url": "https://miro.medium.com/v2/resize:fit:1200/1*J3G3akaMpUOLegw0p0qthA.png"
     *          }
     *      },
     *      @OA\Contact(
     *          name="Theodorus",
     *          email="theodorus.setiawan422021017@civitas.ukrida.ac.id"
     *      ),
     * )
     */

     class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
