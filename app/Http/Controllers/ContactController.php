<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Quote;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource, including Contacts and Quotes.
     */
    public function index()
    {
        // Ambil data contacts dan quotes
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
        $quotes = Quote::orderBy('created_at', 'desc')->paginate(10);

        // Kirim data ke view
        return view('admin.contacts.index', compact('contacts', 'quotes'));
    }

    /**
     * Display the specified contact resource.
     */
    public function show(Contact $contact)
    {
        return view('admin.contacts.detail', compact('contact'));
    }

    /**
     * Display the specified quote resource.
     */
    public function showQuote(Quote $quote)
    {
        return view('admin.contacts.quote', compact('quote'));
    }

    /**
     * Remove the specified contact resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully');
    }

    /**
     * Remove the specified quote resource from storage.
     */
    public function destroyQuote(Quote $quote)
    {
        $quote->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Quote deleted successfully');
    }
}
