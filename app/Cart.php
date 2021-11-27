<?php
    namespace App;

    class Cart{

        public $items = null;
        public $totalQty = 0;
        public $totalPrice = 0;


        public function __construct($oldCart){
            
            if($oldCart){
                $this->items = $oldCart->items;
                $this->totalQty = $oldCart->totalQty;
                $this->totalPrice = $oldCart->totalPrice;
            }

        }

        public function add($item, $id){

            $storedItem = ['qty' => 0, 'id' => 0, 'nom' => $item->nom,
            'description' => $item->description  ,'prix' => $item->prix, 'image' => $item->image, 'item' =>$item];

        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['id'] = $id;
        $storedItem['nom'] = $item->nom;
        $storedItem['description'] = $item->description;
        $storedItem['prix'] = $item->prix;
        $storedItem['image'] = $item->image;
        $this->totalQty++;
        $this->totalPrice += $item->prix;
        $this->items[$id] = $storedItem;

        }

         public function updateQty($id, $qty)
         {
             $this->totalQty -= $this->items[$id]['qty'];
             $this->totalPrice -= $this->items[$id]['prix'] * $this->items[$id]['qty'];
             $this->items[$id]['qty'] = $qty;
             $this->totalQty += $qty;
             $this->totalPrice += $this->items[$id]['prix'] * $qty;

         }

         public function removeItem($id){
             $this->totalQty -= $this->items[$id]['qty'];
             $this->totalPrice -= $this->items[$id]['prix'] * $this->items[$id]['qty'];
             unset($this->items[$id]);
         }


    }
?>