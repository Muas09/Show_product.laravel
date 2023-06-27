<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\proudct;

class CardController extends Controller
{
    public function index()
    {
        $cards = proudct::all();
        return response()->json($cards);
    }

    public function store(Request $request)
    {
        $card = new proudct();
        $card->Image = $request->input('Image');
        $card->Title = $request->input('Title');
        $card->Type = $request->input('Type');
        $card->Price = $request->input('Price');
        $card->save();

        return response()->json($card, 201);
    }

    public function show($id)
    {
        $card = proudct::find($id);

        if (!$card) {
            return response()->json(['error' => 'Card not found'], 404);
        }

        return response()->json($card);
    }

    public function update(Request $request, $id)
    {
        $card = proudct::find($id);

        if (!$card) {
            return response()->json(['error' => 'Card not found'], 404);
        }

        $card->Image = $request->input('Image');
        $card->Title = $request->input('Title');
        $card->Type = $request->input('Type');
        $card->Price = $request->input('Price');
        $card->save();

        return response()->json($card);
    }

    public function destroy($id)
    {
        $card = proudct::find($id);

        if (!$card) {
            return response()->json(['error' => 'Card not found'], 404);
        }

        $card->delete();

        return response()->json(['message' => 'Card deleted successfully']);
    }
}
