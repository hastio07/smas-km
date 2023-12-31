<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class UserComposer
{
    public function compose(View $view)
    {
        $guards = ['admin'];
        $guardSet = false;

        foreach ($guards as $guard) {
            try {
                //code...
                if (auth($guard)->user()) {
                    $view->with('guard', $guard);
                    $guardSet = true; // Setel variabel untuk menunjukkan bahwa guard telah diatur
                    break; // Keluar dari loop jika guard telah diatur
                }
            } catch (\Throwable $th) {
                //throw $th;
                continue;
            }

        }
        if (!$guardSet) {
            $view->with('guard', 'admin'); // Tetapkan default guard jika tidak ada guard yang diatur
        }
    }
}
