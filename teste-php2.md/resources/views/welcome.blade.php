@extends('layouts.stywelcome')
@section('content')

    <!-- conteudo principal -->
  

    
    @foreach ($posts as $post)
    <div class="pizza-item">
            <a href="">
                <div class="pizza-item--img"><img src="cover/{{ $post->cover }}" class="img-responsive" style="    width: 200px;
    height: 200px;
    background-color: #EEE;
    border-radius: 100px;" alt="" srcset=""></div>
                
                <a href="/secandidata/{{ $post->id }}" ><div class="pizza-item--add" disabled>+</div></a>
            </a>
            <div class="pizza-item--price" style="margin-top: 6px">{{ $post->title }}</div>
            <div class="pizza-item--name">{{ $post->author }}</div>
            <div class="pizza-item--desc">
                </div>
        </div>
                   @endforeach
    <!-- /conteudo principal -->         
    <script src="js\banco.js"></script>
    <script src="js\pizza.js"></script>

@endsection

