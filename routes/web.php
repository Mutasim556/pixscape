<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.pages.home.index');
});

Route::controller(FrontendController::class)->name('frontend.')->group(function(){
    /** About Page Start */
    Route::get('/about-us','aboutUs')->name('aboutUs');
    /** About Page End */

    /** Team Page Start */
    Route::get('/team','team')->name('team');
    Route::get('/team-member/{slug?}','teamMember')->name('teamMember');
    /** Team Page End */

    /** Contact Page Start */
    Route::get('/contact','contact')->name('contact');
    /** Contact Page End */

    /** Article Page Start */
    Route::get('/article','article')->name('article');
    Route::get('/article-single/{slug?}','articleSingle')->name('articleSingle');
    /** Article Page End */

    /** Project Page Start */
    Route::get('/project','project')->name('project');
    Route::get('/project-single/{slug?}','projectSingle')->name('projectSingle');
    Route::get('/project-search/{search?}','projectSearch')->name('projectSearch');
    /** Project Page End */

    /** Workshop Page Start */
    Route::get('/workshop','workshop')->name('workshop');
    /** Workshop Page End */

    /** Careers Page Start */
    Route::get('/careers','careers')->name('careers');
    /** Careers Page End */
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('module',function(){
    return config('modules');
});

Route::get('modulec',function(){
    $test = config('modules');
    $tt ='';
    $true = true;
    $false = false;
    $content = "
        'status'=>$true,
        'route'=>'modules/subscription/routes/web.php',
    ";
    if(config('modules')){
        foreach(config('modules') as $key=>$val){
            if($key == 'subscription'){
                break ;
                return 'already exist';
            }
            if(is_array($val)){
                $zz = '';
               foreach($val as $dkey=>$dd){
                if(is_int($dd)){
                    $zz = $zz."        '$dkey'=>$dd,\n";
                }else{
                    $zz = $zz."        '$dkey'=>'$dd',\n";
                }

               }
            }

            $tt = $tt."\n    '$key'=>[\n$zz\n    ],";
        }
    }

    $tt = $tt."\n    'subscription'=>[       $content],";
    $phpArray = "<?php\n\nreturn [  $tt \n];";
    file_put_contents(config_path('modules.php'), $phpArray);
    echo $phpArray;
});
