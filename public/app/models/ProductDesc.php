<?php

/*
 * @author GMP-4786
 */

class ProductDesc extends Eloquent {
   
   // protected $table = "dev_product_description_ja";
    protected $table = 'cscart_product_descriptions';
    protected $primaryKey = 'product_id';
   
    protected $fillable = array(
        'product_name',
        'product_code',
        'product_shortname',
        'product_short_description',
        'product_full_description',
        'product_meta_keywords',
        'product_meta_description',
        'product_search_words',
        'product_page_title',
        'product_promo_text'                      
        );
    
   
   
    //protected $guarded = ["id"];
    //protected $softDelete = true;
    
   /* public static $rules = array(
        'product_name'=>'required|min:2',
    );*/
    
    
    /*
    public function orders() {
        return $this->belongsToMany("Order", "order_item");
    }
    
    public function orderItems() {
        return $this->hasMany("OrderItem");
    }
    
    public function category() {
        return $this->belongsTo("Category");
    }
     */
}

