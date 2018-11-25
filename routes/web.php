<?php

Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');
