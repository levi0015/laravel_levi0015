<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = faq::latest()->get();

        return view('home', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        faq::create($this->validateFaq($request));

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\faq $faq
     * @return \Illuminate\Http\Response
     */
    public function show(faq $faq)
    {
        return view('faqs.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\faq $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(faq $faq)
    {
        return view('faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\faq $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faq $faq)
    {
        $faq->update($this->validateFaq($request));

        return redirect(route('faqs.show', $faq));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\faq $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(faq $faq)
    {
        $faq->delete();

        return redirect(route('home'));
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
            'link' => 'nullable'
        ]);
    }
}
