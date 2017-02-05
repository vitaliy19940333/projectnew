<?php

namespace App\Http\Controllers\admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Country;
use Yangqi\Htmldom\Htmldom;



class AboutController extends Controller
{
    public static $articles;

    public static  function addArticles($article){
        return self::$articles[] = $article;
    }

    public function home()
    {
      /*  DB::table('articles')->chunk(8,function($articl){


            foreach ($articl as $item) {
                self::addArticles($item);
            }



        });

        //DB::table('articles')->where('id','>',16)->delete();

        $articles = self::$articles;*/
        $articles = Article::all();
        $content = DB::select("SELECT * FROM static_content WHERE title=?",array('home'));
        return view("home",array(
                    'articles' => $articles,
                    'content' => $content[0]
        ));

    }

    public  function about(){
        /* $html = new Htmldom('http://www.rubaha.com.ua/catalog/index/page/3');
         dump($html->find("span.price"));
         foreach ($html->find("span.price") as $ele)
         {
             echo $ele->innertext   ;echo "<br>";
         }
       // $article = User::has('articles')->get();
       // foreach ($article as $ar)
         //   echo  "Aвтор : <b>".$ar->user->name."</b> Пост : <b>".$ar->name."</b><br/>";
       //  $user = User::has('articles',">",'3')->with('articles')->get();

         $articles = new Article([
             'name' => 'Article From Author',
             'text' => "Text Article From Author"
         ]);

         $user = User::find(2);

         $user->articles()->create([
             'name' => 'Article From Author111',
             'text' => "Text Article From Author111"
         ]);
         $user = User::find(1);
         $role = new Role([
             "name" => "guest"
         ]);
         $user->roles()->save($role);



        $user = User::find(2);
        $role = new Role([
            "name" => "Stilsit"
        ]);

        $user->roles()->save($role);


        $user = User::find(2);
        $user->articles()->where('id','=','14')->update([
            'name'=>'Update Article'
        ]);

        ///$article = User::has('articles','>',2)->with("articlees");

        $user = User::find(3);
        $countr = Country::find(1);
        $countr->user()->associate($user);
        $countr->save();*/

     //  $user = User::find(3);
     //   $role = Role::where('name','=','guest')->first()->id;
      //  $user->roles()->attach($role);
      //  $articl = Article::find(12)->update(["text" => "her"]);
        $article = Article::all();
        //$array = array("key" => "Hello World");
        //$article->text = $array;
        //$article->save();

      dump($article->toJson());
    }

    public  function articles(){
        return view("template");
    }

    public  function article($id){

       $article = new Article();

       $article =Article::find($id);
        echo "<h1>".$article->connection."</h1>";
       return view("article",array(
            'article' => $article
      ));
    }


    public function addArticle(Request $request){

        if ($request->isMethod('post'))
        {
          /*  $article = new Article;
            $article->name = $request->input("name");
            $article->text = $request->input("text");
            $article->save();
            echo $request->input("name");
            echo "sdfgdfgsdgsdgsdg";*/
          $request->flash();
          return redirect()->route("addarticledsffsd");
            Article::create(
                $request->except('_token')
            );

        //  dump();
        }
            return response()->view('addarticle');

    }
}
