<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FreelancerTask;
use Illuminate\Support\Facades\Auth;
use App\Task;
use DB;

class DistributionController extends Controller
{

    public function show(Task $task)
    {
        $id = Auth::guard('api')->id();
        if($task->idCustomer == $id) {
            $users = $task->users()->select('name', 'email')->get();
            return $users;
        }
        return response()->json(['error' => 'You are not the owner of the task'], 400);
    }

    public function store(Task $task)
    {   
        if($task->active == 1) 
        {
            $id = Auth::guard('api')->id();

            if($task->idFreelancer == 0) {
                
                $task->users()->attach($id);

                return response()->json(['success' => 'Succesfully requested'], 201);
            }
            else {
                return response()->json(['error' => 'The task is already taken'], 400);
            }
        }
         return response()->json(['error' => 'The task is not active'], 400);
    }

    public function update(Request $request, Task $task)
    {
        $id = Auth::guard('api')->id();
        if($id == $task->idFreelancer)
        {
            DB::table('freelancer_tasks')->where('idTask', $task->id)->update(['finished' => 1]);
            
            return response()->json(['success' => 'You succefully finished the task, please wait for approval'], 200);
        }
        return response()->json(['error' => 'The task is taken by other freelancer'], 400);
    }

}
