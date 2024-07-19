<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("/test", function() {
    $users = User::all();
    return response()->json([
        "message" => "Hello World-1",
        "users" => $users
    ]);
});


Route::get('/test-db-connection', function () {
    try {
        DB::connection()->getPdo();
        return 'Database connection is successful!';
    } catch (\Exception $e) {
        return 'Failed to connect to the database: ' . $e->getMessage();
    }
});
