<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductPrice;
use App\Models\Provider;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{

    use RefreshDatabase;

    /**
     * @var Provider
     */
    private Provider $provider;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->product = Product::factory()->has(ProductPrice::factory()->count(3),'prices')->create();
    }

    public function test_category_relation()
    {
        $this->assertInstanceOf(BelongsTo::class, $this->product->category());
        $this->assertInstanceOf(ProductCategory::class, $this->product->category);
    }

    public function test_provider_relation()
    {
        $this->assertInstanceOf(BelongsTo::class, $this->product->provider());
        $this->assertInstanceOf(Provider::class, $this->product->provider);
    }

    public function test_prices_relation()
    {
        $this->assertInstanceOf(HasMany::class, $this->product->prices());
        $this->assertInstanceOf(Collection::class, $this->product->prices);
        $this->assertCount(4, $this->product->prices); //the product observer will create one more price on created event
        $this->assertInstanceOf(ProductPrice::class, $this->product->prices->first());
    }

}

