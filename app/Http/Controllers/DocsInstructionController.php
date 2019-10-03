<?php

namespace App\Http\Controllers;

use App\DocsInstruction;
use Illuminate\Http\Request;

class DocsInstructionController extends Controller
{
    private $docsInstruction;

    /**
     * Undocumented function
     *
     * @param DocsInstruction $stmt
     */
    public function __construct(DocsInstruction $stmt)
    {
        $this->docsInstruction = $stmt;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docsInstructions = $this->docsInstruction->all();
        return view('pages.account.docsInstruction.index', compact('docsInstructions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DocsInstruction  $docsInstruction
     * @return \Illuminate\Http\Response
     */
    public function show(DocsInstruction $docsInstruction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DocsInstruction  $docsInstruction
     * @return \Illuminate\Http\Response
     */
    public function edit(DocsInstruction $docsInstruction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DocsInstruction  $docsInstruction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocsInstruction $docsInstruction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DocsInstruction  $docsInstruction
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocsInstruction $docsInstruction)
    {
        //
    }
}
