<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use Mail;

class ContatoController extends Controller
{
    public function contato(){
        return view('contato');
    }

    public function enviar(Request $request){

        $data = $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
            'assunto' => 'required',
            'mensagem' => 'required'
        ]);

        Contato::create($request->all());

        \Mail::send('email\email', array(
            'nome' => $request->get('nome'),
            'email' => $request->get('email'),
            'telefone' => $request->get('telefone'),
            'assunto' => $request->get('assunto'),
            'mensagem' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('contato@portaldocomputador.com.br', 'Admin')->subject($request->get('assunto'));

        });

        return redirect()->back()
                        -> with(['success'=>'Obrigado']);
      //  Mail::to('info@portaldocomputador.com.br')->send(new contato($data));
       // return back()->with('data', $data)->with('message', ['success', 'Message sent succesfully']);

    }
}
