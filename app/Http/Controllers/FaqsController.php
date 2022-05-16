<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqsController extends Controller
{

    /**
     * The Index of the article page
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('faqs.index', compact('faqs'));
    }

    /**
     * function to show FAQ create page
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Stores the new data to the database
     */
    public function store(Request $request)
    {
        Faq::create($this->validateFaq($request));
        return redirect(route('faqs.index'));
    }

    /**
     * Function to show specific FAQ to edit
     */
    public function edit(Faq $faq)
    {
        return view('faqs.edit', compact('faq'));
    }

    /**
     * Function to update specific FAQ
     */
    public function update(Request $request, Faq $faq)
    {
        $faq->update($this->validateFaq($request));
        return redirect(route('faqs.index'));
    }

    /**
     * Deletes FAQ
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect(route('faqs.index'));
    }

    /**
     * @param Request $request
     * @return array
     */
    public function validateFaq(Request $request): array
    {
        return $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => ''
        ]);
    }
}
