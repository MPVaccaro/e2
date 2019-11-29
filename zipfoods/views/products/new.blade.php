@extends('templates.master')

@section('title')
    {{ $product['name'] }}
@endsection

@section('content') 

<!--
@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@elseif($confirmationName)
<div class='alert alert-success'>    
Thank you, {{ $confirmationName }}, for your new product input!
</div>    
@endif 
-->

<div id='product-new'>
<!--
    <h2>{{ $product['name'] }}</h2>

    <img src='/images/products/{{ $product["id"] }}.jpg' class='product-image'>

    <p class='product-description'>
        {{ $product['description'] }}
    </p>

    <div class='product-price'>${{ $product['price'] }}</div>
-->
    
    <form method='POST' id='product-new' action='/products/save-new-product'>
        <h3>Add a new product</h3>
        
<!--        <input type='hidden' name='id' value='{{ $product["id"] }}'>-->
        
        <div class='form-group'>
            <label for='name'>Name of Product</label>
            <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
        </div>

        <div class='form-group'>
            <label for='description'>Product Description</label>
            <textarea name='description' id='description' class='form-control'>{{ $app->old('description') }}</textarea>
        </div>
        
        <div class='form-group'>
            <label for='price'>Price of Product ($)</label>
            <input type='number' min='0.00' step='0.01' class="form-control" name='price' id='price' value='{{ $app->old("price") }}'>
        </div>
        
        <div class='form-group'>
            <label for='available'>Number of Available Units</label>
            <input type='number' min='0.00' class="form-control" name='available' id='available' value='{{ $app->old("available") }}'>
        </div>
        
         <div class='form-group'>
            <label for='weight'>Weight of Product (pounds)</label>
            <input type='number' min='0.00' step='0.01' class="form-control" name='weight' id='weight' value='{{ $app->old("weight") }}'>
        </div>

        <div class='form-group'>
            <label for='perishable'>Perishable? Enter 1 for Yes or 0 for No</label>
            <input type='number' min='0' max='1' step='1' class="form-control" name='perishable' id='perishable' value='{{ $app->old("perishable") }}'>
        </div>
        
        <button type='submit' class='btn btn-primary'>Submit New Product</button>
    </form>
    
<!--
    <h3>New Product</h3>
    @if($reviews)
    @foreach($reviews as $review)
    <div class='review'>
        <span class='review-name'>{{ $review['name'] }}</span>
        <p>{{ $review['content'] }}</p>
    </div>    
    @endforeach
    @else
    Write the first review!
    @endif
-->
    
</div>
    

    <p>
    <a href='/products'>&larr; Return to all products</a>
    </p>
@endsection