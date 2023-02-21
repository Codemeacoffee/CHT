<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use CHT\Course;
use CHT\Contact;
use CHT\Image;
use CHT\News;

Route::get('/', function () {
    $news = News::where('date', '<=', date('Y-m-d'))->orderBy('date', 'DESC')->take(3)->get();
    $images = Image::all();
    $coursesPromoted = Course::where('init_date','>=', date('Y-m-d'))->where('display', '1')->orderBy('init_date', 'ASC')->get();
    $courses = array();
    for($k = 0; $k<count($coursesPromoted); $k++){
        array_push($courses, $coursesPromoted[$k]);
        if(count($courses)==3){
            break;
        }
    }
    $x = 0;
    while(count($courses)<3){
        $listOfCourses =  Course::where('init_date','>=', date('Y-m-d'))->where('display', '!=', '2')->orderBy('init_date', 'ASC')->get();
        if($x >= count($listOfCourses)){
            break;
        }
        if(!in_array($listOfCourses[$x], $courses)){
            array_push($courses, $listOfCourses[$x]);
        }
        $x++;
    }
    $x = 0;
    while(count($courses)<3){
        $listOfCourses2 = Course::where('display', '2')->get();
        if($x >= count($listOfCourses2)){
            break;
        }
        if(!in_array($listOfCourses2[$x], $courses)){
            array_push($courses, $listOfCourses2[$x]);
        }
        $x++;
    }
    $frontierContent = array();
    $frontierFinal = array();
    $i = 0;
    $loopList = Course::where('init_date','>=', date('Y-m-d'))->orWhere('display', '2')->where('display', '!=', '1')->orderBy('init_date', 'ASC')->get();
    foreach($loopList as $cour){
        $frontierContent[$i] = [$cour, 'course'];
        $i++;
    };
    
    shuffle($frontierContent);

    if(count($coursesPromoted)>0){
        $j = 0;
        $count = 0;
        for($i=0; $i<count($frontierContent); $i++){
            if($i%3 == 0){
                if($count>=count($coursesPromoted)){
                    $count = 0;
                }
                $frontierFinal[$i] = [$coursesPromoted[$count], 'course'];
                $count++;
            }else{
                $frontierFinal[$i] = $frontierContent[$j];
                $j++;
            }
        }
        if($frontierFinal[0] == $frontierFinal[count($frontierFinal)-1]){
            array_pop($frontierFinal);
        }
        return view('index')->with('courses', $courses)->with('news', $news)->with('images', $images)->with('frontierContent', $frontierFinal);
    }else{
        return view('index')->with('courses', $courses)->with('news', $news)->with('images', $images)->with('frontierContent', $frontierContent);
    }

});

Route::get('admin/closeSession', 'AdminController@closeSession');

Route::post('admin/dropzone/upload', 'AdminController@dragDrop');

Route::get('{any}/admin', 'AdminController@frontier')->where('any', '.*');

Route::get('cursos/{categoria?}', function($categoria = null){
    $courses =  Course::where(function($query) {
            $query->where('init_date','>=', date('Y-m-d'))
                ->orWhere('display', '2');
        })->orderBy('init_date')
        ->get();
    if(isset($categoria)){
        if($categoria === 'empresas'){
            $courses = Course::where([['public', 2]])->get();
            return view('cursos')->with('courses', $courses)->with('images', Image::all())->with('type', 'Formación a tu medida');
        }
    }
    return view('cursos')->with('courses', $courses)->with('images', Image::all())->with('type', 'Todos los cursos');
});

Route::post('updateContact', 'AdminController@updateContact');

Route::post('uploadContact', 'AdminController@uploadContact');

Route::post('uploadNew', 'AdminController@uploadNew');

Route::get('alquilerInstalaciones', function(){
    return view('alquilerAulas');
});

Route::get('conocenos', function(){
    return view('conocenos');
});

Route::post('equipo', 'RegistrationController@team');

Route::get('validatePreRegistration', 'RegistrationController@validate');

Route::get('centros', function(){
    return view('centros');
});

Route::get('empresa', function(){
    return view('empresa');
});

Route::get('elegirnos', function(){
    return view('elegirnos');
});

Route::get('equipo', function(){
   return view('equipo');
});

Route::get('oxfordTestOfEnglish', function(){
    return view('oxfordTestOfEnglish');
});

Route::get('contacto', function(){
    $contacts = Contact::all();
    $images = Image::all();
    return view('contacto')
        ->with('contacts', $contacts)
        ->with('images', $images);
});

Route::get('transparencia', function(){
    return view('transparencia');
});

Route::get('normativaTransparencia', function(){
    return view('normativa');
});

Route::get('economicoFinancieraTransparencia', function(){
    return view('economicoFinanciera');
});

Route::get('ayudaSubvencionesTransparencia', function(){
    return view('ayudaSubvenciones');
});

Route::get('institucionalTransparencia', function(){
    return view('institucional');
});

Route::get('contratosTransparencia', function(){
    return view('contratos');
});

Route::get('comisionadoTransparencia', function(){
    return view('comisionado');
});

Route::get('organizativaTransparencia', function(){
    return view('organizativa');
});

Route::get('conveniosTransparencia', function(){
    return view('convenios');
});

Route::get('accesoInformacionTransparencia', function(){
    return view('accesoInformacion');
});


Route::post('solicitudInfo', 'RegistrationController@store');

Route::get('noticias/{id?}', function($id = null){
    if(isset($id)){
        $new = News::where('title', $id)->first();
        if($new) {
            $otherNews = News::where([['title', '<>', $id], ['date', '<=', date('Y-m-d')]])->take(3)->orderBy('date', 'desc')->get();
            $otherImages = Image::all();
            $images = Image::where('code', $new['img_code'])->get();
            return view('noticia')->with('new', $new)->with('otherNews', $otherNews)->with('otherImages', $otherImages)->with('images', $images);
        } else {
            abort('404');
        }
    }
    $images = Image::all();
   return view('presenciaMediatica')->with('news', News::where('date', '<=', date('Y-m-d'))->take(6)->orderBy('date', 'desc')->get())->with('images', $images);
});

Route::get('curso/{code}', 'CursorSelectorController@index');

Route::post('preRegistration', 'RegistrationController@index');

Route::post('oxfordInscription', 'RegistrationController@competences');

Route::get('admin', 'AdminController@frontier');

Route::post('admin/editCourse', 'AdminController@editCourse');

Route::post('admin/addCourse', 'AdminController@addCourse');

Route::post('admin/validate', 'AdminController@checkAdmin');

Route::post('admin/editNew', 'AdminController@editNew');

Route::get('admin/{code}', 'AdminController@index');

Route::post('admin/ajaxlivesearch', 'AdminController@ajaxModules');

Route::post('admin/ajaxautofillunits', 'AdminController@ajaxAutofillUnits');

Route::post('admin/ajaxdisplayunits', 'AdminController@ajaxUnits');

Route::post('admin/ajaxfilterdepartures', 'AdminController@ajaxDepartures');

Route::post('admin/ajaxfiltersector', 'AdminController@ajaxSectors');

Route::get('susDatosSeguros', function (){
    return view('susDatosSeguros');
});

Route::get('políticaDeCookies', function (){
    return view('politicaDeCookies');
});

Route::get('proteccionDeDatos', function (){
    return view('proteccionDatos');
});

Route::get('configCookies', function(){
   return view('configCookies'); 
});