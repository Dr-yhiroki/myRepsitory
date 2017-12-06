<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//商品一覧
Route::get('/all', function () {
  $items = DB::select("SELECT * FROM items");
  return view("all",[
    "items" => $items
  ]);
});

//液晶テレビ一覧
Route::get('/LCDTV', function () {
  $items = DB::select("SELECT * FROM items WHERE category = 'LCDTV'");
  return view("LCDTV",[
    "items" => $items
  ]);
});

//冷蔵庫一覧
Route::get('/refrigerator', function () {
  $items = DB::select("SELECT * FROM items WHERE category = 'refrigerator'");
  return view("refrigerator",[
    "items" => $items
  ]);
});

//エアコン一覧
Route::get('/air_conditioner', function () {
  $items = DB::select("SELECT * FROM items WHERE category = 'air_conditioner'");
  return view("air_conditioner",[
    "items" => $items
  ]);
});

//掃除機一覧
Route::get('/vacuum_cleaner', function () {
  $items = DB::select("SELECT * FROM items WHERE category = 'vacuum_cleaner'");
  return view("vacuum_cleaner",[
    "items" => $items
  ]);
});

//パソコン一覧
Route::get('/computer', function () {
  $items = DB::select("SELECT * FROM items WHERE category = 'computer'");
  return view("computer",[
    "items" => $items
  ]);
});

//扇風機一覧
Route::get('/fan', function () {
  $items = DB::select("SELECT * FROM items WHERE category = 'fan'");
  return view("fan",[
    "items" => $items
  ]);
});

//Topページ
Route::get("/",function(){
  $items = DB::select("SELECT * FROM items");
  return view("top",[
    "items" => $items
  ]);
});

//詳細
Route::get("/detail/{item_id}",function($itemId){
    $items = DB::select("SELECT * FROM items where id = ?",[$itemId]);
    if(count($items)){
        return view("detail",[
            "item" => $items[0]
        ]);
    }else{
        return abort(404);
    }
});

// [POST] /cart/{item_id} カートの追加
Route::post("/cart/{item_id}",function($itemId){
    $items = DB::select("SELECT * FROM items where id = ?",[$itemId]);
    if(count($items)){
        $cartItems = request()->session()->get("CART",[]);
        $cartItems[] = $items[0];
        request()->session()->put("CART",$cartItems);
        return redirect("/cart");
    }else{
        return abort(404);
    }
});

// [GET] /cart カートの表示
Route::get("/cart",function(){
    $cartItems = request()->session()->get("CART",[]);
    return view("cart",[
        "cartItems" => $cartItems
    ]);
});

//カートの中身を削除 $cartItems = request()->session()->get("CART",[]); request()->session()->unset("CART",$cartItems);
Route::post("/cart/delete/{index}",function($index){
    $cartItems = request()->session()->get("CART",[]);
    unset($cartItems[$index]);
    request()->session()->put("CART",$cartItems);
    return redirect("/cart");
});

//セッション
Route::get("/session_test",function(){
    $count = request()->session()->get("COUNTER",0);
    $count = $count + 1;
    request()->session()->put("COUNTER",$count);
    return "{$count}回目のアクセスです";
});

//購入画面
Route::get("buy",function(){
  $cartItems = request()->session()->get("CART",[]);
    return view("buy",[
      "cartItems" => $cartItems
    ]);
});

//購入処理
Route::post("buy",function(){
  $validator = Validator::make(request()->all(), [
     'name' => ['required','max:20'],
     'email' => ['required','email'],
 ])->validate();
 return redirect("thanks");
});

//購入後画面
Route::get("thanks",function(){
$mg = Mailgun\Mailgun::create('key-c4a5a422e53aa2a2a238c18e0d28dfa7');

# Now, compose and send your message.
# $mg->messages()->send($domain, $params);
$mg->messages()->send('sandbox7ec26266be5744adb7930bd0d2f1d625.mailgun.org', [
    'from'    => 'b6351@oic.jp',
    'to'      => 'b6351@oic.jp',
    'subject' => '注文を確定しました。',
    'text'    => 'お買い上げありがとうございます。'
]);
return view("thanks");
});
