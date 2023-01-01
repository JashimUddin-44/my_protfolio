<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Clist;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $class = Clist::all();
        view()->share('class',$class);

        $department = Department::all();
        view()->share('department',$department);

        $students = Student::all();
        view()->share('student','$students');
        Paginator::useBootstrap();
    }
}
