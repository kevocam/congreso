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

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/auditorios', function () {
        return view('salas');
    });
    Route::get('/dashboard', function () {
        return view('administrador');
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
    Route::get('/consultas', function () {
        return view('dashboard.consultas');
    });

    Route::get('/', function () {
        
        return view('lobby.index');
    });
});



Route::get('/chat-list', function () {
    
    return view('chat-list');
}); 

Route::get('/admin', function () {
    
    return view('administrador');
}); 
/* 
Route::get('/auditorio-live', function () {
    return view('auditorio.normal-live');
});
Route::get('/auditorio2', function () {
    return view('auditorio.blue');
});
Route::get('/auditorio2-live', function () {
    return view('auditorio.blue-live');
});   */

Route::group(['middleware' => ['role:congreso|super-admin','auth:sanctum' ]], function () {
    
    
    Route::get('/auditorio', function () {
        return view('auditorio.normal');
    }); 

    Route::get('/auditorio2', function () {
        return view('auditorio.blue-live');
    });

    Route::get('/auditorio3', function () {
        return view('auditorio.tres');
    });
    Route::get('/auditorio4', function () {
        return view('auditorio.cuatro');
    });
    Route::get('/auditorio5', function () {
        return view('auditorio.cinco');
    });
    Route::get('/auditorio6', function () {
        return view('auditorio.cinco');
    });    

});



Route::group(['middleware' => ['role:taller1|super-admin','auth:sanctum' ] ], function () {   
    
    Route::get('/taller1', function () {
        return view('taller.taller1');
    });

});
Route::group(['middleware' => ['role:taller2|super-admin','auth:sanctum' ]], function () {    
   
    Route::get('/taller2', function () {
        return view('taller.taller2');
    }); 
});
Route::group(['middleware' => ['role:taller3|super-admin','auth:sanctum' ]], function () {    
    Route::get('/taller3', function () {
        return view('taller.taller3');
    }); 
   

});
Route::group(['middleware' => ['role:taller4|super-admin','auth:sanctum' ]], function () {   
   
    Route::get('/taller4', function () {
        return view('taller.taller4');
    }); 
   
});
Route::group(['middleware' => ['role:taller5|super-admin','auth:sanctum' ]], function () {    
   
    Route::get('/taller5', function () {
        return view('taller.taller5');
    }); 

});
Route::group(['middleware' => ['role:taller6|super-admin','auth:sanctum' ]], function () {    
   
   
    Route::get('/taller6', function () {
        return view('taller.taller6');
    }); 
});




Route::get('/stand-dau', function () {
    return view('details.dau');
});

Route::get('/stand-instituto', function () {
    return view('details.institute');
});

Route::get('/stand-social', function () {
    return view('details.social');
}); 

Route::get('/stand-nayarit', function () {
    return view('details.dayarit');
}); 

Route::get('/stand-guatemala', function () {
    return view('details.guatemala');
}); 

Route::get('/stand-dominicana', function () {
    return view('details.dominicana');
}); 

Route::get('/stand-cundinamarca', function () {
    return view('details.cundinamarca');
}); 
Route::get('/stand-humanizando', function () {
    return view('details.humanizando');
}); 

Route::get('/stand-beauty', function () {
    return view('details.beauty');
}); 

Route::get('/stand-damassalud', function () {
    return view('details.damassalud');
});

Route::get('/stand-ediciones', function () {
    return view('details.ediciones');
});  

Route::get('/stand-queretaro', function () {
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
