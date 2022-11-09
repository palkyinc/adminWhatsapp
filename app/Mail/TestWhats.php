<?php
    
    namespace App\Mail;
    

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class TestWhats extends Mailable
{
    use Queueable, SerializesModels;
    public $server;
    public $sign;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        
        $this->server = $this->iterator($request->all());
        //$this->sign = json_encode($request->all());
        $this->sign = hash_hmac('sha256', utf8_encode(json_encode($request->all())), env('WHATSAPP_TOKE'), false); 
        //$this->sign = hash_hmac('sha256', utf8_encode($text), env('WHATSAPP_TOKE'), false); 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.TestWhats');
    }

    private function iterator($array, $id = "") {
        $result = "";
        foreach ($array as $key => $value) {
            if (!is_numeric($key)) {
                $new_id = $id . "." . $key;
            } else {
                $new_id = $id;
            }
            if (is_numeric($key) || is_array($value) ) {
                $result .= $this->iterator($value, $new_id);
            } else {
                $result .= $new_id . " = " . $value . PHP_EOL;
            }
        }
        return $result;
    }
}
