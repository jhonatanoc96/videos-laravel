<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validate = $this->validate($request, [
            'body' => 'required'
        ]);

        $comment = new Comment();

        $user = \Auth::user();

        $comment->user_id = $user->id;
        $comment->video_id = $request->input('video_id');
        $comment->body = $request->input('body');

        $comment->save();

        return redirect()->route('detailVideo', ['video_id' => $comment->video_id])->with(array(
            'message' => 'Comentario añadido correctamente !!'
        ));
    }

    public function delete($comment_id)
    {
        $user = \Auth::user();
        $comment = Comment::find($comment_id);

        // Comprobar si el comentario fue creado por el usuario autenticado o si es el dueño del video

        if ($user && ($comment->user_id == $user->id || $comment->video->user_id == $user->id)) {
            $comment->delete();
        }

        return redirect()->route('detailVideo', ['video_id' => $comment->video_id])->with(array(
            'message' => 'Comentario borrado correctamente !!'
        ));
    }
}
