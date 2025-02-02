<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
        $diaries = Diary::all();
        return view('diary.index', compact('diaries'));
    }

    public function create()
    {
        return view('diary.create');
    }

    public function store(Request $request)
    {
        // <input name="title"...> で指定された内容を取得する
        $title = $request->input('title');

        // 入力内容を validate メソッドを使って精査する
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required',
        ]);

        // 精査済みのデータを利用する
        $title = $validated['title'];

        // 新しい Diary モデルインスタンスを作成
        $diary = new Diary();

        $diary->date = date("Y-m-d");
        $diary->title = $validated['title'];
        $diary->body = $validated['body'];

        // データベースに保存
        $diary->save();

        // 保存後にリダイレクトする（例：日記入力ページへ）
        return back()->with('message', '保存しました');
    }

    public function show($id)
    {
        $diary = Diary::find($id);
        return view('diary.show', compact('diary'));
    }

    public function edit($id)
    {
        $diary = Diary::find($id);
        return view('diary.edit', compact('diary'));
    }

    public function update(Request $request, $id)
    {

        $diary = Diary::find($id);

        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);

        $diary->update($validated);

        return back()->with('message', '更新しました');
    }

    public function destroy(Request $request)
    {
        $id = $request->route('id');

        $diary = Diary::find($id);

        $diary->delete();

        return redirect()->route('diary.index');
    }
}
