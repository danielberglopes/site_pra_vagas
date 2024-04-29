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

                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h3 class="text-center text-danger"><b>divulga vaga</b> </h3>
				    <div class="form-group">
                        <form action="/post" method="post" enctype="multipart/form-data">
                         @csrf
  

                         <select name="title"  class="form-select" aria-label="Default select example" style="margin-left: 9px">
                            <option selected name="title" >Tipo da vaga</option>
                            <option value="remoto">remoto</option>
                            <option value="presencial">presencial</option>
                            <option value="hibrido">hibrido</option>
                          </select>

        				 <input type="text" name="author" class="form-control m-2" placeholder="Título da vaga">
                         <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="Descrição de cargo"></Textarea>
                         <label class="m-2">Logo da empresa</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                         <label class="m-2">Logo da empresa</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                        <button type="submit" class="btn btn-danger mt-3 ">cadastrar vaga</button>
                        </form>
                   </div>
                </div>
            </div>



         </body>
</html>








