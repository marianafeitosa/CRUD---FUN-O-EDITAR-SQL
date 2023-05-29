<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .col-11{
            margin: 0 1rem;
        }
    </style>
  </head>
  <body style="background-color: grey;">
      <div class="container" style="background-color: white; padding: 0;">
     <nav class="navbar navbar-expand-lg bg-primary"  data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SISTEMA WEB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;">Cadastrar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link "  href='consulta.php'  style="color: white; opacity: 0.5;" >Consultar</a>
                      </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div style='margin-left:33px; margin-right:33px;'>
        <p>
        <div class="col-11">
            
               <h5><p class="fs-5" style="color: black;">Cadastrar - Agendamentos de Potenciais Clientes</p></h5>
               <p class="fs-6" style="color: black; opacity: 0.8;">Sistema utilizado para agendamentos de serviços</p> 
               <div>

        <form method="POST" action="teste.class.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nome:</label>
              <input type="Nome" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
              <label for="exampleInputTelefone" class="form-label">Telefone:</label>
              <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(xx)xxxxx-xxxx">
            </div>
            <div class="mb-3">
                <label for="exampleInputOrigem" class="form-label">Origem:</label>
                <select class="form-select" id="origem" name="origem" aria-label="Default select example">
                    <option selected>Celular</option>
                    <option value="1">Telefone </option>
                   
                   
                  </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputOrigem" class="form-label">Data do Contato:</label>
                <input type="date" class="form-control" id="data" name="data" aria-describedby="Data">
                  </select>
            </div>    
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Observação:</label>
                <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
                <br>
                <button type="Cadastro" class="btn btn-primary">Cadastrar</button>
                
          </form>
      </div>
      
</html>