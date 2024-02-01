<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function submit(ContactRequest $conReq): RedirectResponse
    {
        $contact = new Contact();

        $contact->name = $conReq->input('name');
        $contact->email = $conReq->input('email');
        $contact->subject = $conReq->input('subject');
        $contact->message = $conReq->input('message');

        $contact->save();

        return redirect()->route('home')
            ->with('success', 'Сообщение было добавлено');
    }

    public function allData()
    {
        $contact = new Contact();
        return view('messages',
            ['data' => $contact->where('subject', '<>', 'тестовая отправка содержимого формы')->get()]);
    }
}
