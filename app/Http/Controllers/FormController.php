<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFormRequest;
use App\Http\Requests\TestFormRequest;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FormController extends Controller
{
    public function testForm()
    {
        return view('testform');
    }

    public function send(Request $request)
    {
        /* $name = $request->name;
         $text = $request->text;
         $bd = $request->bd;
         echo $name. '-'. $text . ' -' . $bd;*/

        $validated = $request->validate([
            'name' => 'required| min:2|max:100',
            'text' => 'required|max:100',
            'bd' => 'nullable|date',
        ]);
        print_r($validated);
        return '';
    }

    public function comments()
    {
        return view('comment');
    }

    public function commentsSend(CommentFormRequest $request)
    {
        $validated = $request->validated();


        /*        DB::table('users')->insert([
                    'name' =>$validated['name'],
                    'email' => $validated['email'],
                    'email_verified_at' => now(),
                    'password' => fake()->password(),
                    'remember_token' =>Str::random(10) ,
                ]);*/


        $user = User::all();
        if ($user->doesntContain('email', $validated['email'])) {

            $user = User::factory()->make();
            $user->name = $validated['name'];
            $user->email = $validated['email'];
            $user->email_verified_at = now();
            $user->password = fake()->password();
            $user->remember_token = Str::random(10);
            $user->save();
        }
        $comment = Comment::factory()->make();
        $comment->text = $validated['text'];
        $com = User::all()->where('email',$validated['email'])->first();

        $comment->user_id = $com->id;
        $comment->save();

        return redirect('/comments');
    }

    public function sendByRequest(TestFormRequest $request)
    {
//        $validated = $request->validated(); // получаем массив
        $validated = $request->safe(); // получаем объект
//        print_r($validated);
        echo $validated->name;
        return '';
    }
}
