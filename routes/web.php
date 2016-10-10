<?php


use Symfony\Component\DomCrawler\Crawler;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home/', 'BreadController@index');
Route::get('admin/', 'AdminController@index');
Route::post('admin/files', 'AdminController@uploadFiles');



Route::get('test', function(){
    $next = 1;
    if (Storage::exists("new/12.htm"))
    {

        $html = Storage::get('new/12.htm');
//            echo $html.'<hr>';
//        $html = '<<<HTML'.$html.'HTML';
        $crawler = new Crawler($html);
        $text = $crawler->last()->text();
//       var_dump($crawler);
//        echo '<hr>';
       $results= $crawler->filter('span')->each(function ($node, $i) {
            return $node->text();
        });
        var_dump($results);
      /*
        foreach ($crawler as $domElement) {

            var_dump($domElement->filterXPath('//body')->text());
            echo '<hr>';
        }*/

    }


});
