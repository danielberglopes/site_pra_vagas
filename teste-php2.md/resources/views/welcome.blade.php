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

        <div class="pizza-area">
        <div class="pizza-item">
            <a href="">
                <div class="pizza-item--img"><img   style="    border-radius: 166px;
                    height: 214px;
                }" src="img\torcedores-do-paraná-vocês-deixariam-alguma-empresa-de-v0-mba2lqodphlb1.webp" /></div>
                <div class="pizza-item--add">+</div>
            </a>
            <div class="pizza-item--price" style="margin-top: 6px">Remoto</div>
            <div class="pizza-item--name">Desenvolvedor React.Js</div>
            <div class="pizza-item--desc">
                </div>
        </div>
        <div class="pizza-item">
            <a href="">
                <div class="pizza-item--img"><img   style="    border-radius: 166px;
                    height: 214px;
                }" src="img\torcedores-do-paraná-vocês-deixariam-alguma-empresa-de-v0-mba2lqodphlb1.webp" /></div>
                <div class="pizza-item--add">+</div>
            </a>
            <div class="pizza-item--price" style="margin-top: 6px">Remoto</div>
            <div class="pizza-item--name">Desenvolvedor React.Js</div>
            <div class="pizza-item--desc">
                </div>
        </div>
        <div class="pizza-item">
            <a href="">
                <div class="pizza-item--img"><img   style="    border-radius: 166px;
                    height: 214px;
                }" src="img\torcedores-do-paraná-vocês-deixariam-alguma-empresa-de-v0-mba2lqodphlb1.webp" /></div>
                <div class="pizza-item--add">+</div>
            </a>
            <div class="pizza-item--price" style="margin-top: 6px">Remoto</div>
            <div class="pizza-item--name">Desenvolvedor React.Js</div>
            <div class="pizza-item--desc">
                </div>
        </div>

        
    </main>
    <!-- /conteudo principal -->

    <!-- aside do carrinho -->
    <aside>
        <div class="cart--area">
            <div class="menu-closer">❌</div>
            <h1>Suas Pizzas</h1>
            <div class="cart"></div>
            <div class="cart--details">
                <div class="cart--totalitem subtotal">
                    <span>Subtotal</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem desconto">
                    <span>Desconto</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem total big">
                    <span>Total</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--finalizar">Finalizar a compra</div>
            </div>
        </div>
    </aside>
    <!-- /aside do carrinho -->

    <!-- janela modal .pizzaWindowArea -->
    <div class="pizzaWindowArea" >
        <div class="pizzaWindowBody">
            <div class="pizzaInfo--cancelMobileButton">Voltar</div>
            <div class="pizzaBig">
                <img src="" />
            </div>
            <div class="pizzaInfo">
                <h1>--</h1>
                <div class="pizzaInfo--desc">--</div>
                <div class="pizzaInfo--sizearea">
                    <div class="pizzaInfo--sector">Tamanho</div>
                    <div class="pizzaInfo--sizes">
                        <div data-key="P" class="pizzaInfo--size">PEQUENA <span>--</span></div>
                        <div data-key="M" class="pizzaInfo--size">MÉDIA <span>--</span></div>
                        <div data-key="G" class="pizzaInfo--size selected">GRANDE <span>--</span></div>
                    </div>
                </div>
                <div class="pizzaInfo--pricearea">
                    <div class="pizzaInfo--sector">Preço</div>
                    <div class="pizzaInfo--price">
                        <div class="pizzaInfo--actualPrice">R$ --</div>
                        <div class="pizzaInfo--qtarea">
                            <button class="pizzaInfo--qtmenos">-</button>
                            <div class="pizzaInfo--qt">1</div>
                            <button class="pizzaInfo--qtmais">+</button>
                        </div>
                    </div>
                </div>
                <div class="pizzaInfo--addButton">Adicionar ao carrinho</div>
                <div class="pizzaInfo--cancelButton">Cancelar</div>
            </div>
        </div>
    </div>
    <script src="js\banco.js"></script>
    <script src="js\pizza.js"></script>




</body>
</html>