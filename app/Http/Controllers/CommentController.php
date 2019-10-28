<?php

namespace App\Http\Controllers;

use App\DetailsUsers;
use Illuminate\Http\Request;
use App\Services;
use App\Comment;
use App\Notifications\NewCommentPosted;
class CommentController extends Controller
{
    public  function AjoutCommentaire(Services $services){
        request()->validate([
            'content' => 'required|min:5'
        ]);

        $comment = new Comment();
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;

        $services->comments()->save($comment);
        $services->user->notify(new NewCommentPosted(auth()->user(), $services));


        return redirect()->route('ShowDetailService', $services);
    }

    public function RepondreCommentaire(Comment $comment)
    {
        request()->validate([
            'replyComment' => 'required|min:3'
        ]);

        $commentReply = new Comment();
        $commentReply->content = request('replyComment');
        $commentReply->user_id = auth()->user()->id;

        $comment->comments()->save($commentReply);

        return redirect()->back();
    }

    public function showFromNotification(Services $service, $notification)
    {
        $nots = auth()->user()->unreadNotifications;
        foreach ( $nots as $not ){
            if($not->id == $notification){
                $time = date("Y-m-d h:i:s", time());
                $not->read_at = $time;
                $not->save();
            }
        }

        $detail=DetailsUsers::where('id_users',$service->id_user)->get();

        return redirect()->route('ShowDetailService',['id'=>$service]);
    }
}
