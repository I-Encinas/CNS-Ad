<?php

namespace App\Http\Controllers;

use App\Models\OrderType;
use Illuminate\Http\Request;

/**
 * Class OrderTypeController
 * @package App\Http\Controllers
 */
class OrderTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderTypes = OrderType::paginate(10);

        return view('order-type.index', compact('orderTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $orderTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orderType = new OrderType();
        return view('order-type.create', compact('orderType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(OrderType::$rules);

        $orderType = OrderType::create($request->all());

        return redirect()->route('order-types.index')
            ->with('success', 'OrderType created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderType = OrderType::find($id);

        return view('order-type.show', compact('orderType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orderType = OrderType::find($id);

        return view('order-type.edit', compact('orderType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  OrderType $orderType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderType $orderType)
    {
        request()->validate(OrderType::$rules);

        $orderType->update($request->all());

        return redirect()->route('order-types.index')
            ->with('success', 'OrderType updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $orderType = OrderType::find($id)->delete();

        return redirect()->route('order-types.index')
            ->with('success', 'OrderType deleted successfully');
    }
}
