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

    <link rel="stylesheet" href="public\candidatos.css">
</head>
<body>

<div class="container" style="margin-top: 50px;">

    <h3 class="text-center text-danger"><b>Candidatos Castrado</b></h3>

   
 <br><br>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
  
         
        </div>
      </nav>
    <br>





    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
      
       
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active Vagas" aria-current="page" href="{{route('filtra.empresa')}}" style="color:black">Vagas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link candidatos" href="#" style="color:black">Candidatos</a>
              </li>
              
             
            </ul>
            <form class="d-flex" role="search" action="{{ route('filtra.candidatos') }}" method="POST">
                @csrf
                <input class="form-control me-2" name="name"  type="search" placeholder="Digite.." aria-label="Search">
                <button class="btn btn-primary" type="submit">Pesquisa</button>
              </form>
          </div>
        </div>
      </nav>



      
    <table class="table table-bordered border-primary">
    <thead>
        <tr class="text-center">
            <th>nº de candidatos</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td class="text-center">{{$post->id}}</td>
                
                <td class="text-center">{{ $post->name}}</td>
                <td class="text-center">{{ $post->email }}</td>
            
                <td class="align-middle text-center">
                    <form action="/dele/{{ $post->id }}" method="post">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja apaga essa conta?');">Deletar Candidato</button>
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
