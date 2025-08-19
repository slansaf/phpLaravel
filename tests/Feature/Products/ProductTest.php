<?php

namespace Tests\Feature\Products;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function setUp():void
    {
     parent::setUp();
     $this->artisan('db:seed');
    }

    public function test_products_can_be_indexed (){
        Product::factory()->count(3)->create();
        $response = $this->get('/api/products');
        $response->assertStatus(200);
        $this->assertCount(3, $response->json());
    }

    public function test_product_can_be_shown(){
        $product = Product::factory()->create();
        $response = $this->get('/api/products/' . $product->id);
        $response->assertStatus(200);
        $response->assertJson([
            'id' => $product->id,
            'sku' => $product->sku,
            'name' => $product->name,
            'price' => $product->price,
        ]);
    }
    
    public function test_product_can_be_stored(){
        $data = [
            'sku' => 'test-sku',
            'name' => 'Test Product',
            'price' => 99.99,
        ];
        $response = $this->post('/api/products', $data);
        $response->assertStatus(201);
        $this->assertDatabaseHas('products', $data);
    }

    public function test_product_can_be_updated(){
        $product = Product::factory()->create();
        $data = [
            'sku' => 'updated-sku',
            'name' => 'Updated Product',
            'price' => 89.99,
        ];
        $response = $this->put('/api/products/' . $product->id, $data);
        $response->assertStatus(200);
        $this->assertDatabaseHas('products', $data);
    }

    public function test_product_can_be_destroyed(){
        $product = Product::factory()->create();
        $response = $this->delete('/api/products/' . $product->id);
        $response->assertStatus(200);
         $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }

}