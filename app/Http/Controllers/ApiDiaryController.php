<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class ApiDiaryController extends Controller
{
    /**
     * 日記一覧を取得するAPI
     */
    public function index()
    {
        return response()->json(Diary::all());
    }

    /**
     * 特定の日記を取得するAPI
     */
    public function show($id)
    {
        $diary = Diary::find($id);

        if (!$diary) {
            return response()->json(['message' => '日記が見つかりません'], 404);
        }

        return response()->json($diary);
    }

    /**
     * 日記を新規作成するAPI
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);

        $diary = Diary::create($validated);

        return response()->json(['message' => '日記を作成しました', 'diary' => $diary], 201);
    }

    /**
     * 日記を更新するAPI
     */
    public function update(Request $request, $id)
    {
        $diary = Diary::find($id);

        if (!$diary) {
            return response()->json(['message' => '日記が見つかりません'], 404);
        }

        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);

        $diary->update($validated);

        return response()->json(['message' => '日記を更新しました', 'diary' => $diary]);
    }

    /**
     * 日記を削除するAPI
     */
    public function destroy($id)
    {
        $diary = Diary::find($id);

        if (!$diary) {
            return response()->json(['message' => '日記が見つかりません'], 404);
        }

        $diary->delete();

        return response()->json(['message' => '日記を削除しました']);
    }
}
