<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfeController;
use App\Http\Controllers\PanelController;
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

Route::group(['middleware' => [/* 'role:admin', */'auth:sanctum', 'verified']], function () {
    Route::get('/salas', function () {
        return view('salas');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/asistentes', function () {
        return view('dashboard.viewAsistentes');
    });
    Route::get('/crearasistentes', function () {
        return view('dashboard.createAsistentes');
    });
    Route::get('/preguntas', function () {
        return view('dashboard.questions');
    });

});
Route::get('/', function () {


    
    return view('welcome');
});


Route::get('/chat-list', function () {

    
    return view('chat-list');
}); 

Route::get('/auditorio', function () {
    return view('auditorio.normal');
}); 

Route::get('/auditorio-live', function () {
    return view('auditorio.normal-live');
});
Route::get('/auditorio2', function () {
    return view('auditorio.blue');
});
Route::get('/auditorio2-live', function () {
    return view('auditorio.blue-live');
});  

Route::get('/detail-dau', function () {
    return view('details.dau');
});

Route::get('/detail-instituto', function () {
    return view('details.institute');
});

Route::get('/detail-social', function () {
    return view('details.social');
}); 

Route::get('/detail-dayarit', function () {
    return view('details.dayarit');
}); 

Route::get('/detail-guatemala', function () {
    return view('details.guatemala');
}); 

Route::get('/detail-dominicana', function () {
    return view('details.dominicana');
}); 

Route::get('/detail-cundinamarca', function () {
    return view('details.cundinamarca');
}); 
Route::get('/detail-humanizando', function () {
    return view('details.humanizando');
}); 

Route::get('/detail-beauty', function () {
    return view('details.beauty');
}); 

Route::get('/detail-damassalud', function () {
    return view('details.damassalud');
});

Route::get('/detail-ediciones', function () {
    return view('details.ediciones');
});  

Route::get('/detail-queretaro', function () {
    return view('details.queretaro');
}); 



Route::get('/registro', function () {
    return view('registro');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/salas', function () {
    return view('salas');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/lobby', function () {
    return view('lobby.index');
});

Route::middleware([/* 'role:admin', */'auth:sanctum', 'verified'])->get('/pabellon', function () {
    return view('pabellon.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/pabellon2', function () {
    return view('pabellon.option');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/detail', function () {
    return view('details.normal');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/detail2', function () {
    return view('details.live');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/conferencista',[ConfeController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/crearconferencista',[ConfeController::class, 'create']);
Route::middleware(['auth:sanctum', 'verified'])->get('/crearpanelista',[PanelController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/panelista',[PanelController::class, 'create']);
