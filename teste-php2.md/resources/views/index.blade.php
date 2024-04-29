<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        button {
            color: #fff;
            height: 42px;
            width: 200px;
            border-radius: 5px;
            font-size: 19px;
            background-color: #d32f2f;
            border: 0px;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        a:hover {
    color: #fff; /* Define a cor do texto para branco quando o link estiver em estado de hover */
    text-decoration: none; /* Remove o sublinhado quando o link estiver em estado de hover */
}

        .fixed-bottom {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1030;
        }
    </style>
</head>
<body>

<div class="container" style="margin-top: 50px;">

    <h3 class="text-center text-danger"><b>Divulgue suas vagas de emprego</b></h3>

    <button><a href="/create">Publicar uma vaga</a></button>

   
 


    <br><br>
    <table class="table table-bordered border-primary">
    <thead>
        <tr class="text-center">
            <th>Logo da empresa</th>
            <th>Tipo da vaga</th>
            <th>Título da vaga</th>
            <th>Descrição de cargo</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td class="text-center"><img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                <td class="text-center">{{ $post->title }}</td>
                <td class="text-center">{{ $post->author }}</td>
                <td class="text-center">{{ $post->body }}</td>
                <td class="align-middle text-center">
              <button type="button" class="btn btn-primary"><a href="/edit/{{ $post->id }}" >Editar vaga</a></button></td>
                <td class="align-middle text-center">
                    <form action="/delete/{{ $post->id }}" method="post">
                        <button type="button" class="btn btn-danger" onclick="return confirm('tem certeza que desseja apaga essa vaga?');" type="submit">Deletar vaga</button>
                        @csrf
                        @method('delete')
                    </form>
                </td>
            </tr>

            
        @endforeach
     

    </tbody>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        <li class="page-item {{ ($posts->currentPage() == 1) ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $posts->url(1) }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        @for ($i = 1; $i <= $posts->lastPage(); $i++)
            <li class="page-item {{ ($posts->currentPage() == $i) ? ' active' : '' }}">
                <a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-item {{ ($posts->currentPage() == $posts->lastPage()) ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $posts->url($posts->currentPage()+1) }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>


</div>

<!-- Botão "Sair" fixo no final da página -->


</body>
</html>
