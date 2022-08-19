<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contato extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->sbject('Contato - '. $this->data->subject)
                ->view('emails.contato');


        /*return $this->from('no-reply@portaldocomputador.com.br','Informações automáticas')
                    ->to($email, $name)
                    ->subject('Um usuário enviou uma nova mensagem')
                    ->view('email/email')
                    ->with([
                        'data' => $this->$data
                              ]); */
    }
}
