<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>vagas de emprego</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>


    <!-- modelos de pizza na lista e no carrinho -->
    <div class="models">

        <!-- pizza na lista -->
        <div class="pizza-item">
            <a href="">
                <div class="pizza-item--img"><img src="images/pizza.png" /></div>
                <div class="pizza-item--add">+</div>
            </a>
            <div class="pizza-item--price">R$ </div>
            <div class="pizza-item--name">Desenvolvedor React.Js</div>
            <div class="pizza-item--desc">Dessenvolver e implementar interfaces de usuario altamente responsivas  utilizando react.js 
                coloborar com desegner e Desenvolvedores de back-end para criar solucoes
            </div>
        </div>

        <!-- pizza no carrinho -->
        <div class="cart--item">
            <img src="" />
            <div class="cart--item-nome">--</div>
            <div class="cart--item--qtarea">
                <button class="cart--item-qtmenos">-</button>
                <div class="cart--item--qt">1</div>
                <button class="cart--item-qtmais">+</button>
            </div>
        </div>

    </div>
    <!-- /models -->

    <!-- .menu-openner aparecera no modo mobile -->
    <header>
        <h1>link vagas</h1>
    <div class="logo"><img src="{{asset('img\avatar.png')}}" alt=""></div>
    </header>
    <!-- /menu-openner -->

    <!-- conteudo principal -->

  
 
    <main>
    <nav>

    
    <form action="{{ route('nomes.filtrar') }}" method="POST">
    @csrf
    <input type="text" name="author" placeholder="Pesquisa pela vagas">
    <button type="submit">Pesquisar</button>
</form>


      
     </nav>
     <br>
     <br>
        <div class="pizza-area">
        @yield('content')
      
       
        </div>

        
    </main>
    
 
          
    <script src="js\banco.js"></script>
    <script src="js\pizza.js"></script>




</body>
</html>