<?php
    
    Route::get('/', function () {return view('home');});


    Route::resource('book', 'BookController');
    Route::resource('author', 'AuthorController');
    Route::resource('publisher', 'PublisherController');

    Route::get('book/(:number)', function($id) {
        echo 'The id is: ' . $id;
      });

    Route::dispatch();
?>
