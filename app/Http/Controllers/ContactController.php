<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'message' => 'required|string',
            'donation_type' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'birthday_date' => 'nullable|date',
            'food_items' => 'nullable|array', // Expecting an array
        ]);

        // Create a new contact entry
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->mobile = $request->input('mobile');
        $contact->message = $request->input('message');
        $contact->donation_type = $request->input('donation_type');
        $contact->location = $request->input('location');
        $contact->birthday_date = $request->input('birthday_date');
        $contact->food_items = json_encode($request->input('food_items')); // Convert array to JSON

        $contact->save(); // Save the data to the database

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
