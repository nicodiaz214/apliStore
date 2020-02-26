@extends('plantilla')

@section('content')

<section class="stock">
    <h2> Nuestras Apps </h2>
        @foreach ($categories as $category)
                <article class="stock-productos">
                    <h3> <strong>{{ $category->name }} </strong></h3>
                    <a href="/categories/{{$category->id}}"><img src="{{ asset($category->image) }}" alt=""></a>
                </article>
        @endforeach
    </section>
@endsection