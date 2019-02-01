@extends('layouts.app')

@section('content')
    <div class="recipe-container">
        <div class="description text">
            <p>You have found the true american hero! This simple but irresistible
          dish is bound to leave you wanting more, and more, and more. Best thing
          is that it can be enjoyed as breakfast, lunch, dinner and dessert!</p>
        </div>
 
        <div class="description pic">
            <img class="picture" src={{asset('images/pancakes.jpg')}} alt="Pancake picture">
        </div>
 
        <div class="description ingredients">
            <h1 class="headline">Ingredients</h1>
            <h2 class="subline">American pancakes</h2>
            <ul class="recipe-list">
                <li class="ing-li">2 1/2 dl flour</li>
                <li class="ing-li">2 ts baking powder</li>
                <li class="ing-li">2 tbsp sugar</li>
                <li class="ing-li">1 pinch salt</li>
                <li class="ing-li">2 1/2 milk</li>
                <li class="ing-li">2 tbsp melted butter</li>
                <li class="ing-li">1 egg</li>
                <li class="ing-li">extra butter for frying</li>
            </ul>
            <h2 class="subline">Serve with</h2>
            <ul class="recipe-list">
                <li class="ing-li">icing sugar</li>
                <li class="ing-li">maple syrup</li>
                <li class="ing-li">mixed fresh berries</li>
            </ul>
        </div>
 
        <div class="description instructions">
            <h1 class="headline">Instructions</h1>
            <ul class="recipe-list">
                <li class="ins-li">Mix all the dry ingredients in a bowl.</li>
                <li class="ins-li">Add the milk and melted butter while siring, add the egg and keep stir until the batter is smooth. </li>
                <li class="ins-li">Put ca 1 tbsp of batter in a pan and fry for 1 1/2 minutes on each side, and repeat until all batter is used.</li>
                <li class="ins-li">Sprinkle the icing sugar on the pancakes and serve with maple syrup and berries or other condiments you prefer.</li>
            </ul>
        </div>
        <div class="comment-container">
            @guest
                <guest :recipe="'{{$title}}'"></guest>
            @else
                <comments :recipe="'{{$title}}'" :user="'{{Auth::user()->name}}'"></comments>
            @endguest
        </div>
        

        
        <!--@if(Auth::user())
            <div class="comment-container">
                <comments :recipe="'{{$title}}'" :user="'{{Auth::user()->name}}'"></comments>
            </div>
        @endif-->
    </div>
@endsection