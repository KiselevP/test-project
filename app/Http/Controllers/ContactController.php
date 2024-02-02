<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use http\Env\Request;
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
        return view('messages', ['data' => $contact->all()]);
    }

    public function showOneMessage($id)
    {
        $contact = new Contact();
        return view('one-message', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id)
    {
        $contact = new Contact();
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $conReq)
    {
        $contact = Contact::find($id);

        $contact->name = $conReq->input('name');
        $contact->email = $conReq->input('email');
        $contact->subject = $conReq->input('subject');
        $contact->message = $conReq->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)
            ->with('success', 'Сообщение было обновлено');
    }

    public function deleteMessage($id)
    {
        $contact = Contact::find($id)->delete();
        return redirect()->route('contact-data')
            ->with('success', 'Сообщение было удалено');
    }
}
