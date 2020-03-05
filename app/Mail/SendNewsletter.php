<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class SendNewsletter extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $message;
    protected $url;
    protected $color;
    protected $buttonText;

    public function __construct()
    {
        //
    }


    public function build(Request $request)
    {
        $subject = $request->subject;
        $title = $request->title ?? '';
        $image_url = $request->image_url ?? '';
        $message = $request->message;
        $url = $request->url ?? 'http://127.0.0.1:8000/';
        $color = $request->color ?? 'primary';
        $buttonText = $request->buttonText ?? 'Click';
        // dd($title, $message, $url, $color, $buttonText);

        return $this->markdown('admin.emails.components.newsletter')
            ->subject($subject)
            ->with([
                'title' => $title,
                'message' => $message,
                'image' => $image_url,
                'url' => $url, //url for btn to link
                'color' => $color, // btn color (primary is dark)
                'buttonText' => $buttonText,
            ]);
    }
}
