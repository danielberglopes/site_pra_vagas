<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CRUD With Multiple Image Upload</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>

        <div class="container" style="margin-top: 50px;">
            <div class="row">

        
               


                <div class="col-lg-6">
                    <h3 class="text-center text-danger"><b>{{ $posts->author }}</b> </h3>
				    <div class="form-group">
                        <form action="/update/{{ $posts->id }}">
                          
                         <input type="text" name="title" class="form-control m-2" placeholder="title" value="{{ $posts->title }}" disabled>
        				 <input type="text" name="author" class="form-control m-2" placeholder="author" value="{{ $posts->author }}" disabled>
                         <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body" style="    height: 339px;" disabled>{{ $posts->body }}</Textarea>
                       

                        <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Candidatura simplificada</button>
                        </form>
                   </div>
                </div>
            </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Candidatura simplificada</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    


     
      
      <form class="row g-3" method="POST" action="{{ route('candidatura_criar') }}">
      @csrf

      <div class="col-md-6" style="display: none">
      <input type="text" name="user_id" class="form-control" id="inputEmail4" value="{{ $idCandidato }}">

  </div>

  <div class="col-md-6" style="display: none">
  
  <input type="text" name="nome_da_vaga" class="form-control" id="inputEmail4" value="{{ $posts->author }}">
</div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email"  class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Telefone</label>
  <input type="text"   name="telefone" class="form-control" id="inputAddress" placeholder="( ) 0 0000-0000  ">
  </div>
  <div class="col-md-6">
    <label for="inputAddress2" class="form-label">Curiculo</label>
    <input type="file" class="form-control" id="inputAddress2" >
  </div>

  <div class="modal-footer">
        
        <button type="subim" class="btn btn-primary">enviar candidatura </button>
      </div>
</form>


      </div>
    
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
         </body>
</html>

