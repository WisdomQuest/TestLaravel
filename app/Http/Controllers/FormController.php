<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFormRequest;
use App\Http\Requests\TestFormRequest;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
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
        $com = User::all()->where('email', $validated['email'])->first();

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

    public function testUpload(Request $request)
    {
        /*Storage::put('1.txt', 'Text....');
        Storage::disk('local')->put('1.txt', 'hello');
        Storage::disk('public')->put('1.txt', 'hello');
        Storage::prepend('1.txt', 'Gays');          //добавить в начало файла
        Storage::append('1.txt', 'who a you');          //добавить в конец файла
        if (Storage::exists('3.txt')) {
            Storage::delete('3.txt');
        }
        Storage::copy('1.txt', '2.txt');

        echo Storage::get('1.txt') . '<br />';
        echo Storage::url('1.txt'). '<br />';*/
        $path = '';
        if ($request->submit) {
            $validator = Validator::make($request->all(), [
                'image' => 'required|file|max:1024|mimes:jpg,png,gif'
            ]);
            /*            if ($validator->fails()) {
                            return redirect()-> куданибудь(класс Validator позволяет не сразу редирект ошибки делать)
                        }*/
            $validator->validate();

            /*            echo $request->file('image')->getClientOriginalName() . '<br />';
                        echo $request->file('image')->getClientOriginalExtension() . '<br />'; //расширение
                        echo $request->file('image')->hashName() . '<br />';
                        echo $request->file('image')->extension() . '<br />'; // расширение которое определил laravel
                        echo $request->file('image')->getSize() . '<br />';
                        echo $request->file('image')->getMimeType() . '<br />';*/
            $path = Storage::disk('public')->putFile('images', $request->file('image'));
//           echo $path . '<br />';
            $path = Storage::disk('public')->url($path);
//            echo $path . '<br />';


        }

        return view('testupload', ['image' => $path]);
    }



    public function addAudio(Request $request)
    {
        $path ='';
        if ($request->submit) {
                    $validated = $request->validate([
                        'audio' => 'required|max:5120|mimes:mp3,wav'
                    ]);
            $path = Storage::disk('public')->putFile('audio', $request->file('audio'));
            $path = Storage::disk('public')->url($path);

        }


        return view('addaudio', ['audio' => $path]);
    }
}
