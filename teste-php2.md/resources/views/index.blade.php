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

   <link rel="stylesheet" href="css\index.css">
</head>
<body>

<div class="container" style="margin-top: 50px;">

    <h3 class="text-center text-danger"><b>Divulgue suas vagas de emprego</b></h3>

   
 <br><br>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
  
         
        </div>
      </nav>
    <br>





    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/create"> <button>Publicar uma vaga</button>   </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active Vagas" aria-current="page" href="#" style="color:black">Vagas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link candidatos" href="{{route('filtra.candidatos')}}" style="color:black">Candidatos</a>
              </li>
              
             
            </ul>
            <form class="d-flex" role="search" action="{{ route('filtra.empresa') }}" method="POST">
                @csrf
                <input class="form-control me-2" name="author"  type="search" placeholder="Digite.." aria-label="Search">
                <button class="btn btn-primary" type="submit">Pesquisa</button>
              </form>
          </div>
        </div>
      </nav>



      
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
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja apagar essa vaga?');">Deletar vaga</button>
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
