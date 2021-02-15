<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class ResetController extends Controller
{
    public function reset()
    {
        //чищу все таблицы и после заливаю мои seeder'ы
        Artisan::call('migrate:fresh --seed');

        foreach (['category', 'product'] as $folder) {

            //удаляю папки которые обхожу, добавляю такие же только пустые
            Storage::deleteDirectory($folder);
            Storage::makeDirectory($folder);

            //теперь выбираю свой диск, в котором я обхожу каждую папку и выбираю в каждой все фотки
            $files = Storage::disk('reset')->files($folder);

            foreach ($files as $file)
            {
                //теперь в сторадж я ложу каждую фотку
                Storage::put( $file, Storage::disk('reset')->get($file) );
                            //1 параметр имя, 2 параметр сама фотка
            }
        }

        session()->flash('success', 'Проект сброшен до начального состояния');
        return redirect(route('home'));
    }
}
