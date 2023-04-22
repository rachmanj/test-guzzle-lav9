<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipments = app(ToolController::class)->getEquipments('011C');
        // $equipments = app(ToolController::class)->getApiEquipments();

        return $equipments;
    }
}
