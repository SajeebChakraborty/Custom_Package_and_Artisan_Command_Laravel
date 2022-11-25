<?php

Route::get('location',function(){

    echo"location";


});

Route::get('user-location',[LP\Location\LocationController::class,'userLocation'])->middleware('web');
Route::get('admin',[LP\Location\LocationController::class,'admin']);