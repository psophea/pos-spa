<?php

use App\Tag;
use App\Product;
use App\Category;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TagsControllerTest extends ApiTestCase
{
    use DatabaseMigrations, WithoutMiddleware, Factory;

    /** @test */
    public function can_list_tags()
    {
        $this->times(5)->create(Tag::class);

        $this->json('GET', '/api/v1/tags');

        $this->assertResponseOk();
        $this->seeJsonStructure([
            'data' => ['*' => ['id', 'name', 'status']],
            'meta' => ['pagination' => []],
        ]);
    }

    /** @test */
    public function can_create_tag()
    {
        $tag = $this->make(Tag::class);

        $this->json('POST', '/api/v1/tags', [
            'name' => $tag->name,
            'status' => $tag->status,
        ]);

        $this->assertResponseStatus(201);
        $this->seeJsonStructure(['data' => ['id', 'name', 'status']]);
        $this->seeJson([
            'name' => $tag->name,
            'status' => $tag->status,
        ]);
        $this->seeInDatabase('tags', [
            'name' => $tag->name,
            'status' => $tag->status,
        ]);
    }

    /** @test */
    public function can_show_tag()
    {
        $tag = $this->create(Tag::class);

        $this->json('GET', '/api/v1/tags/1');

        $this->assertResponseOk();
        $this->seeJsonStructure(['data' => ['id', 'name', 'status']]);
        $this->seeJson([
            'name' => $tag->name,
            'status' => $tag->status,
        ]);
    }

    /** @test */
    public function can_update_tag()
    {
        $this->create(Tag::class);

        $this->json('PUT', '/api/v1/tags/1', [
            'name' => 'new tag name',
            'status' => 0
        ]);

        $this->assertResponseStatus(200);
        $this->seeInDatabase('tags', ['name' => 'new tag name', 'status' => 0]);
        $this->seeJson(['id' => 1]);
        $this->seeJsonStructure([
            'data' => ['id', 'name', 'status'],
        ]);
    }

    /** @test */
    public function can_delete_tag()
    {
        $this->create(Tag::class);

        $this->json('DELETE', '/api/v1/tags/1');

        $this->assertResponseStatus(204);
        $this->dontSeeInDatabase('tags', ['id' => 1]);
    }

    /** @test */
    public function can_attach_product_to_tag()
    {
        $product = $this->create(Product::class, [
            'category_id' => $this->create(Category::class)->id,
        ])->id;

        $tag = $this->create(Tag::class)->id;

        $this->json('POST', '/api/v1/tags/attach-product', [
            'productId' => $product,
            'tagId' => $tag
        ]);

        $this->assertResponseStatus(200);
        $this->seeInDatabase('product_tag', ['product_id' => $product, 'tag_id' => $tag]);
        $this->seeJson(["messages"=>["Attached to product."]]);
//        $this->seeJsonStructure([
//            'data' => ['id', 'name', 'status'],
//        ]);
    }

    /**
     * @test
     * @dataProvider requestUrlProvider
     */
    public function get_404_when_tag_dont_exist($method, $url, $data = [])
    {
        $this->json($method, $url, $data);

        $this->assertResponseStatus(404);
        $this->seeJsonStructure(['messages' => []]);
    }

    /**
     * Request Url provider.
     *
     * @return array
     */
    public function requestUrlProvider()
    {
        return [
            ['GET', '/api/v1/tags/1'],
            ['PUT', '/api/v1/tags/1', ['name' => 'update']],
            ['DELETE', '/api/v1/tags/1'],
        ];
    }
}
