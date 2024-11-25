<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CourseContoller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});



Route::prefix('V1')->middleware('auth:sanctum')->group(function () {
    Route::get('courses', [CourseContoller::class, 'index']);
    Route::get('courses/{course}', [CourseContoller::class, 'show']);
    Route::post('courses', [CourseContoller::class, 'store']);
});

Route::get('/auth', function () {

    $user = \App\Models\User::where('email', 'hyatt.kody@example.com')->first();
    dd($user->createToken('fdddff'));
//    $create_role = \Spatie\Permission\Models\Role::firstOrCreate(['name'=>'مدیر']);
//    $create_permission = \Spatie\Permission\Models\Permission::firstOrCreate(['name' => 'show courses']);
//    $permission = $create_role->givePermissionTo($create_permission);
//    $role = $user->syncRoles($create_role);

    // حذف تمامی نقش‌ها از کاربر
    //$user->syncRoles([]);

// حذف تمامی دسترسی‌ها از کاربر (در صورت تخصیص مستقیم)
   // $user->syncPermissions([]);
    //$user->removeRole('مدیر'); // نام نقش
    //$user->revokePermissionTo('edit articles'); // نام دسترسی
});
