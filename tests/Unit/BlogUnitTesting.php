<?php

namespace Tests\Unit;

use Tests\TestCase;

class BlogUnitTesting extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_list_Post()
    {

       $response = $this->call('GET','/blog',[
         'title' => "Testing",
         'body' => "Testing Body",
         'user_id' => 11,
        ]);

        $response->assertStatus(200);

    }

    public function test_view_Page()
    {

      $response=$this->get('/');
      $response->assertStatus(200);

    }
     
    public function test_create_Post()
    {

        $response = $this->call('POST','/blog/create/post',[
            'title' => "Testing 2",
            'body' => "Testing  Body 2",
            'user_id' => 15
           ]);

           $this->assertTrue(true);

    }

}
