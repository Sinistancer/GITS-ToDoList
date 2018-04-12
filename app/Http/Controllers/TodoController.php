<?php
/**
 * Created by PhpStorm.
 * User: I816
 * Date: 4/6/2018
 * Time: 2:39 PM
 */

namespace App\Http\Controllers;

use App\Eloquents\Todo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TodoController
{
    public function index()
    {
        $todo = Todo::all();

        return response()->json($todo, 200);
    }

    public function done(Request $request)
    {
        if ($request->has('username'))
        {
            $now = Carbon::now()->toTimeString();
            $todo = Todo::where('username', $request->get('username'))
                ->where('time_start', '<', $now)
                ->get();

            return response()->json($todo, 200);
        }

        return response()->json(['status' => 'not found'], 412);
    }

    public function priority(Request $request)
    {
        if ($request->has(['username', 'order']))
        {
            $param = $request->only(['username', 'order']);
            $todo = Todo::where('username', $param['username'])->orderBy('priority', $param['order'])->get();

            return response()->json($todo, 200);
        }

        return response()->json(['status' => 'not found'], 412);
    }

    public function store(Request $request)
    {
        $todo = Todo::create($request->all());

        if ($todo)
        {
            return response()->json(['status' => 'success', 'data' => $todo], 200);
        }

        return response()->json(['status' => 'failed'], 204);
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);

        if ($todo->update($request->all()))
        {
            return response()->json(['status' => 'success', 'data' => $todo], 200);
        }

        return response()->json(['status' => 'failed'], 204);
    }

    public function delete($id)
    {
        $todo = Todo::findOrFail($id);

        if ($todo->delete())
        {
            return response()->json(['status' => 'success'], 200);
        }

        return response()->json(['status' => 'failed'], 204);
    }
}