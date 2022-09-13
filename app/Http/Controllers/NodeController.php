<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Node;

class NodeController extends Controller
{
    public function edit(Node $node)
    {
        return view('node.edit', compact('node'));
    }

    public function update(Node $node)
    {
        $data = request() -> validate([
            'content' => 'required',
            'parent_id' => 'required',
        ]);

        $node->update($data);

        return redirect("/dashboard");
    }

    public function delete(Node $node){
        $node = Node::find($node);
        $node -> each -> delete();
        return redirect("/dashboard");
    }

    public function create(Node $node){
        return view('node.create');
    }
    
    public function store(Request $request){
        $data = request()-> validate([
            'content' => 'required',
            'parent_id' => 'nullable|integer',
        ]);

        \App\Models\Node::create([
            'content' => $data['content'],
            'parent_id' => $data['parent_id'],
        ]);

        return redirect("/dashboard");
    }
}
