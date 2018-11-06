<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response as IlluminateResponse;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\ValidationException;
use App\Core\Product\Repositories\ProductInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productInterface;

    public function __construct(ProductInterface $productInterface) {
        $this->productInterface = $productInterface;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required'
        ]);

       if ($validator->fails()) {
            return response([
                'error' => [
                    'message'     => $validator->errors(),
                    'status_code' => IlluminateResponse::HTTP_UNPROCESSABLE_ENTITY
                ]
            ]);
       }

       $product = $this->productInterface->create($request->all());

        return response([
            'message'     => 'Product has been saved.',
            'status_code' => 200
               
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->productInterface->findAll();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
