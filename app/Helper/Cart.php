<?php

namespace App\Helper;

class Cart{
    private $items = [];
    private $total_quantity = 0;
    private $total_price = 0;

    public function __construct(){
        $this ->items = session('cart')? session('cart') :[];

    }
    //pt lay ve danh sach sp trong gio
    public function list(){
        return $this->items;
    }

    //them moi sp vao gio hang
    public function add($product,$quantity =1){
        
        $item =[
            'productId'=>$product->id,
            'name'=>$product->name,
            'price' => $product->price,
            'image' => $product-> image,
            'quantity' => $quantity
        ];
        $this->items[$product->id] =$item ;
        session(['cart'=>$this->items]);
    }


    //cap nhat gio hang
    public function update($id,$qtt){
        if(isset($this->items[$id])){
            $this->items[$id]['quantity'] = $qtt;
            session(['cart'=>$this->items]);
        }

    }


    // xoa sp khoi gio hang
    public function delete($id){
        if(isset($this->items[$id])){
            unset($this->items[$id]);
            session(['cart'=>$this->items]);
        }
    }


    //xoa het sp khoi gio hang
        public function clear(){
            session(['cart'=>null]);
        }

    // pt lay tong tien
    public function getTotalPrice(){
        $totalPrice = 0;
        foreach($this->items as $item){
            $totalPrice += $item['price'] * $item['quantity'];
        }
        return $totalPrice;
    }
    public function getTotaQuantity(){
        $total = 0;
        foreach($this->items as $item){
            $total += $item['quantity'];
        }
        return $total;
    }
}

