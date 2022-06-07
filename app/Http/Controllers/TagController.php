<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return view('dashboard.tags.index', [
            'tags' => Tag::all(),
        ]);
    }

    public function create()
    {
        return view('dashboard.tags.create');
    }

    public function store(TagRequest $request)
    {
        $tag = new Tag([
            'name' => $request->name(),
            'slug' => Str::slug($request->name())
        ]);

        $tag->save();

        return redirect()->route('tags.index')->with('success','Nhãn đã xuất hiện trong cuộc sống này!');
    }

    public function edit(Tag $tag)
    {
        return view('dashboard.tags.edit', compact('tag'));
    }

    public function update(TagRequest $request, Tag $tag)
    {
        $tag->update([
            'name' => $request->name(),
            'slug' => Str::slug($request->name()),
        ]);

        return redirect()->route('tags.index')->with('success','Nhãn đã được cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index')->with('success', 'Nhãn đã bay màu!');
    }
}
