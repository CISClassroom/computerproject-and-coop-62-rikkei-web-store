<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $message;
    protected $url;
    protected $color;
    protected $buttonText;

    public function __construct()
    {
        // $user = $this->user;
    }


    public function build(Request $request)
    {
        $name = $request->name ?? '';
        $message = $request->message;
        $url = $request->url ?? 'http://127.0.0.1:8000/';
        $color = $request->color ?? 'primary';
        $buttonText = $request->buttonText ?? 'Click';

        return $this->markdown('admin.emails.components.mail')
            ->with([
                'name' => $name,
                'message' => $message,
                'url' => $url, //url for btn to link
                'color' => $color, // btn color (primary is dark)
                'buttonText' => $buttonText,
            ]);
    }
}
